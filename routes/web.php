<?php

use App\Http\Controllers\Demo\HomeController;
use App\Http\Controllers\Student\StudentController;
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

Route::get('/layout', function () {
    return view('layout');
});

route::get('/helloworld',[HomeController::class,'save']);

route::get('/aboutus',[HomeController::class,'edit']);

route::get('/lookservices',[HomeController::class,'delete']);

route::get('/addstudent',[StudentController::class,'add'])->name('add.s');

route::get('/liststudent',[StudentController::class,'list'])->name('list.s');

Route::post('/studentstore',[StudentController::class,'store'])->name('std.store');

Route::patch('/studentupdate/{id}',[StudentController::class,'update'])->name('std.update');

route::get('/studentdelete/{id}',[StudentController::class,'delete'])->name('std.delete');

