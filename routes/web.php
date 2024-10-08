<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\shopController;
use App\Http\Controllers\attributeController;
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

Route::get('/test', function () {
    return view('admin.Product.test');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Front end //
Route::get('/product', [shopController::class, 'productShow'])->name('shop');
Route::get('/singleProduct/{Product_id}', [shopController::class, 'singleProduct'])->name('singleProduct');
// product price with variation
Route::get('/getPrice', [shopController::class, "getPriceWithAjax"])->name('getPrice');






// Back end  //

// Dashboard area
Route::get('/admin/index', [productController::class, 'adminIndex'])->name('admin.index');
//  Product area 
Route::get('/addProduct', [productController::class, 'addProduct'])->name('addProduct');
Route::get('/allProduct', [productController::class, 'allProduct'])->name('allProduct');
Route::Post('/store.product', [productController::class, 'productStore'])->name('store.product');
Route::get('/editProduct/{Product_id}', [productController::class, 'editProduct'])->name('editProduct');

// Product variation
Route::get('/variation/{Product_id}', [productController::class, 'ProductVariation'])->name('variation');
Route::Post('/AddVariation', [productController::class, 'storeVariation'])->name('store.variation');


//  Category area 
Route::get('/addCategory', [categoryController::class, 'addCategory'])->name('addCategory');
Route::get('/allCategory', [categoryController::class, 'allCategory'])->name('allCategory');
Route::post('/store/category', [categoryController::class, 'storeCategory'])->name('store.category');
// Attribute
Route::get('/addAttribute', [attributeController::class, 'addAttribute'])->name('addAttribute');
Route::get('/allAttribute', [attributeController::class, 'allAttribute'])->name('allAttribute');
Route::Post('/store/Attribute', [attributeController::class, 'storeAttribute'])->name('store.attribute');
// Attribute value 
Route::get('/addAttributeValue', [attributeController::class, 'addAttributeValue'])->name('addAttributeValue');
Route::get('/allAttributeValue', [attributeController::class, 'allAttributeValue'])->name('allAttributeValue');
Route::Post('/store/AttributeValue', [attributeController::class, 'storeAttributeValue'])->name('store.attributeValue');
