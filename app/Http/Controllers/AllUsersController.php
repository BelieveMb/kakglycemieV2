<?php

namespace App\Http\Controllers;

use App\Models\AllUsers;
use App\Models\User;
use DB;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    public function registerVue(){
        return view('auth.registerUser');
    }
     public function userRegister(Request $request)
     {
        $request->validate([
            'name' => ['required', 'max:255' ],
            'sexe' => 'required|in:Masculin,Feminin' ,
            'email' => ['required', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required', 'unique:'.User::class, 'min:10','max:15'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        
        $user = User::create([
            'name' => $request->name,
            'sexe' => $request->sexe,
            'email' => $request->email,
            'phone' => $request->phone,
            'type' => $request->type,
            'password' => Hash::make($request->password),
        ]);

        if($user){
            event(new Registered($user));
            Auth::login($user);
            return to_route('login');
        }else{
            return back()->withErrors("une erreur, veuillez recommencez");
            // withErrors([
            //     'email'=>'cet adresse mail est déjà utilisé',
            //     'telPat' => 'ce numéro est incomplet',
            // ]);

        }
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
