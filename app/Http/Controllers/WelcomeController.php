<?php

namespace App\Http\Controllers;

use App\Meal;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    
    public function welcome()
    {
        $meals = Meal::all(); // equivalent to : SELECT * FROM meals
        // dd($meals); --> equivalent to : var_dump($meals); die();
        // Method 1 
        return view('welcome', compact('meals'));
        
        //Method 2 
        // return view('welcome', ['meals' => $meals]);
        
        // Method 3
        // return view('welcome') -> with('meals', $meals);
    }
}
