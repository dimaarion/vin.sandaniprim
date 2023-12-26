<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name("home");
Route::resource('cart', \App\Http\Controllers\CartController::class);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/dashboard/{name}/{id}', [\App\Http\Controllers\AdminController::class, 'edit'])->middleware(['auth', 'verified'])->name('dashboard.edit');
Route::resource('dashboard', \App\Http\Controllers\AdminController::class)->middleware(['auth', 'verified']);
Route::get('/dashboard/addproduct', [\App\Http\Controllers\AdminController::class, 'show'])->middleware(['auth', 'verified'])->name('dashboard.show');
Route::post("/dashboard/surliest",[\App\Http\Controllers\AdminController::class,"store"])->middleware(['auth', 'verified']);
Route::post("/dashboard/addproduct",[\App\Http\Controllers\AdminController::class,"addProduct"])->middleware(['auth', 'verified']);
Route::post("/dashboard/addcategory",[\App\Http\Controllers\AdminController::class,"addCategory"])->middleware(['auth', 'verified']);
Route::post("/dashboard/update-category",[\App\Http\Controllers\AdminController::class,"updateCategory"])->middleware(['auth', 'verified']);
Route::post("/dashboard/edit",[\App\Http\Controllers\AdminController::class,"editProduct"])->middleware(['auth', 'verified']);
require __DIR__.'/auth.php';
