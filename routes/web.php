<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\shopController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Front end //

Route::get('/product', [shopController::class, 'productShow'])->name('shop');
Route::get('/singleProduct', [shopController::class, 'singleProduct'])->name('singleProduct');


// Back end  //

// Dashboard area
Route::get('/admin/index', [productController::class, 'adminIndex'])->name('admin.index');
//  Product area 
Route::get('/addProduct', [productController::class, 'addProduct'])->name('addProduct');
Route::get('/allProduct', [productController::class, 'allProduct'])->name('allProduct');
Route::Post('/store.product', [productController::class, 'productStore'])->name('store.product');
//  Category area 
Route::get('/addCategory', [categoryController::class, 'addCategory'])->name('addCategory');
Route::get('/allCategory', [categoryController::class, 'allCategory'])->name('allCategory');
Route::post('/store/category', [categoryController::class, 'storeCategory'])->name('store.category');
