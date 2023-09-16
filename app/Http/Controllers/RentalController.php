<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Brand;
use App\Models\Modal;
use App\Models\Rental;
use App\Models\Customer;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function rental(){
        return view('rentalView.rental');

    }

    public function addRentals(){

        $customer = Customer::all();
        $cars = Car::all();
        $brands = Brand::all();
        $modals = Modal::all();
        //$rentals = Rental::with('customer', 'car', 'brands','modals')->get();
        //dd($customer);    
        
        return view('rentalView.add-rentals', compact('customer', 'cars', 'brands', 'modals'));
    }

    public function storeRental(Request $request){
        $data = $request->all();
        //dd($data);
       
        $request->validate([
            'customer_id' => 'required',
            'car_id' => 'required',
            'car_release_date' => 'required',
            'expected_return_date' => 'required',
            'effective_return_date' => 'required',
            'observations' => 'required',

        ]);
        //dd($request);

        $save = Rental::create([
            'customer_id' => $request->customer_id,
            'car_id' => $request->car_id,
            'car_release_date' => $request->car_release_date,
            'expected_return_date' => $request->expected_return_date,
            'effective_return_date' => $request->effective_return_date,
            'observations' => $request->observations,
        ]);
    
        return back();


    }
}