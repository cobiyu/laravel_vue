<?php

namespace App\Dto\GabiaUser;


use App\Dto\common\GabiaDto;

class TestDto implements GabiaDto
{
    /**
     * @var null|string $test_value
     */
    private $test_value;

    /**
     * @var null|string[] $test_value2
     */
    private $test_value2;

    /**
     * @var null|array $test_arr
     */
    private $test_arr;

    /**
     * @var Test
     */
    private $test;

    /**
     * @var null|UserArray $users
     */
    private $users;

    /**
     * TestDto constructor.
     * @param null|string $test_value
     * @param null|string[] $test_value2
     * @param array|null $test_arr
     * @param Test $test
     * @param UserArray|null $users
     */
    public function __construct(?string $test_value, ?array $test_value2, ?array $test_arr, Test $test, ?UserArray $users)
    {
        $this->test_value = $test_value;
        $this->test_value2 = $test_value2;
        $this->test_arr = $test_arr;
        $this->test = $test;
        $this->users = $users;
    }

    /**
     * @return null|string
     */
    public function getTestValue(): ?string
    {
        return $this->test_value;
    }

    /**
     * @param null|string $test_value
     */
    public function setTestValue(?string $test_value): void
    {
        $this->test_value = $test_value;
    }

    /**
     * @return null|string[]
     */
    public function getTestValue2(): ?array
    {
        return $this->test_value2;
    }

    /**
     * @param null|string[] $test_value2
     */
    public function setTestValue2(?array $test_value2): void
    {
        $this->test_value2 = $test_value2;
    }

    /**
     * @return array|null
     */
    public function getTestArr(): ?array
    {
        return $this->test_arr;
    }

    /**
     * @param array|null $test_arr
     */
    public function setTestArr(?array $test_arr): void
    {
        $this->test_arr = $test_arr;
    }

    /**
     * @return Test
     */
    public function getTest(): Test
    {
        return $this->test;
    }

    /**
     * @param Test $test
     */
    public function setTest(Test $test): void
    {
        $this->test = $test;
    }

    /**
     * @return UserArray|null
     */
    public function getUsers(): ?UserArray
    {
        return $this->users;
    }

    /**
     * @param UserArray|null $users
     */
    public function setUsers(?UserArray $users): void
    {
        $this->users = $users;
    }


}