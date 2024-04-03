@extends('Medecin.layout.dashMed')

@section('dashMedecin')
    <div class="w-full flex justify-between items-center content-center gap-10">
        <div class="py-1 px-2 w-[96%] lg:w-[50%] min-h-screen rounded-lg border-2 shadow-md p-2 lg:p-8 ">
            @include('Medecin.components.patientGraphe')
        </div>
        <div class=" w-[96%] lg:w-[50%] min-h-screen rounded-lg border-2 shadow-md p-2 lg:p-1 ">
            @include('Medecin.components.patientStat')
        </div>
    </section>
@endsection
