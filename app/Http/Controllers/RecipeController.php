<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class RecipeController extends Controller
{
   
    public function createRecipe(Request $request)
    {
        if (
            empty($request->input('title')) || 
            empty($request->input('making_time')) || 
            empty($request->input('serves')) || 
            empty($request->input('ingredients')) || 
            empty($request->input('cost')) 
        ) {
            return [
                "message" => "Recipe creation failed!",
                "required" => "title, making_time, serves, ingredients, cost",
            ];
        }

        try {
            $recipe = Recipe::create([
                'title' => $request->input('title'),
                'making_time' => $request->input('making_time'),
                'serves' => $request->input('serves'),
                'ingredients' => $request->input('ingredients'),
                'cost' => $request->input('cost'),
            ]);
        } catch(\Exception $e) {
            return [
                "message" => $e->getMessage(),
                "required" => "title, making_time, serves, ingredients, cost",
            ];

        }
        
        return [
            "message" => "Recipe successfully created!",
            "recipe" => [ $recipe ]
        ];

        
    }

    public function getSingleRecipe($id)
    {
        $recipe = Recipe::where('id', $id)->first();
        return [
            "message" => "Recipe details by id",
            "recipe" => [ $recipe ]
        ];
    }

    public function getAllRecipes()
    {
        return  [
            "recipes" => Recipe::all()
        ];
    }


    public function updateRecipe(Request $request, $id)
    {
        if (
            empty($request->input('title')) || 
            empty($request->input('making_time')) || 
            empty($request->input('serves')) || 
            empty($request->input('ingredients')) || 
            empty($request->input('cost')) 
        ) {
            return [
                "message" => "Recipe creation failed!",
                "required" => "title, making_time, serves, ingredients, cost",
            ];
        }

        try {
            $recipe = Recipe::where('id', $id)->update([
                'title' => $request->input('title'),
                'making_time' => $request->input('making_time'),
                'serves' => $request->input('serves'),
                'ingredients' => $request->input('ingredients'),
                'cost' => $request->input('cost'),
            ]);
        } catch(\Exception $e) {
            return [
                "message" => $e->getMessage(),
                "required" => "title, making_time, serves, ingredients, cost",
            ];

        }
        
        return [
            "message" => "Recipe was successfully created!",
            "recipe" => [ $recipe ]
        ];
    }
}
