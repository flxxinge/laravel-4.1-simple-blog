<?php

// 注册视图别名
View::addNamespace('Admin', __DIR__.'/../views');
// 注册配置别名（模块不使用独立配置的可以注释掉）
// Config::package('_modules/Admin', __DIR__, 'Admin');

/*
|--------------------------------------------------------------------------
| Filters
|--------------------------------------------------------------------------
*/



/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
*/
Route::group(array('prefix'=>'admin'), function()
{
    $Admin = 'Admin\AdminController@';

    # 后台首页
    Route::get('/', array('as'=>'admin', 'uses'=>$Admin.'getIndex'));

});