<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrateur, Connexion admin de Kak glycémie</title>
    <script src="https://cdn.tailwindcss.com"></script>
      <!--Bootstrap icon-->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('../css/AllUsers.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <main>
        <div>
            <div class="flex overflow-hidden bg-white pt-16">
                {{-- @include('Admin.components.sidebar') --}}
                <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
                <div id="main-content" class="h-full w-full flex flex-col justify-center items-center">
                    <div class="py-3 px-4 my-[2rem] w-[80%] lg:w-[30%]   flex flex-col justify-center items-center gap-4  bg-gray-700 text-gray-50 rounded-xl">
                        <h2 class="font-semibold text-2xl">Connexion d'Administrateur </h2>
                        <img src="{{ asset('/images/logo_white.png') }}" class="h-24 mr-2" alt="Kak glycémie Logo">
                        @if (Session::has('success'))
                        <div class="bg-gray-900 my-2  rounded-xl flex justify-between p-3 text-gray-100 font-semibold animate-pulse delay-700">
                            {{ Session::get('success') }}
                            <div class="text-gray-50">
                                <i class="bi bi-check-circle"></i>
                            </div>
                        </div>
                        @elseif (Session::has('fail'))
                        <div class="bg-red-500 my-2  rounded-xl flex justify-between p-3 text-gray-50 font-semibold animate-pulse delay-700">
                            {{ Session::get('fail') }}
                            <div class="text-gray-50">
                                <i class="bi bi-close-circle"></i>
                            </div>
                        </div>
                        @endif
                        <form method="POST">
                            @csrf
                
                            <div class="flex flex-col gap-2">
                                <div class="w-full px-3 mb-5">
                                    <label for="phone" class="text-xs font-semibold px-1">Votre numéro de téléphone </label>
                                    <div class="flex text-gray-700">
                                        <div class=" w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="bi bi-phone  text-lg"></i>
                                        </div>
                                        <input type="tel"
                                            class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                            placeholder="Votre numéro de téléphone" name="phone" value="{{ old('phone') }}" autofocus autocomplete="phone">
                                    </div>
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </div>
                
                                <div class="w-full px-3 mb-5">
                                    <label for="password" class="text-xs font-semibold px-1" :value="__('password')">Mot de passe </label>
                                    <div class="flex text-gray-700 ">
                                        <div class=" w-10 z-10 pl-1 cursor-pointer text-center pointer-events-none flex items-center justify-center">
                                            <i class="bi bi-lock text-lg"></i>
                                        </div>
                                        <input type="password" id="password"
                                            class="w-full -ml-10 pl-10 pr-3  py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                            placeholder="Votre mot de passe" name="password"  autocomplete="password">
                                       
                                    </div>
                                    <div class="block my-1 pl-4">
                                        <label for="see_password" class="inline-flex items-center">
                                            <input id="see_password" type="checkbox" onclick="actionPassword()"
                                                class="rounded border-gray-300 text-gray-50 shadow-sm focus:ring-indigo-500" >
                                            <span class="ml-2 text-sm text-gray-50">{{ __('Voir le mot de passe') }}</span>
                                        </label>
                                    </div>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                
                            </div>
                
                            <div class="w-full px-3 mb-1">
                                <button 
                                    class="block w-full max-w-xs mx-auto bg-gray-900 hover:bg-gray-500 focus:bg-gray-600 text-white rounded-lg px-3 py-3 font-semibold text-upp">Se
                                    connecter</button>
                            </div>
                        </form>
                        <p class="text-center text-sm text-gray-50">
                            &copy; 2023-2024 <a href="#" class="hover:underline" target="_blank">KaK glycémie</a>. All
                            rights reserved.
                        </p>
                    </div>



                  
                </div>

            </div>
            <script async defer src="https://buttons.github.io/buttons.js"></script>
            <script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
        </div>

    </main>
    {{-- <x-basement::chat-box /> --}}
    <script src="{{ asset('vendor/basement/basement.bundle.min.js') }}"></script>

</body>

</html>
