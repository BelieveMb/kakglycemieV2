<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class medecinController extends Controller
{
    //
    public function dashboardMedecin(){
        view("Medecin.layout.dashMed");
    }
}
