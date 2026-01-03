@extends('Medecin.layout.dashMed')
 
@section('dashMedecin')
    <div class="flex justify-between items-center mb-4 gap-[5rem] ">
        <a href="{{ route('Medecin.dashboard') }}">
            <span  class="text-2xl text-red-500" >
                <i class="bi bi-arrow-left"></i>
            </span>
        </a>
        <h3 class="text-base lg:text-2xl font-bold leading-none text-gray-700">Les informations du patient</h3>
        <span  class="text-2xl text-red-500" >
            <i class="bi bi-person"></i>
        </span>
    </div>
    <div class="w-full flex lg:flex-row flex-col justify-between gap-2">
        <div class="px-2 w-[96%] lg:w-[50%] min-h-auto lg:min-h-screen rounded-lg border-2 shadow-md p-2 lg:p-8 ">
            @include('Medecin.components.patientGraphe')
        </div>
        <div class=" w-[96%] lg:w-[50%] min-h-auto lg:.min-h-screen rounded-lg border-2 shadow-md p-2 lg:p-8 ">
            @include('Medecin.components.patientStat')
        </div>
    </div>
    </section>
@endsection
