<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Modal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function showCarLists(){

        $categories = Category::all();
        $brands = Brand::all();
        //$models = Modal::all();
        return view('carView.carList', compact('categories', 'brands'));
    }
}
