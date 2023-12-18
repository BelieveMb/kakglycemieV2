<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientControllers extends Controller
{
    //fct show dashboard
    function dashboardForm(){
        return view("Patient.index");
    }
}
