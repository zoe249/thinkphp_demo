<?php

namespace app\controller;

use app\BaseController;
use think\facade\Db;

class User extends BaseController
{
    public function index()
    {
//        return "用户首页";
//        return $this->app->getBasePath();
        return $this->request->action();
    }

    public function login()
    {
        return "登录";
    }

    public function get()
    {
        $user = Db::table("user")->select();
        $user = Db::table("user")->where("id",1)->find();
        $user = Db::table("user")->where("id",11)->findOrEmpty();
//        $user = Db::table("user")->where("id",11)->findOrFail();
        $user = Db::table("user")->select();
//        $user = Db::table("user")->select()->toArray();
//        halt($user);
//        return Db::getLastSql();
        $user = Db::table("user")->where("age",22)->select();
        halt(Db::table("user")->where("id",1)->select());
        return json($user);
    }

    public function get2() {
        $user = Db::name("user")->select();
        $user = Db::name("user")->where("id", 1)->value("name");
        $user = Db::name("user")->where("age", 22)->column("name", "id");

        // 批处理
        Db::name("user")->chunk(2, function ($users) {
           foreach ($users as $user) {
               dump($user);
           }
           echo 1;
        });
//        return Db::getLastSql();
//        return json($user);
    }

    public function add()
    {
//        $data = [
//            "id" => 1,
//            "name" => "盖伦",
//            "age" => 28,
//            "gender" => "女",
//            "details" => "我叫麻子"
//        ];
        $data = [
//            "id" => 1,
            "name" => "赵信",
            "age" => 28,
            "gender" => "男",
            "details" => "我叫麻子"
        ];

//        return Db::name("user")->strict(false)->insert($data);
        return Db::name("user")->insertGetId($data);
    }

    public function adds()
    {
        $data = [
            [
                "name" => "嘉文",
                "age" => 28,
                "gender" => "男",
                "details" => "嘉文"
            ],
            [
                "name" => "拉克丝",
                "age" => 18,
                "gender" => "女",
                "details" => "拉克丝"
            ]
        ];

        return Db::name("user")->insertAll($data);
    }
}