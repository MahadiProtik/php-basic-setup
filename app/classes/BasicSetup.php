<?php

namespace App\classes;

class BasicSetup
{
    public $message;
    public function __construct()
    {
        $this->message = "Hello PHP Basic Setup";
    }
    public function index()
    {
        view("basic-setup");
//        echo $this->message;
    }
}