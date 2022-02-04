<?php

require('interfaces/UserInterface.php');

class user implements UserInterface
{

    private array $request;

    public function __construct() {
        $this->getRequest($_REQUEST);
    }

    public function getRequest(array $request):void
    {
        $this->request = $request;
    }

    public function parseRequest():void
    {
        var_dump($this->request);
    }
}