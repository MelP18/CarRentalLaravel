<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function addBrandCar() {
        $categories = Category::all();
        return view('crudBrandView.addBrand', compact('categories'));
    }
    
    public function sendBrandCar(Request $request){  
        $request->validate([
            'name'=> "required",
            'category_id' => "required"
        ]);

        $brands = Brand::where([
            ['name',$request->name],
            ['category_id',$request->category_id]
        ])->first();

        if($brands){
            return redirect()->back()->with('error', "Brand already exist");
        }

        $save = Brand::create([
            'name'=> $request->name,
            'category_id' =>$request->category_id
        ]);
        
        return redirect()->back()->with('message', "Brand added successfully");
    }

    public function modifybrandcar(){
        $categories = Category::all();
        $brands = Brand::all();
        return view('crudBrandView.modifyBrand', compact('categories','brands'));
    }


    public function sendModifyBrandCar(Request $request){
        $request->validate([
            'brand_id' => 'required',
            'name' => 'required',
            'category_id' => 'required'
        ]);

        $brands = Brand::where([
            ['name',$request->name],
            ['category_id',$request->category_id]
        ])->first();

        if($brands){
            return redirect()->back()->with('error', "Brand already exist");
        }

        $save = Brand::where('id', $request->brand_id)->update([
            'name' => $request->name,
            'category_id' =>$request->category_id
        ]);

        return redirect()->route('showCarLists')->with('message', 'Brand modified successfully');
    }

    public function deletebrandcar(){
        $brands = Brand::all();
        return view('crudBrandView.deleteBrand', compact('brands'));
    }

    public function senddeletebrandcar(Request $request){
        $request->validate([
            'brand_id' => 'required'
        ]);

        $save = Brand::where('id', $request->brand_id)->delete();

        return redirect()->route('showCarLists')->with('message', 'Brand deleted successfully');
    }
}
