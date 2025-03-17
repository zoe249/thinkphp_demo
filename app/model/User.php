<?php

namespace app\model;

use think\Model;

class User extends Model
{
    public static function init()
    {
        // echo "初始化";
    }

    protected $schema = [
        "id"=>"int"
    ];

    // 废弃
    protected $disuse = [
        "age",
        "details"
    ];

    // 只读
    protected $readonly = ["gender"];
}