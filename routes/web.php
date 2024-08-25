<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MealController;


Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/pencarian', function () {
    return view('pages.pencarian.pencarian');
});
Route::get('/pencarian/detail/{id}', function () {
    return view('pages.pencarian.detail');
});

Route::get('/meals/search/{name}', [MealController::class, 'searchMealByName']);
Route::get('/meals/letter/{letter}', [MealController::class, 'listMealsByFirstLetter']);
Route::get('/meals/{id}', [MealController::class, 'lookupMealById']);
Route::get('/meals/random', [MealController::class, 'randomMeal']);
Route::get('/meals/categories', [MealController::class, 'listCategories']);
Route::get('/meals/ingredient/{ingredient}', [MealController::class, 'filterByIngredient']);
Route::get('/meals/category/{category}', [MealController::class, 'filterByCategory']);
Route::get('/meals/area/{area}', [MealController::class, 'filterByArea']);
Route::get('/meals/all', [MealController::class, 'getAllMeals']);
