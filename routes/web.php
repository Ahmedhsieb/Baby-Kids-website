<?php

use App\Http\Controllers\Admin\AdminActivityController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminCourseController;
use App\Http\Controllers\Admin\AdminFaqController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminSliderController;
use App\Http\Controllers\Admin\AdminTeacherController;
use App\Http\Controllers\UserHomeController;
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

Route::get('/' , [UserHomeController::class, 'index'])->name('home');
Route::post('/store', [UserHomeController::class, 'store'])->name('store');

Route::get('admin/login' , [AdminLoginController::class, 'login'])->name('admin.login');
Route::post('admin/postlogin' , [AdminLoginController::class, 'postLogin'])->name('admin.postlogin');

Route::group(['prefix'=>'admin', 'as'=>'admin.', 'middleware' => 'auth'], function (){

    Route::get('/', [AdminHomeController::class, 'index'])->name('index');
    Route::get('/delete/{user_id}', [AdminHomeController::class, 'delete'])->name('delete');
    Route::post('logout' , [AdminLoginController::class, 'logout'])->name('logout');

    Route::group(['prefix'=>'faqs', 'as'=>'faqs.'],function (){
        Route::get('/', [AdminFaqController::class, 'index'])->name('index');
        Route::get('/create', [AdminFaqController::class, 'create'])->name('create');
        Route::post('/store', [AdminFaqController::class, 'store'])->name('store');
        Route::delete('/delete', [AdminFaqController::class, 'delete'])->name('delete');
        Route::get('/edit/{faqId}', [AdminFaqController::class, 'edit'])->name('edit');
        Route::put('/update', [AdminFaqController::class, 'update'])->name('update');
    });

    Route::group(['prefix'=>'slider', 'as'=>'slider.'],function (){
        Route::get('/', [AdminSliderController::class, 'index'])->name('index');
        Route::get('/create', [AdminSliderController::class, 'create'])->name('create');
        Route::post('/store', [AdminSliderController::class, 'store'])->name('store');
        Route::post('delete', [AdminSliderController::class, 'delete'])->name('delete');
        Route::get('/edit/{slider_id}', [AdminSliderController::class, 'edit'])->name('edit');
        Route::put('/update', [AdminSliderController::class, 'update'])->name('update');
    });

    Route::group(['prefix'=>'activity', 'as'=>'activity.'],function (){
        Route::get('/', [AdminActivityController::class, 'index'])->name('index');
        Route::get('/create', [AdminActivityController::class, 'create'])->name('create');
        Route::post('/store', [AdminActivityController::class, 'store'])->name('store');
        Route::post('delete', [AdminActivityController::class, 'delete'])->name('delete');
        Route::get('/edit/{activity_id}', [AdminActivityController::class, 'edit'])->name('edit');
        Route::put('/update', [AdminActivityController::class, 'update'])->name('update');
    });

    Route::group(['prefix'=>'course', 'as'=>'course.'],function (){
        Route::get('/', [AdminCourseController::class, 'index'])->name('index');
        Route::get('/create', [AdminCourseController::class, 'create'])->name('create');
        Route::post('/store', [AdminCourseController::class, 'store'])->name('store');
        Route::post('delete', [AdminCourseController::class, 'delete'])->name('delete');
        Route::get('/edit/{course_id}', [AdminCourseController::class, 'edit'])->name('edit');
        Route::put('/update', [AdminCourseController::class, 'update'])->name('update');
    });

    Route::group(['prefix'=>'teacher', 'as'=>'teacher.'],function (){
        Route::get('/', [AdminTeacherController::class, 'index'])->name('index');
        Route::get('/create', [AdminTeacherController::class, 'create'])->name('create');
        Route::post('/store', [AdminTeacherController::class, 'store'])->name('store');
        Route::post('delete', [AdminTeacherController::class, 'delete'])->name('delete');
        Route::get('/edit/{course_id}', [AdminTeacherController::class, 'edit'])->name('edit');
        Route::put('/update', [AdminTeacherController::class, 'update'])->name('update');
    });

    Route::group(['prefix'=>'contact', 'as'=>'contact.'],function (){
        Route::get('/', [AdminContactController::class, 'index'])->name('index');
        Route::post('/store', [UserHomeController::class, 'store'])->name('store');
        Route::delete('delete', [AdminContactController::class, 'delete'])->name('delete');

    });

});


