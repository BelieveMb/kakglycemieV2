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

    <section class="flex items-end  px-8 py-10 lg:px-40 lg:py-4 h-[80vh] bg-no-repeat bg-cover bg-center "   style="background-image: url('{{ asset('images/patient_kak.jpg') }}');">
     
      <div class=" w-1/2 h-20 py-4 px-8 border-2 border-red-500 rounded-2xl shadow-4xl shadow-gray-800 bg-gray-100">
          <span>KaK Glycémie pour le diabètique</span>
          <h1 class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-red-500 md:text-35xl lg:text-4xl "> 1 in the world potential</h1>
          <p class="mb-8 text-lg font-normal text-gray-800 lg:text-xl sm:px-16 lg:px-48">Suivez votre glycémie en tout simplicit can unlock long-term value and drive economic growth.</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
            <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-red-500 hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
              S'inscrire
              <span class="ml-2 -mr-1 text-lg" >
                <i class="bi bi-arrow-right"></i>
              </span>
              
            </a>
            <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
              Se connecter
            </a>
          </div>
       
      </div>

    </section>


</body>
</html>