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
        
        // Récupérer les informations de l'agent à partir de la table "agents" en fonction du numéro de téléphone
        $agent = AgentModel::where('phone', $credentials['phone'])->first();
        
        if ($agent) {
            // Vérifier le mot de passe
            if (Hash::check($credentials['password'], $agent->password)) {
                // Authentifier l'agent
                //Auth::login($agent);
                // L'agent est maintenant authentifié
                return to_route('admin.dashboardAdmin');


            } else {
                // Mot de passe incorrect
                return back()->with('fail', 'tout est puff');
            }
        } else {
            // Agent non trouvé
            return back()->with('fail', 'Agent non trouvé est puff');

        }
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
}
