@extends('Admin.layout.dashboard')

@section('dashAdmin')
    <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto">
        <div class="pt-6 px-4">
            <div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4">

            </div>
            <!-- component -->
                <div class="max-w-lg mx-auto my-10 ">
                    <div class="bg-white rounded-lg shadow-md p-5">
                        <img class="w-32 h-32 rounded-full mx-auto" src="{{ asset('../images/profil.jpg') }}" alt="Profile image">
                        @if ($candidatDetails)
                            <h2 class="text-center text-2xl font-semibold mt-3">{{ $candidatDetails->name }} </h2>
                                <div class="flex justify-center">
                                    <p class="text-center text-gray-600 mt-1  flex flex-col lg:flex-row">Valider :   
                                        <span class="font-semibold text-red-500 "> {{$candidatDetails->valider}} </span>
                                    </p>
                                </div>
                            

                            <div class="flex justify-center flex-wrap mt-5">
                                <span  class="text-red-500 font-semibold hover:text-red-700  mx-3"> <i class="bi bi-hospital"></i> {{ $candidatDetails->hopital }}</span>
                                <span  class="text-red-500 font-semibold hover:text-red-700  mx-3"> <i class="bi bi-clipboard2-pulse-fill"></i>  {{ $candidatDetails->specialite }}</span>
                                <span  class="text-red-500 font-semibold hover:text-red-700  mx-3"> <i class="bi bi-calendar-heart"></i> {{ $candidatDetails->updated_on }}</span>
                            </div>
                            <div class="flex justify-center flex-wrap mt-5">
                                <a href="{{ route('Patient.dashboardForm') }}" class="text-gray-500 font-semibold hover:text-gray-700  mx-3"> <i class="bi bi-telephone"></i> {{ $candidatDetails->phone }} </a>
                                <a href="{{ route('Patient.statistiqueGlycemie') }}" class="text-gray-500 font-semibold hover:text-gray-700  mx-3"> <i class="bi bi-envelope"></i>  {{ $candidatDetails->email }}</a>
                            </div>
                        @else
                            <a href="{{ route('admin.candidats') }}" class="text-red-500 font-semibold hover:text-red-700  mx-3"> <i class="bi bi-arrow-clockwise"></i>  Il y'a une erreur, recommencez s'il vous plait </a>
                        @endif
                    </div>
                    
                    <div class="mt-5 bg-white rounded-lg shadow-md p-5">
                        {{-- to include the update-Profile --}}
                        @include('Admin.components.infoCandidat')
                    </div>

                </div>
        </div>


    
    </div>
@endsection