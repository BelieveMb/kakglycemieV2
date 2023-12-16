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
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            // 'name' => 'required',
            // 'sexePat' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            // 'telPat' => ['required', 'unique', 'max:15'],
            'password' => ['required', 'confirmed', 'min:4'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'sexePat' => $request->sexePat,
            'email' => $request->email,
            'telPat' => $request->telPat,
            'password' => Hash::make($request->password),
        ]);

        if($user){
            event(new Registered($user));
            Auth::login($user);
            return to_route('login');
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
