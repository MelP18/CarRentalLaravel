<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function addcategorycar(){
        return view('crudCategoryView.addCategory');
    }

    
    public function sendCategoryCar(Request $request){  
        $request->validate([
            'name'=> "required"
        ]);

        //dd($request->name);
        $save = Category::create([
            'name'=> $request->name
        ]);
        
        return redirect()->back()->with('message', "Catégorie ajoutée avec succès");
    }


    /* OUVERTURE DE LA PAGE DE MODIFICATION DE CATEGORIE */
    public function modifycategorycar(){
        $categories = Category::all();
        return view('crudCategoryView.modifyCategory', compact('categories'));
    }

     /* VERIFICATION ET ENVOI DU FORMULAIRE DE MODIFICATION */
    public function sendmodifycategorycar(Request $request){
        $request->validate([
            'category_id' => 'required',
            'name' => 'required'
        ]);

        $save = Category::where('id',$request->category_id)->update([
            'name' => $request->name
        ]);

        return redirect()->route('showCarLists')->with('message', 'Catégorie modifiée avec sucèss');
    }

    public function deletecategorycar(){
        $categories = Category::all();
        return view('crudCategoryView.deleteCategory',  compact('categories'));
    }
    

    public function senddeletecategorycar(Request $request){
        $request->validate([
            'category_id' =>'required'
        ]);

        $save = Category::where('id', $request->category_id)->delete();

        return redirect()->route('showCarLists')->with('message', 'Catégorie supprimée avec sucèss');
    }
}
     