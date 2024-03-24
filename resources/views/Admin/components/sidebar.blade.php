<aside id="sidebar" class="fixed hidden z-20 h-full top-0 left-0 pt-16 lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75" aria-label="Sidebar">
   <div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-red-500  pt-0">
      <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
         <div class="flex-1 px-3 bg-red-500 divide-y space-y-1">
            <ul class="space-y-2 pb-2">
              
               <li>
                  <a href="{{ route('admin.dashboardAdmin') }}" class="@if(request()->route()->getName()=== 'admin.dashboardAdmin') bg-gray-200 @endif text-gray-50 font-normal text-base  rounded-lg flex items-center p-2 hover:bg-gray-100 hover:font-semibold hover:text-red-500 group">
                     <span class="@if(request()->route()->getName()=== 'admin.dashboardAdmin') bg-gray-200 font-semibold text-red-500 @endif">
                        <span class="@if(request()->route()->getName()=== 'admin.dashboardAdmin')  text-red-500 @endif w-6 h-6 flex-shrink-0 hover:text-red-500 transition duration-75">
                           <i class="ml-1 text-xl bi bi-people-fill"></i>
                        </span>
                        <span class="ml-3">Nos patients</span>
                     </span>
                  </a>
               </li>

               <li>
                  <a href="{{ route('admin.monProfil') }}" class="@if(request()->route()->getName()=== 'admin.monProfil') bg-gray-200 @endif text-gray-50 font-normal text-base  rounded-lg flex items-center p-2 hover:bg-gray-100 hover:font-semibold hover:text-red-500 group">
                     <span class="@if(request()->route()->getName()=== 'admin.monProfil') bg-gray-200 font-semibold text-red-500 @endif">
                        <span class="   w-6 h-6 flex-shrink-0 hover:text-red-500 transition duration-75">

                           <i class="ml-1 text-xl bi bi-person-circle"></i>
                        </span>
                        <span class="ml-3 flex-1 whitespace-nowrap">Les candidatures</span>
                     </span>
                  </a>
               </li>

               {{-- <li>
                  <a href="{{ route('admin.monProfil') }}" class="@if(request()->route()->getName()=== 'admin.monProfil') bg-gray-200 @endif text-gray-50 font-normal text-base  rounded-lg flex items-center p-2 hover:bg-gray-100 hover:font-semibold hover:text-red-500 group">
                     <span class="@if(request()->route()->getName()=== 'admin.monProfil') bg-gray-200 font-semibold text-red-500 @endif">
                        <span class="   w-6 h-6 flex-shrink-0 hover:text-red-500 transition duration-75">

                           <i class="ml-1 text-xl bi bi-person-circle"></i>
                        </span>
                        <span class="ml-3 flex-1 whitespace-nowrap">Nos médecins</span>
                     </span>
                  </a>
               </li>
               
               <li>
                  <a href="{{ route('admin.contactKaK') }}" class="@if(request()->route()->getName()=== 'Patient.statistiqueGlycemie') bg-gray-200 @endif text-gray-50 font-normal text-base  rounded-lg flex items-center p-2 hover:bg-gray-100 hover:font-semibold hover:text-red-500 group">
                        <span class=" w-6 h-6 flex-shrink-0 group-hover:text-red-500 transition duration-75 ">
                           <i class="ml-1 text-xl bi bi-person-workspace"></i>
                        </span>
                        <span class="ml-3 flex-1 whitespace-nowrap ">Messages </span> 
                     </span>
                  </a>
               </li> --}}
               <li>
                  <a href="{{ route('admin.logoutAdmin') }}" class="text-base text-gray-50 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 hover:font-semibold hover:text-red-500 group">                           
                     <span class="@if(request()->route()->getName()=== 'admin.logoutAdmin')  text-red-500 @endif w-6 h-6 flex-shrink-0 hover:text-red-500 transition duration-75">

                        <i class="ml-1 text-xl bi bi-box-arrow-right"></i>
                     </span>
                     <span class="ml-3 flex-1 whitespace-nowrap ">Deconnexion</span>

                  </a>
               </li>
               
               
            </ul>
            
         </div>
      </div>
   </div>
</aside>