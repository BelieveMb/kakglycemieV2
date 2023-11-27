<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenu.e sur KaK</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('AllUsers/components/header')
   
    <section id="bgSection" class="bg-gray-700 bg-blend-multiply">
      <div class="  w-full text-center  ">

        <div class="flex flex-col hidden mySlides fade" style="background-image: url('bg2.jpg');">
          <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none
            text-white md:text-5xl lg:text-6xl">Welcome 1 in the world
            potential</h1>
          <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Here at Flowbite we focus on
            markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>

          <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
            <a href="#"
              class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-red-500 hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
              Get started
              <span class="ml-2 -mr-1 text-lg" >
                <i class="bi bi-arrow-right"></i>
              </span>
              
            </a>
            <a href="#"
              class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
              Learn more
            </a>
          </div>
        </div>

        <div class="hidden flex flex-col mySlides fade " style="background-image: url('bg1.jpg');">
          <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none
              text-white md:text-5xl lg:text-6xl">Message 22 in the world’s
            potential</h1>
          <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Here at Flowbite we focus on
            markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
          <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
            <a href="#"
              class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-red-500 hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
              Commencez
              <span class="ml-2 -mr-1 text-lg" >
                <i class="bi bi-arrow-right"></i>
              </span>              
            </a>

            <a href="#"
              class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
              S'inscrire
            </a>

          </div>
        </div>

      </div>

    </section>



    
    <!--  section banner  -->
    <section class="bg-red-500  px-8 py-10 lg:px-40 lg:py-4 flex flex-col    justify-between gap-6 lg:flex-row">
      <div class="font-bold flex  text-lg leading-5 text-white      opacity-100 lg:text-xl " >
        <h3>Inscrivez ou connectez vous pour profiter pleinement de KaK</h3>

      </div>
      <div>
        <a href="#" class="px-4 py-2  text-sm font-semibold bg-gray-100 text-red-500 rounded-lg     
        hover:text-red-600
        focus:text-gray-900 hover:bg-gray-200  hover:shadow-outline
        focus:bg-gray-200 focus:outline-none"> Commencez </a>
      </div>
      
    </section>
    
    <script src="js/home.js"></script>
</body>
</html>