@extends('auth.login')

@section('loginType')    
    <form method="POST" action="{{ route('loginPatient') }}"  >
        @csrf

        <div class="flex flex-col gap-2">
            <div class="w-full px-3 mb-5">
                <label for="telPat" class="text-xs font-semibold px-1">Téléphone </label>
                <div class="flex">
                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="bi bi-phone text-gray-400 text-lg"></i></div>
                    <input type="tel" name="telPat" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Votre numéro de téléphone" name="telPat" 
                    :value="old('telPat')" required autofocus autocomplete="telPat" >
                </div>
                <x-input-error :messages="$errors->get('telPat')" class="mt-2" />
            </div>

            <div class="w-full px-3 mb-5">
                <label for="password" class="text-xs font-semibold px-1" :value="__('Password')">Mot de passe </label>
                <div class="flex">
                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="bi bi-lock text-gray-400 text-lg"></i></div>
                    <input type="text" name="password"  class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Votre mot de passe" name="password" :value="old('password')" required autofocus autocomplete="password" >
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

        </div>

        <!-- Remember Me -->
        <div class="block my-4 pl-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>
<h1>Corriger la séparation login patient et login med</h1>
        <div class="flex -mx-3">
            <div class="w-full px-3 mb-5">
                <button class="block w-full max-w-xs mx-auto bg-red-500 hover:bg-red-700 focus:bg-red-700 text-white rounded-lg px-3 py-3 font-semibold text-upp" type="submit">Se connecter</button>
            </div>
        </div>

        <div class="px-5 flex items-center">
            <p>Pas de compte sur KaK glycémie, <a href="{{ route('register') }}" class="text-red-400 underline">S'inscrire  <i class="bi bi-person-plus-fill"></i></a></p>
        </div>
    </form>
@endsection
