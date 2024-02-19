<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médecin, votre tableau de boad par Kak glycémie</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('../css/AllUsers.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('vendor/basement/basement.bundle.min.css') }}">
</head>

<body>
    <main>
        <div>
            @include('Medecin.components.header')
            <div class="flex overflow-hidden bg-white pt-16">
                @include('Medecin.components.sidebar')
                <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
                <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
                    <div class="pt-6 px-4">
                        {{-- <div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4"> --}}
                        {{-- @include('Medecin.graphe')
                @include('Medecin.formAdd') --}}
                        @yield('medDash')

                        {{-- </div> --}}
                    </div>



                    @include('Medecin.components.footer')
                    <p class="text-center text-sm text-gray-500 my-10">
                        &copy; 2023-2024 <a href="#" class="hover:underline" target="_blank">KaK glycémie</a>. All
                        rights reserved.
                    </p>
                </div>

            </div>
            <script async defer src="https://buttons.github.io/buttons.js"></script>
            <script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
        </div>

    </main>
    {{-- <x-basement::chat-box /> --}}
    <script src="{{ asset('vendor/basement/basement.bundle.min.js') }}"></script>

</body>

</html>
