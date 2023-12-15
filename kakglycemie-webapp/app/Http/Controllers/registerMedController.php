<?php

namespace App\Http\Controllers;


use App\Http\Requests\LoginMedRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class registerMedController extends Controller
{
    function addDoctor(Request $request){
        $request->validate([
            'nomMed' =>'required',
            'telMed' =>'required',
            // 'password' =>'required|password|unique:crud',
        ]);

        $valider = "false";
        //Insert query
        $query = DB::table('medecin')->insert([
            'idmedecin'=>random_int(10, 258),
            'nomMed'=>$request->input('nomMed'),
            'sexeMed'=>$request->input('nomMed'),
            // 'sexeMed'=>$request->$valider,
            'telMed'=>$request->input('telMed'),
            'motdepasse'=>$request->input('password'),
            'infosMed'=>$request->input('infosMed'),
            'avatarMed'=>$request->input('infosMed'),
            'valider'=>$request->input('infosMed'),
            // 'valider'=>$request->$valider,
        ]);

        //message de confirmation
        if($query){
            // return back()->with('success', 'tout est okay');
        // return to_route('auth.login');

            return view('dashboard');
        }else{
            return back()->with('error', 'tout est puff');
        }
    }

    function loginDoctor(LoginMedRequest $request){
        //pour la connexion du medecin
        $credentials = $request->only('telMed','motdepasse');

        if(Auth::attempt($credentials)){ //pour vérifier si le login est bon
            $request->session()->regenerate(); //pour régénérer la session
            return redirect()->intended(route('dashboard')); 
            //pour rediriger vers la page dashboard, intended permet de protèger la route
        }

        return to_route('login')->withErrors()
    }
}
