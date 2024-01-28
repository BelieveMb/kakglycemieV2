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
                        {{-- <div class="max-w-full mx-1 lg:mx-auto  bg-red-200 py-4 px-0 lg:px-10 rounded"> --}}
                        <div class="w-full h-auto bg-gray-300/100 " >
                          <div class="container mx-auto" style="margin-top: -128px;">
                              <div class="py-6 h-screen">
                                  <div class="flex border border-grey rounded shadow-lg h-full">
                                      <!-- Left -->
                                      <div class="w-1/3 border hidden flex-col lg:flex">
                  
                                          <!-- Header -->
                                          <div class="py-2 px-3  flex flex-row justify-between items-center">
                                              <div>
                                                  <h3 class="font-semibold text-red-500  text-2xl"> KaK Discussion </h3>
                                              </div>
                                              <div class="flex">     
                                                  <div class="text-xl hover:text-red-500">
                                                    <i class="bi bi-chat-left-text"></i>
                                                  </div>
                                                  <div class="ml-4 text-xl hover:text-red-500">
                                                    <i class="bi bi-person-fill-add"></i>
                                                  </div>
                                              </div>
                                          </div>
                  
                                          <!-- Search -->
                                          <div class="py-2 px-2 bg-grey-lightest">
                                              <input type="text" class="w-full px-2 py-2 text-sm  rounded-xl outline-none"
                                              placeholder="Trouvez et parlez à un médecin "/>
                                          </div>
                  
                                          <!-- Contacts -->
                                          <div class="bg-grey-lighter flex-1 overflow-auto">
                                              <div class="px-3 flex items-center bg-grey-light cursor-pointer hover:bg-red-100/80">
                                                  <div>
                                                      <img class="h-12 w-12 rounded-full"
                                                          src="https://darrenjameseeley.files.wordpress.com/2014/09/expendables3.jpeg"/>
                                                  </div>
                                                  <div class="ml-4 flex-1 border-b border-grey-lighter py-4 ">
                                                      <div class="flex items-bottom justify-between">
                                                          <p class="text-red-500 font-semibold">
                                                              Dr. Jean Louis
                                                          </p>
                                                          <p class="text-xs text-red-500">
                                                              12:45 pm
                                                          </p>
                                                      </div>
                                                      <p class="text-gray-700 mt-1 text-sm">
                                                          Get Andrés on this movie ASAP! 
                                                      </p>
                                                  </div>
                                              </div>
                                              <div class=" px-3 flex items-center hover:bg-grey-lighter cursor-pointer">
                                                  <div>
                                                      <img class="h-12 w-12 rounded-full"
                                                          src="https://www.biography.com/.image/t_share/MTE5NDg0MDU1MTIyMTE4MTU5/arnold-schwarzenegger-9476355-1-402.jpg"/>
                                                  </div>
                                                  <div class="ml-4 flex-1 border-b border-grey-lighter py-4">
                                                      <div class="flex items-bottom justify-between">
                                                          <p class="text-grey-darkest">
                                                              Arnold Schwarzenegger
                                                          </p>
                                                          <p class="text-xs text-grey-darkest">
                                                              12:45 pm
                                                          </p>
                                                      </div>
                                                      <p class="text-grey-dark mt-1 text-sm">
                                                          I'll be back
                                                      </p>
                                                  </div>
                                              </div>
                                              <div class=" px-3 flex items-center hover:bg-grey-lighter cursor-pointer">
                                                  <div>
                                                      <img class="h-12 w-12 rounded-full"
                                                          src="https://www.famousbirthdays.com/headshots/russell-crowe-6.jpg"/>
                                                  </div>
                                                  <div class="ml-4 flex-1 border-b border-grey-lighter py-4">
                                                      <div class="flex items-bottom justify-between">
                                                          <p class="text-grey-darkest">
                                                              Russell Crowe
                                                          </p>
                                                          <p class="text-xs text-grey-darkest">
                                                              12:45 pm
                                                          </p>
                                                      </div>
                                                      <p class="text-grey-dark mt-1 text-sm">
                                                          Hold the line!
                                                      </p>
                                                  </div>
                                              </div>
                                              <div class=" px-3 flex items-center hover:bg-grey-lighter cursor-pointer">
                                                  <div>
                                                      <img class="h-12 w-12 rounded-full"
                                                          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGpYTzuO0zLW7yadaq4jpOz2SbsX90okb24Z9GtEvK6Z9x2zS5"/>
                                                  </div>
                                                  <div class="ml-4 flex-1 border-b border-grey-lighter py-4">
                                                      <div class="flex items-bottom justify-between">
                                                          <p class="text-grey-darkest">
                                                              Tom Cruise
                                                          </p>
                                                          <p class="text-xs text-grey-darkest">
                                                              12:45 pm
                                                          </p>
                                                      </div>
                                                      <p class="text-grey-dark mt-1 text-sm">
                                                          Show me the money!
                                                      </p>
                                                  </div>
                                              </div>
                                              <div class=" px-3 flex items-center hover:bg-grey-lighter cursor-pointer">
                                                  <div>
                                                      <img class="h-12 w-12 rounded-full"
                                                          src="https://www.biography.com/.image/t_share/MTE5NTU2MzE2MjE4MTY0NzQ3/harrison-ford-9298701-1-sized.jpg"/>
                                                  </div>
                                                  <div class="ml-4 flex-1 border-b border-grey-lighter py-4">
                                                      <div class="flex items-bottom justify-between">
                                                          <p class="text-grey-darkest">
                                                              Harrison Ford
                                                          </p>
                                                          <p class="text-xs text-grey-darkest">
                                                              12:45 pm
                                                          </p>
                                                      </div>
                                                      <p class="text-grey-dark mt-1 text-sm">
                                                          Tell Java I have the money
                                                      </p>
                                                  </div>
                                              </div>
                                          </div>
                  
                                      </div>                  
                 
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