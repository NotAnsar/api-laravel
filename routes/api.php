<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CommandesController;
use App\Http\Controllers\AdressesController;
use App\Http\Controllers\UsersController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\AdresseController;

use App\Http\Controllers\UserPostController;
use App\Http\Controllers\ProductPostController;
use App\Http\Controllers\BrandPostController;
use App\Http\Controllers\CategoriePostController;
use App\Http\Controllers\PaymentPostController;
use App\Http\Controllers\CommandePostController;
use App\Http\Controllers\AdressePostController;


use App\Http\Controllers\AdresseDeleteController;
use App\Http\Controllers\BrandDeleteController;
use App\Http\Controllers\ProductDeleteController;
use App\Http\Controllers\CategorieDeleteController;
use App\Http\Controllers\PaymentDeleteController;
use App\Http\Controllers\CommandeDeleteController;
use App\Http\Controllers\UserDeleteController;



use App\Http\Controllers\AdresseUpdateController;
use App\Http\Controllers\BrandUpdateController;
use App\Http\Controllers\ProductUpdateController;
use App\Http\Controllers\CategorieUpdateController;
use App\Http\Controllers\PaymentUpdateController;
use App\Http\Controllers\CommandeUpdateController;
use App\Http\Controllers\UserUpdateController;

use App\Http\Controllers\OrderController;
use App\Http\Controllers\Order_ItemsController;
use App\Http\Controllers\jointure;
use App\Http\Controllers\jointureItem;




//use App\Http\Controllers\ImageCrudeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/users', function (Request $request) {
    return $request->user();
});

Route::get('/products',[ProductsController::class,'index']);
Route::get('/payments',[PaymentsController::class,'index']);
Route::get('/categories',[CategoriesController::class,'index']);
Route::get('/brands',[BrandsController::class,'index']);
Route::get('/commandes',[CommandesController::class,'index']);
Route::get('/adresses',[AdressesController::class,'index']);
Route::get('/users',[UsersController::class,'index']);
Route::get('/all-users',[UsersController::class,'index1']);


Route::get('/users/{id}',[UserController::class,'index']);
Route::get('/brands/{id}',[BrandController::class,'index']);
Route::get('/categories/{id}',[CategorieController::class,'index']);
Route::get('/commandes/{id}',[CommandeController::class,'index']);
Route::get('/payments/{id}',[PaymentController::class,'index']);
Route::get('/products/{id}',[ProductController::class,'index']);
Route::get('/adresses/{id}',[AdresseController::class,'index']);


Route::post('/users',[UserPostController::class,'add']);
Route::post('/products',[ProductPostController::class,'add']);
Route::post('/brands',[BrandPostController::class,'add']);
Route::post('/categories',[CategoriePostController::class,'add']);
Route::post('/payments',[PaymentPostController::class,'add']);
Route::post('/Commandes',[CommandePostController::class,'add']);
Route::post('/adresses',[AdressePostController::class,'add']);




Route::delete('/adresses/{id}',[AdresseDeleteController::class,'delete']);
Route::delete('/users/{id}',[UserDeleteController::class,'delete']);
Route::delete('/brands/{id}',[BrandDeleteController::class,'delete']);
Route::delete('/categories/{id}',[CategorieDeleteController::class,'delete']);
Route::delete('/commandes/{id}',[CommandeDeleteController::class,'delete']);
Route::delete('/payments/{id}',[PaymentDeleteController::class,'delete']);
Route::delete('/products/{id}',[ProductDeleteController::class,'delete']);






Route::put('/adresses',[AdresseUpdateController::class,'update']);
Route::put('/users',[UserUpdateController::class,'update']);
Route::put('/brands',[BrandUpdateController::class,'update']);
Route::put('/categories',[CategorieUpdateController::class,'update']);
Route::put('/commandes',[CommandeUpdateController::class,'update']);
Route::put('/payments',[PaymentUpdateController::class,'update']);
Route::put('/products',[ProductUpdateController::class,'update']);




Route :: post('/register',[UserController :: class,'register']);
Route :: post('/login',[UserController :: class,'login']);



Route::get('/productsPaginate',[ProductsController::class,'index2']);
Route::get('/productsSort',[ProductsController::class,'index3']);
Route::get('/productsFilter',[ProductsController::class,'index4']);
Route::get('/productsFil',[ProductsController::class,'index5']);
//Route::get('/productsFilterByBrand',[ProductsController::class,'index5']);
//Route::get('/productsFilterByCategorie',[ProductsController::class,'index6']);
Route::get('/usersPaginate',[UsersController::class,'index2']);


//Route::post('/create',[ImageCrudeController::class,'create']);
//Route::get('/get',[ImageCrudeController::class,'get']);
//Route::patch('/edit/{id}',[ImageCrudeController::class,'edit']);

Route::get('/orders',[OrderController::class,'index2']);
Route::get('/orders/{id}',[OrderController::class,'index1']);
Route::post('/orders',[OrderController::class,'add']);

Route::get('/order_items/{id}',[Order_ItemsController::class,'index1']);
Route::get('/order_items',[Order_ItemsController::class,'index2']);
Route::post('/order_items',[Order_ItemsController::class,'add']);


Route::get('/orderjoin',[jointure::class,'join']);
Route::get('/order-itemjoin',[jointureItem::class,'join']);




// Route::post('/UploadImage',[ImageController::class,'uploadimage']);