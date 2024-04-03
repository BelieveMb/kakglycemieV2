@extends('Medecin.layout.dashMed')

@section('dashMedecin')
    <div class="w-full flex justify-center items-center content-center gap-10">
        <div class="py-1 px-2 w-[96%] lg:w-[60%] min-h-screen bg-gray-300/30 rounded-lg border-2 shadow-md p-2 lg:p-8 ">

            <div class="flex justify-between items-center mb-4 gap-[5rem] ">
                <h3 class="text-base lg:text-xl font-bold leading-none text-gray-700">Mes patients</h3>
                <span  class="text-xl text-red-500" >
                    <i class="bi bi-people"></i>
                </span>
            </div>

            <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                    @if (empty($patientList))
                        <h3 class="font-semibold text-xl">Vous avez aucun patient qui vous a choisi, demander à vos patients de  <span
                            class="text-red-500">vous ajouter</span> </h3>
                    @else
                        @foreach ($patientList as $patient)
                             {{-- {{ route('Medecin.contactKaK', ['patientId' => $patientList->idpatient]) }}" --}}
                              <a href="#"  class="w-full py-3 sm:py-4 hover:px-2 hover:rounded-lg hover:bg-gray-400/30 duration-150 cursor-pointer flex justify-start items-start">
                                 
                                {{-- class="py-3 sm:py-4 hover:bg-gray-400/30 cursor-pointer"> --}}
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full" src="{{ asset('../images/profil.jpg') }}"
                                            alt="patient image" />
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-lg font-semibold truncate text-gray-800 ">
                                            {{ $patient->name }}
                                        </p>
                                        <p class="text-sm text-gray-800 truncate ">
                                            {{ $patient->phone }}
                                        </p>
                                    </div>
                                   
                                </div>
                            </a>
                        @endforeach
                    @endif


                </ul>
            </div>
        </div>



    </div>
@endsection
