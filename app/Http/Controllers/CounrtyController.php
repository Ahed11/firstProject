<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CounrtyController extends Controller
{
    public function index(){
        $countries = Country::all();
        return view('home', [
            'countries' => $countries
        ]);
    }
}
