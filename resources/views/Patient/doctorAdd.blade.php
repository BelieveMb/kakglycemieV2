@extends('Patient.components.dashboard')
{{-- la liste de médecin validé par KaK --}}

@section('dashboardPatient')
<div class="w-full flex justify-center items-center content-center gap-10">
    <div class="py-1 px-2 w-[80%] lg:w-[60%] min-h-screen bg-gray-100/30 rounded-lg border shadow-md sm:p-8 ">

        <div class="flex justify-between items-center mb-4 gap-[5rem] ">
            <h3 class="text-base lg:text-xl font-bold leading-none text-gray-800">La liste des médecins</h3>
            <a href="{{ route('Patient.patientMedecinList') }}" 
            class="bg-transparent text-red-500 text-base rounded-lg px-2 py-1 font-semibold hover:bg-red-500 hover:text-gray-50  hover:border border border-red-400 hover:duration-700">
                Mes médecins <i class="bi bi-list"></i>
            </a>
        </div>
        <div class="flow-root">
            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                @if ($doctorNotFriends)
                    @foreach ($doctorNotFriends as $doctor) 
                        <a href="{{ route('Patient.aproposDoctor', ['doctor' => $doctor->idmedecin]) }}"
                            class="w-full py-3 sm:py-4 lg:hover:px-2 hover:rounded-lg hover:bg-gray-400/30 duration-150 cursor-pointer flex justify-start items-start">
                            <div class="flex items-center space-x-4 ">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-full"
                                        src="{{ asset('../images/profil.jpg') }}" alt="Doctor image" />
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-lg font-semibold truncate ">
                                        {{$doctor->name}} 
                                    </p>
                                    <p class="text-sm text-gray-800 truncate ">
                                        {{$doctor->specialite}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @else
                    <h2>Vous avez choisi aucun médecin, cliquez sur le bouton <u>Ajouter</u> pour ajouter un médecin </h2>
                @endif
            </ul>
        </div>
    </div>
  


</div>
@endsection