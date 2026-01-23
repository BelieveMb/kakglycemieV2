<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de board du Patient /Kak glycémie</title>
    <link rel="shortcut icon" href="../images/logo_white.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    @vite('resources/css/AllUsers.css')

    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="stylesheet" href="{{ asset('vendor/basement/basement.bundle.min.css') }}"> --}}
</head>

<body>
    <main>
        <div>
            @include('Patient.components.header')
            <div class="flex overflow-hidden bg-white pt-16">
                @include('Patient.components.sidebar')
                <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
                <div id="main-content" class="h-screen w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
                    <div class="pt-6 px-4">
                        @yield('dashboardPatient')
                    </div>


                    @include('Patient.components.footer')
                    <p class="text-center text-sm text-gray-500 my-10">
                        &copy; 2023-2026 <a href="#" class="hover:underline" target="_blank">KaK glycémie</a>. Tous 
                        les droits réservés.
                    </p>
                </div>

            </div>
            
            <script async defer src="https://buttons.github.io/buttons.js"></script>
            <script src="https://demo.themesberg.com/windster/app.bundle.js"></script> 
            
        </div>

    </main>
   
</body>

</html>
