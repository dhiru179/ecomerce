<?php

use App\Http\Controllers\Admin\CategoriesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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
// Route::post('addCategories',[CategoriesController::class,'addCategories']);

Route::group([],function(){
    Route::get('getcategories',[CategoriesController::class,'getCategories']);
    Route::get('getcategories/{id}',[CategoriesController::class,'getCategories']);
    Route::post('addcategories',[CategoriesController::class,'addCategories']);
    Route::post('addcategories/{id}',[CategoriesController::class,'addCategories']);
    
    Route::get('electronics',[CategoriesController::class,'getSubCategories']);
    Route::get('electronics/{id}',[CategoriesController::class,'getSubCategories']);
    Route::post('electronics',[CategoriesController::class,'addSubCategories']);
    Route::post('electronics/{id}',[CategoriesController::class,'addSubCategories']);
});