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


//Route::get("think", function () {
//    return "hello thinkphp!";
//});
//
//Route::pattern([
//    "id" => "\d+"
//]);

//Route::rule("details/:id/[:uid]$", "Index/details");
//Route::rule("test", "Index/test");
//Route::rule("/", "Index/index");
//Route::rule("details/:id/:uid", "Index/details")->pattern([]);

//Route::rule("test", "Index/test")->ext('html|xml');
//Route::rule("test", "Index/test")->denyExt('jpg');
//Route::rule("test", "Index/test")->domain('localhost');

//Route::miss('Error/miss');


// 路由分组
//Route::group('hw', function () {
//    Route::rule(":id", "HelloWorld/hello");
//    Route::rule(":name", "HelloWorld/details");
//})->ext("html")->pattern(["id" => "\d+"]);


//Route::group(function () {
//    Route::rule("/test", "HelloWorld/test");
//})->ext("html");


//Route::group('hw', function () {
////    Route::rule(":id", "HelloWorld/hello");
//    Route::rule(":id", "HelloWorld/details");
//})->prefix("HelloWorld/")->ext("html")->pattern(["id" => "\d+"]);

//Route::resource("blog", "Blog");
//Route::resource("blog", "Blog")->vars(["blog"=>"blog_id"]);
//Route::resource("blog", "Blog")->only(["index", "create", "edit"]);
//Route::resource("t/s", "Tk/save")->token();
Route::resource("/", "Index/save")->minddleware(\app\middleware\Auth::class);
