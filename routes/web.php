<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\AllUsersController;
use App\Http\Controllers\medecinController;
use App\Http\Controllers\PatientControllers;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\registerMedController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Mak something great!
|
*/

Route::prefix('/')->controller(AllUsersController::class)->group(function (){
    Route::get('/', 'index')->name('accueilName');
    Route::get('patient',  'patient')->name('patientName');
    Route::get('doctor',  'doctor')->name('doctorName');
    Route::get('about-us',  'about')->name('aboutName');
    Route::get('Connexion','loginUserVue')->name('loginUserVue');
    Route::post('Connexion','loginUser')->name('loginUser');
    Route::get('Inscription', 'registerVue')->name('registerVue');
    Route::post('Inscription', 'userRegister')->name('inscription');
    Route::get('/logout','logoutUser')->name('logoutUser');
    //en cas de redirection inattendue vers login
    Route::get('login','loginUserVue')->name('loginUserVue');
    Route::post('login','loginUser')->name('loginUser');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//les patients
Route::middleware('auth')->prefix('/patient')->name('Patient.')->controller(PatientControllers::class)->group(function () { 
    //on peut dire qu'on use le controller
    Route::get('/dashboard','dashboardForm')->name('dashboardForm');
    Route::post('/dashboard','AddTauxTraitement')->name('addTauxTraitement');
    Route::get('/statistiqueGlycemie','statistiqueGlycemie')->name('statistiqueGlycemie');
    Route::get('/patientProfile','patientProfile')->name('patientProfile');
    Route::get('/patientChat','patientChat')->name('patientChat');
    Route::get('/Mes-medecins', 'patientMedecinList')->name('patientMedecinList');
    Route::get('/ajouter-un-medecin','addDoctorVue')->name('addDoctorVue');
});

//for save doctor in using controller med
Route::prefix('/')->name('medecin.')->controller(medecinController::class)->group(function () {
    //register doctor
    Route::post('add', 'addDoctor')->name('addDoctor');
    //login doctor
    Route::post('loginDoctor',  'loginDoctor')->name('loginDoctor');
});
    

// Route::get('/dashboardMedecin', 'medecinController@dashboardMedecin')->middleware('medecin.auth');
//
Route::middleware('auth')->prefix('/medecin')->name('Medecin.')->controller(medecinController::class)->group(function () {
    Route::get('/dashboard', 'dashboardMedecin')->name('dashboard');
    Route::get('/logout','logoutMedecin')->name('logoutMedecin');
    Route::get('/monProfil',  'profilMedecin')->name('monProfil');
    Route::post('/monProfil',  'updateProfilMedecin')->name('monProfil');
    Route::get('/Contact-Kak',  'contactKaK')->name('contactKaK');
    Route::post('/Contact-Kak',  'contactSendMessage')->name('contactKaK');
});

Route::get('/kak-admin', [adminController::class, 'connexionAdminVue'])->name('connexionVue');
Route::post('/kak-admin', [adminController::class, 'connexionAdmin'])->name('connexionAdmin');

//middleware('auth')->
Route::prefix('/kak-admin')->name('admin.')->controller(adminController::class)->group(function () {
    Route::get('/dashboard',  'dashboardAdmin')->name('dashboardAdmin');
    Route::get('/candidats',  'candidatsList')->name('candidats');
    Route::get('/candidat-Detail',  'candidatDetail')->name('candidatDetail');
    Route::post('/candidat-Detail',  'candidatValidation')->name('candidatValidation');
    Route::get('/Nos-medecins',  'medecinList')->name('medecinList');
    Route::get('/logout','logoutAdmin')->name('logoutAdmin');

});


//Les médecins

require __DIR__.'/auth.php';
