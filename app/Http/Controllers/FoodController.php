<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function food(int $id){
        $foods = Food::where('country_id', $id)->get();
        //dd($foods);
        return view('food', [
                'foods' => $foods
        ]);
    }
}
