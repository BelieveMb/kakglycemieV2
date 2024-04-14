<div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
    <div class="flex items-center justify-between">
        <div>
            <h3 class="text-xl font-bold text-gray-900 mb-2">Ajouter votre glycémie <i class="bi bi-heart-pulse-fill"></i></h3>
        </div>

    </div>
    <div class="flex flex-col mt-2">
        <div class="overflow-x-auto rounded-lg">
            <div class="align-middle inline-block min-w-full">
                <div class="shadow overflow-hidden sm:rounded-lg">
                    <div class="flex justify-center mb-4">
                        <svg class="w-[12rem] h-[8rem]" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 297 297" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <g> <circle style="fill:#F86E51;" cx="148.5" cy="148.5" r="148.5"></circle> </g> </g> </g> <path style="fill:#D14D37;" d="M205.655,59.941C172.917,97.978,140.613,142.459,143.5,192.5 c1.571,20.425,6.152,50.034-4.571,69.536l33.102,33.102c69.95-11.138,123.611-71.117,124.934-143.887L205.655,59.941z"></path> <g> <g> <path style="fill:#345065;" d="M148.5,223.75L148.5,223.75c37.003,0,67-29.997,67-67V82.547 c0-17.167-13.916-31.083-31.083-31.083h-71.834C95.416,51.464,81.5,65.38,81.5,82.547v74.203 C81.5,193.753,111.497,223.75,148.5,223.75z"></path> </g> <g> <rect x="138.929" y="204.607" style="fill:#ECF0F1;" width="19.143" height="57.429"></rect> </g> <g> <path style="fill:#ECF0F1;" d="M117.127,147.179h62.746c3.818,0,6.913-3.095,6.913-6.913V77.52c0-3.818-3.095-6.913-6.913-6.913 h-62.746c-3.818,0-6.913,3.095-6.913,6.913v62.746C110.214,144.084,113.309,147.179,117.127,147.179z"></path> </g> <g> <g> <path style="fill:#AEC1CF;" d="M146.76,157.62h-27.747c-4.859,0-8.798,3.939-8.798,8.798c0,11.8,9.566,21.366,21.366,21.366 h15.179V157.62z"></path> </g> <g> <path style="fill:#AEC1CF;" d="M177.988,157.62H150.24v30.165h15.179c11.8,0,21.366-9.566,21.366-21.366 C186.786,161.559,182.847,157.62,177.988,157.62z"></path> </g> </g> </g> <g> <path style="fill:#D35400;" d="M132,115.5c0-9.113,16.5-33,16.5-33s16.5,23.887,16.5,33s-7.387,16.5-16.5,16.5 S132,124.613,132,115.5z"></path> </g> </g> </g></svg>
                    </div>
                    
                    @if (Session::has('success'))
                        <div class="bg-gray-700 mb-2  rounded-xl flex justify-between p-3 text-gray-100 font-semibold">
                            {{ Session::get('success') }}
                            <div class="text-gray-50">
                                <i class="bi bi-info-circle"></i>
                            </div>
                        </div>
                    @endif
                    <form action="{{ route('Patient.addTauxTraitement') }}" method="POST" class="px-1 lg:px-20">
                        @csrf
                       

                        <input type="hidden" name="idpatient" value="{{auth()->user()->id}}" placeholder="Votre taux de glycémie" class="border-1 border-b-4 border-red-500 rounded-2xl px-4 py-2 w-full focus:border-2 outline-none focus:border-red-500">
                        <div class="mb-4">
                            <label for="taux" class="font-semibold mb-2 block">Votre Taux de glycémie  mg/dl</label>
                            <input type="text" name="taux" placeholder="Votre taux de glycémie" class="border-1 border-b-4 border-red-500 rounded-2xl px-4 py-2 w-full focus:border-2 outline-none focus:border-red-500">
                            <x-input-error :messages="$errors->get('taux')" class="mt-2" />
                        </div>
                        
                        <div class="mb-6">
                            <label for="traitement" class="font-semibold mb-2 block">Le traitement pris aujourd'hui </label>
                            <!-- <textarea name="traitement" placeholder="Dites nous, les traitements que vous avez pris." class="border-1 border-b-4 border-red-500 rounded-2xl  px-4 py-1 w-full h-16 focus:border-2 outline-none focus:border-red-500"></textarea> -->
                            <input type="text" name="traitement" placeholder="Votre taux de glycémie" class="border-1 border-b-4 border-red-500 rounded-2xl px-4 py-2 w-full focus:border-2 outline-none focus:border-red-500">
                            <x-input-error :messages="$errors->get('traitement')" class="mt-2" />
                        </div>
                        <div class="flex justify-center items-center">
                            <button class="bg-red-500 text-white rounded-2xl px-4 py-2 font-semibold hover:bg-transparent hover:text-red-500 hover:border-red-500 hover:border-2">Enregistrer <i class="bi bi-check-circle-fill"></i></button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        <div class="flex flex-col mt-4 gap-4">
            <span class="text-base font-normal text-gray-500">Enregistrer vos taux de glycémie quotidiens et noter les traitements associés.</span>
            {{-- <a href="#" class="text-sm font-medium text-red-500 hover:text-gray-500 hover:underline ">En savoir plus</a> --}}
        </div>
    </div>
</div>