<?php

namespace app\model;

use think\Model;
use think\model\concern\SoftDelete;

class User extends Model
{

    // 开启软删除
    use SoftDelete;
    protected $deleteTime = 'delete_time';

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

    // 获取器
    protected function getStatusAttr($value, $data)
    {
        $status = [-1=>"删除",0=>"冻结",1=>"正常",2=>"审核"];
        return $status[$value];
    }

    // 修改器
    protected function setAgeAttr($value)
    {
        return $value + 100;
    }

    // 搜索器
    protected function searchNameAttr($query, $value, $data)
    {
        return $query->where("name","like","%".$value."%");
    }

    // 限定时间
    protected function searchCreateTimeAttr($query, $value, $data) {
        return $query->whereBetweenTime("create_time",$value[0],$value[1]);
    }
}