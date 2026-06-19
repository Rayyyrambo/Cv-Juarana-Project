<!doctype html>
<html lang="en" class="h-screen overflow-hidden">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @vite(['resources/css/app.css', 'resources/js/admin/admin.js'])
    <title>@yield('title')</title>
    @include('layouts.partials.publik.style')

</head>

<body class="h-screen overflow-hidden">
    <div class="w-full h-screen flex">
        <a id="menu-toggle" 
            class="fixed top-4 left-4 z-50 lg:hidden bg-blue-500 text-white p-3 rounded-xl shadow-md hover:bg-blue-600 transition">
            <i class="fas fa-bars text-xl"></i>
        </a>
        {{-- star Sidebar --}}
       @include('layouts.partials.admin.sidebar')
        {{-- end sidebar --}}

        {{-- content --}}
        <div class="w-full h-screen bg-black flex flex-col">
            {{-- top bar --}}
           @include('layouts.partials.admin.topbar')
            {{-- end topbar --}}
            @yield('content')
            {{-- main content --}}
            
        </div>
    </div>

</body>
