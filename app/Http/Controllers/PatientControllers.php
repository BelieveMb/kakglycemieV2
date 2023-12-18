<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientControllers extends Controller
{
    //fct show dashboard
    function dashboardForm(){
        return view("Patient.patientDash");
    }

    public function logoutPatient(Request $request): RedirectResponse
    {
        //la deconnexion de l'user
        Auth::logout();  
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect()->route('accueilName');
    }

    function AddTauxTraitement(Request $request){
        // $request->validate([
        //     "taux"=>"required",

        // ]);
        // return view("aboutName");
    }

   
    
}
