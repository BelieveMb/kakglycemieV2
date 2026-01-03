  <!--Bootstrap icon-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script src="https://cdn.tailwindcss.com"></script>

<nav class="bg-red-500 border-b border-red-500 text-gray-50 fixed z-30 w-full">
      <div class="px-3 py-3 lg:px-5 lg:pl-3">
         <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
               <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar" class="lg:hidden mr-2 text-gray-300 hover:text-gray-900 cursor-pointer p-2 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:text-gray-800 rounded">
                  <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                  </svg>
                  <svg id="toggleSidebarMobileClose" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                  </svg>
               </button>
               <a href="{{ route('admin.dashboardAdmin') }}" class="text-xl font-bold flex items-center lg:ml-2.5">
                  <img src="{{ asset('../images/logo_white.png') }}" class="h-6 mr-2" alt="Kak glycémie Logo">
                  <span class="self-center whitespace-nowrap text-gray-50">KaK glycémie</span>
               </a>
               
            </div>
            <div class="flex items-center">
              
               
               
               <a href="{{ route('admin.logoutAdmin') }}" class="hidden sm:inline-flex ml-5 text-red-500 bg-gray-100 hover:bg-gray-500 hover:text-gray-50 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center items-center mr-3">
                  Se déconnecter
                  <i class="ml-1 text-xl bi bi-box-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
   </nav>