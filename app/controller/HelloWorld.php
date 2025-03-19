<?php

namespace app\controller;

use app\BaseController;

class HelloWorld extends BaseController
{
    public function index()
    {
        return "hello, world";
    }
    public function hello($name = 'ThinkPHP8')
    {
        return 'hello,' . $name;
    }

    public function test()
    {
        return "test";
    }

    public function details($id, $uid)
    {
        return "details".$id.$uid;
    }
}