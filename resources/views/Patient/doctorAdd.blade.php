@extends('Patient.components.dashboard')

@section('dashboardPatient')
<div class="w-full flex justify-center items-center content-center gap-10">
    <div class="py-1 px-2 max-w-[80%] lg:max-w-[70%] min-h-auto bg-gray-300/70 rounded-lg border shadow-md sm:p-8 ">

        <div class="flex justify-between items-center mb-4 gap-10">
            <h3 class="text-base lg:text-xl font-bold leading-none text-gray-700">Mes médecins</h3>
            <a href="#" class="text-2xl font-medium text-red-500 hover:text-red-800">
                <i class="bi bi-person-plus"></i>
            </a>
        </div>
        <div class="flow-root">
            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                @if ($doctorList)
                    
                    @foreach ($doctorList as $doctor) 
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-full"
                                        src="{{ asset('../images/profil.jpg') }}" alt="Doctor image" />
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-lg font-semibold truncate ">
                                        {{$doctor->nomMed}} 
                                    </p>
                                    <p class="text-sm text-gray-800 truncate ">
                                        {{$doctor->idmedecin}}
                                    </p>
                                </div>
                                <div class="inline-flex items-center  font-semibold text-gray-900 dark:text-white">
                                    <form action="{{ route('Patient.addNewDoctor', ['doctor' => $doctor->idmedecin]) }}" method="post">
                                    {{-- <form method="POST"> --}}
                                        @csrf
                                        <button class="bg-red-500 text-white text-base rounded-lg px-2 py-1 font-semibold hover:bg-transparent hover:text-red-500 hover:border-red-300 hover:border border border-red-500 hover:duration-700">Ajouter <i class="bi bi-plus-circle-fill"></i></button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    @endforeach
                @else
                    <h3>Empty</h3>
                @endif

            </ul>
        </div>
    </div>

    <div class="py-1 px-2 max-w-[80%] lg:max-w-[70%] min-h-auto bg-gray-300/70 rounded-lg border shadow-md sm:p-8 ">

        <div class="flex justify-between items-center mb-4 gap-10">
            <h3 class="text-base lg:text-xl font-bold leading-none text-white">Ajouter un médecin</h3>
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
                                    src="{{ asset('../images/profil.jpg') }}" alt="Doctor image" />
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-lg font-semibold truncate ">
                                    {{$doctor->nomMed}} 
                                </p>
                                <p class="text-sm text-gray-800 truncate ">
                                    {{$doctor->idmedecin}}
                                </p>
                            </div>
                            <div class="inline-flex items-center  font-semibold text-gray-900 dark:text-white">
                                <form action="{{ route('Patient.addNewDoctor', ['doctor' => $doctor->idmedecin]) }}" method="post">
                                {{-- <form method="POST"> --}}
                                    @csrf
                                    <button class="bg-red-500 text-white text-base rounded-lg px-2 py-1 font-semibold hover:bg-transparent hover:text-red-500 hover:border-red-300 hover:border border border-red-500 hover:duration-700">Ajouter <i class="bi bi-plus-circle-fill"></i></button>
                                </form>
                            </div>
                        </div>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>
  


</div>
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function ajouterMedecin(idMedecin) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: '/Patient.addNewDoctor',
            data: {
                doctor: idMedecin
            },
            success: function(response) {
                if (response.success) {
                    alert('Médecin ajouté avec succès!');
                } else {
                    alert('Une erreur s\'est produite lors de l\'ajout du médecin.');
                }
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    }
</script> --}}
@endsection