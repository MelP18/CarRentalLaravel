<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function showcustomerlists(){  
        $table = Customer::paginate(4);
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
       
        /* $customer = Customer::where([
            "nom", $data['nom'],
            "prenom", $data ['prenom'],
            "email", $data['email'],
            "adresse", $data ['adresse'],
            "tel", $data['tel'],
            "cni", $data['cni'],
        ])->first();

        if(!$customer){ */
            $save = Customer::create([
                "nom" => $data['nom'],
                "prenom"=> $data ['prenom'],
                "email" => $data['email'],
                "adresse"=> $data ['adresse'],
                "tel" => $data['tel'],
                "cni"=> $data['cni'],
                'photo'=> $images,
               ]);
        /* }else{
            return redirect()->route('showCustomerLists')->with("message","  The customer alredady exists !");
        } */

        return redirect()->route('showCustomerLists')->with("message","  The customer has been successfully registered !");
     }


    public function showcustumer($id){
        $customer=Customer::find($id);
        $lenght = Customer::all();
        $ide =  Customer::all();
        return view('customerView.addCustomer', compact("customer","id", 'ide',"lenght" ));
     }


    public function getcustomer($ids){
        $item = Customer::find($ids);
        return view('customerView.addCustomer',compact('item','ids'));
     }


    public function customerupdate(Request $request, $ids){
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
        ]);


        $item = Customer::find($ids);
        $item->nom = $request->input('nom');
        $item->prenom = $request->input('prenom');
        $item->tel = $request->input('tel');
        $item->email= $request->input('email');
        $item->adresse= $request->input('adresse');
        $item->cni= $request->input('cni'); 
        $item->save();

        return redirect()->route('showCustomerLists')->with('message', ' Customer upgrade with success ');
    }
     

    public function deletecustomer(Request $request,$id){
        $data =$request->all();
        Customer::where("id",$id)->delete();
        return redirect()->route('showCustomerLists')->with ("message"," Customer delete with success !");

    }
}