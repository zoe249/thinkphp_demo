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

        $user = User::hasWhere("profile", function ($query) {
            $query->where("id", 1);
        })->find();
        return json($user);
    }
}