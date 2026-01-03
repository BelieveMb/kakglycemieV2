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
    public function searchDoctorByName(Request $request){
        $request->validate([
            'searchDoctor' => 'required|max:50',
        ]);
        $searchDoctor = $request->input('searchDoctor');
        $searchResult = User::where('name', 'like', '%' . $searchDoctor . '%') 
            ->join('medecin','medecin.idmedecin', '=' ,'users.id')
            ->where('valider', 'oui')
            ->get();

        $doctorNotFriends = $searchResult;
        return view('Patient.doctorAdd',[
            'doctorNotFriends' => $doctorNotFriends
        ]);
    }
    function dashboardForm(){
        $idpatient = auth()->id();
        $lastTaux = patientModel::where('idpatient', $idpatient)->orderByDesc('jour')
                    ->first();

        $lastRecords = patientModel::where('idpatient', $idpatient)
            ->orderByDesc('jour', 'desc')
            ->take(10)
            ->get();
        // $chart_options = [
        //     'chart_title' => 'Taux de glycémie',
        //     'report_type' => 'group_by_string',
        //     'model' => 'App\Models\patientModel',
        //     'group_by_field' => 'jour',
        //     'where_raw' => 'idpatient ='.$idpatient,
        //     'aggregate_function' => 'avg',
        //     'aggregate_field' => 'taux',
        //     'chart_type' => 'line',
        // ];
        //  $chart = new LaravelChart($chart_options);
        // return view("Patient.patientDash", compact('chart'),[ 'lastTaux'=>$lastTaux]);

        $jours = $lastRecords->pluck('jour')->reverse()->values()->toArray(); // Récupérer les jours sous forme de tableau
        $tauxGlycemie = $lastRecords->pluck('taux')->reverse()->values()->toArray(); // Récupérer les taux sous forme de tablea4
        return view("Patient.patientDash", compact('jours', 'tauxGlycemie'), ['lastTaux' => $lastTaux, 'tauxGlycemie' =>$tauxGlycemie]);    
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

        // $maDate = date('d-m-Y, H:i'); 
        $maDate = $request->input('dateTrait');

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
        $dateTraitement = $request->input('dateTraitement');
        
        // Check for search input
        if ($dateTraitement) {
            $dateSearch = date("d-m-Y", strtotime($dateTraitement));
            $traitementList = patientModel::
            where('idpatient', $idpatient)
            ->where('datetrait', 'like', '%' . $dateSearch . '%')
            ->get();
        } else {
            $traitementList = patientModel::
             where('idpatient', $idpatient)
             ->orderByDesc('jour')
             ->paginate(10);
            $traitementList->withPath('/', [
                'idpatient'=>$idpatient,
            ]);
            
        }

        return view('Patient.statistiqueGlycemie', [ 
            'traitementList' => $traitementList,            
        ]);
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
    public function aproposDoctor(Request $request){
        $idmedecin = $request->doctor;

        $detailMedecin = DoctorModel::
            where('idmedecin', $idmedecin)
            ->join('users','users.id','=', 'idmedecin')
            ->first();
        $suiviList = DB::table('suivi')
            ->where('idmedecin', $idmedecin)
            ->first();
        
        if($detailMedecin){
            return view('Patient.doctorDetail', [
                'detailMedecin' => $detailMedecin,
                'suiviList' => $suiviList,
            ]);
        }else{
            return back()->with('fail','Une erreur s\'est produite, ressayer');
        }
    }
    public function suiviDoctor(Request $request){
        $validatedData = $request->validate([
            'idmedecin'=> ["required", 'max:5'],
            'choix'=>"required|in:oui,non",
        ]);

        $idpatient = auth()->id();
        $idmedecin = $request->input('idmedecin');
        $suivi = $validatedData['choix'];
    
        $query = DB::table('suivi')->updateOrInsert(
            ['idpatient' => $idpatient, 'idmedecin' => $idmedecin],
            ['suivi' => $suivi]
        );
        //éviter d'enregistrer deux fois la meme infos updateOrInsert

        if($query){
            if ($suivi == "oui") {
                return back()->with('success','Desormais, ce médecin peut suivre votre glycémie');
            }else {
                return back()->with('success','Desormais, ce médecin ne peut plus suivre votre glycémie');
            }
        }else{
            return back()->with('fail','Une erreur s\'est produite, ressayer');
        }
    }
    
    public function signalerDoctor(Request $request) {
        $validatedData = $request->validate([
            // 'doctor'=> ["required", 'max:5'],
            'signaler'=>"required|max:25",
        ]);
        $idmedecin = $request->doctor;
        $idpatient = auth()->id();
        $signaler = $request->input("signaler");


        $doSignalement = DB::table('suivi')
            ->where('idpatient', $idpatient)
            ->where('idmedecin', $idmedecin)
            ->update([
                "signaler"=>$validatedData['signaler']
            ]);

        if($doSignalement){
                return back()->with('success','Nous avons récu votre demande avec succès');
            }else{
                return back()->with('fail','Une erreur s\'est produite, ressayer');
            }
    

    }

    public function supprimerDoctor(Request $request) {

        $deleteDoctor = DB::table('signaler')
        ->delete("idmedecin"); // à corriger
        
        if($deleteDoctor){
                return back()->with('success','Desormais, ce médecin ne peut plus suivre votre glycémie');
            }else{
                return back()->with('fail','Une erreur s\'est produite, ressayer');
            }
    

    }
   
    
}
