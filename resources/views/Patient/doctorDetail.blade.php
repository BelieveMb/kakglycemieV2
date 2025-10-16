@extends('Patient.components.dashboard')

@section('dashboardPatient')
    <div class="w-full flex justify-center items-center content-center">
        <div class="py-1 px-2 w-[96%] lg:w-[50%] min-h-screen bg-gray-100/50 rounded-lg border shadow-md sm:p-8 ">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-base lg:text-2xl font-bold leading-none text-gray-600 flex items-center gap-2 ">
                    <a href="{{ route('Patient.patientMedecinList') }}" class="text-red-600" title="Voir la liste">
                        <i class="bi bi-arrow-left"></i></a> A propos du médecin
                </h3>
                <a href="#" class="text-base lg:text-2xl font-medium text-red-500 hover:text-red-800">
                    <i class="bi bi-info-circle"></i>
                </a>
            </div>
            <div class="flow-root">
                @if ($detailMedecin)

                    <div class="text-center p-6  border-b">
                        <img class="h-24 w-24 rounded-full mx-auto" src="{{ asset('../images/profil.jpg') }}"
                            alt="Avatar du médecin" />
                        <p class="pt-2 text-lg font-semibold">{{ $detailMedecin->name }} </p>
                        <p class="text-sm text-gray-600"> {{ $detailMedecin->specialite }} </p>

                    </div>
                    <div class="border-b">
                        <a href="#" class="px-4 py-2 hover:bg-red-200 hover:rounded-lg flex">
                          @if (isset($suiviList->suivi))                            
                            <div class="text-gray-800 text-2xl">
                                <i class="bi bi-shield-fill-check"></i>
                            </div>
                            <div class="pl-3">
                                <p class="text-sm font-medium text-gray-800 leading-none">Suivre votre glycémie : <span
                                        class="text-red-500">{{ $suiviList->suivi }} </span> </p>
                                <p class="text-xs text-gray-500"> Ce médecin peut suivre votre glycémie, vu que vous lui
                                    avez donné l'autorisation </p>
                            </div>
                        @else
                            <div class="text-gray-800 text-2xl">
                                <i class="bi bi-shield-fill-exclamation"></i>
                            </div>
                            <div class="pl-3">
                                <p class="text-sm font-medium text-gray-800 leading-none">Suivre votre glycémie : <span
                                        class="text-red-500">non</span> </p>
                                <p class="text-xs text-gray-500"> Ce médecin ne peut pas suivre votre glycémie, vu que vous
                                    lui avez donné aucune autorisation </p>
                            </div>
                        @endif 

                </a>

                <a href="#" class="px-4 py-2 hover:bg-red-200 hover:rounded-lg flex">
                    <div class="text-gray-800 text-2xl">
                        <i class="bi bi-hospital-fill"></i>
                    </div>

                    <div class="pl-3">
                        <p class="text-sm font-medium text-gray-800 leading-none">Hôpital de prestation</p>
                        <p class="text-xs text-gray-500">{{ $detailMedecin->hopital }} </p>
                    </div>
                </a>
                <a href="#" class="px-4 py-2 hover:bg-red-200 hover:rounded-lg flex">
                    <div class="text-gray-800 text-2xl">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="pl-3">
                        <p class="text-sm font-medium text-gray-800 leading-none">Téléphone </p>
                        <p class="text-xs text-gray-500"> {{ $detailMedecin->phone }}</p>
                    </div>
                </a>
                @php
                    $whatsappNumber = $detailMedecin->phone;
                    $whatsappMessage = "Bonjour docteur, je vous écris à partir de l'app KakGlycemie.";
                @endphp
                <div >
                <a href="https://wa.me/{{ $whatsappNumber }}?text={{ urlencode($whatsappMessage) }}"  class="px-4 py-2  text-sm font-semibold bg-red-500 text-gray-50 rounded-lg hover:text-gray-600 focus:text-gray-900 hover:bg-red-200  hover:shadow-outline
                focus:bg-red-200 focus:outline-none" >💬 Contacter via WhatsApp</a>
                </div>
                <a href="#" class="px-4 py-2 hover:bg-red-200 hover:rounded-lg flex">
                    <div class="text-gray-800 text-2xl">
                        <i class="bi bi-person-vcard-fill"></i>
                    </div>
                    <div class="pl-3">
                        <p class="text-sm font-medium text-gray-800 leading-none">Infos médecin</p>
                        <p class="text-xs text-gray-500">{{ $detailMedecin->description }}</p>
                    </div>
                </a>

            </div>
            {{-- --}}
            <form method="post" action="{{ route('Patient.suiviDoctor') }}" class="my-6 space-y-6">
                @if ($errors->any())
                    <div class="text-gray-50 text-center font-bold  animate-pulse delay-700">
                        <ul
                            class="bg-red-500 mb-2  rounded-xl flex flex-col justify-between p-3 text-gray-100 font-semibold">
                            @foreach ($errors->all() as $error)
                                <li> <i class="bi bi-exclamation-circle-fill"></i> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @csrf
                @php
                    $doctor = request('doctor');
                @endphp
                <input type="hidden" name="idmedecin" value="{{ $doctor }}">

                <div class="main flex lg:flex-row flex-col border rounded-xl overflow-hidden  select-none">
                    <div class="py-3  px-5 bg-red-500 text-white text-sm font-semibold mr-3">Voulez vous que ce médecin
                        puisse suivre votre glycémie ?</div>
                    <div class="flex gap-5 justify-between">

                        <label class="flex items-center radio p-2 cursor-pointer">
                            <input class="my-auto transform scale-125" type="radio" name="choix" value="non" />
                            <div class="title px-2">Non</div>
                        </label>


                        <label class="flex items-center radio p-2 cursor-pointer">
                            <input class="my-auto transform scale-125" type="radio" name="choix" value="oui" />
                            <div class="title px-2">Oui</div>
                        </label>
                    </div>

                </div>

                <div class="text-red-500 text-center font-bold  animate-pulse delay-700">
                    @if (Session::has('success'))
                        <div class="bg-gray-700 mb-2  rounded-xl flex justify-between p-3 text-gray-100 font-semibold">
                            {{ Session::get('success') }}
                            <div class="text-gray-50">
                                <i class="bi bi-info-circle"></i>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="flex items-center gap-4">
                    <button
                        class="bg-transparent text-red-500 text-base rounded-lg px-2 py-1 font-semibold hover:bg-red-500 hover:text-gray-50  hover:border border border-red-400 hover:duration-700">
                        Enregistrer <i class="bi bi-check-circle-fill"></i>
                    </button>

                </div>
            </form>

            <div class="">
                <a href="{{ route('Patient.patientMedecinList') }}"
                    class="px-4 py-2 pb-4 hover:bg-red-200 hover:rounded-lg flex underline hover:no-underline">
                    <p class="text-sm font-medium text-gray-800 leading-none"> 
                        <i class="mr-3 text-xl bi bi-person-plus-fill"></i> Voir la liste des médecins</p>
                </a>
                <a href="#" id="showForm" class="px-4 py-2 pb-4 hover:bg-red-200 hover:rounded-lg flex underline hover:no-underline">
                    <p class="text-sm font-medium text-gray-800 leading-none">
                        <i class="mr-3 text-xl bi bi-exclamation-diamond-fill"></i> Signaler un abus</p>
                </a>

                {{-- <form id="formSignaler" class="hidden w-1/2 min-h-1/2" method="post" action="{{ route('Patient.signalerDoctor') }}">
                    @csrf 
                    <div class="mb-6">
                        <label for="">A faire après</label>
                    <input type="text" name="signaler" placeholder="Dites ce que vous pensez de ce médecin" value="{{ old('signaler') }}"
                    class="border-1 border-b-4 border-red-500 rounded-2xl px-4 py-2 w-full focus:border-2 outline-none focus:border-red-500">
                    <x-input-error :messages="$errors->get('signaler')" class="mt-2" />
                    </div>
                    <div class="flex justify-center items-center">
                        <button class="bg-red-500 text-white rounded-2xl px-4 py-2 font-semibold hover:bg-transparent hover:text-red-500 hover:border-red-500 hover:border-2">Signaler <i class="bi bi-info-circle-fill"></i></button>
                    </div>

                </form> --}}
            </div>

        @else
            <h3>Une erreur s'est produite, recommencez s'il vous plait.</h3>
            @endif
        </div>
    </div>



    </div>
    
    <script  >
        document.addEventListener('DOMContentLoaded', function() {
        let showForm = document.getElementById('showForm');
        let formSignaler = document.getElementById('formSignaler');

        showForm.addEventListener('click', function(event) {
            event.preventDefault(); 
            if(formSignaler.classList.contains("hidden")) {
                formSignaler.classList.remove("hidden");
            }else{
                formSignaler.classList.add("hidden");
            }
        });   
    });
    </script>
@endsection
