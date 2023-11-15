<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
// Route::get('/redirect', function () {
//     return view('frontend.layout.app');
// });
Route::get('/redirect', [HomeController::class,'redirect']);

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/Category-list', [CategoryController::class,'CategoryList'])->name('category.list');
Route::get('/Category-create', [CategoryController::class,'CategoryCreate'])->name('category.create');
