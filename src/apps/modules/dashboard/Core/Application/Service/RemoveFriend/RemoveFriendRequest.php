<?php

namespace Its\Example\Dashboard\Core\Application\Service\RemoveFriend;

class RemoveFriendRequest
{
    protected $username;
    protected $usernameTeman;

    public function __construct($username, $usernameTeman)
    {
        $this->username = $username;
        $this->usernameTeman = $usernameTeman;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getUsernameTeman()
    {
        return $this->usernameTeman;
    }
}