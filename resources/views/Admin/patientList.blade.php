<div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
      <div class="mb-4 flex items-center justify-between">
         <div>
            <h3 class="text-xl font-bold text-gray-900 mb-2">Nos patients</h3>
            <span class="text-base font-normal text-gray-500">Voici la liste de tous les patients qui sont inscrit sur KaK glycémie</span>
         </div>
         <div class="flex-shrink-0">
            <a href="#" class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg p-2">Voir plus</a>
         </div>
      </div>
      <div class="flex flex-col mt-8">
         <div class="overflow-x-auto rounded-lg">
            <div class="align-middle inline-block min-w-full">
                  <div class="shadow overflow-hidden sm:rounded-lg">
                     <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                              <tr>
                                 <th scope="col"
                                    class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nom complet
                                 </th>
                                 <th scope="col"
                                    class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Sexe
                                 </th>
                                 <th scope="col"
                                    class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Téléphone
                                 </th>
                              </tr>
                        </thead>
                        <tbody class="bg-white">
                           @foreach ( $listPatient as $patient )
                              
                              <tr>
                                 <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                    {{$patient->name}} 
                                 </td>
                                 <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-500">
                                    {{$patient->sexe}}                          
                                 </td>
                                 <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-500">
                                    {{$patient->phone}} 
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
