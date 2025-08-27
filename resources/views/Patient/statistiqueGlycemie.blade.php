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
                            

                            <div class="max-w-full mx-1 lg:mx-auto  py-4 px-0 lg:px-10 rounded">
                                <h2 class="text-xl font-semibold lg:text-2xl lg:hidden mb-4">Statistique Glycémie</h2>  
                                   
                                <div class="max-w-2xl mx-auto my-4">
                                    <form  class="flex items-center" >   
                                    {{-- method="POST" action="{{ route('Patient.statistiqueGlycemie') }}" --}}
                                        @csrf
                                        <label for="dateTrait" class="sr-only">Trouvez une date</label>
                                        <div class="relative w-full">
                                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                            </div>
                                            <input type="date" id="dateTraitement" name="dateTraitement"  class="bg-gray-200 border border-gray-300 text-gray-700 outline-none text-sm rounded-lg hover:border-red-500 focus:ring-red-500 focus:border-red-500 block w-full pl-10 p-2.5  "
                                             placeholder="Trouvez une date de traitement..." required value="{{ request('dateTraitement') }}">
                                            
                                        </div>
                                        <button  class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-red-700 rounded-lg border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                            <svg class="mr-2 -ml-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                             Chercher</button>
                                        <a href="{{ route('Patient.statistiqueGlycemie') }}"  class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-red-700 bg-gray-100 rounded-lg border border-red-700 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-gray-300 dark:hover:bg-gray-300 dark:focus:ring-gray-500">
                                            <i class="bi bi-x-circle-fill w-5 h-5 text-sm"></i>
                                            {{-- <svg class="mr-2 -ml-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg> --}}
                                        </a>
                                    </form>
                                </div>
                                    
                                
                                <div id="accordion-collapse" data-accordion="collapse">
                                    
                                    @forelse($traitementList as $traitement)
                                    
                                    {{-- @foreach ( $traitementList as $traitement ) --}}
                                    <h2 id="accordion-collapse-heading-{{$traitement->idtraitement}}" class="w-full">
                                        <button type="button" class="flex items-center focus:ring-4 focus:ring-gray-200  justify-between p-5 w-[25rem] lg:w-[30rem] font-medium text-left border border-gray-300  border-b-4 text-gray-900 bg-gray-100 hover:bg-gray-300 hover:text-red-500  rounded-t-xl rounded-b-xl" data-accordion-target="#accordion-collapse-body-{{$traitement->idtraitement}}" aria-expanded="false" aria-controls="accordion-collapse-body-{{$traitement->idtraitement}}">
                                            <span> <i class="bi bi-calendar-heart"></i>   {{$traitement->datetrait}}  <i class="bi bi-clock-history"></i> </span>
                                            <svg data-accordion-icon class="w-6 h-6 shrink-0 rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        </button>
                                    </h2>
                                    <div id="accordion-collapse-body-{{$traitement->idtraitement}}" class="hidden" aria-labelledby="accordion-collapse-heading-{{$traitement->idtraitement}}">
                                        <div class="p-5 border border-gray-200 rounded-b-xl border-b-4 w-[25rem] lg:w-[30rem]  ">
                                            <p class="mb-2 text-gray-600"><i class="bi bi-heart-pulse-fill"></i> Taux de glycémie : <b>{{$traitement->taux}}</b> ml/dl</p>
                                            <p class="mb-2 text-gray-600"><i class="bi bi-clipboard2-pulse-fill"></i> Traitement : <b>{{$traitement->traitement}}</b>.</p>
                                        </div>
                                    </div>
                                    @empty
                                        @php
                                            $dateSearch = request('dateTraitement');
                                            $dateTraitement = date("d-m-Y", strtotime($dateSearch));
                                            
                                        @endphp
                                        <h6 class="flex items-center focus:ring-2 focus:ring-gray-700  justify-between p-5 w-[25rem] lg:w-[30rem] font-medium text-left border border-gray-300  border-b-4 text-gray-900 bg-gray-100 hover:bg-gray-300 hover:text-red-500  rounded-t-xl rounded-b-xl" >
                                            Aucun traitement trouvé pour la date du {{$dateTraitement}}  </h6>
                                    @endforelse 
                                    {{-- @endforeach--}}
                                    
                                </div>

                               
                                <script src="https://unpkg.com/flowbite@1.3.3/dist/flowbite.js"></script>
                            </div>

                            <div class="max-w-2xl mx-auto  py-4 px-2 lg:px-10 rounded">

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
                                            <h4 class="text-gray-700 font-semibold"> La date où vous pris votre traitement. </h4>
                                        </div>
                                    </div>
                                    </li>
                                    <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span class="text-xl font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-50 bg-red-500 mr-3"><i class="bi bi-heart-pulse-fill"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-700 font-semibold">Votre taux de glycémie enregistré.</h4>
                                        </div>
                                    </div>
                                    </li>
                                    <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                        <span class="text-xl font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-50 bg-red-500 mr-3"><i class="bi bi-clipboard2-pulse-fill"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-700 font-semibold">Le traitement pris</h4>
                                        </div>
                                    </div>
                                    </li>

                                    </ul>

                                    <p class=" text-lg leading-relaxed text-gray-700">
                                        Avec Kak Glycémie, vous pouvez prendre le contrôle de votre santé en suivant votre glycémie avec précision...
                                    </p>
                                    

                                </div>
                                
                            </div>
                        </div>
                    </div>
                    @include('Patient.components.footer')
                </div>
            </div>
            <script async defer src="https://buttons.github.io/buttons.js"></script>
            <script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
        </div>
    </main>
</body>

</html>