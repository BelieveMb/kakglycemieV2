<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin, votre tableau de board pour la gestion de Kak glycémie</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('../css/AllUsers.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('vendor/basement/basement.bundle.min.css') }}">
</head>

<body>
    <main>
        <div>
            @include('Admin.components.header')
            <div class="flex overflow-hidden bg-white pt-16">
                @include('Admin.components.sidebar')
                <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
                <div id="main-content" class="flex flex-col gap-4 h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
                    <div class="flex flex-col gap-4 pt-6 px-4 h-screen ">
                        @if(request()->route()->getName()=== 'admin.dashboardAdmin') 
                            <div class="flex flex-col gap-4 ">
                                @include('Admin.statAdmin') 
                                @include('Admin.patientList') 
                            </div>  
                        @else
                            @yield('dashAdmin')
                        @endif
                    </div>

                   
                </div>

            </div>
            <script async defer src="https://buttons.github.io/buttons.js"></script>
            <script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
        </div>
    </main>
</body>

</html>
