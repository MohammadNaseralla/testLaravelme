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

//Route::get('login', function () {
//    return view('welcome');
//})->name('login');

//Route::get('/admin','Admin\testController@index');

//  ,'middleware'=>'auth'
Route::group(['prefix' => 'admin','namespace'=>'Admin'],function () {
    Route::get('/{id?}','\App\Http\Controllers\Admin\testController@start');
});

Route::resource('news','\App\Http\Controllers\Admin\NewsController');

//Route::prefix('admin')->name('admin.')->namespace('Admin')->middleware(['auth'])->group(function () {
//    Route::resource('admin', 'test1Controller');
//});
