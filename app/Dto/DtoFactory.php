<?php
namespace App\Dto;

use App\Dto\common\GabiaArrayObject;
use App\Exceptions\DtoFactory\DtoFactoryInternalException;
use \Illuminate\Support\Collection;


/**
 * Class DtoFactory
 * @package App\Dto
 */
class DtoFactory
{
    /**
     *
     */
    const ARRAY_OBJECT = GabiaArrayObject::class;
    /**
     * DtoFactory constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param \ReflectionClass $reflector
     * @param Collection $request_param
     * @return object
     * @throws DtoFactoryInternalException
     */
    private static function getArrayObjectInstance(\ReflectionClass $reflector, Collection $request_param)
    {
        $array_object_constructor_list = collect([]);
        $array_object_instance = $reflector->newInstance();
        $constructor_parameter_list = $reflector->getConstructor()->getParameters();
        if(count($constructor_parameter_list)!=1)
        {
            throw new DtoFactoryInternalException($reflector->getName().' constructor\'s parameter count must be one',500);
        }
        $constructor_parameter = $constructor_parameter_list[0];
        if($constructor_parameter->getDefaultValue()!=null)
        {
            throw new DtoFactoryInternalException($reflector->getName().' constructor\'s parameter default value must be null',500);
        }
        $constructor_parameter_class_type = $constructor_parameter->getClass();
        $iterator_class_constuctor_parameter = $constructor_parameter_class_type->getConstructor()->getParameters();

        $size_check_collection = collect([]);
        collect($iterator_class_constuctor_parameter)->each(function(\ReflectionParameter $parameter) use ($size_check_collection, $request_param){
            $size_check_collection->push(count(self::serachRequestParameterValueUsingKeyName($request_param, $parameter->getName())?: []));
        });
        $unique_size_list = $size_check_collection->unique();
        if(count($unique_size_list)!=1)
        {
            throw new DtoFactoryInternalException(
                $reflector->getName().' properties array size is not suitable :: size list = '.$size_check_collection->__toString(),
                500);
        }

        $size = $unique_size_list[0];
        for($index =0; $index<$size; $index++) {
            $passedGetDtoParam = collect([]);
            collect($iterator_class_constuctor_parameter)->each(function (\ReflectionParameter $parameter) use ($array_object_constructor_list, $passedGetDtoParam, $index, $request_param) {
                $passedGetDtoParam->put($parameter->getName(), self::serachRequestParameterValueUsingKeyName($request_param, $parameter->getName())[$index]);
            });
            $array_object_instance->append(
                $constructor_parameter_class_type->newInstanceArgs($passedGetDtoParam->toArray())
            );
        }

        return $array_object_instance;
    }


    /**
     * @param string $class_name
     * @param Collection $request_param
     * @param string $parameter_name
     * @return object
     * @throws DtoFactoryInternalException
     * @throws \ReflectionException
     */
    public static function getDto(string $class_name, string $parameter_name, Collection $request_param)
    {
        $pass_constructor_parameter_list = collect([]);

        $reflector = new \ReflectionClass($class_name);
        $constructor_reflector = $reflector->getConstructor();
        $constructor_parameter_list = $constructor_reflector->getParameters();


        if($reflector->getParentClass())
        {
            if($reflector->getParentClass()->getName() == self::ARRAY_OBJECT)
            {
                $pass_request_param = self::serachRequestParameterValueUsingKeyName($request_param, $parameter_name);
                if(!empty($pass_request_param) && is_array($pass_request_param))
                {
                    return self::getArrayObjectInstance($reflector, collect($pass_request_param));
                }
                else
                {
                    return self::getArrayObjectInstance($reflector, $request_param);
                }
            }
        }

        collect($constructor_parameter_list)->each(function(\ReflectionParameter $constructor_parameter) use ($pass_constructor_parameter_list, $request_param){
            if($constructor_parameter->getClass())
            {
                $pass_constructor_parameter_list->push(
                    self::getDto($constructor_parameter->getClass()->getName(), $constructor_parameter->getName(), $request_param)
                );
            }
            elseif ($constructor_parameter->isArray())
            {
                $pass_constructor_parameter_list->push(
                    self::serachRequestParameterValueUsingKeyName($request_param, $constructor_parameter->getName())
                );
            }
            else
            {
                $pass_constructor_parameter_list->push(
                    self::serachRequestParameterValueUsingKeyName($request_param, $constructor_parameter->getName())
                );
            }
        });

        return $reflector->newInstanceArgs($pass_constructor_parameter_list->toArray());
    }

    /**
     * @param Collection $request_param
     * @param string $key
     * @return null
     */
    private static function serachRequestParameterValueUsingKeyName(Collection $request_param, string $key)
    {
        if(empty($request_param->get(0)))
        {
            return $request_param->get($key) ?: null;
        }
        else
        {
            return $request_param->pluck($key) ?: null;
        }
    }
}