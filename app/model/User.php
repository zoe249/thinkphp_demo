<?php

namespace app\model;

use think\Model;

class User extends Model
{
    public function profile()
    {
        // 一对一
        return $this->hasOne(Profile::class);
    }
}