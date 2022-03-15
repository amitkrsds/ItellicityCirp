<?php

use App\Models\Media;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    $files= Media::all();
    return view('welcome',['files'=>$files]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/upload-files', [App\Http\Controllers\HomeController::class, 'uploadFiles']);
Route::delete('/delete-files/{media}', [App\Http\Controllers\HomeController::class, 'deleteFiles']);
Route::get('/download/{media}', [App\Http\Controllers\Controller::class, 'downloadFile']);
