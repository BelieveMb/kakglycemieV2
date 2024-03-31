<?php

namespace App\Http\Controllers;

use App\Models\AddMedecin;
use App\Models\DoctorModel;
use App\Models\FriendsModel;
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
        //select * les medecins qui choisit par le patient
        $doctorFriends = DB::table('suivi')
            ->where('suivi', 'oui')
            ->where('idpatient', $idpatient)
            ->join('users','users.id', '=' ,'suivi.idmedecin')
            ->join('medecin','medecin.idmedecin', '=' ,'suivi.idmedecin')
            ->get();


        return view('Patient.myDoctorList', [
            'doctorFriends' => $doctorFriends
        ]);
    }

    //bon à savoir #
    # cette partie est à revoir pour l'instant on affiche la liste de médecin et
    # le patient voit le détail pour donner la permission
    public function addDoctorVue(Request $request){
        $idpatient = auth()->id();
        $doctorNotFriends = DB::table('medecin')
            ->join('users','users.id', '=' ,'medecin.idmedecin')
            ->where('valider', 'oui')
            ->get();

        return view('Patient.doctorAdd', [
            'doctorNotFriends' => $doctorNotFriends,
        ]);
    }
    public function detailDoctor(Request $request){
        $idmedecin = $request->doctor;

        $detailMedecin = DoctorModel::
            where('idmedecin', $idmedecin)
            ->join('users','users.id','=', 'idmedecin')
            ->first();
        
        if($detailMedecin){
            return view('Patient.doctorDetail', ['detailMedecin' => $detailMedecin]);
        }else{
            return back()->with('fail','Une erreur s\'est produite, ressayer');
        }
    }
    public function addSuiviDoctor(Request $request){
        
        $request->validate([
            'idpatient'=>"required|numeric|max:5",
            'idmedecin'=>"required|numeric|max:5",
            'suivi'=>"required|max:3",
        ]);
        $idmedecin = $request->doctor;
        $idpatient = auth()->id();
        $suivi = $request->input('suivi');

            $doSuivi = DB::table('suivi')->insert([
                "idpatient"=>$idpatient,
                "idmedecin"=>$idmedecin,
                "suivi"=>$suivi
            ]);
        // }else{

        //     return back()->withErrors([
        //         'suiviError'=>'Vous devez accepter ou refuser le suivi de ce médecin',
        //     ])->onlyInput('suiviError');
        // }    
        
        
        if($doSuivi){
            return back()->with('success','Desormais, ce médecin peut suivre votre glycémie');
        }else{
            return back()->with('fail','Une erreur s\'est produite, ressayer');
        }
    }
    
   
    
}
