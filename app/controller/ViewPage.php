<?php

namespace app\controller;

use app\BaseController;
use think\facade\View;

class ViewPage extends BaseController
{
    public function index()
    {
        try {
            return View::engine("php")->fetch('index', [
                "name" => "thinkPhp*"
            ]);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function save()
    {
        return $this->request->post("username");
    }
}