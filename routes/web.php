<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;



Route::get('/',[HomeController::class,'index'])->name('homepage');
Route::get('/view/{id}',[HomeController::class,'view'])->name('view');

Route::prefix("admin")->group(function(){
      Route::get("/",[AdminController::class,"index"])->name("admin.dashboard");
      Route::resource('course', CourseController::class);
});
