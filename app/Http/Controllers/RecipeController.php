<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class RecipeController extends Controller
{
   
    public function getSingleRecipe($id)
    {
        $recipe = Recipe::where('id', $id)->first();
        return [
            "message" => "Recipe details by id",
            "recipe" =>[ $recipe ]
        ];
    }

    public function getAllRecipes()
    {
        return  [
            "recipes" => Recipe::all()
        ];
    }
}
