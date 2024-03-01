<?php

namespace App\Http\Controllers;

use App\Models\AllUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllUsersController extends Controller
{
    
    public function index()
    {
        //la route pour la page d'accueil
        return view('AllUsers.index', ["title"=>"Accueil"]);
    }

    
    public function patient()
    {
        //for patient redirect
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
    public function loginPatient(Request $request): RedirectResponse{
        $credentials = $request->validate([
            'telPat' => 'required|max:15',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('Patient.dashboardForm')); 
        }
        return back()->withErrors([
            'mainError' => 'Erreur, votre numéro de téléphone ou votre mot de passe est incorrect.',
        ])->onlyInput('mainError');
        
    }
    public function loginVuePatient(){
        return view('auth.loginPatient');
    }


    public function loginVueMedecin(){
        return view('auth.loginMedecin');
    }


    public function loginMedecin(Request $request)
    {
        $credentials = $request->validate([
            'telMed' => 'required|max:15',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('Medecin.dashboard')); 
        }
        return back()->withErrors([
            'mainError' => 'Erreur, votre numéro de téléphone ou votre mot de passe est incorrect.',
        ])->onlyInput('mainError');

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
