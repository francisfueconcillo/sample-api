<?php

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



Route::get('/', function () {
    abort(404);
});

Route::post('/recipes', 'RecipeController@createRecipe');
Route::get('/recipes', 'RecipeController@getAllRecipes');
Route::get('/recipes/{id}', 'RecipeController@getSingleRecipe');
Route::patch('/recipes/{id}', 'RecipeController@updateRecipe');
Route::delete('/recipes/{id}', 'RecipeController@deleteRecipe');







