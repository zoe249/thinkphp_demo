<?php

namespace app\controller;

use app\BaseController;
use app\validate\User;
use think\exception\ValidateException;
use think\facade\Cache;
use think\facade\Request;
use think\facade\Session;
use think\facade\Validate;

//use app\Request;

class Rely extends BaseController
{
    public function index()
    {
//        return Request::get("id");
//        return request()->get("id");
//        echo $this->request->has("id", "get");

        return request()->param("id/d");

    }

    public function create(): \think\response\View
    {
        return view();
    }

    public function save()
    {
        echo request()->isPost();
        echo request()->post('name');
    }

    public function sess()
    {
        Session::set('user', "Mr.lee");
        echo Session::get('user');
        dump(Session::all());
        echo Session::has('user');
    }

    public function cache()
    {
        Cache::set("name", "Mr.lee", 3600);
        echo Cache::get("name");
    }

    public function vali() {
        try {
            validate(User::class)->scene("update")->batch(true)->check([
                "name" => "段金成",
                "email" => "223"
            ]);
        } catch (ValidateException $e) {
            dump($e->getError());
        }

        // 规则
//        $validate = Validate::rule([
//            "name|用户名" => "require|max:20|checkName:段金成",
//            "email|邮箱" => "email"
//        ]);
//
//        $result = $validate->batch(true)->check([
//            "name" => "段金成",
//            "email" => "223"
//        ]);
//
//        if (!$result) {
//            dump($validate->getError());
//        }


    }
}