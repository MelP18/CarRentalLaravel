<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Modal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class ModalController extends Controller
{
    
    public function addmodalcar(){
        $brands = Brand::all();
        return view('crudModalView.addModal', compact('brands'));
    }
    
    
    public function sendmodalcar(Request $request){

        /* required|date|before_or_equal:start_date */
        $validate = $request->validate([
            'model_name'=> "required",
            'year' => 'required|before_or_equal:'.Carbon::now()->format('Y'),
            'brand_id' => "required"
        ]);

        $modal = Modal::where([
            ['model_name', $request->model_name],
            ['year', $request->year],
            ['brand_id', $request->brand_id]
        ])->first();

        if(!$modal){
            $save = Modal::create([
                'model_name'=> $request->model_name,
                'year' => $request->year,
                'brand_id'  =>$request->brand_id
            ]);
        }
       
        return redirect()->back()->with('message', "Modèle ajouté avec succès");
    }

    public function modifyModalCar() {
        $modals = Modal::all();
        $brands = Brand::all();
        return view('crudModalView.modifyModal', compact('brands','modals'));
    }

    public function sendModifyModalCar(Request $request){
        $request->validate([
            'modal_id' =>"required",
            'model_name'=> "required",
            'year' => 'required|before_or_equal:'.Carbon::now()->format('Y'),
            'brand_id' => "required"
        ]);

        $modal = Modal::where([
            ['model_name', $request->model_name],
            ['year', $request->year],
            ['brand_id', $request->brand_id]
        ])->first();

        if(!$modal){
            $save = Modal::where('id', $request->modal_id)->update([
                'model_name'=> $request->model_name,
                'year' => $request->year,
                'brand_id'  =>$request->brand_id
            ]);
        }

        return redirect()->route('showCarLists')->with('message', 'Model modify with successful!');
    }


    public function deleteModalCar(){
        $modals = Modal::all();
        return view('crudModalView.deleteModal', compact('modals'));
    }


    public function senddeletemodalcar(Request $request){
        $request->validate([
            'modal_id' => 'required'
        ]);

        $save = Modal::where('id', $request->modal_id)->delete();

        return redirect()->route('showCarLists')->with('message', 'Model delete with successful!');

    }

}
