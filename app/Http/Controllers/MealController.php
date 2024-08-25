<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MealController extends Controller
{
    private $apiKey = '1'; // Developer test key

    public function searchMealByName($name)
    {
        $response = Http::get("https://www.themealdb.com/api/json/v1/{$this->apiKey}/search.php?s={$name}");
        return response()->json($response->json());
    }

    public function listMealsByFirstLetter($letter)
    {
        $response = Http::get("https://www.themealdb.com/api/json/v1/{$this->apiKey}/search.php?f={$letter}");
        return response()->json($response->json());
    }

    public function lookupMealById($id)
    {
        $response = Http::get("https://www.themealdb.com/api/json/v1/{$this->apiKey}/lookup.php?i={$id}");
        return response()->json($response->json());
    }

    public function randomMeal()
    {
        $response = Http::get("https://www.themealdb.com/api/json/v1/{$this->apiKey}/random.php");
        return response()->json($response->json());
    }

    public function listCategories()
    {
        $response = Http::get("https://www.themealdb.com/api/json/v1/{$this->apiKey}/categories.php");
        return response()->json($response->json());
    }

    public function filterByIngredient($ingredient)
    {
        $response = Http::get("https://www.themealdb.com/api/json/v1/{$this->apiKey}/filter.php?i={$ingredient}");
        return response()->json($response->json());
    }

    public function filterByCategory($category)
    {
        $response = Http::get("https://www.themealdb.com/api/json/v1/{$this->apiKey}/filter.php?c={$category}");
        return response()->json($response->json());
    }

    public function filterByArea($area)
    {
        $response = Http::get("https://www.themealdb.com/api/json/v1/{$this->apiKey}/filter.php?a={$area}");
        return response()->json($response->json());
    }
    public function getAllMeals()
    {
        $allMeals = collect();
        $alphabet = range('a', 'z');

        foreach ($alphabet as $letter) {
            $response = Http::get("https://www.themealdb.com/api/json/v1/{$this->apiKey}/search.php?f={$letter}");
            $meals = $response->json()['meals'];

            if ($meals) {
                $allMeals = $allMeals->merge($meals);
            }
        }

        return response()->json($allMeals);
    }
}
