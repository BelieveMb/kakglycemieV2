<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header KaK</title>
  <!--Bootstrap icon-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css"> -->

  <link rel="stylesheet" href="../../../css/AllUsers.css">

</head>

<body>
  <header>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div class="">
      <div class="antialiased ">
        <div class="w-full text-gray-200 bg-red-500 ">
          <div x-data="{ open: false }"
            class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="flex flex-row items-center justify-between p-4">
              <a href="/" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none              focus:shadow-outline">
                <img src="../images/logo_white.png " alt="Logo Kak glycémie" class="w-12 h-12">
              </a>
              <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                  <path x-show="!open" fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
                  <path x-show="open" fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
                </svg>
              </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}"
              class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
              <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg  hover:bg-gray-200  md:mt-0 md:ml-4 hover:text-red-500 focus:text-red-400 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                href="{{ route('patientName')}}">Patients</a>

              <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg  hover:bg-gray-200  md:mt-0 md:ml-4 hover:text-red-500 focus:text-red-400 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                href="#">Médecins</a>
              <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg  hover:bg-gray-200  md:mt-0 md:ml-4 hover:text-red-500 focus:text-red-400 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                href="#">A propos de nous</a>

              <a class="px-4 py-2 mt-2 text-sm font-semibold bg-gray-100 text-red-500 rounded-lg   md:mt-0 md:ml-4 
                      hover:text-red-600 focus:text-gray-900 hover:bg-gray-200  hover:shadow-outline focus:bg-gray-200 focus:outline-none " href="{{ route('login') }}">Connexion</a>


            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  

  <main>



  
  



  </main>
</body>

</html>