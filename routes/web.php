<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// 對在此下的路由皆有第一個固定的參數 school，laravel 會自動去匹配。
Route::group(['prefix' => '/{school?}'], function($school) {
    // 公告欄
    Route::get('/ViewNews',['as' => 'viewnews','uses' => 'HomeController@board']);

    // 房屋資訊
    Route::get('/House',['as' => 'house','uses' => 'HouseController@index']);
});

Auth::routes();
Route::group(['prefix' =>'Landlord','middleware'=>'auth'], function(){
    Route::get('/',['as' => 'landlord.entrance', 'uses' => 'LandlordController@index']);
    Route::patch('/Fixpassword',['as' => 'landlord.fixpass', 'uses' => 'LandlordController@fixPassword']);

});

Route::get('/Logout',['as' => 'logout',function(){
    Auth::logout();
    return redirect('/login');
}]);

Route::group(['prefix' =>'Administrator'], function(){
    Route::post('/',['as' => 'Administrator.face', 'uses' => 'SchooladminerController@index']);
    Route::get('/Login',['as' => 'Administrator.login', 'uses' => 'SchooladminerController@login']);
    Route::get('/Show/{page?}',['as' => 'Administrator.show', 'uses' => 'SchooladminerController@show']);
    // Route::patch('/Fixpassword',['as' => 'landlord.fixpass', 'uses' => 'LandlordController@fixPassword']);

});