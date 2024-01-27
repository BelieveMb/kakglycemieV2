<?php

namespace App\Http\Controllers;

use App\Models\patientModel;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $request->validate([
            'idpatient'=>"required",
            'taux'=>"required|min:2|max:3",
            "traitement"=>"required",
        ]);

        $idpatient = $request->input('idpatient');
        //recupere du patient
        $dataJour = DB::table('traitement2')->where('idpatient', $idpatient)->orderByDesc('idtraitement')->value('jour');

        $maDate = date('d-m-Y, H:i'); 
        $jour = $dataJour + 1;

        $query =  DB::table('traitement2')->insert([
            "idpatient"=>$idpatient,
            "jour"=>$jour,
            "taux"=>$request->input('taux'),
            "traitement"=>$request->input('traitement'),
            "datetrait"=>$maDate,

        ]);

        if($query){
            return back()->with('success','Taux ajouté avec succès');
        }else{
            return back()->with('fail','Taux non ajouté');
        }

    }

    public function statistiqueGlycemie(Request $request)
    {
        $idpatient = auth()->id();

        $traitementList = patientModel::where('idpatient', $idpatient)->get();
        return view('Patient.statistiqueGlycemie', ['traitementList' => $traitementList ]);
    }

    public function patientProfile(Request $request)
    {
        $idpatient = auth()->id();
        $infoPatient = User::
            where('id', $idpatient)
            ->first();

        $lastTraitement = patientModel::
            where('idpatient', $idpatient)
            ->latest('jour')
            ->first();
        
        return view('Patient.patientProfile', ['lastTraitement' => $lastTraitement, 'infoPatient' => $infoPatient ]);
    }
    
    public function patientChat(){
        return view('Patient.patientChat');
    }
   
    
}
