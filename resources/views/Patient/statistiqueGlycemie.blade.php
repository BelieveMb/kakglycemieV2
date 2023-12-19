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
            <div class="flex overflow-hidden bg-white pt-16">
                @include('Patient.components.sidebar')
                <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
                <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
                    <div class="pt-3 px-4">
                        <div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4">
                            

                            <div class="max-w-2xl mx-auto  py-4 px-10 rounded">
                                <h2 class="text-xl font-semibold lg:text-2xl lg:hidden mb-4">Statistique Glycémie</h2>                                    
                                    
                                    
                                
                                <div id="accordion-collapse" data-accordion="collapse">
                                    
                                    @foreach ( $traitementList as $traitement )
                                    <h2 id="accordion-collapse-heading-1">
                                        <button type="button" class="flex items-center focus:ring-4 focus:ring-gray-200  justify-between p-5 w-full font-medium text-left border border-gray-300  border-b-0 text-gray-900 bg-gray-100 hover:bg-gray-300 hover:text-red-500  rounded-t-xl" data-accordion-target="#accordion-collapse-body-{{$traitement->idtraitement}}" aria-expanded="true" aria-controls="accordion-collapse-body-{{$traitement->idtraitement}}">
                                            <span> <i class="bi bi-calendar-heart"></i>   {{$traitement->datetrait}}  <i class="bi bi-clock-history"></i> </span>
                                            <svg data-accordion-icon class="w-6 h-6 shrink-0 rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        </button>
                                    </h2>
                                    <div id="accordion-collapse-body-{{$traitement->idtraitement}}" aria-labelledby="accordion-collapse-heading-{{$traitement->idtraitement}}">
                                        <div class="p-5 border border-gray-200  border-b-0">
                                            <p class="mb-2 text-gray-600"><i class="bi bi-heart-pulse-fill"></i> Taux de glycémie : <b>{{$traitement->taux}}</b> ml/dl</p>
                                            <p class="mb-2 text-gray-600"><i class="bi bi-clipboard2-pulse-fill"></i> Traitement : <b>{{$traitement->traitement}}</b>.</p>
                                        </div>
                                    </div>
                                        
                                    @endforeach
                                    
                                </div>

                               
                                <script src="https://unpkg.com/flowbite@1.3.3/dist/flowbite.js"></script>
                            </div>

                            <div class="max-w-2xl mx-auto  py-4 px-10 rounded">

                                <h2 class="text-xl font-medium lg:text-2xl mb-4 ">Statistique Glycémie</h2>
                                <p class=" text-lg leading-relaxed text-gray-700">
                                    Cette partie présente en détail les statistiques de votre glycémie, y compris la date, le taux de glycémie et le traitement pris.
                                    Ces informations vous permettent de suivre de près l'évolution de votre glycémie et de mieux comprendre l'impact des traitements sur vos niveaux de sucre dans le sang.
                                </p>

                                <div class="flex flex-col justify-start px-2 my-4" >
                                 <ul class="list-none my-2">

                                    <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span class="text-xl font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-50 bg-red-500 mr-3"><i class="bi bi-calendar-heart"></i></span>
                                        </div>
                                        <div>
                                        <h4 class="text-gray-700 font-semibold"> Suivi précis de la glycémie</h4>
                                        </div>
                                    </div>
                                    </li>
                                    <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                        <span class="text-xl font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-50 bg-red-500 mr-3"><i class="bi bi-bar-chart"></i></span>
                                        </div>
                                        <div>
                                        <h4 class="text-gray-700 font-semibold">Analyse des tendances et des variations</h4>
                                        </div>
                                    </div>
                                    </li>
                                    <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                        <span class="text-xl font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-50 bg-red-500 mr-3"><i class="bi bi-chat-dots"></i></span>
                                        </div>
                                        <div>
                                        <h4 class="text-gray-700 font-semibold">Communication avec votre médecin</h4>
                                        </div>
                                    </div>
                                    </li>

                                    </ul>

                                    <p class=" text-lg leading-relaxed text-gray-700">
                                    Avec Kak Glycémie, vous pouvez prendre le contrôle de votre santé en suivant votre glycémie avec précision...
                                    </p>
                                    <div class="mt-8">
                                    <a href="{{ route('register') }}" class="px-4 py-2  text-sm font-semibold bg-red-500 text-gray-50 rounded-lg hover:text-gray-600 focus:text-gray-900 hover:bg-red-200  hover:shadow-outline
                                    focus:bg-red-200 focus:outline-none"> Commencez </a>
                                    </div>

                                </div>
                                
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