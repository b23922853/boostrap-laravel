<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
// 測試用路由




// 前台 (不須登入)
Route::get('/', 'FrontController@index');




//後台 (需要登入)
Route::middleware('auth')->group(function () {

    // 文章管理
    Route::prefix('/blog')->group(function(){
        // 檢視(列表)
        Route::get('/', 'BlogController@index');
        // 新增/儲存
        Route::get('/create', 'BlogController@create');
        Route::POST('/store', 'BlogController@store');
        // 編輯/更新
        Route::get('/edit/{id}', 'BlogController@edit');
        Route::POST('/update/{id}', 'BlogController@update');
        // 刪除
        Route::get('/delete/{id}', 'BlogController@delete');
    });
    
    //商品管理
    Route::prefix('/product')->group(function () {
        //  商品檢視(列表)
        Route::get('/', 'GoodsController@index');
        // 商品新增/儲存
        Route::get('/create', 'GoodsController@create');
        Route::post('/store', 'GoodsController@store');

        // 商品的編輯/更新
        Route::get('/edit/{id}', 'GoodsController@edit');
        Route::post('/update/{id}', 'GoodsController@update');

        // 商品的刪除
        Route::get('/delete/{id}', 'GoodsController@delete');

        // 圖片上傳/刪除
        Route::post('/imgUpload', 'GoodsController@imgUpload');
        Route::post('/imgDelete', 'GoodsController@imgDelete');
    });
    
    //會員管理
    Route::prefix('/user')->group(function () {
        //  商品檢視(列表)
        Route::get('/', 'UserController@index');
        // 會員的觀看/更新
        Route::get('/look/{id}', 'UserController@look');
        Route::post('/update/{id}', 'UserController@update');
    });

    //訂單管理
    Route::prefix('/order')->group(function () {
        //  商品檢視(列表)
        Route::get('/', 'OrderController@index');
        // 訂單的觀看/更新
        Route::get('/look/{id}', 'OrderController@look');
        Route::post('/update/{id}', 'OrderController@update');
    });
});


// laravel的路由中, 可以利用 花括弧{} 去將網址的特定區段轉換成變數 



// Route::get('/page', function() {
//     // 變數宣告 變數要用 $ 字號開頭
//     $title = '我是標題資料';
//     $text = '我是在web.php裡面的變數喔';

//     $lists = DB::table('articles')->get();


//     // dump($lists);

//     // 把 lists 裡面的元素取出來遍歷 取名為 item
//     // foreach ($lists as $item) {
//     //     dump($item);
//     // }

//     return view('page', compact('title', 'text', 'lists'));
// });


// 根據請求, 對應到相對的controller


Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
