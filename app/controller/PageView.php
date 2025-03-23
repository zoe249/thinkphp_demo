<?php

namespace app\controller;

use app\BaseController;
use app\model\User;

class PageView extends BaseController
{
    public function index()
    {
        $list = User::paginate(3);
//        return json($list);
        return view("index", [
            'list' => $list
        ]);
    }
}