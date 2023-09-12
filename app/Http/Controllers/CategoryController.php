<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(){

        //$id = Auth::user()->id;
        $category = Category::all();
    
        //$students = Etudiants::where('users_id', $id)->paginate(10); // Récupère tous les éléments de la table "students"
        
        return view('carView.carLists', compact('category'));

    }
    
    public function store(Request $request){
        $data = $request->all();
        //dd($data);
       
        $validatedData = $request->validate([
            'name' => 'required',
        ]);
        
        $save = Category::create([
            "name" => $data['name'],
            
            
        ]);
        return back();


    }
}
     