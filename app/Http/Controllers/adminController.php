<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AgentModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class adminController extends Controller
{
    //
    public function connexionAdminVue(){
        return view("Admin.Connexion");
    }  
    public function connexionAdmin(Request $request){
 
        $credentials = $request->validate([
            'phone' => ['required', 'string'],
            'password' => ['required'],
        ]);
        // check login admina§//
        
        // Récupérer les informations de l'agent à partir de la table "agents" en fonction du numéro de téléphone
        /*$agent = AgentModel::where('phone', $credentials['phone'])->first();
        if ($agent) {
            // Vérifier le mot de passe
            if (Hash::check($credentials['password'], $agent->password)) {
                // Authentifier l'agent
                //Auth::login($agent);
                // L'agent est maintenant authentifié
                return to_route('admin.dashboardAdmin');


            } else {
                // Mot de passe incorrect
                return back()->with('fail', 'Le numero ou le mot de passe est incorrect !');
            }
        } else {
            // Agent non trouvé
            return back()->with('fail', 'Agent non trouvé.');
        }*/
    
    }  
    public function logoutAdmin(Request $request): RedirectResponse
    {
        //la deconnexion de l'user
        Auth::logout();  
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('accueilName');
    }                                   
    public function dashboardAdmin(){
        $listPatientCount = DB::table('patient')->count();
        $listPatient = DB::table('users')
            ->where('type','patient')
            ->get();
        $listCandidatCount = DB::table('medecin')
            ->where('valider', 'non')
            ->count();
        $listMedecinCount = DB::table('medecin')
            ->where('valider', 'oui')
            ->count();

        return view("Admin.layout.dashboard", [
            'listPatient' => $listPatient,
            'listPatientCount' => $listPatientCount,
            'listCandidatCount' => $listCandidatCount,
            'listMedecinCount' => $listMedecinCount,
        ]);
    }  
    public function candidatsList(){
        // selection tous users medecin, et selection tous medecins where
        // valider = non
        $candidats = DB::table('users')
                ->where('type', 'medecin')
                ->join('medecin', 'users.id', '=', 'medecin.idmedecin')  
                ->where('valider','non')
                ->get();
        return view("Admin.candidatList", [
            "candidats" => $candidats
        ]);
    }       
    public function candidatDetail(Request $request){
        $idCandidat = $request->query('candidat');
        $candidatDetails = DB::table('users')
                    ->where('id', $idCandidat)
                    ->join('medecin', 'users.id', '=', 'medecin.idmedecin')  
                    ->first();

        return view('Admin.candidatDetail', [
            'candidatDetails' => $candidatDetails
        ]);
    }      
    
    public function candidatValidation(Request $request){
        $idCandidat = $request->query('candidat');
        $choix = $request->input("choix");
        $maDate = date('d-m-Y, H:i'); 

        $query  = DB::table('medecin')
            ->where('idmedecin', $idCandidat)
            ->update([
                'valider' => $choix,
                'updated_on' => $maDate
            ]);
        
        // Rediriger avec message de confirmation
        if($query){
            return back()->with('success', 'Le candidat est validé avec succès!');
        }else{
            return back()->with('fail','Candidat non validé, recommencez ');
        }
        

    }

    public function medecinList(Request $request){
        $medecinList = DB::table('users')
                ->where('type', 'medecin')
                ->join('medecin', 'users.id', '=', 'medecin.idmedecin')  
                ->where('valider','oui')
                ->get();
        return view("Admin.medecinList", [
            "medecinList" => $medecinList
        ]);

    }

    public function medecinDetail(Request $request){
        $idMedecin = $request->query('medecin');
        $medecinDetails = DB::table('users')
                    ->where('id', $idMedecin)
                    ->join('medecin', 'users.id', '=', 'medecin.idmedecin')  
                    ->first();
        $candidatDetails = $medecinDetails;

        return view('Admin.medecinDetail', [
            'medecinDetails' => $medecinDetails,
            'candidatDetails' => $candidatDetails
        ]);
    }   

}
