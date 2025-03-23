<?php

namespace app\controller;

use app\BaseController;
use think\facade\Filesystem;
use think\facade\Validate;

class File extends BaseController
{
    public function up()
    {
        return view();
    }

    public function save()
    {
        dump($this->request->file("image"));
//        $file = $this->request->file("image");

//        $validate = Validate::rule([
//            "image" => "file|fileExt:jpg,jpeg,png",
//        ]);
//
//        // 验证
//        $result = $validate->check([
//            "image" => $file,
//        ]);
//
//        if ($result) {
            // 上传到本地服务器
//            Filesystem::putFile("topic", $file);
//        } else {
//            dump($validate->getError());
//        }
    }

    public function code()
    {
        return view();
    }
}