<div class="w-full flex justify-center items-center content-center gap-10">
    <div class="mt-4 w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
           <div class="flex items-center">
              <div class="flex-shrink-0">
                 <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">{{$listPatientCount}} </span>
                 <h3 class="text-base font-normal text-gray-500">Patients inscrits</h3>
              </div>
              <div class="ml-5 w-0 flex items-center justify-end flex-1 text-red-500 text-[3rem] font-bold">
                 <i class=" bi bi-people-fill"></i>
              </div>
           </div>
        </div>
        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
            <div class="flex items-center">
               <div class="flex-shrink-0">
                  <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">{{$listMedecinCount}} </span>
                  <h3 class="text-base font-normal text-gray-500">Médecins inscrits</h3>
               </div>
               <div class="ml-5 w-0 flex items-center justify-end flex-1 text-red-500 text-[3rem] font-bold">
                  <i class=" bi bi-person-circle"></i>
               </div>
            </div>
         </div>
         <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
            <div class="flex items-center">
               <div class="flex-shrink-0">
                  <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">{{$listCandidatCount}} </span>
                  <h3 class="text-base font-normal text-gray-500">Candidatures déposés</h3>
               </div>
               <div class="ml-5 w-0 flex items-center justify-end flex-1 text-red-500 text-[3rem] font-bold">
                  <i class=" bi bi-person-plus"></i>
               </div>
            </div>
         </div>
       
     </div>    

        {{-- <div class="py-1 px-2 max-w-[90%] lg:max-w-[80%] min-h-auto bg-gray-700 text-gray-100 font-medium rounded-lg border shadow-md sm:p-8 ">

        </div> --}}



    </div>