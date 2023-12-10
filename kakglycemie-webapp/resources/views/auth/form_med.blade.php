                <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="flex flex-row gap-3">
                        <div class="w-1/2 px-3 mb-5">
                            <label for="name" class="text-xs font-semibold px-1">Nom complet</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                                <input type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-red-500" placeholder="Votre nom" name="name" :value="old('name')" required autofocus autocomplete="name" >
                            </div>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="w-1/2 px-3 mb-5">
                            <label for="sexePat" class="text-xs font-semibold px-1">Sexe</label>
                            <div class="flex ">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                                <select id="sexePat"  class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-red-500" name="sexePat" :value="old('sexePat')" required autofocus autocomplete="sexePat" >
                                    <option disabled>Choisir...</option>
                                    <option value="Masculin">Masculin</option>
                                    <option value="Feminin">Feminin</option>
                                </select>
                            </div>
                            <x-input-error :messages="$errors->get('sexePat')" class="mt-2" />
                        </div>
                    </div>
                    
                    <div class="flex flex-col gap-2">
                        <div class="w-full px-3 mb-5">
                            <label for="email" class="text-xs font-semibold px-1" :value="__('Email')">Email </label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="bi bi-envelope text-gray-400 text-lg"></i></div>
                                <input type="mail" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Votre email" name="email" :value="old('email')" required autofocus autocomplete="email" >
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="w-full px-3 mb-5">
                            <label for="telPat" class="text-xs font-semibold px-1">Téléphone </label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="bi bi-phone text-gray-400 text-lg"></i></div>
                                <input type="tel" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Votre numéro de téléphone" name="telPat" :value="old('telPat')" required autofocus autocomplete="telPat" >
                            </div>
                            <x-input-error :messages="$errors->get('telPat')" class="mt-2" />
                        </div>
                    </div>

                    <div class="flex flex-row gap-3">
                        <div class="w-1/2 px-3 mb-5">
                            <label for="password" class="text-xs font-semibold px-1" :value="__('Password')">Mot de passe </label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="bi bi-lock text-gray-400 text-lg"></i></div>
                                <input type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Votre mot de passe" name="password" :value="old('password')" required autofocus autocomplete="password" >
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="w-1/2 px-3 mb-5">
                            <label for="password_confirmation" class="text-xs font-semibold px-1" :value="__('Confirm Password')">Confirmer votre  </label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="bi bi-lock text-gray-400 text-lg"></i></div>
                                <input type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Mot de passe" name="password_confirmation" :value="old('password_confirmation')" required autofocus autocomplete="password_confirmation" >
                            </div>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                    </div>


                    
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <button class="block w-full max-w-xs mx-auto bg-red-500 hover:bg-red-700 focus:bg-red-700 text-white rounded-lg px-3 py-3 font-semibold text-upp" type="submit">S'inscrire</button>
                        </div>
                    </div>
                </div>
            </form>