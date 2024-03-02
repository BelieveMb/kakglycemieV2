@extends('Medecin.layout.dashMed')

@section('dashMedecin')
<div class="max-w-lg mx-auto my-10 ">
    <div class="bg-white rounded-lg shadow-md p-5">
        <img class="w-32 h-32 rounded-full mx-auto" src="{{ asset('../images/profil.jpg') }}" alt="Profile image">
        {{-- @if ($lastTraitement) --}}
            <h2 class="text-center text-2xl font-semibold mt-3"> James King </h2>
                {{-- @php $taux = $lastTraitement->taux @endphp                             --}}
                @php $statut = "Rien à signaler" @endphp    

            <p class="text-center text-gray-600 mt-1 flex flex-col lg:flex-row">Statut glycémie :  
                <span class="font-semibold text-red-500 ">{{$statut}} </span>
            </p>

            <div class="flex justify-center flex-wrap mt-5">
                <a href="{{ route('Patient.dashboardForm') }}" class="text-red-500 font-semibold hover:text-red-700  mx-3"> <i class="bi bi-heart-pulse-fill"></i> {{ $lastTraitement->taux }} dl/ml</a>
                <a href="{{ route('Patient.statistiqueGlycemie') }}" class="text-red-500 font-semibold hover:text-red-700  mx-3"> <i class="bi bi-clipboard2-pulse-fill"></i>  {{ $lastTraitement->jour }}e jour</a>
                <a href="{{ route('Patient.patientProfile') }}" class="text-red-500 font-semibold hover:text-red-700  mx-3"> <i class="bi bi-calendar-heart"></i> {{ $lastTraitement->datetrait }}</a>
            </div>
            <div class="flex justify-center flex-wrap mt-5">
                <a href="{{ route('Patient.dashboardForm') }}" class="text-gray-500 font-semibold hover:text-gray-700  mx-3"> <i class="bi bi-telephone"></i> {{ $infoPatient->telPat }} </a>
                <a href="{{ route('Patient.statistiqueGlycemie') }}" class="text-gray-500 font-semibold hover:text-gray-700  mx-3"> <i class="bi bi-envelope"></i>  {{ $infoPatient->email }}</a>
            </div>
        @else
            <a href="{{ route('Patient.dashboardForm') }}" class="text-red-500 font-semibold hover:text-red-700  mx-3"> <i class="bi bi-heart-pulse-fill"></i>  Commencez votre traitement </a>
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
@endsection