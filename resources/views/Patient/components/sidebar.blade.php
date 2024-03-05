<aside id="sidebar" class="fixed hidden z-20 h-full top-0 left-0 pt-16 lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75" aria-label="Sidebar">
<div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-gray-50  pt-0">
   <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
      <div class="flex-1 px-3 bg-gray-50 divide-y space-y-1">
         <ul class="space-y-2 pb-2">
            <li>
               <form action="#" method="GET" class="lg:hidden">
                  <label for="mobile-search" class="sr-only">Trouvez un médecin</label>
                  <div class="relative">
                     <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <!-- <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                        </svg> -->
                        <span class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75">
                           <i class="ml-1 text-xl bi bi-person"></i>
                        </span>
                     </div>
                     <input type="text" name="email" id="mobile-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:bg-red-600  block w-full pl-10 p-2.5" placeholder="Trouvez un médecin...">
                  </div>
               </form>
            </li>
            <li>
               <a href="{{ route('Patient.dashboardForm') }}" class="@if(request()->route()->getName()=== 'Patient.dashboardForm') bg-gray-200 @endif text-gray-900 font-normal text-base  rounded-lg flex items-center p-2 hover:bg-gray-100 hover:font-semibold hover:text-red-500 group">
                  <span class="@if(request()->route()->getName()=== 'Patient.dashboardForm') bg-gray-200 font-semibold text-red-500 @endif">
                     <span class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75">
                        <i class="ml-1 text-xl bi bi-heart-pulse-fill"></i>
                     </span>
                     <span class="ml-3">Ma glycémie</span>
                  </span>
               </a>
            </li>

            {{-- <li>
               <a href="{{ route('Patient.patientChat') }}" class="@if(request()->route()->getName()=== 'Patient.patientChat') bg-gray-200 @endif text-gray-900 font-normal text-base  rounded-lg flex items-center p-2 hover:bg-gray-100 hover:font-semibold hover:text-red-500 group">
                  <span class="@if(request()->route()->getName()=== 'Patient.patientChat') bg-gray-200 font-semibold text-red-500 @endif">

                     <i class="ml-1 text-xl bi bi-chat-left-text"></i>
                  </span>
                  <span class="ml-3 flex-1 whitespace-nowrap">Discussions</span>
                  <span class="bg-gray-200 text-gray-800 ml-3 text-sm font-medium inline-flex items-center justify-center px-2 rounded-full">+125</span>
               </a>
            </li> --}}

            <li>
               <a href="{{route('Patient.patientMedecinList') }}" class="text-base text-gray-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 hover:font-semibold hover:text-red-500 group">
                  <span class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75">
                     <i class="ml-1 text-xl bi bi-person-plus"></i>
                  </span>
                  <span class="ml-3 flex-1 whitespace-nowrap">Médecins</span>
               </a>
            </li>

            <li>
               <a href="{{ route('Patient.patientProfile') }}" class="@if(request()->route()->getName()=== 'Patient.statistiqueGlycemie') bg-gray-200 @endif text-gray-900 font-normal text-base  rounded-lg flex items-center p-2 hover:bg-gray-100 hover:font-semibold hover:text-red-500 group">
                  <span class="@if(request()->route()->getName()=== 'Patient.patientProfile') bg-gray-200 font-semibold text-red-500 @endif">
                     <span class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75">
                        <i class="ml-1 text-xl bi bi-person-circle"></i>
                     </span>
                     <span class="ml-3 flex-1 whitespace-nowrap">Mon profil</span>
                  </span>
               </a>
            </li>

            <li>
               <a href="{{ route('Patient.statistiqueGlycemie') }}" class="@if(request()->route()->getName()=== 'Patient.statistiqueGlycemie') bg-gray-200 @endif text-gray-900 font-normal text-base  rounded-lg flex items-center p-2 hover:bg-gray-100 hover:font-semibold hover:text-red-500 group">
                     <span class=" w-6 h-6 flex-shrink-0 group-hover:text-gray-900 transition duration-75 ">
                        <i class="ml-1 text-xl bi bi-calendar2-heart"></i>
                     </span>
                     <span class="ml-3 flex-1 whitespace-nowrap ">Stat. Glycémie</span> 
                  </span>
               </a>
            </li>


            <li>
               <a href="{{ route('logoutUser') }}" class="text-base text-gray-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 hover:font-semibold hover:text-red-500 group">                           
                  <span class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75">
                     <i class="ml-1 text-xl bi bi-box-arrow-right"></i>
                  </span>
                  <span class="ml-3 flex-1 whitespace-nowrap">Deconnexion</span>

               </a>
            </li>
            
         </ul>
         
      </div>
   </div>
</div>
</aside>