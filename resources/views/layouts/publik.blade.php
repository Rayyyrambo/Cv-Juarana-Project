<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
         @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>@yield('title')</title>
        @include('layouts.partials.publik.style')
        
    </head>
    <body>
        <!--  star navbar -->
        @include('layouts.partials.publik.navbar')
        {{-- end navbar --}}
    
        {{-- start section1 --}}
       @yield('content')
        {{-- end section1 --}}

        {{-- scripy --}}
        @include('layouts.partials.publik.scripts')
   
        {{-- footer --}}
        @include('layouts.partials.publik.footer')
        {{-- end footer --}}
        
    </body>
</html>
