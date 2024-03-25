@extends('Admin.layout.dashboard')

@section('dashAdmin')
    <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
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
                                    <p class="text-center text-gray-600 mt-1  flex flex-col lg:flex-row">Statut glycémie :  
                                        <span class="font-semibold text-red-500 ">{{$candidatDetails->name}} </span>
                                    </p>
                                </div>
                            

                            <div class="flex justify-center flex-wrap mt-5">
                                <a href="{{ route('Patient.dashboardForm') }}" class="text-red-500 font-semibold hover:text-red-700  mx-3"> <i class="bi bi-heart-pulse-fill"></i> {{ $candidatDetails->name }} dl/ml</a>
                                <a href="{{ route('Patient.statistiqueGlycemie') }}" class="text-red-500 font-semibold hover:text-red-700  mx-3"> <i class="bi bi-clipboard2-pulse-fill"></i>  {{ $candidatDetails->name }}e jour</a>
                                <a href="{{ route('Patient.patientProfile') }}" class="text-red-500 font-semibold hover:text-red-700  mx-3"> <i class="bi bi-calendar-heart"></i> {{ $candidatDetails->name }}</a>
                            </div>
                            <div class="flex justify-center flex-wrap mt-5">
                                <a href="{{ route('Patient.dashboardForm') }}" class="text-gray-500 font-semibold hover:text-gray-700  mx-3"> <i class="bi bi-telephone"></i> {{ $candidatDetails->name }} </a>
                                <a href="{{ route('Patient.statistiqueGlycemie') }}" class="text-gray-500 font-semibold hover:text-gray-700  mx-3"> <i class="bi bi-envelope"></i>  {{ $candidatDetails->name }}</a>
                            </div>
                        @else
                            <a href="{{ route('admin.candidats') }}" class="text-red-500 font-semibold hover:text-red-700  mx-3"> <i class="bi bi-arrow-clockwise"></i>  Il y'a une erreur, recommencez s'il vous plait </a>
                        @endif
                    </div>
                    
                    <div class="mt-5 bg-white rounded-lg shadow-md p-5">
                        {{-- to include the update-Profile --}}
                        @include('Patient.components.updateProfile')
                    </div>

                    <div class="mt-5 bg-white rounded-lg shadow-md p-5">
                        {{-- to include the update-password --}}
                        @include('Patient.components.updatePassword')
                        <p class="text-gray-600 mt-2">John is a software engineer with over 10 years of experience in developing web and mobile applications. He is skilled in JavaScript, React, and Node.js.</p>
                    </div>
                </div>
        </div>


    
        @include('Patient.components.footer')
        <p class="text-center text-sm text-gray-500 my-10">
            &copy; 2019-2021 <a href="#" class="hover:underline" target="_blank">Themesberg</a>. All rights reserved.
        </p>
    </div>
@endsection