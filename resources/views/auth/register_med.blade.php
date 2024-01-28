                <form method="POST" action="{{ route('addDoctor') }}">
                        @csrf
                    <div class="flex flex-col lg:flex-row gap-3">
                        
                        <div class="w-full px-3 mb-2">
                            <label for="nomMed" class="text-xs font-semibold px-1">Votre Nom et Prénom </label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                                <input type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-red-500" placeholder="Votre nom" name="nomMed" :value="old('nomMed')" required autofocus autocomplete="nomMed" >
                            </div>
                            <x-input-error :messages="$errors->get('nomMed')" class="mt-2" />
                        </div>
                        <div class="w-full px-3 mb-2">
                            <label for="sexeMed" class="text-xs font-semibold px-1">Sexe</label>
                            <div class="flex ">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                                <select id="sexeMed"  class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-red-500" name="sexeMed" :value="old('sexeMed')" required autofocus autocomplete="sexeMed" >
                                    <option disabled>Choisir...</option>
                                    <option value="Masculin">Masculin</option>
                                    <option value="Feminin">Feminin</option>
                                </select>
                            </div>
                            <x-input-error :messages="$errors->get('sexeMed')" class="mt-2" />
                        </div>
                    </div>
                    
                    <div class="flex flex-col gap-2">
                        <div class="w-full px-3 mb-5">
                            <label for="telMed" class="text-xs font-semibold px-1">Téléphone </label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="bi bi-phone text-gray-400 text-lg"></i></div>
                                <input type="tel" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Votre numéro de téléphone" name="telMed" value="{{old('telMed')}}" required autofocus autocomplete="telMed" >
                            </div>
                            <x-input-error :messages="$errors->get('telMed')" class="mt-2" />
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

                    <div class="flex flex-col gap-2">
                        <div class="w-full px-3 mb-5">
                            <label for="hopital" class="text-xs font-semibold px-1" :value="__('hopital')">Hôpital de préstation </label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="bi bi-envelope text-gray-400 text-lg"></i></div>
                                <input type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Votre institution de préstation" name="hopital" :value="old('hopital')" required autofocus autocomplete="hopital" >
                            </div>
                            <x-input-error :messages="$errors->get('hopital')" class="mt-2" />
                        </div>
                    </div>


                    
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <button class="block w-full max-w-xs mx-auto bg-gray-800 hover:bg-gray-500 focus:bg-gray-700 text-white rounded-lg px-3 py-3 font-semibold text-upp" type="submit">S'inscrire</button>
                        </div>
                    </div>

                    <div class="px-5 flex items-center">
                        <p>Déjà un médecin de KaK glycémie, <a href="{{ route('login') }}" class="text-red-400 underline">Se connecter  <i class="bi bi-box-arrow-in-left"></i></a></p>
                    </div>
                </div>
            </form>