@extends('Admin.layout.dashboard')

@section('dashAdmin')
    <div class="w-full flex justify-center items-center content-center gap-10 overflow-hidden">
        <h2>Form de recherche et le style du tab</h2>
    </div>
    <div class="w-full flex justify-center items-center content-center gap-10 overflow-hidden">
        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 h-screen mb-10 max-w-[95%] lg:max-w-[80%]">
            <div class="py-4 flex items-center justify-between">
               <div >
                  <h3 class="text-xl font-bold text-gray-900 mt-6 mb-2">Les candidatures</h3>
                  <span class="text-base font-normal text-gray-500  ">Voici la liste de tous les candidatures de médecins qui postule sur KaK glycémie</span>
               </div>
            </div>
            <div class="flex flex-col mt-8">
               <div class="overflow-x-auto rounded-lg ">
                  <div class="align-middle inline-block ">
                        <div class="shadow overflow-hidden rounded-lg ">
                           <table class="divide-y divide-gray-200   ">
                              <thead class="bg-gray-50  ">
                                    <tr>
                                       <th scope="col"
                                          class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                          Nom complet 
                                       </th>
                                       <th scope="col"
                                          class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                          Hôpital
                                       </th>
                                       <th scope="col"
                                          class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                          Spécialité
                                       </th>
                                       <th scope="col"
                                          class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                          Validation
                                       </th>
                                       <th scope="col"
                                          class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                          Action
                                       </th>
                                    </tr>
                              </thead>
                              <tbody class="bg-white  ">
                                 @foreach ( $candidats as $candidat )
                                    
                                    <tr class=" border-b-2 text-gray-700 hover:bg-gray-200 ">
                                       <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                          {{$candidat->name}} 
                                       </td>
                                       <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-500">
                                          {{$candidat->hopital}}                          
                                       </td>
                                       <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-500">
                                          {{$candidat->specialite}} 
                                       </td>
                                       <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-500">
                                          {{$candidat->valider}} 
                                       </td>
                                       <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900 cursor-pointer">
                                            <a href="{{ route('admin.candidatDetail', ['candidat' => $candidat->idmedecin]) }}" class="text-2xl hover:text-red-500 "> 
                                                <i class="bi bi-plus-circle-dotted"></i>
                                            </a>
                                       </td>

                                    </tr>
                                 @endforeach
                                 
                                    
                              </tbody>
                           </table>
                        </div>
                  </div>
               </div>
            </div>
      </div>
    </div>
@endsection
