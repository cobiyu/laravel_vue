<?php

namespace App\Dto\GabiaUser;


use App\Dto\GabiaUser\GabiaUserSessionInterface;

class GabiaUserSession implements GabiaUserSessionInterface
{
    /**
     * @var string
     */
    private $session_id;
    /**
     * @var string
     */
    private $ip_address;
    /**
     * @var string
     */
    private $user_agent;
    /**
     * @var float
     */
    private $last_activity;
    /**
     * @var string
     */
    private $resting_user_id;
    /**
     * @var string
     */
    private $user_flag;
    /**
     * @var string
     */
    private $user_resting;
    /**
     * @var string
     */
    private $hanorg;
    /**
     * @var string
     */
    private $req_cnt;
    /**
     * @var string
     */
    private $user_data;
    /**
     * @var string
     */
    private $user_id;
    /**
     * @var string
     */
    private $user_pwd;
    /**
     * @var string
     */
    private $user_level;
    /**
     * @var string
     */
    private $user_hanname;
    /**
     * @var string
     */
    private $user_hanorg;
    /**
     * @var string
     */
    private $user_id_child;
    /**
     * @var string
     */
    private $gubun_flag;
    /**
     * @var User
     */
    private $user;

    /**
     * GabiaUserSession constructor.
     * @param string $session_string_from_reids
     */
    public function __construct(string $session_string_from_reids)
    {
        $session_info = json_decode($session_string_from_reids);

        $this->session_id = $session_info->session_id ?? null;
        $this->ip_address = $session_info->ip_address ?? null;
        $this->user_agent = $session_info->user_agent ?? null;
        $this->last_activity = $session_info->last_activity ?? null;
        $this->resting_user_id = $session_info->resting_user_id ?? null;
        $this->user_flag = $session_info->user_flag ?? null;
        $this->user_resting = $session_info->user_resting ?? null;
        $this->hanorg = $session_info->hanorg ?? null;
        $this->req_cnt = $session_info->req_cnt ?? null;
        $this->user_data = $session_info->user_data ?? null;
        $this->user_id = $session_info->user_id ?? null;
        $this->user_pwd = $session_info->user_pwd ?? null;
        $this->user_level = $session_info->user_level ?? null;
        $this->user_hanname = $session_info->user_hanname ?? null;
        $this->user_hanorg = $session_info->user_hanorg ?? null;
        $this->user_id_child = $session_info->user_id_child ?? null;
        $this->gubun_flag = $session_info->gubun_flag ?? null;
        $this->user = $this->generateUser();
    }


    /**
     * @return User
     */
    private function generateUser(): User
    {
        return new User($this->user_id, base64_decode($this->user_hanname), null);
    }


    /**
     * @return string
     */
    public function getSessionId(): string
    {
        return $this->session_id;
    }

    /**
     * @param string $session_id
     */
    public function setSessionId(string $session_id): void
    {
        $this->session_id = $session_id;
    }

    /**
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->ip_address;
    }

    /**
     * @param string $ip_address
     */
    public function setIpAddress(string $ip_address): void
    {
        $this->ip_address = $ip_address;
    }

    /**
     * @return string
     */
    public function getUserAgent(): string
    {
        return $this->user_agent;
    }

    /**
     * @param string $user_agent
     */
    public function setUserAgent(string $user_agent): void
    {
        $this->user_agent = $user_agent;
    }

    /**
     * @return float
     */
    public function getLastActivity(): float
    {
        return $this->last_activity;
    }

    /**
     * @param float $last_activity
     */
    public function setLastActivity(float $last_activity): void
    {
        $this->last_activity = $last_activity;
    }

    /**
     * @return string
     */
    public function getRestingUserId(): string
    {
        return $this->resting_user_id;
    }

    /**
     * @param string $resting_user_id
     */
    public function setRestingUserId(string $resting_user_id): void
    {
        $this->resting_user_id = $resting_user_id;
    }

    /**
     * @return string
     */
    public function getUserFlag(): string
    {
        return $this->user_flag;
    }

    /**
     * @param string $user_flag
     */
    public function setUserFlag(string $user_flag): void
    {
        $this->user_flag = $user_flag;
    }

    /**
     * @return string
     */
    public function getUserResting(): string
    {
        return $this->user_resting;
    }

    /**
     * @param string $user_resting
     */
    public function setUserResting(string $user_resting): void
    {
        $this->user_resting = $user_resting;
    }

    /**
     * @return string
     */
    public function getHanorg(): string
    {
        return $this->hanorg;
    }

    /**
     * @param string $hanorg
     */
    public function setHanorg(string $hanorg): void
    {
        $this->hanorg = $hanorg;
    }

    /**
     * @return string
     */
    public function getReqCnt(): string
    {
        return $this->req_cnt;
    }

    /**
     * @param string $req_cnt
     */
    public function setReqCnt(string $req_cnt): void
    {
        $this->req_cnt = $req_cnt;
    }

    /**
     * @return string
     */
    public function getUserData(): string
    {
        return $this->user_data;
    }

    /**
     * @param string $user_data
     */
    public function setUserData(string $user_data): void
    {
        $this->user_data = $user_data;
    }

    /**
     * @param string $user_id
     */
    public function setUserId(string $user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @param string $user_pwd
     */
    public function setUserPwd(string $user_pwd): void
    {
        $this->user_pwd = $user_pwd;
    }

    /**
     * @return string
     */
    public function getUserLevel(): string
    {
        return $this->user_level;
    }

    /**
     * @param string $user_level
     */
    public function setUserLevel(string $user_level): void
    {
        $this->user_level = $user_level;
    }

    /**
     * @param string $user_hanname
     */
    public function setUserHanname(string $user_hanname): void
    {
        $this->user_hanname = $user_hanname;
    }

    /**
     * @return string
     */
    public function getUserHanorg(): string
    {
        return $this->user_hanorg;
    }

    /**
     * @param string $user_hanorg
     */
    public function setUserHanorg(string $user_hanorg): void
    {
        $this->user_hanorg = $user_hanorg;
    }

    /**
     * @return string
     */
    public function getUserIdChild(): string
    {
        return $this->user_id_child;
    }

    /**
     * @param string $user_id_child
     */
    public function setUserIdChild(string $user_id_child): void
    {
        $this->user_id_child = $user_id_child;
    }

    /**
     * @return string
     */
    public function getGubunFlag(): string
    {
        return $this->gubun_flag;
    }

    /**
     * @param string $gubun_flag
     */
    public function setGubunFlag(string $gubun_flag): void
    {
        $this->gubun_flag = $gubun_flag;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return bool
     */
    public function isLogin(): bool
    {
        if(empty($this->user->getUserId()))
            return false;

        return true;
    }

}