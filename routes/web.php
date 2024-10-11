<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Auth::routes();

Route::middleware(['auth','role:user'])->group(function () {
    Route::get('/dashboard',[HomeController::class, 'index'])->name('home');
    Route::post('/user/upload',[HomeController::class, 'userUpload'])->name('user.upload');
    Route::post('/user/upload/cv',[HomeController::class, 'userUploadCv'])->name('update.cv');
});

//admin routes
Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
});
