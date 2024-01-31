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
                                    <p class="text-lg font-semibold truncate dark:text-white">
                                        {{$doctor->nomMed}} 
                                    </p>
                                    <p class="text-sm text-gray-800 truncate ">
                                        {{$doctor->infosMed}}
                                    </p>
                                </div>
                                <div class="inline-flex items-center  font-semibold text-gray-900 dark:text-white">
                                    <form action="{{ route('Patient.addNewDoctor', ['doctor' => $doctor->idmedecin]) }}" method="post">
                                        @csrf
                                        @if (Session::has('success'))
                                            <div class="bg-gray-700 mb-2  rounded-xl flex justify-between p-3 text-gray-100 font-semibold">
                                                {{ Session::get('success') }}
                                            </div>
                                        @else
                                            <button class="bg-red-500 text-white text-base rounded-lg px-2 py-1 font-semibold hover:bg-transparent hover:text-red-100 hover:border-gray-300 hover:border border border-gray-600 hover:duration-700">Ajouter <i class="bi bi-plus-circle-fill"></i></button>
                                        @endif
                                    </form>
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