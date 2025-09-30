@extends('Medecin.layout.dashMed')

@section('dashMedecin')
<div class="max-w-lg mx-auto my-10 ">
    <div class="bg-white rounded-lg shadow-md p-5">
        <img class="w-32 h-32 rounded-full mx-auto" src="{{ asset('../images/profil.jpg') }}" alt="Profile image">
            <h2 class="text-center text-2xl font-semibold mt-3"> {{ $infosUser->name }} </h2>

            <div class="flex justify-center flex-wrap mt-5">
                <a href="{{ route('Patient.dashboardForm') }}" class="text-red-500 font-semibold hover:text-red-700  mx-3"> <i class="bi bi-heart-pulse-fill"></i> {{ $infosUser->phone }} dl/ml</a>
                <a href="{{ route('Patient.statistiqueGlycemie') }}" class="text-red-500 font-semibold hover:text-red-700  mx-3"> <i class="bi bi-clipboard2-pulse-fill"></i>  {{ $infosUser->email }}</a>
                {{-- <a href="{{ route('Patient.patientProfile') }}" class="text-red-500 font-semibold hover:text-red-700  mx-3"> <i class="bi bi-calendar-heart"></i> {{ $infosUser->datetrait }}</a> --}}
            </div>
            <div class="flex justify-center flex-wrap mt-5">
                <a href="{{ route('Patient.dashboardForm') }}" class="text-gray-500 font-semibold hover:text-gray-700  mx-3"> <i class="bi bi-telephone"></i>  {{ $infosUser->phone }} </a>
                <a href="{{ route('Patient.statistiqueGlycemie') }}" class="text-gray-500 font-semibold hover:text-gray-700  mx-3"> <i class="bi bi-envelope"></i>  {{ $infosUser->email }}</a>
            </div>
        
    </div>
    
    <div class="mt-5 bg-white rounded-lg shadow-md p-5">
        @include('Medecin.components.infoProfilForm')
    </div>

    <div class="mt-5 bg-white rounded-lg shadow-md p-5">
        {{-- to include the update-password --}}
        @include('Patient.components.updatePassword')
        <p class="text-gray-600 mt-2"> <b>Important à savoir </b> : pour plus de sécurité, vous devez mettre un mot de passe qui comporte plus de 8 caractères.</p>
    </div>
</div>    
@endsection