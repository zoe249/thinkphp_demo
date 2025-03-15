<?php

namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index(): string
    {
        return "ThinkPHP";
    }

    public function hello($name = 'ThinkPHP8')
    {
        return 'hello,' . $name;
    }

    public function test($info)
    {
        return $info;
    }
}
