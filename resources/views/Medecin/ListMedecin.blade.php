@extends('Medecin.layout.dashMed')

@section('dashMedecin')
    <div class="w-full flex justify-center items-center content-center gap-10">


        <div class="py-1 px-2 max-w-[80%] lg:max-w-[60%] min-h-auto bg-gray-400 rounded-lg border shadow-md sm:p-8 ">

            <div class="flex justify-between items-center mb-4 gap-[5rem] ">
                <h3 class="text-base lg:text-xl font-bold leading-none text-gray-50">Mes patients</h3>
                <a href="{{ route('Patient.addNewDoctor') }}"
                    class="text-xl text-red-500"
                >
                     <i class="bi bi-people"></i>
                </a>
            </div>
            <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                    @if (empty($patientList))
                        @foreach ($patientList as $patient)
                            <li class="py-3 sm:py-4 hover:bg-gray-400/30 cursor-pointer">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full" src="{{ asset('../images/profil.jpg') }}"
                                            alt="patient image" />
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-lg font-semibold truncate ">
                                            {{ $patient->name }}
                                        </p>
                                        <p class="text-sm text-gray-800 truncate ">
                                            {{ $patient->telPat }}
                                        </p>
                                    </div>
                                    <div class="inline-flex items-center  font-semibold text-gray-900 dark:text-white">
                                        <form action="{{ route('Patient.addNewDoctor', ['doctor' => $doctor->idmedecin]) }}"
                                            method="post">
                                            {{-- <form method="POST"> --}}
                                            @csrf
                                            <button
                                                class="bg-red-500 text-white text-base rounded-lg px-2 py-1 font-semibold hover:bg-transparent hover:text-red-500 hover:border-red-300 hover:border border border-red-500 hover:duration-700">En savoir plus
                                                <i class="bi bi-eye"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @else
                        <h3 class="font-semibold text-xl">Vous avez aucun patient qui vous a choisi, demander à vos patients de  <span
                                class="text-red-500">vous ajouter</span> </h3>
                    @endif


                </ul>
            </div>
        </div>



    </div>
@endsection
