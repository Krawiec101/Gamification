<?php

namespace Events;
require '../../vendor/autoload.php';
class BugCloseEvent
{
    protected  $userName;
    public function __construct(string $userName)
    {
        $this->userName = $userName;
    }
    public function getUserName() : string
    {
        return $this->userNamea;
    }
}