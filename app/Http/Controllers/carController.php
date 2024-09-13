<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class carController extends Controller
{
    public function index()
    {  
        $cars= Car::all();
        return view("car", compact("cars"));
    
    }
    
}
