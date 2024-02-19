<?php

namespace App\Http\Controllers;


use App\Http\Requests\LoginMedRequest;
use App\Models\DoctorModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class registerMedController extends Controller
{
    function addDoctor(Request $request){
        $request->validate([
            'nomMed' =>'required|min:4',
            'telMed' =>'required|unique:medecin',
            // 'password' =>'required|password|min:8',
            'password' => ['required', 'confirmed', 'min:4'],

            'hopital' => 'required',
            
        ]);

        //Insert query
        $query = DB::table('medecin')->insert([
            'idmedecin'=>random_int(10, 2558),
            'nomMed'=>$request->input('nomMed'),
            'sexeMed'=>$request->input('sexeMed'),
            'telMed'=>$request->input('telMed'),
            'password' => Hash::make($request->password),

            'hopital'=>$request->input('hopital'),
            'avatarMed'=>$request->string('null'),
            'valider'=>$request->string('no'),
        ]);

        //message de confirmation
        if($query){
            // return back()->with('success', 'tout est okay');
            return to_route('Medecin.dashboard');
            // return to_route('login');
            // return view('doctorName');
        }else{
            return back()->with('error', 'tout est puff');
        }
    }
    public function loginDoctor(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'telMed' => 'required|max:15',
            'password' => 'required',
        ]);
        // Auth::setModel(DoctorModel::class);

        // Auth::guard('web')->setProvider(new \Illuminate\Auth\EloquentUserProvider($app['hash'], DoctorModel::class)); // Spécifiez le modèle Medecin comme fournisseur d'utilisateurs
    
        Auth::guard('web')->provider('medecin', function($app, array $config) {
            return new DoctorModel(); // Spécifiez le modèle Medecin comme fournisseur d'utilisateurs
        });
        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('Medecin.dashboard')); 

        }
 
        return back()->withErrors([
            'main' => 'Erreur, votre numéro de téléphone ou votre mot de passe est incorrect.',
        ])->onlyInput('main');
    }

    public function logoutDoctor(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }

    

}
