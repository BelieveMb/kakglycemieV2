@extends('Patient.components.dashboard')

@section('dashboardPatient')
<div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-2 gap-4">
    <div class="w-[80%] mx-auto">
        <div class="p-4 max-w-full bg-gray-400 rounded-lg border shadow-md sm:p-8 ">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold leading-none text-white">Ajouter un médecin</h3>
                <a href="#" class="text-2xl font-medium text-red-500 hover:text-red-800">
                    <i class="bi bi-person-plus"></i>
                </a>
            </div>
            <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach ($doctorList as $doctor) 
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-full"
                                        src="https://flowbite.com/docs/images/people/profile-picture-1.jpg" alt="Neil image">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        {{$doctor->nomMed}}
                                    </p>
                                    <p class="text-sm text-gray-800 truncate ">
                                        {{$doctor->infosMed}}
                                    </p>
                                </div>
                                <div class="inline-flex items-center  font-semibold text-gray-900 dark:text-white">
                                    <button class="bg-red-500 text-white text-base rounded-lg px-2 py-1 font-semibold hover:bg-transparent hover:text-gray-300 hover:border-gray-300 hover:border-2">Ajouter <i class="bi bi-plus-circle-fill"></i></button>
                                </div>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
    <div class="max-w-[50%] mx-auto bg-gray-900 ">
        <h1>Détail profil</h1>
    </div>

</div>
@endsection