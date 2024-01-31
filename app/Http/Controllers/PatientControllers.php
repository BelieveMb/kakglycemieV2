<?php

namespace App\Http\Controllers;

use App\Models\AddMedecin;
use App\Models\DoctorModel;
use App\Models\patientModel;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class PatientControllers extends Controller
{
    //fct show dashboard
    function dashboardForm(){
        // $lastTaux = patientModel::
        //     where('idpatient', $idpatient)
        //     ->orderBy('jour', 'desc')
        //     ->first();
        // $lastTaux = DB::table('traitement2')->where('idpatient', $idpatient)->orderByDesc('idtraitement')->get();
        $idpatient = auth()->id();
        $lastTaux = patientModel::where('idpatient', $idpatient)->orderByDesc('jour')->first();


        $chart_options = [
            'chart_title' => 'Taux de glycémie',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\patientModel',
            'group_by_field' => 'jour',
            'where_raw' => 'idpatient ='.$idpatient,
            'aggregate_function' => 'avg',
            'aggregate_field' => 'taux',
            'chart_type' => 'line',
        ];
        $chart = new LaravelChart($chart_options);
        return view("Patient.patientDash", compact('chart'),[ 'lastTaux'=>$lastTaux]);
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

    public function patientMedecinList(){
        $doctorList = DoctorModel::all();
        return view('Patient.doctorAdd', ['doctorList' => $doctorList]);
    }

    public function addNewDoctor(Request $request){
        $idpatient = auth()->id();
        $idmedecin = $request->doctor;

        $query =  DB::table('amisChat')->insert([
            "idpatient"=>$idpatient,
            "idmedecin"=>$idmedecin
        ]);

        
        // if ($query) {
        //     return response()->json(['success' => true]);
        // } else {
        //     return response()->json(['success' => false]);
        // }

        if($query){
            // return view('Patient.patientChat');
            return redirect('patient/patientChat');
        }else{
            return back()->with('fail','Ajouter');
        }
    }
    
   
    
}
