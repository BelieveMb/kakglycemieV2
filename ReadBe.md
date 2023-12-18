# Configuration  route

/ : la page d'acceuil
Pour chaque page, on crée son vue, sa fonction pour la vue et le chemin
# VUe

# COntroller
* Alluser controller; le controleur pour tous les utilisateurs
# Request (Validaor)
* php artisan make:request LoginRequest
c'est faire le validation des donnees et les retourner dans le controller
(Nomdurequest $request)

# web
Route::get('/',[AllUsersController::class, 'index'])->name('accueilName');
Route::get('/patient', [AllUsersController::class,
'patient'])->name('patientName');

# Auth
Auth::attempt($credentials); -> tout sur l'authentification. #à voir

