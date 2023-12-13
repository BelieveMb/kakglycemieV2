<?php

use App\Http\Controllers\AllUsersController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[AllUsersController::class, 'index'])->name('accueilName');
Route::get('/patient', [AllUsersController::class, 'patient'])->name('patientName');
Route::get('/doctor', [AllUsersController::class, 'doctor'])->name('doctorName');
Route::get('/about-us', [AllUsersController::class, 'about'])->name('aboutName');

//register doctor
Route::post('add', [registerMedController::class, 'addDoctor'])->name('addDoctor');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//les patients
Route::prefix('/blog')->name('blog.')->controller(BlogController::class)->group(function () { 
    //on peut dire qu'on use le controller
    
});

require __DIR__.'/auth.php';
