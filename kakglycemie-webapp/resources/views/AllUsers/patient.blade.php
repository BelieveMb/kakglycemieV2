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
      <div class="flex flex-col gap-4">
        <a href="#" class="px-4 py-2  text-sm font-semibold bg-gray-100 text-red-500 rounded-lg  hover:text-red-600 focus:text-gray-900 hover:shabg-gray-200  hover:shadow-outline focus:bg-gray-200 focus:outline-none"> Connexion  </a>
        <a href="#" class="px-4 py-2  text-sm font-semibold bg-gray-100 text-red-500 rounded-lg  hover:text-red-600 focus:text-gray-900 hover:shabg-gray-200  hover:shadow-outline focus:bg-gray-200 focus:outline-none"> Inscription </a>
      </div>
    </section>
      
   




</body>
</html>