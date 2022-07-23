<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function show()
    {
        return view('food/tuna');
    }
}
