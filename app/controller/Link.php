<?php

namespace app\controller;

use app\BaseController;
use app\model\Profile;
use app\model\User;

class Link extends BaseController
{
    public function index()
    {
//       $user = User::find(1);
//       return json($user->profile->hobby);
//        echo $user->profile->save(["hobby" => "相扑、写诗、舞剑"]);
//        echo $user->profile()->save(["hobby" => "相扑、写诗、舞剑, 12"]);

//        $profile = Profile::find(1);
//        return json($profile->user);

//        $user = User::hasWhere('profile', ["id"=>1])->find();
//        return json($user);

//        $user = User::hasWhere("profile", function ($query) {
//            $query->where("id", 1);
//        })->find();
//        return json($user);

        // 一对多

//        $user = User::find(48);
//        return json($user->profile->where("id", ">", 3));
//        return json($user->profile()->where("id", ">", 3)->select());
//        $user = User::has("profile", ">=", 2)->select();
//        return json($user);
//        $user = User::hasWhere("profile", ["visible"=>1])->select();
//        return json($user);

//        $user = User::find(48);
//        $user->profile()->save(["hobby"=>"测试svae", "visible"=>1]);
//         $user = User::with("profile")->find(48);
//         $user->together(["profile"])->delete();

        // 预载入
//        $list = User::with(["profile"])->select([8, 9 ,10]);
//        foreach ($list as $user) {
//            dump($user->profile);
//        }

//        $list = User::with(["profile"])->select([8, 9, 10, 2]);
//        return json($list->visible(["id", "name", "profile.hobby"]));

//        $list = User::withCount(["profile"])->select([8, 9, 10, 2]);
//        foreach ($list as $user) {
//            echo $user->profile_count."<br>";
//        }

//        $user = User::find(2);
//        return json($user->role);

//        $user->role()->save(["type"=>"审核人员"]);

        $user = User::find(5);
//        $user->role()->save(1);
//        $user->role()->attach(2, ["details" => "给id为1的给权限"]);
        $user->role()->detach(2);
    }
}