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

  
    function AddTauxTraitement(Request $request){
        $request->validate([
            'idpatient'=>"required",
            'taux'=>"required|min:2|max:3",
            "traitement"=>"required",
        ]);

        $idpatient = $request->input('idpatient');
        //recupere du patient
        $dataJour = DB::table('traitement2')
                    ->where('idpatient', $idpatient)
                    ->orderByDesc('idtraitement')
                    ->value('jour');

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
        $doctorList = DoctorModel::all();
        return view('Patient.patientChat', ['doctorList' => $doctorList]);

    }

    public function patientMedecinList(){
        $idpatient = auth()->id();
        //select * les medecins qui sont dans la table friends where id = à ce patient
        $doctorFriends = DB::table('friends')
            ->where('idpatient', $idpatient)
            ->join('medecin', 'friends.idmedecin', '=', 'medecin.idmedecin')  
            ->join('users', 'medecin.idmedecin', '=', 'users.id')  
            ->get();
        return view('Patient.myDoctorList', [
            'doctorFriends' => $doctorFriends
        ]);
    }

    //bon à savoir #
    # l'ajout et le retrait de médecin se feront à la fin, après avoir fini avec
    # l"admin part
    public function addDoctorVue(Request $request){
        $idpatient = auth()->id();
        //select * les medecins qui sont pas dans la table friend ou 
        $doctorFriends = DB::table('friends')
            ->where('idpatient', $idpatient)
            // ->join('medecin', 'friends.idmedecin', '=', 'medecin.idmedecin')  
            // ->join('users', 'medecin.idmedecin', '=', 'users.id')  
            ->get();
            //corriger cette requete !!
        
        return view('Patient.doctorAdd', [
            'doctorFriends' => $doctorFriends
        ]);
    }
    public function addDoctor(Request $request){
        $idpatient = auth()->id();
        $idmedecin = $request->doctor;

        $query =  DB::table('friends')->insert([
            "idpatient"=>$idpatient,
            "idmedecin"=>$idmedecin
        ]);

        $detailMedecin = DoctorModel::
            where('idmedecin', $idmedecin)
            ->first();
        
        
        // if ($query) {
        //     return response()->json(['success' => true]);
        // } else {
        //     return response()->json(['success' => false]);
        // }

        if($query){
            return view('Patient.doctorDetail', ['detailMedecin' => $detailMedecin]);
        }else{
            return back()->with('fail','Ajouter');
        }
    }
   
    
}
