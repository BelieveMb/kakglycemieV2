<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KaK glycémie/ les statistiques de sa glycémie</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="{{ asset('../css/AllUsers.css') }}">
    </head> 
<body>
    <main>
        <div>
            @include('Patient.components.header')
            <div class="flex overflow-hidden bg-red-900 pt-16">
                @include('Patient.components.sidebar')
                {{-- <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div> --}}
                <div id="main-content" class="h-full w-full lg:w-[81%] bg-gray-300 p-0 m-0 fixed lg:ml-64">
                    <div class="w-full pt-[7rem] ">
                        <div class="w-full h-auto bg-gray-300/100 " >
                          <div class="container mx-auto" style="margin-top: -128px;">
                              <div class="py-6 h-screen">
                                  <div class="flex border border-grey rounded shadow-lg h-full">
                                      <!-- Left -->
                                        @include('Patient.components.doctorList')     
                 
                                      <!-- Right -->
                                      <div class="w-full lg:w-2/3 border flex flex-col ">
                  
                                          <!-- Header -->
                                          <div class="py-2 px-3 bg-grey-lighter flex flex-row justify-between items-center">
                                              <div class="flex items-center">
                                                  <div class="flex lg:hidden
                                                  items-center gap-3 cursor-pointer">
                                                      <i class="bi bi-arrow-left text-lg
                                                      hover:text-red-500"></i>
                                                      <img class="w-10 h-10 rounded-full" src="https://darrenjameseeley.files.wordpress.com/2014/09/expendables3.jpeg"/>
                                                  </div>
                                                  <div class="ml-4">
                                                      <p class="text-red-500 font-semibold">
                                                          Dr. Jean Louis
                                                      </p>
                                                      <p class="text-gray-700 text-xs mt-1">
                                                          HJ Hopitals, Saint Joseph
                                                      </p>
                                                  </div>
                                              </div>
                  
                                              <div class="flex cursor-pointer">
                                                  <div class="hover:text-red-500">
                                                      <i class="bi bi-search"></i>
                                                  </div>
                                                  <div class="ml-3 hover:text-red-500">
                                                      <i class="bi bi-three-dots-vertical"></i>
                                                  </div>
                                                  <div class="ml-3 hover:text-red-500">
                                                    <i class="bi bi-person-fill"></i>
                                                  </div>
                                              </div>
                                          </div>
                  
                                          <!-- Messages background-color: #DAD3CC-->
                                          <div class="flex-1 overflow-scroll bg-no-repeat bg-cover  bg-center"
                                          style="background-image:url('{{asset('images/chatMed.jpg')
                                          }}');">
                                              <div class="py-2 px-3">
                  
                                                  <div class="flex justify-center mb-2">
                                                      <div class="rounded py-2 px-4 bg-red-500 text-gray-50" >
                                                          <p class="text-sm uppercase">
                                                              20/01/2024
                                                          </p>
                                                      </div>
                                                  </div>
                  
                  
                                                  <div class="flex mb-2">
                                                      <div class="rounded py-2 px-3 bg-gray-300">
                                                         
                                                          <p class="text-sm mt-1">
                                                              Hi everyone! Glad you could join! I am making a new movie.
                                                          </p>
                                                          <p class="text-right text-xs text-red-500 mt-1">
                                                              12:45 pm
                                                          </p>
                                                      </div>
                                                  </div>
                  
                                                  <div class="flex mb-2">
                                                      <div class="rounded py-2 px-3 bg-gray-300  ">
                                                          <p class="text-sm mt-1">
                                                              Hi all! I have one question for the movie
                                                          </p>
                                                          <p class="text-right text-xs text-red-500 mt-1">
                                                              12:45 pm
                                                          </p>
                                                      </div>
                                                  </div>             
                  
                                                  <div class="flex justify-end mb-2">
                                                      <div class="rounded py-2 px-3 text-red-100 bg-gray-800" >
                                                          <p class="text-sm mt-1">
                                                              Hi guys.
                                                          </p>
                                                          <p class="text-right text-xs text-red-500 mt-1">
                                                              12:45 pm
                                                          </p>
                                                      </div>
                                                  </div>
                  
                                                  <div class="flex justify-end mb-2">
                                                      <div class="rounded py-2 px-3 text-red-100 bg-gray-800" >
                                                          <p class="text-sm mt-1">
                                                              Count me in
                                                          </p>
                                                          <p class="text-right text-xs text-red-500 mt-1">
                                                              12:45 pm
                                                          </p>
                                                      </div>
                                                  </div>

                                                  <div class="flex justify-end mb-2">
                                                    <div class="rounded py-2 px-3 text-red-100 bg-gray-800" >
                                                        <p class="text-sm mt-1">
                                                            Count me in
                                                        </p>
                                                        <p class="text-right text-xs text-red-500 mt-1">
                                                            12:45 pm
                                                        </p>
                                                    </div>
                                                  </div>

                                                  <div class="flex mb-2">
                                                    <div class="rounded py-2 px-3 bg-gray-300">
                                                       
                                                        <p class="text-sm mt-1">
                                                            Hi everyone! Glad you could join! I am making a new movie.
                                                        </p>
                                                        <p class="text-right text-xs text-red-500 mt-1">
                                                            12:45 pm
                                                        </p>
                                                    </div>
                                                  </div>
                                                  <div class="flex justify-end mb-2">
                                                    <div class="rounded py-2 px-3 text-red-100 bg-gray-800" >
                                                        <p class="text-sm mt-1">
                                                            Count me in
                                                        </p>
                                                        <p class="text-right text-xs text-red-500 mt-1">
                                                            12:45 pm
                                                        </p>
                                                    </div>
                                                  </div>

                                                  <div class="flex mb-2">
                                                    <div class="rounded py-2 px-3 bg-gray-300">
                                                       
                                                        <p class="text-sm mt-1">
                                                            Hi everyone! Glad you could join! I am making a new movie.
                                                        </p>
                                                        <p class="text-right text-xs text-red-500 mt-1">
                                                            12:45 pm
                                                        </p>
                                                    </div>
                                                  </div>
                                                  <div class="flex justify-end mb-2">
                                                    <div class="rounded py-2 px-3 text-red-100 bg-gray-800" >
                                                        <p class="text-sm mt-1">
                                                            Count me in
                                                        </p>
                                                        <p class="text-right text-xs text-red-500 mt-1">
                                                            12:45 pm
                                                        </p>
                                                    </div>
                                                  </div>

                                                  <div class="flex mb-2">
                                                    <div class="rounded py-2 px-3 bg-gray-300">
                                                       
                                                        <p class="text-sm mt-1">
                                                            Hi everyone! Glad you could join! I am making a new movie.
                                                        </p>
                                                        <p class="text-right text-xs text-red-500 mt-1">
                                                            12:45 pm
                                                        </p>
                                                    </div>
                                                  </div>
                                                  <div class="flex justify-end mb-2">
                                                    <div class="rounded py-2 px-3 text-red-100 bg-gray-800" >
                                                        <p class="text-sm mt-1">
                                                            Count me in
                                                        </p>
                                                        <p class="text-right text-xs text-red-500 mt-1">
                                                            12:45 pm
                                                        </p>
                                                    </div>
                                                  </div>

                                                  <div class="flex mb-2">
                                                    <div class="rounded py-2 px-3 bg-gray-300">
                                                       
                                                        <p class="text-sm mt-1">
                                                            Hi everyone! Glad you could join! I am making a new movie.
                                                        </p>
                                                        <p class="text-right text-xs text-red-500 mt-1">
                                                            12:45 pm
                                                        </p>
                                                    </div>
                                                  </div>
                                              </div>
                                          </div>
                  
                                          <!-- Input -->
                                          <div class="bg-grey-lighter px-4 py-4 flex items-center  mb-4">
                                              <div>
                                                <i class="bi bi-chat-left-text"></i>
                                              </div>
                                              <div class="flex-1 mx-4">
                                                  <input class="w-full border rounded px-2 py-2 outline-none" type="text"
                                                  placeholder="Taper un message"
                                                  />
                                              </div>
                                              <div class="cursor-pointer hover:text-red-500 semibold ">
                                                <i class="bi bi-send"></i>
                                              </div>
                                          </div>
                                      </div>
                  
                                  </div>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <script async defer src="https://buttons.github.io/buttons.js"></script>
            <script
            src="https://demo.themesberg.com/windster/app.bundle.js"></script>
            <script>
                // JavaScript for showing/hiding the menu
                const menuButton = document.getElementById('menuButton');
                const menuDropdown = document.getElementById('menuDropdown');
                
                menuButton.addEventListener('click', () => {
                  if (menuDropdown.classList.contains('hidden')) {
                    menuDropdown.classList.remove('hidden');
                  } else {
                    menuDropdown.classList.add('hidden');
                  }
                });
                
                // Close the menu if you click outside of it
                document.addEventListener('click', (e) => {
                  if (!menuDropdown.contains(e.target) && !menuButton.contains(e.target)) {
                    menuDropdown.classList.add('hidden');
                  }
                });
              </script>
        </div>
    </main>
</body>

</html>