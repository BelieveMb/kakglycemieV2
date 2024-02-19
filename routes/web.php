<?php

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
    // Route::post('loginPat','loginPatient')->name('loginPatient');
    Route::get('loginPatient','loginVuePatient')->name('loginVuePatient');
    Route::get('loginMedecin','loginMedecin')->name('loginMedecin');

});

//register doctor
Route::post('add', [registerMedController::class, 'addDoctor'])->name('addDoctor');
//login doctor
Route::post('loginDoctor', [registerMedController::class, 'loginDoctor'])->name('loginDoctor');

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
    Route::get('/logout','logoutPatient')->name('logoutPatient');
    Route::get('/statistiqueGlycemie','statistiqueGlycemie')->name('statistiqueGlycemie');
    Route::get('/patientProfile','patientProfile')->name('patientProfile');
    Route::get('/patientChat','patientChat')->name('patientChat');
    Route::get('/medecins', 'patientMedecinList')->name('patientMedecinList');
    Route::post('/medecins','addNewDoctor')->name('addNewDoctor');
    Route::get('/mesMedecins', 'doctorOfPatient')->name('doctorOfPatient');
});
Route::get('/dashboardMedecin', 'medecinController@dashboardMedecin')->middleware('medecin.auth');

Route::middleware('medecin.auth')->prefix('/medecin')->name('Medecin.')->controller(medecinController::class)->group(function () {
    Route::get('/dashboard', 'medecinController@dashboardMedecin')->name('dashboard');

});

//Les médecins

require __DIR__.'/auth.php';
