<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

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


// admin area 
Route::get('/addProduct', [productController::class, 'addProduct'])->name('addProduct');
Route::get('/allProduct', [productController::class, 'allProduct'])->name('allProduct');
Route::get('/admin/index', [productController::class, 'adminIndex'])->name('admin.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
