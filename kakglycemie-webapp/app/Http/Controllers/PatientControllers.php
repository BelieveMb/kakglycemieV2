<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientControllers extends Controller
{
    //fct show dashboard
    function dashboardForm(){
        return view("Patient.patientDash");
    }

    function AddTauxTraitement(Request $request){
        // $request->validate([
        //     "taux"=>"required",

        // ]);
        // return view("aboutName");
    }

   
    
}
