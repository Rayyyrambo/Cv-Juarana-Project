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
    {{-- end navbar --}}
    @include('layouts.partials.publik.navbar')

    @if (session('success'))
        <div id="successAlert"
            class="fixed right-5 top-5 z-[60] max-w-sm rounded-lg border border-green-300 bg-green-100 px-5 py-4 text-green-800 shadow-lg transition-opacity duration-500"
            role="alert">
            <p class="font-semibold">{{ session('success') }}</p>
        </div>
    @endif

    {{-- start section1 --}}
    @yield('content')
    {{-- end section1 --}}

    {{-- scripy --}}
    @include('layouts.partials.publik.scripts')

    {{-- footer --}}
    @include('layouts.partials.publik.footer')
    {{-- end footer --}}

    {{-- modal --}}
    @include('layouts.partials.publik.modal')

</body>

</html>
