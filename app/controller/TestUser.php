<?php

namespace app\controller;
use app\BaseController;
use app\model\User;
use think\facade\Db;

class TestUser extends BaseController
{
    public function index()
    {
//        $user = \app\model\User::select();
        $user = User::select();
        return json($user);
//        return json(Db::name("user")->select());
    }

    public function add()
    {
        $user = new User();
//        $user->name = "李白";
//        $user->age = 23;
//        $user->gender = "男";
//        $user->details = "仙之人兮列如麻";

//        $user->allowField(["name","age","gender"])->save([
//           "name"=>"蒲松龄",
//           "age"=>23,
//            "gender" => "男",
//            "details" => "鬼事"
//        ]);

//        $user->replace()->allowField(["id","name","age","gender"])->save([
//            "id"=>15,
//            "name"=>"蒲松龄",
//            "age"=>29,
//            "gender" => "男",
//            "details" => "鬼事"
//        ]);
//
//        echo $user->id;

//        $user->saveAll([
//            [
//                "name"=>"张三",
//                "age"=>13,
//                "gender"=>"女"
//            ],
//            [
//                "name"=>"李四",
//                "age"=>13,
//                "gender"=>"女"
//            ]
//        ]);

        User::create([
           "name"=>"曹操",
           "age"=>123,
            "gender" => "男",
            "details" => "丞相"
        ], ["name", "age"], replace: true);
    }

    public function del()
    {
//        $user = User::find(14);
//        return json($user);
//        return $user->delete();

        User::destroy(function ($query) {
            $query->where("id", ">", 14);
        });
    }

    public function update()
    {
//        $user = User::find(4);
//        $user->details = "摸金校尉";
//        $user->force()->save();
//        $user->age = Db::raw("age + 2");
//        $user->force()->save();
//        return json($user);

        return User::update([
           "id"=>9,
           "name"=>"胡八一",
            "gender"=>"女"
        ]);
    }

    public function select()
    {
//        $user = User::find(1);
//        $user = User::select();
//        $user = User::select([1, 2, 3]);
        $user = User::where("id", "<", 5)->select();
        $user = User::limit(3)->order("id", "desc")->select();
//        return json($user);
    }
}