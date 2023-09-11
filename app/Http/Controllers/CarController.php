<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function showcarlists(){
        return view('carView.carLists');
    }
}
