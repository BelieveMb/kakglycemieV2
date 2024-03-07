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
    function addDoctor(Request $request){
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
            'valider'=>$request->string('no'),
        ]);

        //message de confirmation
        if($query){
            // return back()->with('success', 'tout est okay');
            return to_route('Medecin.dashboard');
            // return to_route('login');
            // return view('doctorName');
        }else{
            return back()->with('error', 'tout est puff');
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
        // $idmedecin = auth()->id();
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


}
