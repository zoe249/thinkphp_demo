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

        try {
            return Db::name("user")->insertAll($data);
        } catch (\Exception $e) {
            return var_export($e->getMessage());
        }
    }

    public function update()
    {
        $data = [
            "id" => 3,
           "name" => "拉克丝",
            "age" => 1232
        ];

//        return Db::name('user')->where("id", 3)->update($data);
//        return Db::name('user')->update($data);
//        return Db::name('user')->exp("details", "UPPER(details)")->update($data);
        return Db::name("user")->where("id", 3)->update([
            "details" => DB::raw("UPPER(details)"),
            "age" => DB::raw("age-2")
        ]);
    }

    public function del()
    {
        return Db::name('user')->where("id", 11)->delete();
    }

    public function find()
    {
//        $user = Db::name("user")->where("id", ">=", 5)->select();
//        $user = Db::name("user")->where("name", "like", "拉%")->select();
//        $user = Db::name("user")->whereLike("name", "拉%")->select();

//        $user = Db::name("user")->where("id", "in", [1, 3, 5])->select();
        $user = Db::name("user")->whereIn("id", [1, 3, 5])->select();
        $user = Db::name("user")->where("details", 'null')->select();
        $user = Db::name("user")->where("id", 'exp', '> 4 and id < 10')->select();
        $user = Db::name("user")->where("id", 'exp', '> 4 and id < 10')->select();
//        return Db::getLastSql();
        return json($user);
    }

    public function link()
    {
        $user = Db::name("user")->where([
            ["id", ">", 7],
            ["name", "=", "拉克丝"]
        ])->select();

        return json($user);
    }

    public function adv()
    {
        $user = Db::name("user")->where("name|details", "like", "拉%")->select();

        $user = Db::name('user')->where([
            ["gender", "=", "男"],
            ["age", "exp", Db::raw(">= 10 and id < 5")]
        ])->where("details", "like", "嘉%")->select();

        $map1 = [
            ["gender", "=", "男"],
            ["age", "exp", Db::raw(">= 10 and id < 5")]
        ];

        $map2 = [
            ["gender", "=", "男"],
            ["details", "=", null]
        ];
        $user = Db::name("user")->whereOr([$map1, $map2])->select();
//        return Db::getLastSql();
        return json($user);
    }
}