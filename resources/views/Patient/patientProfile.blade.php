<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenu.e sur KaK /</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('../css/AllUsers.css') }}">

</head>
<body> 
    <main>
    <div>
     @include('Patient.components.header')
   <div class="flex overflow-hidden bg-white pt-16">
      @include('Patient.components.sidebar')
      <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
      <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
        <div class="pt-6 px-4">
            <div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4">

            </div>
            <!-- component -->
                <div class="max-w-lg mx-auto my-10 bg-white rounded-lg shadow-md p-5">
                    <img class="w-32 h-32 rounded-full mx-auto" src="{{ asset('../images/patient_kak.jpg') }}" alt="Profile picture">
                    <h2 class="text-center text-2xl font-semibold mt-3">John </h2>
                    <p class="text-center text-gray-600 mt-1">Statut glycémie : Normal </p>

                    <div class="flex justify-center mt-5">
                        @if ($lastTraitement)
                                <a href="{{ route('Patient.dashboardForm') }}" class="text-red-500 font-semibold hover:text-red-700  mx-3"> <i class="bi bi-heart-pulse-fill"></i> {{ $lastTraitement->taux }} dl/ml</a>
                                <a href="{{ route('Patient.statistiqueGlycemie') }}" class="text-red-500 font-semibold hover:text-red-700  mx-3"> <i class="bi bi-clipboard2-pulse-fill"></i>  {{ $lastTraitement->jour }}e jour</a>
                                <a href="{{ route('Patient.patientProfile') }}" class="text-red-500 font-semibold hover:text-red-700  mx-3"> <i class="bi bi-calendar-heart"></i> {{ $lastTraitement->datetrait }}</a>
                        @else
                            <a href="{{ route('Patient.dashboardForm') }}" class="text-red-500 font-semibold hover:text-red-700  mx-3"> <i class="bi bi-heart-pulse-fill"></i>  Commencez votre traitement </a>
                        @endif
                    </div>
                    <div class="mt-5">
                    <h3 class="text-xl font-semibold">Bio</h3>
                    <p class="text-gray-600 mt-2">John is a software engineer with over 10 years of experience in developing web and mobile applications. He is skilled in JavaScript, React, and Node.js.</p>
                    </div>
                </div>
        </div>


       
          @include('Patient.components.footer')
         <p class="text-center text-sm text-gray-500 my-10">
            &copy; 2019-2021 <a href="#" class="hover:underline" target="_blank">Themesberg</a>. All rights reserved.
         </p>
      </div>
   </div>
   <script async defer src="https://buttons.github.io/buttons.js"></script>
   <script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
</div>
    
    </main>
</body>
</html>