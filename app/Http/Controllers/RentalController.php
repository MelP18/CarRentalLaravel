<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Brand;
use App\Models\Modal;
use App\Models\Rental;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class RentalController extends Controller
{
    public function addRentals(){
        $customer = Customer::all();
        $cars = Car::all();
        $brands = Brand::all();
        $modals = Modal::all();
        return view('rentalView.add-rentals', compact('customer', 'cars', 'brands', 'modals'));

    }

    public function rental(){

        $customer = Customer::all();
        $cars = Car::all();
        $brands = Brand::all();
        $modals = Modal::all();
        $rental = Rental::with('cars')->get();
        //$rental = Customer::with("rentalcar")->has("rentalcar")->get();
        //dd($rental);
        //$rentals = Rental::with('customer', 'car', 'brands','modals')->get();
        //dd($customer);    
        
        return view('rentalView.rental', compact('customer', 'cars', 'brands', 'modals', 'rental'));
    }

    public function show($id){
        $car = Car::find($id);
        $carModal = $car->modalContent;
        $rental = Rental::all();
        //dd($car);
        return view('carView.showCar', compact('car', 'carModal', 'rental'));
    }

    public function storeRental(Request $request){
        $data = $request->all();
        //dd($data);
       
        $request->validate([
            'customer_id' => 'required',
            'car_id' => 'required',
            'car_release_date' => 'required',
            'expected_return_date' => 'required|date',
            'effective_return_date' => 'nullable',
            'observations' => 'nullable',

        ]);
        //dd($request);

        $save = Rental::create([
        'customer_id' => $request->customer_id,
        'car_id' => $request->car_id,
        'car_release_date' => $request->car_release_date,
        'expected_return_date' => $request->expected_return_date, 
        /*'effective_return_date' => $request->effective_return_date,
        'observations' => $request->observations,*/
    ]);
    //dd($save);
        
    
        return redirect()->route('rental')->with('message', 'Location ajoutée avec sucèss');


    }

    public function modify($id)

    {
        $data = Rental::find($id);
        $customer = Customer::all();
        $cars = Car::all();
        $brands = Brand::all();
        $modals = Modal::all();
        $rental = Rental::find($id);

        return view('rentalView.edit-rentals', compact('id', 'customer','data','cars', 'brands', 'modals', 'rental'));
    }


    public function updated(Request $request, $id)
    {
        $data = $request -> all();
        $request->validate([
            'effective_return_date' => 'required|date',
        ]);
    
        $rental = Rental::find($id);
    
        $effectiveReturnDate = Carbon::parse($request->input('effective_return_date'));
    
        $expectedReturnDate = $rental->expected_return_date;
    
        if ($effectiveReturnDate->lte($expectedReturnDate)) {
            $status = 'Délai respecté';
        } else {
            $status = 'Délai non respecté';
        }
    
        $rental->effective_return_date = $effectiveReturnDate;
        $rental->status = $status;
        $rental ->observations = $data['observations'];        
        $rental->save();

        
        return redirect()->route('rental')->with ("message", "Location mis à jour avec succès");
    }
}