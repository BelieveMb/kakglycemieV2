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

        
        
        $iduser = random_int(3, 2998);
        $user = User::create([
            'name' => $request->name,
            'sexe' => $request->sexe,
            'email' => $request->email,
            'phone' => $request->phone,
            'type' => $request->type,
            'password' => Hash::make($request->password),
        ]);

        if($user){
            $type = $request->input('type');
            if($type=="patient"){
                //add patient
                $maDate = date('d-m-Y, H:i'); 
                $query = DB::table('patient')->insert([
                    'idpatient'=>$iduser,
                    'datePat'=>$maDate,
                ]);
            }else{
                //  dd medecin
                $valider = 'non';
                $query = DB::table('medecin')->insert([
                    'idmedecin'=>$iduser,
                    'valider'=>$valider,
                ]);
                return to_route('Medecin.dashboard');
            }
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
    public function loginUserVue(){
        return view('auth.loginUser');
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->validate([
            'phone' => 'required|max:15',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
    
            if($user->type == 'patient') {
                return redirect()->route('Patient.dashboardForm');
            } else {
                return redirect()->route('Medecin.dashboard');
            }
            // return redirect()->intended(route('Medecin.dashboard')); 
        }
        return back()->withErrors([
            'mainError' => 'Erreur, votre numéro de téléphone ou votre mot de passe est incorrect.',
        ])->onlyInput('mainError');

    }

    public function logoutUser(Request $request): RedirectResponse
    {
        //la deconnexion de l'user
        Auth::logout();  
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect()->route('accueilName');
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
