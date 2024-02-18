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

# Blade
le container doit avoir @yield("nomducontenu") dans l'espace resérvé pour
l'autre partie (contenu)
-dans le contenu on a @extends("nomdela vue") et @section("nomducontenu")

# hebergement
SANCTUM_STATEFUL_DOMAINS=<your-app-domain> in env

# mon propre middleware
medecin.auth
1. php artisan make:middleware CheckMedecinAuth -> pour créer un middlware perso
2. dans le fichier CheckMedecinAuth, la logique de la redirection -> if
   (!Auth::guard('medecin')->check()) { return
   redirect()->route('login.medecin');     }
3. save le middleware dans app/Http/Kernel.php -> protected $routeMiddleware = [
    'medecin.auth' => \App\Http\Middleware\CheckMedecinAuth::class,
];
4. Définir le garde medecin dans le fichier de configuration config/auth.php -> 'guards' => [
    'web' => [
        'driver' => 'session',
        'provider' => 'users',
    ],

    'api' => [
        'driver' => 'token',
        'provider' => 'users',
        'hash' => false,
    ],

    'medecin' => [
        'driver' => 'session',
        'provider' => 'medecins',
    ],
],

5. Configurer le fournisseur de données pour le garde medecin #dans le même
   fichier -> 'providers' => [
    'users' => [
        'driver' => 'eloquent',
        'model' => App\Models\User::class,
    ],

    'medecins' => [
        'driver' => 'eloquent',
        'model' => App\Models\Medecin::class,
    ],
],

6. implementer Route::get('/dashboard', 'DashboardController@index')->middleware('medecin.auth');
 

