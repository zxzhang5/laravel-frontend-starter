<?php

Route::group(['middleware' => ['web']], function () {
# 普通页面
    Route::get('/', 'PageController@welcome');

# 注册页
    Route::get('register', 'AuthController@getRegister');
# 邮件注册，csrf防止跨站脚本攻击
    Route::post('register/email', ['middleware' => 'csrf', 'uses' => 'AuthController@postRegisterEmail']);
# 重发激活邮件
    Route::get('activate/email/resend', 'AuthController@getActivateEmailResend');
    Route::post('activate/email/resend', ['middleware' => 'csrf', 'uses' => 'AuthController@postActivateEmailResend']);
# 账号激活
    Route::get('activate/email/{user_id}/{activationCode}', 'AuthController@getActivateEmail');
    Route::post('activate', 'AuthController@postActivate');
    Route::get('activate/success', 'AuthController@getActivateSuccess');
# 重置密码
    Route::get('reset', 'AuthController@getReset');
    Route::post('reset/email', 'AuthController@postEmailReset');
    Route::get('reset/email/{userId}/{remindCode}', 'AuthController@getEmailResetComplete');
    Route::post('reset/email/complete', 'AuthController@postEmailResetComplete');
    Route::get('reset/success', 'AuthController@getResetSuccess');

# 登录
    Route::get('login', 'AuthController@getLogin');
    Route::post('login', 'AuthController@postLogin');
# 退出
    Route::get('logout', 'AuthController@getLogout');

# 其他页面
    Route::get('/{object_name}', 'PageController@index');
    Route::get('/{object_name}/{action}', 'PageController@index');
});


# API路由组
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->group(['namespace' => 'App\Http\Controllers\Api'], function ($api) {
       $api->get('{object_name}', ['uses' => 'JsonApiController@getList']);
       $api->get('{object_name}/{id}', ['uses' => 'JsonApiController@getDetail']);
       $api->post('{object_name}', ['uses' => 'JsonApiController@store']);       
       $api->put('{object_name}/{id}', ['uses' => 'JsonApiController@update']);
       $api->delete('{object_name}/{id}', ['uses' => 'JsonApiController@destroy']);       
    });
});