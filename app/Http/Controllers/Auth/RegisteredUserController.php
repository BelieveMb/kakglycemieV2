<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{

    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.registerUser');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    { //par défaut mais j'utilises plus
        $request->validate([
            'name' => ['required', 'max:255' ],
            'sexe' => 'required|in:Masculin,Feminin' ,
            'email' => ['required', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required', 'unique:'.User::class, 'min:10','max:15'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'sexe' => $request->sexe,
            'email' => $request->email,
            'phone' => $request->phone,
            'type' => $request->type,
            'password' => Hash::make($request->password),
        ]);

        if($user){
            event(new Registered($user));
            Auth::login($user);
            return to_route('loginUserVue');
        }else{
            return back()->withErrors("une erreur, veuillez recommencez");
            // withErrors([
            //     'email'=>'cet adresse mail est déjà utilisé',
            //     'telPat' => 'ce numéro est incomplet',
            // ]);

        }



        // return redirect(RouteServiceProvider::HOME);

    }
}
