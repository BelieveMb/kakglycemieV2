<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenu.e sur KaK /{{$title}}</title>
    <link rel="shortcut icon" href="images/logo_white.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('../css/AllUsers.css') }}">

</head>
<body>
    @include('AllUsers/components/header')

    <main>
        <section class="px-8 py-8 lg:px-40 lg:py-20  border-t border-b  rounded-b-xl  bg-opacity-10">
            <div class="flex flex-col lg:flex-row gap-5 justify-center mb-16">
                <div class="w-full">
                   <img alt="image de l'équipe sur kak" class="max-w-full h-full rounded-lg shadow-lg" src="{{ asset('images/img_team2.png') }}">
                </div>
                <div class="flex flex-col items-start justify-center w-full lg:w-1/2 gap-4">
                    <h5 class="text-2xl font-semibold" >A propos de Nous</h5>
                    <h1 class="text-4xl font-semibold">Nous proposons un service de qualité</h1>
                    <p>KaK glycémie est là pour vous aider ! Grâce à notre solution, vous pouvez facilement enregistrer vos taux de glycémie, votre traitement, et accéder à ces informations à tout moment. Vous pouvez également communiquer directement avec votre médecin pour recevoir des conseils personnalisés et ajuster votre traitement en conséquence. </p>
                </div>
            </div>

            <div class="flex flex-col lg:flex-row content-center gap-8">
                <div class="flex flex-col items-center content-center text-center w-full">
                    <div>
                        <span class="text-2xl font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-50 bg-red-500 mr-3"><i class="bi bi-chat-dots"></i></span>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">Suivi personnalisé</h3>
                    <p>KaK Glycémie est facile à utiliser et accessible à partir de n'importe quel appareil connecté à Internet.</p>
                </div>
                <div class="w-[100%] ">
                    <img alt="image votre avantage sur kak" class="max-w-full h-full rounded-lg shadow-lg" src="{{ asset('images/inscrip_woman.jpg') }}">
                </div>

                <div class="flex flex-col items-center content-center text-center w-full">
                    <div>
                        <span class="text-2xl font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-50 bg-red-500 mr-3"><i class="bi bi-chat-dots"></i></span>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">Médecins de qualités</h3>
                    <p>Rejoignez nous et prenez le contrôle de votre santé dès maintenant !.</p>
                </div>
                <div class="w-44 lg:w-[100%]">
                    <img alt="image votre avantage sur kak" class="max-w-full h-full rounded-lg shadow-lg" src="{{ asset('images/doctor.jpg') }}">
                </div>
            </div>
        </section>

        <section class="  fade  h-auto w-full bg-no-repeat bg-cover bg-center py-40 " style="background-image: url('{{ asset('images/img_team.png') }}');">
            <aside class="flex flex-col lg:flex-row justify-center  lg:justify-between gap-8 mx-10 my-5">
                <div class="flex flex-col gap-4  bg-red-950/25  ">
                    <span class="bg-red-500 py-2"></span>
                    <div class="px-3 py-1 pb-4 hover:-translate-y-5 hover:duration-700">
                        <h3 class="text-red-500 text-2xl mb-2">Optimisez votre santé </h3>
                        <p class="my-5 text-gray-200" >Kak Glycémie est conçue pour vous offrir une expérience de suivi de la glycémie exceptionnelle. </p> 
                        <a href="/" class="border-b-4 border-gray-50 font-semibold text-gray-50 hover:text-red-500 hover:border-red-500 duration-500">En savoir plus</a>
                    </div>
                </div>
                <div class="flex flex-col gap-4  bg-red-950/25">
                    <span class="bg-red-500 py-2"></span>
                    <div class="px-3 py-1 pb-4 hover:-translate-y-5 hover:duration-700">
                        <h3 class="text-red-500 text-2xl mb-2">Optimisez votre prise en charge </h3>
                        <p class="my-5 text-gray-200"> Kak Glycémie est une application de suivi de la glycémie en ligne qui offre de nombreux avantages pour les médecins.</p> 
                        <a href="/patient" class="border-b-4 border-gray-50 font-semibold text-gray-50 hover:text-red-500 hover:border-red-500 duration-500">En savoir plus</a>
                    </div>
                </div>
                <div class="flex flex-col gap-4  bg-red-950/25">
                    <span class="bg-red-500 py-2"></span>
                    <div class="px-3 py-1 pb-4 hover:-translate-y-5 hover:duration-700">
                        <h3 class="text-red-500 text-2xl mb-2">Un outil avancé pour votre glycémie </h3>
                        <p class="my-5 text-gray-200">Kak Glycémie permet aux médecins de mieux comprendre les variations de la glycémie de leurs patients.</p> 
                        <a href="/doctor" class="border-b-4 border-gray-50 font-semibold text-gray-50 hover:text-red-500 hover:border-red-500 duration-500">En savoir plus</a>
                    </div>
                </div>


            </aside>


        </section>

        <section class="flex flex-col gap-4 items-center py-24 px-10 mb-4">
            <h2 class="text-2xl font-semibold lg:text-[4rem] mb-3">Contactez nous</h2>
            <h5 class="text-xl lg:text-2xl">Pour toutes vos préoccupations, laissez nous un message!</h5>

        </section>

        <section class="  py-10 px-10 bg-red-500">
            <div class=" flex flex-col items-center content-center justify-between gap-8 lg:flex-row bg-gray-200  -mt-14 lg:-mt-26 py-16 mx-12 lg:mx-24 ">
                <div class="flex flex-col justify-center items-center text-center -mt-20 lg:-mt-40 px-10 py-8    hover:animate-pulse cursor-pointer">
                    <div class="mb-4">
                        <span class="text-[4rem] font-semibold inline-block px-6 py-2  uppercase rounded-full text-gray-50 bg-red-500 mr-3"><i class="bi bi-info"></i></span>
                    </div>
                    <h3 class="text-2xl font-semibold">Notre mail</h3>
                    <p > <a href="mailto:djokiam@gmail.com">djokiam@gmail.com</a> </p>
                </div>

                <div class="flex flex-col justify-center items-center text-center px-10 py-8 mt-1 lg:-mt-40  hover:animate-pulse cursor-pointer">
                    <div class="mb-4">
                        <span class="text-[4rem] font-semibold inline-block px-6 py-2  uppercase rounded-full text-gray-50 bg-red-500 mr-3"><i class="bi bi-phone"></i></span>
                    </div>
                    <h3 class="text-2xl font-semibold">Téléphone</h3>
                    <p> <a href="tel:+33615175061">+33 615 175 061 </a></p>
                </div>

                <div class="flex flex-col justify-center items-center text-center mt-1 lg:-mt-40 px-10 py-8 hover:animate-pulse cursor-pointer">
                    <div class="mb-4">
                        <span class="text-[4rem] font-semibold inline-block px-6 py-2  uppercase rounded-full text-gray-50 bg-red-500 mr-3"><i class="bi bi-map"></i></span>
                    </div>
                    <h3 class="text-2xl font-semibold">Retrouvez nous sur :</h3>
                    <p> <a href="https://maps.app.goo.gl/nawtkjZzqhP2vp4z9" target="_blank" > 1 avenue Pierre de Courbetin, sens 89100. </a></p>
                </div>
            </div>

        </section>

        @include('AllUsers/components/footer')



    </main>
</body>
</html>