@extends('layouts.registerLayout')

@section('title', 'Connexion du patient')


@section('formSide')
    <div class="w-full md:w-1/2  px-5 md:px-10 lg:mt-[6rem] py-10">
        <div class="text-center mb-10">
            <h1 class="font-bold text-3xl text-gray-600">Se connecter sur KaK Glycémie</h1>
        </div>

        <div class="text-red-500 text-center font-bold  animate-pulse delay-700">
            @error('loginError')
                {{ $message }}
            @enderror
        </div>
        <form method="POST">
            @csrf

            <div class="flex flex-col gap-2">
                <div class="w-full px-3 mb-5">
                    <label for="phone" class="text-xs font-semibold px-1">Votre numéro de téléphone </label>
                    {{-- <div class="flex">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                            <i class="bi bi-phone text-gray-400 text-lg"></i>
                        </div>
                        
                        <input type="tel"
                            class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                            placeholder="Votre numéro de téléphone" name="phone" :value="{{ old('phone') }}" autofocus autocomplete="phone">
                    </div> --}}

                    <div class="flex">
                        <!-- Sélecteur d'indicatif -->
                        <div class="relative">
                            <select name="country_code" class="h-full rounded-l-lg border-2 border-gray-200 bg-white pl-2 pr-6 text-sm focus:border-indigo-500">
                                <option value="+243" {{ old('country_code') == '243' ? 'selected' : '' }}>🇨🇩  +243</option>
                                <option value="+33" {{ old('country_code') == '33' ? 'selected' : '' }}>🇫🇷 +33</option>
                                <option value="+242" {{ old('country_code') == '242' ? 'selected' : '' }}>🇨🇬 +242</option>
                                <option value="+1" {{ old('country_code') == '1' ? 'selected' : '' }}>🇺🇸 +1</option>
                                <option value="+44" {{ old('country_code') == '44' ? 'selected' : '' }}>🇬🇧 +44</option>
                                <!-- Ajoute d'autres pays ici -->
                            </select>
                        </div>
                        <!-- Champ téléphone -->
                        <div class="flex-grow">
                            <input type="tel"
                                class="w-full pl-3 pr-3 py-2 rounded-r-lg border-2 border-l-0 border-gray-200 outline-none focus:border-indigo-500"
                                placeholder="ex. 817723066" name="phone" value="{{ old('phone') }}" required autofocus autocomplete="phone">
                        </div>
                    </div>
                    @error('phone')
                        {{ $message }}
                    @enderror
                    <!-- <x-input-error :messages="$errors->get('phone')" class="mt-2" /> -->
                </div>

                <div class="w-full px-3 mb-5">
                    <label for="password" class="text-xs font-semibold px-1" :value="__('password')">Mot de passe </label>
                    <div class="flex">
                        <div class="w-10 z-10 pl-1 cursor-pointer text-center pointer-events-none flex items-center justify-center">
                            <i class="bi bi-lock text-gray-400 text-lg"></i>
                        </div>
                        <input type="password" id="password"
                            class="w-full -ml-10 pl-10 pr-3  py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                            placeholder="Votre mot de passe" name="password"  autocomplete="password">
                       
                    </div>
                    <div class="block my-1 pl-4">
                        <label for="see_password" class="inline-flex items-center">
                            <input id="see_password" type="checkbox" onclick="actionPassword()"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" >
                            <span class="ml-2 text-sm text-gray-600">{{ __('Voir le mot de passe') }}</span>
                        </label>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

            </div>

            <!-- Remember Me
            <div class="block my-4 pl-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" id="actionPassword"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Se souvenir de moi') }}</span>
                </label>
            </div> -->

            <div class="flex -mx-3 my-4">
                <div class="w-full px-3 mb-5">
                    <button 
                        class="block w-full max-w-xs mx-auto bg-gray-800 hover:bg-gray-500 focus:bg-gray-600 text-white rounded-lg px-3 py-3 font-semibold text-upp">Se
                        connecter</button>
                </div>
            </div>

            <div class="px-5 flex items-center">
                <p>Pas de compte sur KaK glycémie, <a href="{{ route('registerVue') }}"
                        class="text-red-400 underline">S'inscrire
                        <i class="bi bi-person-plus-fill"></i></a></p>
            </div>
    </div>
    </form>

    </div>
    <script>
        const actionPassword = () => {
            var password = document.getElementById("password");
            if (password.type === "password") {
                password.type = "text";
            } else {
                password.type = "password";
            }
        }
    </script>


@endsection
