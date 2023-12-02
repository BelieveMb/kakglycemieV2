<?php

namespace App\Http\Controllers;

use App\Models\AllUsers;
use Illuminate\Http\Request;

class AllUsersController extends Controller
{
    
    public function index()
    {
        //la route pour la page d'accueil
        return view('AllUsers.index', ["title"=>"Accueil"]);
    }

    
    public function patient()
    {
        //for patient
        return view('AllUsers.patient', ["title"=>"patient"]);
    }

    public function doctor()
    {
        //for patient
        return view('AllUsers.doctor', ["title"=>"doctor"]);
    }
    public function about()
    {
        //for patient
        return view('AllUsers.about', ["title"=>"à propos de nous"]);
    }
   
    public function store(Request $request)
    {
        //
    }


    public function show(AllUsers $allUsers)
    {
        //
    }


    public function edit(AllUsers $allUsers)
    {
        //
    }

   
    public function update(Request $request, AllUsers $allUsers)
    {
        //
    }

 
    public function destroy(AllUsers $allUsers)
    {
        //
    }
}
