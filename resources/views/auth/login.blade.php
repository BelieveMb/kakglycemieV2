<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion sur KaK glycémie</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('../css/AllUsers.css') }}">

</head>

<body>
    @include('AllUsers/components/header')
    <style>
        @import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css');
    </style>
    <main>
        <section>
            <!-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>  -->

            <div class="min-w-screen min-h-screen bg-gray-800 flex items-center justify-center px-5 py-5">
                <div class="bg-gray-100 text-gray-800 rounded-3xl shadow-xl w-full overflow-hidden"
                    style="max-width:1000px">
                    <div class="md:flex w-full">
                        <div class="hidden md:block w-1/2  bg-red-500 py-10 px-10">
                            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                                <!-- Carousel wrapper -->
                                <div class="relative h-full overflow-hidden rounded-lg md:h-[90vh]">
                                    <!-- Item 1 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="{{ asset('images/inscript_man.jpg') }}"
                                            class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="image s'inscrire sur kak..">
                                    </div>
                                    <!-- Item 2 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="{{ asset('images/img_avantage.jpg') }}"
                                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                    <!-- Item 3 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="{{ asset('images/inscrip_woman.jpg') }}"
                                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                    <!-- Item 4 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="{{ asset('images/inscrip_young.jpg') }}"
                                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                    <!-- Item 5 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="{{ asset('images/doctor_special.jpg') }}"
                                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                </div>
                                <!-- Slider indicators -->
                                <div
                                    class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                        aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                        aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                        aria-label="Slide 3" data-carousel-slide-to="2"></button>
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                        aria-label="Slide 4" data-carousel-slide-to="3"></button>
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                        aria-label="Slide 5" data-carousel-slide-to="4"></button>
                                </div>
                                <!-- Slider controls -->
                                <button type="button"
                                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                    data-carousel-prev>
                                    <span
                                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M5 1 1 5l4 4" />
                                        </svg>
                                        <span class="sr-only">Previous</span>
                                    </span>
                                </button>
                                <button type="button"
                                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                    data-carousel-next>
                                    <span
                                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                            <div class="text-center mb-10">
                                <h1 class="font-bold text-3xl text-gray-900">Se connecter sur KaK Glycémie</h1>
                                <p>Vous voulez vous connecter comme :</p>

                                <div class="mt-3 flex justify-center md:items-center md:-mx-2 gap-3">

                                    <a  href="{{ route('loginVuePatient') }}"
                                        class="@if (Route::currentRouteName() == 'loginVuePatient') bg-red-500 text-gray-50 @else text-gray-500  @endif 
                                             flex justify-center w-full px-6 py-3 mt-4  border border-gray-500  rounded-md md:mt-0 md:w-auto md:mx-2  focus:outline-none hover:bg-red-700 hover:text-gray-50">
                                        <i class="bi bi-person-plus"></i>
                                        <span class="mx-2">
                                            Patient
                                        </span>
                                    </a>

                                    <a href="{{ route('loginMedecin') }}"
                                        class="@if (Route::currentRouteName()== 'loginMedecin') bg-gray-600 text-gray-50 @else text-gray-700  @endif
                                        flex justify-center w-full px-6 py-3 mt-4  border border-gray-700 rounded-md md:mt-0 md:w-auto md:mx-2  focus:outline-none hover:bg-gray-700 hover:text-white">
                                        <i class="bi bi-file-person-fill"></i>
                                        <span class="mx-2">
                                            Médecins
                                        </span>
                                    </a>
                                </div>

                                @if (Session::get('success'))
                                    <div
                                        class="bg-gray-500 my-2 py-3 px-4 text-gray-100 text-xl font-mono    font-semibold rounded-lg">
                                        <h3> {{ Session::get('success') }} </h3>
                                    </div>
                                @endif

                                @error('mainError')
                                    <div
                                        class="bg-gray-500 my-2 py-3 px-4 text-gray-100 text-xl font-mono    font-semibold rounded-lg">
                                        <h3> {{ $message }} </h3>
                                    </div>
                                @enderror
                            </div>

                            @yield('loginType')
                            
                        </div>
                    </div>
                </div>


        </section>
    </main>


    @include('Auth/formRegisterLogin')

</body>

</html>
