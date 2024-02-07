<?php

use App\Http\Controllers\ProfileController;
use \App\Http\Controllers\ProductController;
use Illuminate\Foundation\Application;
use \App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AdminController;
use Inertia\Inertia;

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



//Route::resource('dashboard', AdminController::class)->middleware(['auth', 'verified']);

Route::get('/dashboard',[AdminController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/{component}',[AdminController::class,'store'])->middleware(['auth', 'verified'])->name('component');

Route::get('/',[MainController::class,"index"]);
Route::get('/{locale}',[MainController::class,"index"]);

Route::get('/product/{products}', [ProductController::class,'product']);
Route::get('/{locale}/product/{alias}', [ProductController::class,'productLocale']);



Route::post('/dashboard/role',[AdminController::class,'role'])->middleware(['auth', 'verified']);
Route::post('/dashboard/edit-product',[AdminController::class,'editProduct'])->middleware(['auth', 'verified']);
Route::post('/dashboard/category-update',[AdminController::class,'updateCategory'])->middleware(['auth', 'verified']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
