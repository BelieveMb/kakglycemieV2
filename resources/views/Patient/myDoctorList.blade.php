@extends('Patient.components.dashboard')
{{-- elle présente tous les docteurs  --}}
@section('dashboardPatient')
<div class="w-full flex justify-center items-center content-center gap-10">
    

    <div class="py-1 px-2 w-[80%] lg:w-[50%] min-h-screen bg-gray-100/50 rounded-lg border shadow-xl sm:p-8 ">

        <div class="flex justify-between items-center mb-4 gap-[5rem] ">
            <h3 class="text-base lg:text-2xl font-bold leading-none text-gray-800">Mes médecins</h3>
            <a href="{{ route('Patient.addDoctorVue') }}" 
            class="bg-transparent text-red-500 text-base rounded-lg px-2 py-1 font-semibold hover:bg-red-500 hover:text-gray-50  hover:border border border-red-400 hover:duration-700">
                Ajouter <i class="bi bi-plus-circle"></i>
            </a>

        </div>
        <div class="flow-root">
            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                @if ($doctorFriends)
                    @foreach ($doctorFriends as $doctor) 

                        <a  href="{{ route('Patient.aproposDoctor', ['doctor' => $doctor->idmedecin]) }}" 
                        class="w-full py-3 sm:py-4 lg:hover:px-2 hover:rounded-lg hover:bg-gray-400/30 duration-150 cursor-pointer flex justify-start items-start">
                            <div class="flex justify-start items-start space-x-4 ">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-full"
                                        src="{{ asset('../images/profil.jpg') }}" alt="Doctor image" />
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-lg font-semibold truncate ">
                                        {{$doctor->name}} 
                                    </p>
                                    <p class="text-sm text-gray-800 truncate ">
                                        {{$doctor->specialite}}
                                    </p>
                                </div>
                            </div>
                        </a>

                    @endforeach
                @else
                    <h2>Vous avez choisi aucun médecin, cliquez sur le bouton <u>Ajouter</u> pour ajouter un médecin </h2>
                @endif

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