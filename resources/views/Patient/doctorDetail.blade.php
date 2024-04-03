@extends('Patient.components.dashboard')

@section('dashboardPatient')
<div class="w-full flex justify-center items-center content-center">
    <div class="py-1 px-2 w-[80%] lg:w-[50%] min-h-screen bg-gray-100/50 rounded-lg border shadow-md sm:p-8 ">
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
                <img
                  class="h-24 w-24 rounded-full mx-auto"
                  src="{{ asset('../images/profil.jpg') }}"
                  alt="Avatar du médecin"
                />
                <p class="pt-2 text-lg font-semibold">{{$detailMedecin->name}} </p>
                <p class="text-sm text-gray-600"> {{$detailMedecin->specialite}} </p>
               
            </div>
            <div class="border-b">
              <a href="#" class="px-4 py-2 hover:bg-gray-100 flex">
                <div class="text-gray-800">
                  <svg
                    fill="none"
                    stroke="currentColor"
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    strokeWidth="1"
                    viewBox="0 0 24 24"
                    class="w-5 h-5"
                  >
                    <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>
                </div>
                <div class="pl-3">
                  <p class="text-sm font-medium text-gray-800 leading-none">Hôpital de prestation</p>
                  <p class="text-xs text-gray-500">{{$detailMedecin->hopital}}  </p>
                </div>
              </a>
              <a href="#" class="px-4 py-2 hover:bg-gray-100 flex">
                <div class="text-gray-800 text-2xl">
                  <i class="bi bi-hospital"></i>
                </div>
                <div class="pl-3">
                  <p class="text-sm font-medium text-gray-800 leading-none">Téléphone </p>
                  <p class="text-xs text-gray-500"> {{$detailMedecin->phone}}</p>
                </div>
              </a>
              <a href="#" class="px-4 py-2 hover:bg-gray-100 flex">
                <div class="text-gray-800">
                  <svg
                    fill="none"
                    stroke="currentColor"
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    strokeWidth="1"
                    viewBox="0 0 24 24"
                    class="w-5 h-5"
                  >
                    <path d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
                <div class="pl-3">
                  <p class="text-sm font-medium text-gray-800 leading-none">Infos médecin</p>
                  <p class="text-xs text-gray-500">{{$detailMedecin->description}}</p>
                </div>
              </a>
              
            </div>
            {{-- action="{{ route('Patient.addSuiviDoctor') }}" --}}
            <form  method="post"  class="mt-6 space-y-6">
              @if ($errors->any())
                <div class="text-gray-50 text-center font-bold  animate-pulse delay-700">
                    <ul class="bg-red-500 mb-2  rounded-xl flex flex-col justify-between p-3 text-gray-100 font-semibold">
                        @foreach ($errors->all() as $error)
                            <li> <i class="bi bi-exclamation-circle-fill"></i>  {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
              @csrf
              <div class="main flex border rounded-xl overflow-hidden  select-none">
                  <div class="py-3  px-5 bg-red-500 text-white text-sm font-semibold mr-3">Voulez vous que ce médecin puisse suivre votre glycémie ?</div>
                  <label class="flex items-center radio p-2 cursor-pointer">
                    <input class="my-auto transform scale-125" type="radio" name="choix" value="non"  />
                    <div class="title px-2">Non</div>
                  </label>

                
                  <label class="flex items-center radio p-2 cursor-pointer">
                    <input class="my-auto transform scale-125" type="radio" name="choix" value="oui"  />
                    <div class="title px-2">Oui</div>
                  </label>

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
                  <button class="bg-transparent text-red-500 text-base rounded-lg px-2 py-1 font-semibold hover:bg-red-500 hover:text-gray-50  hover:border border border-red-400 hover:duration-700">
                      Enregistrer <i class="bi bi-check-circle"></i>
                  </button> 

              </div>
          </form>
    
            <div class="">
              <a href="{{ route('Patient.patientMedecinList') }}" class="px-4 py-2 pb-4 hover:bg-gray-100 flex underline hover:no-underline">
                  <p class="text-sm font-medium text-gray-800 leading-none"> <i class="ml-1 text-xl bi bi-person-plus"></i> Voir la liste des médecins</p>
                </a>
              <a href="#" class="px-4 py-2 pb-4 hover:bg-gray-100 flex">
                <p class="text-sm font-medium text-gray-800 leading-none">Supprimer ce médecin</p>
              </a>
              <a href="" class="px-4 py-2 pb-4 hover:bg-gray-100 flex">
                <p class="text-sm font-medium text-gray-800 leading-none">Signaler un abus</p>
              </a> 
           
            </div>
            {{-- <form method="post">
                @csrf
                <div class="mb-6">
                  <label for="signaler" class="font-semibold mb-2 block">Quel est votre soucis ? </label>
                  <input type="text" name="suivi" placeholder="Dites ce que vous pensez de ce médecin" class="border-1 border-b-4 border-red-500 rounded-2xl px-4 py-2 w-full focus:border-2 outline-none focus:border-red-500">
                  <x-input-error :messages="$errors->get('signaler')" class="mt-2" />
                </div>
                <div class="flex justify-center items-center">
                    <button class="bg-red-500 text-white rounded-2xl px-4 py-2 font-semibold hover:bg-transparent hover:text-red-500 hover:border-red-500 hover:border-2">Signaler <i class="bi bi-info-circle-fill"></i></button>
                </div>

            </form> --}}
          
          @else
              <h3>Une erreur s'est produite, recommencez s'il vous plait.</h3>
          @endif
        </div>
    </div>
  


</div>

@endsection