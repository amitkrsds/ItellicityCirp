<?php

use App\Models\Category;
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

    $categories=Category::all();
    foreach ($categories as $category){
        $category->files=Media::where('category_id',$category->id)->get();
    }
    return view('welcome',['categories'=>$categories]);
});
Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/upload-files', [App\Http\Controllers\HomeController::class, 'uploadFiles']);
Route::delete('/delete-files/{media}', [App\Http\Controllers\HomeController::class, 'deleteFiles']);
Route::get('/download/{media}', [App\Http\Controllers\Controller::class, 'downloadFile'])->name('file.download');
Route::get('/view/{media}', [App\Http\Controllers\Controller::class, 'viewFile'])->name('file.view');
Route::get('/file/{media}', [App\Http\Controllers\Controller::class, 'showFile'])->name('file.show');
Route::get('/category-create', [App\Http\Controllers\HomeController::class, 'categoryCreate']);
Route::post('/add-category', [App\Http\Controllers\HomeController::class, 'savecategory']);
Route::get('/category-edit/{category}', [App\Http\Controllers\HomeController::class, 'editCategory']);
Route::put('/category-update/{category}', [App\Http\Controllers\HomeController::class, 'updateCategory']);
Route::get('/category/show', [App\Http\Controllers\HomeController::class, 'categoryDelete'])->name('category');
Route::delete('/delete-category/{category}', [App\Http\Controllers\HomeController::class, 'deleteCategory']);
Route::get('/category/show/{category}', function (Category $category) {
    $files=Media::where('category_id',$category->id)->get();
    return view('category-details',['categories'=>Category::all(),'category'=>$category,'files'=>$files]);
});
Route::get('contact-us', function () {
    $categories=Category::all();
    return view('contact-us',['categories'=>$categories]);
});
