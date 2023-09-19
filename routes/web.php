<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/php", function(){

    echo phpinfo();

});

Route::get('/flamylion/backend/admin', function () {
    return view('admin/auth.login');
});

Route::post('/processes/backend/admin/login',[App\Http\Controllers\Auth\LoginController::class, 'loginAdmin']);

Route::get('/flamylion/backend/admin/home',  function () {
    return view('admin/dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






Route::post('/flamylion/backend/upload', [App\Http\Controllers\UploadController::class, 'store'])->name('store');






//admin routes pages

Route::get('/flamylion/backend/add-video',[App\Http\Controllers\PageController::class, 'addVideo'] );

Route::get('/flamylion/backend/list-video', [App\Http\Controllers\PageController::class, 'listVideo'] );

Route::get('/flamylion/backend/add-youtube', [App\Http\Controllers\YoutubeController::class, 'addYoutube'] );

Route::resource('video', 'VideoController');

Route::get('/store-playlist', [YoutubeController::class, 'getPlaylist']);
Route::get('/flamylion/backend/list-youtube', [App\Http\Controllers\PageController::class, 'listYoutube'] );

Route::get('/flamylion/backend/category', [App\Http\Controllers\PageController::class, 'category'] );

