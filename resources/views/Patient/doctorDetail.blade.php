@extends('Patient.components.dashboard')

@section('dashboardPatient')
<div class="w-full flex justify-center items-center content-center">
    <div class="py-1 px-2 max-w-[80%] lg:max-w-[50%] min-h-screen bg-gray-100/20 rounded-lg border shadow-md sm:p-8 ">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-base lg:text-2xl font-bold leading-none text-gray-600 flex items-center gap-2 "> 
                <a href="{{ route('Patient.patientMedecinList') }}" class="text-red-600" title="Voir la liste">
                    <i class="bi bi-arrow-left"></i></a> A propos du médecin
            </h3>
            <a href="#" class="text-base lg:text-2xl font-medium text-red-500 hover:text-red-800">
                <i class="bi bi-info-circle"></i>
            </a>
        </div>
        <div class="flow-root">
            <div class="text-center p-6  border-b">
                <img
                  class="h-24 w-24 rounded-full mx-auto"
                  src="{{ asset('../images/profil.jpg') }}"
                  alt="Avatar du médecin"
                />
                <p class="pt-2 text-lg font-semibold">{{$detailMedecin->nomMed}} </p>
                <p class="text-sm text-gray-600"> {{$detailMedecin->specialite}} </p>
               
              </div>
              <div class="border-b">
                <a href="#" class="px-4 py-2 hover:bg-gray-100 flex">
                  <div class="text-gray-800">
                    <svg
                      fill="none"
                      stroke="currentColor"
                      strokeLinecap="round"
                      strokeLinejoin="round"
                      strokeWidth="1"
                      viewBox="0 0 24 24"
                      class="w-5 h-5"
                    >
                      <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                  </div>
                  <div class="pl-3">
                    <p class="text-sm font-medium text-gray-800 leading-none">Hôpital de prestation</p>
                    <p class="text-xs text-gray-500">{{$detailMedecin->hopital}}  </p>
                  </div>
                </a>
                <a href="#" class="px-4 py-2 hover:bg-gray-100 flex">
                  <div class="text-gray-800 text-2xl">
                    <i class="bi bi-hospital"></i>
                  </div>
                  <div class="pl-3">
                    <p class="text-sm font-medium text-gray-800 leading-none">Téléphone </p>
                    <p class="text-xs text-gray-500"> {{$detailMedecin->telMed}}</p>
                  </div>
                </a>
                <a href="#" class="px-4 py-2 hover:bg-gray-100 flex">
                  <div class="text-gray-800">
                    <svg
                      fill="none"
                      stroke="currentColor"
                      strokeLinecap="round"
                      strokeLinejoin="round"
                      strokeWidth="1"
                      viewBox="0 0 24 24"
                      class="w-5 h-5"
                    >
                      <path d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </div>
                  <div class="pl-3">
                    <p class="text-sm font-medium text-gray-800 leading-none">Infos médecin</p>
                    <p class="text-xs text-gray-500">{{$detailMedecin->descriptionMed}}</p>
                  </div>
                </a>
                
              </div>
      
              <div class="">
                <a href="{{ route('Patient.patientMedecinList') }}" class="px-4 py-2 pb-4 hover:bg-gray-100 flex underline hover:no-underline">
                    <p class="text-sm font-medium text-gray-800 leading-none"> <i class="ml-1 text-xl bi bi-person-plus"></i> Voir la liste des médecins</p>
                  </a>
                {{-- <a href="#" class="px-4 py-2 pb-4 hover:bg-gray-100 flex">
                  <p class="text-sm font-medium text-gray-800 leading-none">Supprimer le médecin</p>
                </a>
                <a href="#" class="px-4 py-2 pb-4 hover:bg-gray-100 flex">
                  <p class="text-sm font-medium text-gray-800 leading-none">Signaler un abus</p>
                </a> --}}
              </div>
           
             
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