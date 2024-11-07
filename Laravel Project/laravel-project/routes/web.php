<?php

use App\Http\Controllers\AboutUs;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\WriterController;
use Illuminate\Support\Facades\Route;



Route::get ('/',
[CourseController::class,'index'])
->name('home');

Route::get('/courses/category/{id}', 
[CourseController::class, 'showByCategory'])
->name('courses.category');


Route::get('/writers', 
[WriterController::class, 'index'])
->name('writer');

Route::get('/aboutUs', 
[AboutUsController::class, 'index'])
->name('aboutUs');


Route::get('/popular', 
[ArticleController::class, 'index'])
->name('popular');

Route::get('/courses/{id}', 
[CourseController::class, 'show'])
->name('spesificCourse');

Route::get('/writers/{id}',
 [WriterController::class, 'showWriterContent'])
 ->name('writerShow');

 Route::get('/articles/{id}',
 [ArticleController::class, 'show'])
 ->name('specificArticle');

