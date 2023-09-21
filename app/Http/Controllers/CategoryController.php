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

        $category = Category::where('name',$request->name)->first();
        if($category){
            return redirect()->back()->with('error', "Category already exist");
        }

        //dd($request->name);
        $save = Category::create([
            'name'=> $request->name
        ]);
        
        return redirect()->back()->with('message', "Category successfully added");
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

        $category = Category::where('name',$request->name)->first();
        if($category){
            return redirect()->back()->with('error', "Category already exist");
        }
        
        $save = Category::where('id',$request->category_id)->update([
            'name' => $request->name
        ]);

        return redirect()->route('showCarLists')->with('message', 'Category modified successfully');
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

        return redirect()->route('showCarLists')->with('message', 'Category deleted successfully');
    }
}
     