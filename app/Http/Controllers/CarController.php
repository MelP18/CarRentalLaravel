<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Category;
use App\Models\Modal;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function showCarLists(){
        $cars = Car::all();
        return view('carView.carList', compact('cars'));
    }


    public function addcar(){
        $categories = Category::all();
        $brands = Brand::all();
        $modals = Modal::all();
        return view('carView.addCar', compact('categories', 'brands','modals'));
    }

    public function sendcaradd(Request $request){
       $validation =  $request->validate([
            'image' => "required",
            'gearboxes' => "required",
            'power' => "required",
            'number_door' => "required",
            'fuel' => "required",
            'number_cylinder' => "required",
            'valve' => "required",
            'maximum_speed' => "required",
            'body_shop' => "required",
            'transmission' => "required",
            'brake' => "required",
            'acceleration' => "required",
            'color' => "required",
            'modal_id' => "required"
        ]);


        if($request->image[0]){
            $mainly_picture = Storage::disk()->put('mainly_pictures',$request->image[0]);
        };

        if($request->image[1]){
            $secondary_picture = Storage::disk()->put('secondary_pictures',$request->image[1]);
        };

        if($request->image[2]){
            $tertiary_picture = Storage::disk()->put('tertiary_pictures',$request->image[2]);
        };

        //dd($picture);
        $save = Car::create([
            'mainly_image' => $mainly_picture,
            'secondary_image' =>  $secondary_picture,
            'tertiary_image' => $tertiary_picture,
            'gearboxes' => $request->gearboxes,
            'power' => $request->power,
            'number_door' => $request->number_door,
            'fuel' => $request->fuel,
            'number_cylinder' => $request->number_cylinder,
            'valve' => $request->valve,
            'maximum_speed' => $request->maximum_speed,
            'body_shop' => $request->body_shop,
            'transmission' => $request->transmission,
            'brake' => $request->brake,
            'acceleration' => $request->acceleration,
            'color' => $request->color,
            'modal_id' => $request->modal_id 
        ]) ;
    
        return redirect()->route('showCarLists')->with('message', 'Voiture ajoutée avec sucèss');
    }
   
}
