<?php

namespace app\controller;

class Error
{
    public function __call(string $name, array $arguments)
    {
        // TODO: Implement __call() method.
//        return "不存在的控制器".$name;
        return json($arguments);
    }
}