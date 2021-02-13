<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class RecipeController extends Controller
{
   
    public function getSingleRecipe($id)
    {
        $recipe = Recipe::where('id', $id)->first();
        return $recipe;
    }

    public function getAllRecipes()
    {
        return  Recipe::all();
    }
}
