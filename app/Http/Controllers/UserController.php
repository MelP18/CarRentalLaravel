<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
    /*===========++++> OUVERTURE DE LA PAGE
    DE D'INSCRIPTION <+++===========*/
    public function signup(){
        return view('authentificationView.signUp');
    }



    /*===========++++> OUVERTURE DE LA PAGE
    DE CONNEXION <+++===========*/
    public function login(){
        return view('authentificationView.logIn');
    }



    /*=========+++> VERIFICATION DES SYNTHAXE ET ENVOI
   DU MAIL POUR OUVERTURE DE LA PAGE DE CONNEXION <+++========*/
    public function sendsignup(Request $request){
        $data = $request->all();

        $request->validate([
            "surname" => "required |min:3",
            "firstname" => "required |min:3",
            'email' => 'required |unique:users|regex:/^[\w\-\.]+@([\w\-]+\.)+[\w\-]{2,4}$/',
            'password' => array(
                'required',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%?&#^_;:,])[A-Za-z\d@$!%?&#^_;:,]{8,}$/',
                'confirmed:password_confirmation'
            ),
        ]);

        $save = User::create([
            'surname' => $data['surname'],
            'firstname'=> $data ['firstname'],
            'email' => $data['email'],
            'password'=>Hash::make($data['password'])
        ]);
        //dd($data);

        $url = URL::temporarySignedRoute(
            'sendSignUpMail', now()->addMinute(30),['email'=> $data['email']]
        );


        Mail::send('authentificationView.SignUpMail',['url'=> $url],function($message ) use ($data){
            $config = config('mail');
            $name = $data['surname'].' '.$data ['firstname'];
            $message-> subject('Registration!')
                    ->from($config ['from']['address'], $config['from']['name'])//on va yrevenir
                    ->to($data['email'], $name);
        });

        return redirect()->back()->with('message',' Email envoyé! Veuillez confirmer pour activer votre compte !');
    }

   

    /*=========+++> VERIFICATION DU USER ET DU TEMPS AVANT L'OUVERTURE DE LA
    PAGE DE CONNEXION<+++========*/
    public function sendsignupmail(Request $request, $email){
        $user = User::where('email', $email)->first();
        if(!$user){
            abort(404);
        }
        //dd($user->id_user);

        if(!$request->hasValidSignature()){
            abort(404);
        }

        $user->update([
            /* 'id_user' => $user->id_user, */
            'email_verified_at' => now(),
            'email_verified' => true
        ]);

        return redirect()->route('logIn')->with('message', 'Compte activé avec succès');
    }



    /*=========+++> OUVERTURE DE LA PAGE D'ACCUEIL APRÈS 
    VERIFICATION DE L'EXISTENCE DES INFORMATIONS DANS LA 
    BASE DE DONNÉE<+++========*/
    public function sendlogin(Request $request){
        $request->validate([
            'email' =>'required',
            'password' => 'required',
        ]);
        
        $user = Auth::attempt([
            'email' =>$request->email,
            'password' => $request->password,
            'email_verified' => true,
        ]);

        if(!$user){
            
            return redirect()->back()->with('error', 'Email/Mot de Passe invalid');
        }

        return redirect()->route('showCustomerLists');
    }



    /*=========+++> OUVERTURE DE LA PAGE POUR INSERTION 
    DE MAIL POUR VERIFICATION <+++========*/
    public function  verifyemail(){
        return view('modifyPasswordView.verifyEmail');
    }



    /*=========+++> VERIFICATION DE L'EXISTENCE DU MAIL 
    DANS LA BASE DE DONNÉE ET ENVOI DU MAIL POUR OUVERTURE 
    DE LA PAGE DE CHANGEMENT DE MOT DE PASSE <+++========*/
    public function sendforverifyemail(Request $request){
        $data = $request->all();
        
        $request->validate([
            'email' => 'required |regex:/^[\w\-\.]+@([\w\-]+\.)+[\w\-]{2,4}$/',
        ]);

        $email = $request->email;
        $user = User::where('email', $email)->first();
        //dd($data);

        if(!$user){
            return redirect()->back()->with('error', 'E-mail invalid!');

        }else{


            $url = URL::temporarySignedRoute(
                'modifyPassword', now()->addMinute(30),['email'=> $data['email']]
            );

            
            Mail::send('modifyPasswordView.changePasswordMail',['url'=> $url],function($message ) use ($data){
                $config = config('mail');
                $message-> subject('Modification du Mot de Passe !')
                        ->from($config ['from']['address'], $config['from']['name'])//on va yrevenir
                        ->to($data['email'] );
    
            });
            return redirect()->back()->with('message', 'E-mail envoyé! Veuillez valider la modification de votre Mot de passe par E-mail');

        }; 
    }



    /*=========+++> VERIFICATION DU USER ET DU TEMPS AVANT L'OUVERTURE DE LA
    PAGE DE CHANGEMENT DE MOT DE PASSE <+++========*/
    public function modifypassword(Request $request, $email){
        $data = $request->all();

        $user = User::where('email', $email)->first();
        if(!$user){
            abort(404);
        }

        if(!$request->hasValidSignature()){
            abort(404);
        };

        //dd($email);
        return view('modifyPasswordView.changePassword',compact('email'))->with('message', 'Email Confirmer Vous pouvez modifier votre mot de passe');
    }



    /*=========+++> CHANGEMENT DE MOT DE PASSE <+++========*/
    public function sendformodifypassword(Request $request, $email){
        $user = User::where('email', $email)->first();
        $data = $request->all();
        $request->validate([
            'password' => array(
                'required',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%?&#^_;:,])[A-Za-z\d@$!%?&#^_;:,]{8,}$/',
                'confirmed:password_confirmation'
            )
        ]);

        //$email = $request->email;
        User::where('email', $email)->update([
            'password'=> Hash::make($data['password'])
        ]);

         return redirect()->route('logIn')->with('message', 'Mot de passe modifié avec succès! Vous pouvez vous connecter!'); 
    }
    
}
