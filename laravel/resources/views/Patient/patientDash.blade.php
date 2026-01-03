
@extends('Patient.components.dashboard')

@section('dashboardPatient')

<div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4">
    @include('Patient.graphe')
    @include('Patient.formAdd')
</div>
@endsection