<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Rental;
use App\Models\Customer;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function rental(){
        $customer = Customer::all();
        $cars = Car::all();
        $rentals = Rental::with('customer', 'car')->get();
        
        //dd($affectation);
    
        //$students = Etudiants::where('users_id', $id)->paginate(10); // Récupère tous les éléments de la table "students"
        
        return view('rentalView.rental', compact('customer', 'cars', 'rentals'));

    }

    public function store(Request $request){
        $data = $request->all();
        //dd($data);
       
        $request->validate([
            'etudiant_id' => 'required',
            'cours_id' => 'required|array',
        ]);

        $courseIds = $request ->input('cours_id');
       //dd($data);
        
       foreach ($courseIds as $courseId) {
        AffectCours::updateOrcreate([
            "etudiant_id" => $data["etudiant_id"],
            "cours_id" => $courseId,
        ]);
    }
       
            
        
        
        return back();


    }
}