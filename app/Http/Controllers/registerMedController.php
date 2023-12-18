<?php

namespace App\Http\Controllers;


use App\Http\Requests\LoginMedRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class registerMedController extends Controller
{
    function addDoctor(Request $request){
        $request->validate([
            'nomMed' =>'required',
            'telMed' =>'required|unique:medecin',
            // 'password' =>'required|password|unique:crud,
        ]);

        //Insert query
        $query = DB::table('medecin')->insert([
            'idmedecin'=>random_int(10, 258),
            'nomMed'=>$request->input('nomMed'),
            'sexeMed'=>$request->input('nomMed'),
            'telMed'=>$request->input('telMed'),
            'password' => Hash::make($request->password),

            'infosMed'=>$request->input('infosMed'),
            'avatarMed'=>$request->input('infosMed'),
            'valider'=>$request->input('nomMed'),
        ]);

        //message de confirmation
        if($query){
            // return back()->with('success', 'tout est okay');
            // return to_route('Patient.dashboardForm');
            return to_route('login');
            // return view('doctorName');
        }else{
            return back()->with('error', 'tout est puff');
        }
    }
    public function loginDoctor(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'telMed' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            // return redirect()->intended('dashboardForm');
            return redirect()->intended(route('Patient.dashboardForm')); 

        }
 
        return back()->withErrors([
            'main' => 'The provided blabla do not match our records.',
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
