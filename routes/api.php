<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\ProductController;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



// Route::get('customer',[APIController::class,'basicApp']);
// Route::get('customer/{id}',[APIController::class,'speciFun']);



Route::get('myhome', [App\Http\Controllers\ProductController::class, 'index'])->name('myhome');
Route::get('productapi', [App\Http\Controllers\ProductController::class, 'damnApi']);
Route::get('singleProduct/{id}', [App\Http\Controllers\ProductController::class, 'singleProApi']);
Route::get('upProduct/{id}', [App\Http\Controllers\ProductController::class, 'upProduct']);
Route::post('process', [App\Http\Controllers\ProductController::class, 'store'])->name('form.process');
Route::post('updateProduct/{id}', [App\Http\Controllers\ProductController::class, 'updateProduct']);
Route::get('deleteProduct/{id}', [App\Http\Controllers\ProductController::class, 'deleteProduct']);





Route::post('store', [App\Http\Controllers\API\ProductController::class, 'storeProduct']);
Route::get('allproducts', [App\Http\Controllers\API\ProductController::class, 'allProduct']);








Route::get('posts', [App\Http\Controllers\API\PostController::class, 'index']);
Route::group(['prefix' => 'post'], function () {
    Route::post('add', [App\Http\Controllers\API\PostController::class, 'add']);
    // Route::get('edit/{id}', 'PostController@edit');
    // Route::post('update/{id}', 'PostController@update');
    // Route::delete('delete/{id}', 'PostController@delete');
});



