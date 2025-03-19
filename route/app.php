<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

//Route::get('think', function () {
//    return 'hello,ThinkPHP8!';
//});
//
//Route::get('hello/:name', 'index/hello');


Route::get("think", function () {
    return "hello thinkphp!";
});

Route::pattern([
    "id" => "\d+"
]);

//Route::rule("details/:id/[:uid]$", "Index/details");
Route::rule("test", "Index/test");
Route::rule("/", "Index/index");
Route::rule("details/:id/:uid", "Index/details")->pattern([]);
