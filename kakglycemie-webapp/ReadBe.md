# Configuration  route

/ : la page d'acceuil
Pour chaque page, on crée son vue, sa fonction pour la vue et le chemin
# VUe

# COntroller
* Alluser controller; le controleur pour tous les utilisateurs


# web
Route::get('/',[AllUsersController::class, 'index'])->name('accueilName');
Route::get('/patient', [AllUsersController::class, 'patient'])->name('patientName');
