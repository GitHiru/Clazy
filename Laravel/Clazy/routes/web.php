<?php

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

// Route::get('/', function () { return view('welcome'); }); //(Laravel)初期データ

/*******************************************************
 *     log in
 *******************************************************/
// SNS認証のためのルートを2本設定
// Route::get('login/{provider}',          'Auth\SocialAccountController@redirectToProvider');
// Route::get('login/{provider}/callback', 'Auth\SocialAccountController@handleProviderCallback');

// ■ ログイン機能
Route::group(['middleware' => 'auth'], function() {
    //
});

Auth::routes();



/*******************************************************
 *     PC + SP 共通
 *******************************************************/
// ■ loginページ 表示
Route::get('/', function () { return view('pc.login0'); });



/*******************************************************
 *     PC
 *******************************************************/
// ■ dashboardページ 表示
Route::get('/dashboard', 'ClazyController@firstInformation')->name('Clazy.firstInformation');
// ■ 初期設定モーダルからの投稿
Route::post('/dashboard', 'ClazyController@storeFirst')->name('Clazy.firstInformation'); // 保存処理
// ■ dashboardページ 金額データ編集(get)
Route::get('/{id}/dashboard', 'ClazyController@edit')->name('Clazy.edit'); // 編集画面
// ■ dashboardページ 金額データ更新(put)
Route::put('/{id}/update', 'ClazyController@update')->name('Clazy.update'); //更新処理
// ■ dashboardページ チャート描画
Route::post('/dashboard/chart', 'ClazyController@chart');// （chart）



/*******************************************************
 *    SP
 *******************************************************/
// ■ (SP)loginページ 表示
// Route::get('/sp', function () { return view('sp.login'); });

// ■ (SP)トップページ 表示
Route::get('/sp/top', 'ClazyController@createTop')->name('Clazy.top');
// ■ (SP)電卓ページ 表示
Route::get('/create', 'ClazyController@create')->name('Clazy.create'); // 投稿画面
Route::post('/create', 'ClazyController@store')->name('Clazy.create'); // 保存処理
