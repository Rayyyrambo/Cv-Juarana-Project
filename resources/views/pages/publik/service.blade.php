<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
         @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <title>Document</title>
        
    </head>
    <body>
        <!--  star navbar -->
        <header class="bg-sky-100 p-3 lg:w-full w-full">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between relative">
                    <div class="md:flex md:items-center">
                        <h1 class="text-red-600 text-3xl font-bold">
                            JUARANA <span class="text-blue-600">MANDIRI</span>
                        </h1>
                    </div>
                    <nav id="NavMenu" class="hidden lg:block lg:static lg:max-w-full lg:py-3 lg:px-3  lg:w-1/2 lg:bg-gradient-to-r from-red-500  to-blue-500 absolute  bg-blue-400 bg-opacity-40 background-bluer shadow-lg py-5 rounded-lg max-w-[250px] w-full top-full  right-4">
                            <ul class=" block lg:flex lg:justify-evenly  ">
                                <li class="group lg:mx-3 hover:bg-blue-400 p-1 rounded-lg">
                                    <a
                                        class="flex  mx-8 py-2 lg:py-0 lg:mx-0 text-base text-white font-bold transition group-hover:text-blue-700"
                                        href="{{ route('about') }}"
                                    >
                                        About
                                    </a>
                                </li>
                                <li class="group lg:mx-3 hover:bg-blue-400 p-1 rounded-lg">
                                    <a
                                        class="flex mx-8 py-2 lg:py-0 lg:mx-0 text-base text-white font-bold transition group-hover:text-blue-700"
                                        href="{{ route('home') }}"
                                    >
                                        Home
                                    </a>
                                </li>
                                
                                <li class="group lg:mx-3 hover:bg-red-500 p-1 rounded-lg">
                                    <a
                                        class="flex mx-8 py-2 lg:py-0 lg:mx-0 text-base text-white font-bold transition group-hover:text-red-700"
                                        href="#"
                                    >
                                        Services
                                    </a>
                                </li>

                                <li class="group lg:mx-3 hover:bg-red-500 p-1 rounded-lg">
                                    <a
                                        class="flex mx-8 py-2 lg:py-0 lg:mx-0 text-base text-white font-bold transition group-hover:text-red-700"
                                        href="{{ route('product') }}"
                                    >
                                        Product
                                    </a>
                                </li>

                                
                            </ul>
                        </nav>
                    
                        

                    <div class="flex items-center gap-4">
                        <div class="hidden sm:flex sm:gap-4">
                            <a
                                class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow-sm"
                                href="{{ route('login') }}"
                            >
                                Login
                            </a>

                            <div class="hidden sm:flex">
                                <a
                                    class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600"
                                    href="#"
                                >
                                    Register
                                </a>
                            </div>
                        </div>

                        <div class="flex items-center px-4">
                            <button
                                id="hamburger"
                                class="lg:hidden"
                                name="hamburger"
                                type="button"
                            >
                                <span class="hamburger-line transition duration-300 ease-in-out origin-top-left "></span>
                                <span class="hamburger-line transition duration-300 ease-in-out"></span>
                                <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        {{-- end navbar --}}
    
        {{-- start section1 --}}
       <h1 class="text-2xl">Service</h1>
        {{-- end section1 --}}

        {{-- strat section2 --}}
        
        {{-- end section2 --}}

        {{-- start section3--}}
        
        {{-- End section 3 --}}

        {{-- star section 4 --}}
        
        {{-- end section 4 --}}

        {{-- footer --}}
        <footer class="w-full bg-sky-100 pb-12 pt-12 mt-24 ">
            <div class=" mx-auto">
                <div class="flex flex-wrap lg:justify-evenly">
                    <div class=" px-4 mb-12">
                        <p class="text-3xl text-red-600 font-bold mb-5">Juarana <span class="text-blue-600">Mandiri</span></p>
                        <p>JuaranaMandiri@gmail.ccom</p>
                        <p>Jl. Permata Sudiang Raya H6/25</p>
                        <p>Kota Makassar</p>
                    </div>
                    <div class=" px-4 mb-12">
                        <h1 class="text-3xl font-bold text-blue-500">Contact</h1>
                        <p class="text-green-600 font-bold">Whatsapp <span class="text-black">085677894392</span></p>
                        <p class="text-rose-600 font-bold">Instagram <span class="text-black">juarana_mandiri</span></p>
                        <p class="text-blue-600 font-bold">Facebook <span class="text-black">Juarana Mandiri</span></p>
                    </div>
                    <div class=" px-4 mb-12">
                        <h1 class="text-3xl font-bold text-blue-500">Navigasi</h1>
                        <p class="text-black font-bold">Home</p>
                        <p class="text-black font-bold">Project</p>
                        <p class="text-black font-bold">From to Massagge</p>
                        <p class="text-black font-bold">Layanan</p>
                    </div>
                </div>
            </div>
            <div class="container mx-auto ">
                <div class="flex flex-wrap justify-center">
                    <h1 class="text-3xl font-semibold text-blue-500 text-center">Hubungi & Ikuti Media Sosial Saya</h1>
                </div>
                <p class="font-semibold text-blue-500 text-center">Tetap terhubung dan dapatkan informasi terbaru melalui media sosial saya:</p>
                <div class="w-96 text-center flex justify-evenly  mx-auto mt-5">
                    <a href="" class="hover:bg-green-600 transition duration-300 p-3 rounded-full">
                        <i class="fa-brands fa-whatsapp text-3xl text-gray-700 hover:text-green-500 transition duration-300 cursor-pointer"></i>
                    </a>
                    <a href="" class="hover:bg-rose-300 transition duration-300 p-3 rounded-full">
                        <i class="fa-brands fa-instagram text-3xl text-gray-700 hover:text-red-600 transition duration-300 cursor-pointer"></i>
                    </a>
                    <a href="" class="hover:bg-gray-600 p-3 transitoin duration-300 rounded-full">
                        <i class="fa-brands fa-github text-3xl text-gray-700 hover:text-black transition duration-300 cursor-pointer"></i>
                    </a>
                    <a href="" class="hover:bg-red-500 p-3 transition duration-300 rounded-full">
                        <i class="fa-solid fa-envelope text-2xl text-gray-700 hover:text-white transition duration-300 cursor-pointer"></i>
                    </a>
                    <a href="" class="hover:bg-blue-400 p-3 transition duration-300 rounded-full">
                        <i class="fa-brands fa-facebook text-2xl text-gray-700 hover:text-blue-600 transition duration-300 cursor-pointer"></i>
                    </a>
                </div>
            </div>
        </footer>
        
    </body>
</html>
