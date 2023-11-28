<?php

use App\Http\Controllers\AllUsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[AllUsersController::class, 'index'])->name('accueilName');
Route::get('/patient', [AllUsersController::class, 'patient'])->name('patientName');

