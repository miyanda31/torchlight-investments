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
})->name('home');

Route::get('about',[\App\Http\Controllers\HomeController::class,'about'])->name('about');
Route::get('contact',[\App\Http\Controllers\HomeController::class,'contact'])->name('contact');
Route::get('projects',[\App\Http\Controllers\HomeController::class,'projects'])->name('projects');
Route::get('services',[\App\Http\Controllers\HomeController::class,'services'])->name('services');
Route::get('quotation',[\App\Http\Controllers\HomeController::class,'quotation'])->name('quotation');
