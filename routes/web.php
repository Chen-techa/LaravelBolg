<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

//博客首页
Route::get('/',function (){
   dd('博客首页');
})->name('index');

//博客详情
Route::get('/blog/{id}',function ($id){
    dd('博客列表,查看的博客ID是：'.$id);
})->name('blog.show')->where('id','[0-9]+');

//博客的发布页面
Route::get('/blog/create',function (){
    dd('添加博客的页面');
})->name('blog.create');

//提交发布的博客，进行保存
Route::post('/blog',function (){
    dd('保存博客');
})->name('blog.store');

//修改博客的页面
Route::get('/blog/{id}/edit',function ($id){
    dd('修改的博客页面，博客是：'.$id);
})->name('blog.edit');
//执行修改操作，提交数据
Route::put('/blog/{id}',function ($id){
    dd('执行修改，修改的ID是：'.$id);
})->name('blog.update');

//删除博客的路由
Route::delete('/blog/{id}',function ($id){
   dd('删除的博客是：'.$id);
})->name('blog.destroy');

//改变博客状态发布与不发布
Route::patch('/blog/{id}',function ($id){
    dd('要改变状态的博客是：'.$id);
})->name('blog.status');

//个人中心->修改个人信息
Route::get('/user',function (){
    dd('修改个人信息页面');
})->name('user.info');
//个人中心->更新数据
Route::post('/user',function (){
    dd('更新个人数据');
})->name('user.update');

//个人中心->更换头像
Route::get('/user/avatar',function (){
    dd('修改个人头像');
})->name('user.avatar');
//个人中心->更换头像->执行
Route::patch('user/avatar',function (){
   dd('执行修改个人头像');
})->name('user.avatar.update');

//个人中心->我的博客
Route::get('/user/blogs',function (){
   dd('我的所有博客');
})->name('user.blog');

//登录、注册相关路由将会直接使用Laravel自己提供，这里不写
