<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenu.e sur KaK /{{$title}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('../css/AllUsers.css') }}">

</head>
<body>
    @include('AllUsers/components/header')

    <section class="flex items-end  px-8 py-10 lg:px-40 lg:py-4 h-[90vh] bg-no-repeat bg-cover bg-center "   style="background-image: url('{{ asset('images/patient_kak.jpg') }}');">
     
      <div class=" w-[60%] h-[40vh]  py-4 px-8 border-2 border-red-500 rounded-2xl shadow-4xl shadow-gray-800 bg-gray-50 opacity-80 mb-4">
          <span>KaK Glycémie pour le diabètique</span>
          <h1 class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-red-500 md:text-35xl lg:text-5xl "> Patients par KaK</h1>
          <p class="mb-8 text-lg font-normal text-gray-800 lg:text-xl ">Suivez votre glycémie en tout simplicité.</p>
        <div class="flex flex-col lg:sm:flex-row lg:sm:justify-start lg:space-x-8">
            <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-red-500 hover:bg-red-300 focus:ring-4 focus:ring-red-300 ">
              S'inscrire
              <span class="ml-2 -mr-1 text-lg" >
                <i class="bi bi-arrow-right"></i>
              </span>
              
            </a>
            <a href="#" class="inline-flex justify-center hover:text-gray-50 items-center py-3 px-5 text-base font-medium text-center border-gray-700 text-red-500 rounded-lg border  hover:bg-gray-700 focus:ring-4 focus:ring-gray-400 ml-4 ">
              Se connecter
            </a>
          </div>
       
      </div>

    </section>

    <!--  section banner  -->
    <section class="bg-red-500  px-8 py-10 lg:px-40 lg:py-4 flex flex-col    justify-between gap-6 ">
      <div class="font-bold flex  text-lg leading-5 text-white      opacity-100 lg:text-xl " >
        <h3>Nous sommes là pour vous aider à suivre votre glycémie et vos traitements de manière simple et efficace.</h3>

      </div>
      <div class="flex flex-col gap-4 lg:flex-row lg:space-x-8 justify-center ">
        <a href="#" class="px-4 py-2  text-sm font-semibold bg-gray-100 text-red-500 rounded-lg  hover:text-red-600 focus:text-gray-900 hover:bg-gray-200  hover:shadow-outline focus:bg-gray-200 focus:outline-none"> Connexion  </a>
        <a href="#" class="px-4 py-2  text-sm font-semibold border-gray-100 border-4 text-gray-50 rounded-lg  hover:text-gray-600 focus:text-gray-900 hover:bg-gray-50  hover:shadow-outline focus:bg-gray-200 focus:outline-none"> Inscription </a>
      </div>
    </section>

    <!--  section suivre sa glycémie  -->
    <section class="bg-gray-50 px-8  lg:px-40 py-20">
      <div class=" flex flex-wrap justify-between">
        <div class="w-full md:w-1/2 ">
          <div class="">

            <span class="text-gray-500">Pour vous</span>
            <h3 class="text-4xl font-semibold text-gray-700">Suivre sa glycémie</h3>
            <p class="mt-4 text-lg leading-relaxed text-gray-700">
              <b>Pourquoi suivre sa glycémie ?</b>, Le suivi de la glycémie est essentiel pour les patients diabétiques. En effet, cela permet de contrôler son taux de sucre dans le sang et d'adapter son traitement en conséquence. 
            </p>
            <ul class="list-none my-2">

              <li class="py-2">
                <div class="flex items-center">
                  <div>
                    <span class="text-2xl font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-50 bg-red-500 mr-3"><i class="bi bi-person"></i></span>
                  </div>
                  <div>
                    <p class="text-gray-700 font-semibold">Un suivi permet de détecter rapidement les fluctuations du taux de sucre dans le sang, ce qui peut être un signe d'un problème de santé sous-jacent. </p>
                  </div>
                </div>
              </li>
              <li class="py-2">
                <div class="flex items-center">
                  <div>
                    <span class="text-2xl font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-50 bg-red-500 mr-3"><i class="bi bi-person"></i></span>
                  </div>
                  <div>
                    <p class="text-gray-700 font-semibold">un suivi régulier de la glycémie peut aider à prévenir les complications liées au diabète, telles que les problèmes cardiaques, les problèmes rénaux et les problèmes de vision. </p>
                  </div>
                </div>
              </li>
              <li class="py-2">
                <div class="flex items-center">
                  <div>
                    <span class="text-xl font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-50 bg-red-500 mr-3"><i class="bi bi-person"></i></span>
                  </div>
                  <div>
                    <h4 class="text-gray-700 font-semibold">Amazing page examples</h4>
                  </div>
                </div>
              </li>
             
            </ul>

            <div class="mt-8">
              <a href="#" class="px-4 py-2  text-sm font-semibold bg-red-500 text-gray-50 rounded-lg hover:text-gray-600 focus:text-gray-900 hover:bg-red-200  hover:shadow-outline
              focus:bg-red-200 focus:outline-none"> Commencez </a>
            </div>
          
          </div>
        </div>
        <div class="w-full md:w-4/12 ">
          <img alt="image votre avantage sur kak" class="max-w-full h-full rounded-lg shadow-lg" src="{{ asset('images/img_avantage.jpg') }}">
        </div>
      </div>
    </section>

    <!-- section avantage patient -->
    <section class="  px-8 py-10 lg:px-40 lg:py-4 ">
      <div id="services" class="section bg-white">
        <div >
            <h3 class="text-2xl py-4 font-semibold text-gray-500">Votre <span class="text-red-600">gratuits</span> </h3>
        </div>

        <div class="flex flex-wrap flex-row text-center">
          <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
              <!-- service block -->
              <div class="py-8 px-4 mb-12 bg-gray-400 border-b border-gray-700 rounded-xl transform transition duration-300 ease-in-out hover:-translate-y-2 hover:bg-gray-200">
                  <div class="inline-block text-gray-800 mb-4 text-5xl">
                      <!-- icon -->
                      <span class="bi bi-search"></span>
                  </div>
                  <h3 class="text-lg leading-normal mb-2 font-semibold text-black"> Prévention de complication</h3>
                  <p class="text-gray-100">This is a wider card with supporting text below as a natural content.</p>
              </div>
          </div>

        </div>
      </div>
    </section>

    
    <!-- section avantage patient -->
      
   




</body>
</html>