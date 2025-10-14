@extends('layouts.registerLayout')

@section('title', 'Inscription du patient')


@section('formSide')
    <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
        <div class="text-center mb-10">
            <h1 class="font-bold text-3xl text-gray-600">S'inscrire sur KaK Glycémie</h1>
        </div>
        <div>
            <form method="POST"  >
                @csrf

                <div class="flex flex-col gap-2">
                    <div class="w-full px-3">
                        <label for="name" class="text-xs font-semibold px-1">Nom complet</label>
                        <div class="flex">
                            <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                <i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                            <input type="text"
                                class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-red-500"
                                placeholder="Votre nom" name="name" value="{{ old('name') }}" required autofocus
                                autocomplete="name">
                        </div>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="w-full px-3 my-1">
                        <label for="sexe" class="text-xs font-semibold px-1">Sexe</label>
                        <div class="flex ">
                            <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                <i class="mdi mdi-account-outline text-gray-400 text-lg"></i>
                            </div>
                            <select class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-red-500"
                                name="sexe" value="{{ old('sexe') }}" required>
                                <option>Choisir...</option>
                                <option value="Masculin">Masculin</option>
                                <option value="Feminin">Feminin</option>
                            </select> 
                            {{-- <input type="text"
                                class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-red-500"
                                placeholder="Votre nom" name="sexe" value="{{ old('sexe') }}" required 
                                autocomplete="sexe">--}}
                        </div>
                        <x-input-error :messages="$errors->get('sexe')" class="mt-2" />
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <div class="w-full px-3 mb-2">
                        <label for="email" class="text-xs font-semibold px-1" :value="__('Email')">Email </label>
                        <div class="flex">
                            <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i
                                    class="bi bi-envelope text-gray-400 text-lg"></i></div>
                            <input type="email"
                                class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                placeholder="Votre email" name="email" value="{{ old('email') }}" required autofocus
                                autocomplete="email">
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="w-full px-3 mb-2">
                        <label for="phone" class="text-xs font-semibold px-1">Téléphone</label>
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

                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>


                    {{-- <div class="w-full px-3 mb-2">
                        <label for="phone" class="text-xs font-semibold px-1">Téléphone </label>
                        <div class="flex">
                            <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i
                                    class="bi bi-phone text-gray-400 text-lg"></i></div>
                            <input type="tel"
                                class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                placeholder="ex. 817723066" name="phone" value="{{ old('phone') }}" required autofocus
                                autocomplete="phone">
                        </div>
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div> --}}
                </div>

                <div class="w-full px-3 mb-2 ">
                    <label for="type" class="text-xs font-semibold px-1">Qui êtes-vous ? </label>
                    <div class="flex justify-between pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 ">
                        <label>
                            <input type="radio" name="type" value="patient"  >
                            {{ __('Patient') }}
                            <i class="bi bi-person"></i>
                        </label>
                        <label class="ml-6">
                            <input type="radio" name="type" value="medecin" >
                            {{ __('Medecin') }}
                            <i class="bi bi-person-plus"></i>
                        </label>

                    </div>
                    <x-input-error :messages="$errors->get('type')" class="mt-2" />
                </div>


                <div class="flex flex-col lg:flex-row gap-2">
                    <div class="w-full px-3 ">
                        <label for="password" class="text-xs font-semibold px-1" :value="__('password')">Mot de passe
                        </label>
                        <div class="flex">
                            <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                <i class="bi bi-lock text-gray-400 text-lg"></i></div>
                            <input type="password"  id="password"
                                class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                placeholder="Votre mot de passe" name="password" value="{{ old('password') }}" required
                                autofocus autocomplete="password">
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="w-full px-3 mb-5">
                        <label for="password_confirmation" class="text-xs font-semibold px-1"
                            :value="__('Confirm Password')">Confirmer votre </label>
                        <div class="flex">
                            <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i
                                    class="bi bi-lock text-gray-400 text-lg"></i></div>
                            <input type="password"  id="passwordConfirm"
                                class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                placeholder="Mot de passe" name="password_confirmation"
                                :value="{{ old('password_confirmation') }}" required autofocus
                                autocomplete="password_confirmation">
                        </div>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>

                <div class="block mt-2 mb-5 pl-4">
                    <label for="see_password" class="inline-flex items-center">
                        <input id="see_password" type="checkbox" onclick="actionPassword()"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" >
                        <span class="ml-2 text-sm text-gray-600">{{ __('Afficher le mot de passe') }}</span>
                    </label>
                </div>


                <div class="flex -mx-3">
                    <div class="w-full px-3 mb-5">
                        <button
                            class="block w-full max-w-xs mx-auto bg-red-500 hover:bg-red-700 focus:bg-red-700 text-white rounded-lg px-3 py-3 font-semibold text-upp"
                            type="submit">S'inscrire</button>
                    </div>
                </div>
                <div class="px-5 flex items-center">
                    <p>Déjà un patient de KaK glycémie, <a href="{{ route('loginUserVue') }}" class="text-red-400 underline">Se
                            connecter <i class="bi bi-box-arrow-in-left"></i></a></p>
                </div>
            </form>
        </div>
    </div>
    <script>
        const actionPassword = () => {
            var password = document.getElementById("password");
            var passwordConfirm = document.getElementById("passwordConfirm");
            if (password.type === "password") {
                password.type = "text";
                passwordConfirm.type = "text";
            } else {
                password.type = "password";
                passwordConfirm.type = "password";
            }
        }
    </script>


@endsection
