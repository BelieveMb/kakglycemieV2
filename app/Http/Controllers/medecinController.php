<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DoctorModel;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class medecinController extends Controller
{
    //login
    public function addDoctor(Request $request){
        $request->validate([
            'nomMed' =>'required|min:4',
            'telMed' =>'required|unique:medecin',
            'password' => ['required', 'confirmed', 'min:8'],
            'hopital' => 'required',
            
        ]);

        //Insert query
        $query = DB::table('medecin')->insert([
            'idmedecin'=>random_int(10, 2558),
            'nomMed'=>$request->input('nomMed'),
            'sexeMed'=>$request->input('sexeMed'),
            'telMed'=>$request->input('telMed'),
            'password' => Hash::make($request->password),

            'hopital'=>$request->input('hopital'),
            'avatarMed'=>$request->string('null'),
            'valider'=>$request->string('non'),
        ]);

        //message de confirmation
        if($query){
            // return back()->with('success', 'tout est okay');
            return to_route('Medecin.dashboard');
        }else{
            return back()->with('error', 'Désolé, il y\' a une erreur ');
        }
    }
    public function dashboardMedecin(){
        $patientList = DB::table('users')->get();

        return view('Medecin.ListMedecin',
            ['patientList'=>$patientList]
        );
    }

    public function logoutMedecin(Request $request): RedirectResponse {
       //la deconnexion de l'user
       Auth::logout();  
    
       $request->session()->invalidate();
   
       $request->session()->regenerateToken();
   
       return redirect()->route('doctorName');
    }

    public function profilMedecin(){
        $idmedecin = auth()->id();
        $infosUser = User::
            where('id', $idmedecin)
            ->first();

        $infosDoctor = DoctorModel::
            where('idmedecin', $idmedecin)
            ->first();
        
        return view('Medecin.ProfilMedecin', [
            'infosDoctor' => $infosDoctor,
            'infosUser' => $infosUser,
            'idmedecin' => $idmedecin
        ]);
    }
    public function updateProfilMedecin(Request $request): RedirectResponse
    {        
        $idmedecin = auth()->id();
        
        $request->validate([
            'ordreMed' => 'required',
            'hopital' => 'required|string|max:50',
            'specialite' => 'required|string|max:100|min:5',
            'description' => 'required|string|min:10'
        ]);
    
        
        if ($request->hasFile('pdf')) {
            $ordreMed = $request->file('ordreMed');
            $ordreMedName = $idmedecin . '.pdf';
            $ordreMed->storeAs('public/pdf/ordreMedecin',$ordreMedName);
            
            $hopital = $request->input('hopital');
            $specialite = $request->input('specialite');
            $description = $request->input('description');

            // Mettre à jour l'enregistrement du médecin
            $query  = DB::table('medecin')
                    ->where('idmedecin', $idmedecin)
                    ->update([
                        'ordreMed' => $ordreMedName,
                        'hopital' => $hopital,
                        'specialite' => $specialite,
                        'description' => $description
                    ]);

            // Rediriger avec message de confirmation
            if($query){
                return back()->with('success', 'Profil modifié avec succès!');
            }else{
                return back()->with('fail','Profil non modifié, recommencez ');
            }
        }
        return back()->with('fail','Profil non modifié, Vous devez envoyé un fichier .pdf ');

    } 
    public function contactKaK(){
        return view('Medecin.KakAdmin');
    }    
    public function contactSendMessage(Request $request){
        $idmedecin = auth()->id();
        
        $request->validate([
            'nom' => 'required|min:3',
            'message' => 'required'
        ]);
        $nom = $request->input('nom');
        $message = $request->input('message');
        //créer la table pour ça
         $query  = DB::table('contact')
         ->where('idmedecin', $idmedecin)
         ->insert([
             'iduser' => $idmedecin,
             'nom' => $nom,
             'message' => $message,
         ]);

        // Rediriger avec message de confirmation
        if($query){
            return back()->with('success', 'Votre message est envoyé avec succès !');
        }else{
            return back()->with('fail','Erreur, recommencez ');
        }

    }


}
