<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function showcustomerlists(){  
        $table = Customer::paginate(1);
        $ids =  Customer::pluck('id');
      
          return view('customerView.customerList', compact("table"));
    }
    public function addCustomer(){

        return view("customerView.addCustomer");
    }

    public function storecustomer(Request $request){

        $file = $request->file('photo');
        $images=null;
        if($request->hasFile("photo")){
            $images =$file->store('avatar');
        }



           $validation =$request->validate([
            "nom" => "required|min:2",
            "prenom" =>"required|min:2",
            'email' => array(
                'required',
                "regex:/^[\w\-\.]+@([\w\-]+\.)+[\w\-]{2,4}$/"

            ),
        
            "adresse" => "required",
            "cni" => "required|min:9",
            "tel"  => "required|min:8",
            "photo"=>"required",
           ]);


        $data = $request->all();
        $save = Customer::create([
         "nom" => $data['nom'],
         "prenom"=> $data ['prenom'],
         "email" => $data['email'],
         "adresse"=> $data ['adresse'],
         "tel" => $data['tel'],
         "cni"=>$data['cni'],
         'photo'=>$images,
        ]);

        return redirect()->route('addCustomer')->with ("message","  The customer has been successfully registered !");
     }
}