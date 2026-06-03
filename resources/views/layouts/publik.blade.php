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

    {{-- start section1 --}}
    @yield('content')
    {{-- end section1 --}}

    {{-- scripy --}}
    @include('layouts.partials.publik.scripts')

    {{-- footer --}}
    @include('layouts.partials.publik.footer')
    {{-- end footer --}}

    {{-- modal --}}
    <div class="hidden bg-gray-400 px-2 py-3 bg-opacity-90  fixed z-50 left-0 top-0 w-full h-screen overflow-auto"
        id="modalProduct">
        <div class=" bg-slate-600 relative p-5 m-auto w-80  lg:w-96 mt-24 rounded-lg shadow-lg">
            <button id="closeModalBtn" class="absolute top-0 right-0 p-2 text-gray-700 hover:text-black text-2xl font-bold">×</button>
            <div class="container    ">
                <img class="w-60   object-cover " src="{{ asset('images/project1.jpg') }}" alt="">
                <div class="mt-3 border border-gray-400 rounded-lg px-3 p-5 bg-slate-800">
                    <h1
                        class="text-1xl shadow-lg shadow-slate-600 text-center font-bold bg-yellow-400 rounded-lg w-40 px-5 py-2 mb-2">
                        Nama Produk</h1>
                    <p class="px-5 text-gray-300 font-semibold mt-3">200.000</p>
                    <p class="px-5 py-2 text-gray-300  font-semibold">stock produk</p>
                    <p
                        class="bg-zinc-950 text-center w-40 mt-1 text-gray-100 px-3 font-semibold border-2 border-yellow-300 py-2 rounded-xl">
                        kategori produk</p>
                    <p class="mt-2 text-gray-200">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero repellendus voluptas amet,
                        inventore officia maiores veniam molestias, facilis, asperiores omnis neque? Sit eius laboriosam
                        ipsum quo dolorem aut rerum nulla?</p>
                    <div class="flex justify-end ">
                        <a href="" class="bg-sky-700 px-3 py-3 rounded-lg font-bold shadow-lg transition ease-in-out duration-300 hover:bg-sky-400 hover:text-white text-lg  ">Pesan</a>
                    </div>

                </div>

            </div>


        </div>


    </div>

</body>

</html>
{{-- <div class="flex flex-col  relative mx-auto  ">
                <img class="w-96 lg:h-64 object-cover  " src="{{ asset('images/project1.jpg') }}" alt="">
                <div class=" mt-5 border   border-gray-400 px-4 py-4 bg-slate-800">
                    <h1
                        class="text-1xl shadow-lg shadow-slate-600 text-center font-bold bg-yellow-400 rounded-lg w-40 px-5 py-2 mb-2">
                        Nama Produk</h1>
                   
                    
                   
                    <hr class="w-80 border-gray-400 mt-2">
                    <div class="flex flex-wrap w-90  mt-1">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti perspiciatis eius delectus
                            nisi, quia numquam eum ad quasi earum eaque officiis nobis consectetur molestias dignissimos
                            laboriosam rem dolore, neque eligendi!</p>
                    </div>
                    
                </div>
            </div> --}}
