<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ImageUploadController;

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
  

  
  
Route::get('image-upload',[App\Http\Controllers\Backend\ImageUploadController::class, 'imageUpload' ])->name('image.upload');
Route::post('image-upload',[App\Http\Controllers\Backend\ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');

Route::get('/',[App\Http\Controllers\Backend\SiteController::class,'home'])->name('home');

Route::get('about',[App\Http\Controllers\Backend\SiteController::class,'about'])->name('about');

Route::get('features',[App\Http\Controllers\Backend\SiteController::class,'feature'])->name('features');

Route::get('service',[App\Http\Controllers\Backend\SiteController::class,'service'])->name('service');

Route::get('contact',[App\Http\Controllers\Backend\SiteController::class,'contact'])->name('contact');




