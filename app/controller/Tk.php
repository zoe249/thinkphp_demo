<?php

namespace app\controller;

use app\BaseController;

class Tk extends BaseController
{
    public function index()
    {
        return view('index', [
            "token" => $this->request->buildToken("__token__", type: "123")
        ]);
    }
    public function save()
    {
//        echo $this->request->post("__token__");
//        echo session('__token__');

        // 验证1
//        $check = $this->request->checkToken("__token__");
//        if (!$check) {
//            echo "令牌无效";
//        } else {
//            echo "校验通过";
//        }

        // 验证2

    }
}