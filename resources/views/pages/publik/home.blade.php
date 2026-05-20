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
                                        href="#"
                                    >
                                        Home
                                    </a>
                                </li>
                                
                                <li class="group lg:mx-3 hover:bg-red-500 p-1 rounded-lg">
                                    <a
                                        class="flex mx-8 py-2 lg:py-0 lg:mx-0 text-base text-white font-bold transition group-hover:text-red-700"
                                        href="{{ route('service') }}"
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
                                    href="{{ route('register') }}"
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
        <section>
            <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8 border-b-4 border-indigo-500">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:items-center md:gap-8">
                    <div>
                        <div class="max-w-prose md:max-w-none">
                        <h2 class="text-2xl font-semibold text-red-600 sm:text-3xl lg:text-5xl">
                            JUARANA <span class="text-blue-600">MANDIRI</span>
                        </h2>
                        <p class="mt-4 text-pretty text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur doloremque saepe
                            architecto maiores repudiandae amet perferendis repellendus, reprehenderit voluptas
                            sequi.
                        </p>
                        </div>
                    </div>
                <div>
                    <img src="{{ asset('juaranaM.png') }}" class="rounded" alt="">
                </div>
                </div>
            </div>
        </section>
        {{-- end section1 --}}

        {{-- strat section2 --}}
        <section>
            <div class="w-full mt-5  p-3 ">
                <div class="bg-gradient-to-r from-indigo-300 to-indigo-500 w-80 text-center mx-auto p-3 rounded">
                    <h1 class="text-5xl ">PROJECT</h1>
                </div>
            </div>
            {{-- card --}}
            <div class="flex flex-wrap justify-center mt-6">
                <div class="w-80 px-4">
                    <div class="bg-indigo-100 rounded-xl shadow-lg mb-10 overflow-hidden transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                        <img class="w-80 object-cover " src="{{ asset('images/project1.jpg') }}" alt="">
                        <div class="py-8 px-6">
                            <h3>product</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quibusdam mollitia temporibus in alias dignissimos sed facere, officiis iusto atque!</p>
                            <button class="bg-emerald-400 p-3 rounded-xl hover:bg-emerald-700">
                                check
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-80 px-4">
                    <div class="bg-indigo-100 rounded-xl shadow-lg mb-10 overflow-hidden transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                        <img class="w-80 object-cover " src="{{ asset('images/project2.jpg') }}" alt="">
                        <div class="py-8 px-6">
                            <h3>product</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed veritatis suscipit, dolorem ex cum culpa saepe ullam exercitationem eius dicta.</p>
                            <button class="bg-emerald-400 p-3 rounded-xl hover:bg-emerald-700">
                                check
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-80 px-4">
                    <div class="bg-indigo-100 rounded-xl shadow-lg mb-10 overflow-hidden transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                        <img class="w-80 h-80 object-cover " src="{{ asset('images/project3.jpg') }}" alt="">
                        <div class="py-8 px-6">
                            <h3>product</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur obcaecati voluptatibus, non consequuntur error ratione. Ad excepturi provident placeat tempora.</p>
                            <button class="bg-emerald-400 p-3 rounded-xl hover:bg-emerald-700">
                                check
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-80 px-4">
                    <div class="bg-indigo-100 rounded-xl shadow-lg mb-10 overflow-hidden transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                        <img class="w-80 h-80 object-cover " src="{{ asset('images/project4.jpg') }}" alt="">
                        <div class="py-8 px-6">
                            <h3>product</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ratione laborum sit quibusdam, aut deserunt consequatur vitae iste voluptatibus veniam.</p>
                            <button class="bg-emerald-400 p-3 rounded-xl hover:bg-emerald-700">
                                check
                            </button>
                        </div>
                    </div>
                </div>
            </div>   
        </section>
        {{-- end section2 --}}

        {{-- start section3--}}
        <section>
                <div class="w-full bg-slate-200 ">
                    <div class="grid grid-cols-1  md:grid-cols-2  ">
                        <div class=" px-5 py-5 ">
                             <div class="w-full shadow-lg shadow-gray-600/50 border-indigo-300 text-center mb-10 p-4 rounded-lg">
                                <h6 class="text-6xl  text-cyan-400 font-bold ">Layanan</h6>
                                <p class="mt-5 text-4xl text-red-500 font-bold">Juarana <spa class="text-blue-500">Mandiri</spa></p>
                            </div>
                            <div class="flex p-5 mb-10 bg-blue-300 mx-5 rounded-lg shadow-lg hover:bg-cyan-300 transition duration-500 ease-in-out hover:shadow-2xl hover:-translate-y-2 lg:hover:translate-y-0 ">
                                <i class="fa-solid fa-house text-blue-600 text-5xl"></i>
                                <p class="mx-3 text-lg font-bold">Temukan rumah impian Anda bersama kami. Hunian berkualitas dengan desain eksklusif, harga terjangkau, dan lingkungan yang nyaman untuk keluarga tercinta</p> 
                            </div>
                            <div class="flex p-5 mb-10 bg-blue-300 mx-5 rounded-lg shadow-lg hover:bg-cyan-300 transition duration-500 ease-in-out hover:shadow-2xl hover:-translate-y-2 lg:hover:translate-y-0">
                                <i class="fa-solid fa-helmet-safety text-blue-600 text-5xl"></i>
                                <p class="mx-3 text-lg font-bold">Kami menyediakan layanan pemasangan bahan bangunan dengan kualitas terbaik dan pengerjaan yang profesional. Didukung oleh tenaga kerja berpengalaman, setiap proyek dikerjakan dengan teliti untuk menghasilkan bangunan yang kokoh, rapi, dan sesuai kebutuhan</p> 
                            </div>
                            <div class="flex p-5 mb-10 bg-blue-300 mx-5 rounded-lg shadow-lg hover:bg-cyan-300 transition duration-500 ease-in-out hover:shadow-2xl hover:-translate-y-2 lg:hover:translate-y-0 ">
                                <i class="fa-solid fa-screwdriver-wrench text-blue-600 text-5xl"></i>
                                <p class="mx-3 text-lg font-bold">Kami menyediakan layanan service bahan bangunan dengan pengerjaan profesional dan hasil berkualitas. Setiap proyek ditangani oleh tenaga berpengalaman untuk memastikan bangunan tetap kuat, aman, dan tahan lama</p> 
                            </div>
                            
                        </div>
                        <div class=" w-full lg:w-2/3 mx-auto py-5 px-5 " >
                            <div class="container">
                                <div class="w-full shadow-lg shadow-gray-600/50 border-indigo-300 text-center mb-10 p-4 rounded-lg">
                                    <h6 class="text-6xl text-cyan-400 font-bold">From to Massage</h6>
                                    <p class="mt-5 text-4xl text-red-500 font-bold">Juarana <spa class="text-blue-500">Mandiri</spa></p>
                                </div>
                                <form action="">
                                    <div class=" w-full px-4 mb-8">
                                        <label for="name" class="text-base text-black font-bold block mb-2">Nama</label>
                                        <input type="text" id="name" placeholder="Silahkan isi nama anda" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500">
                                    </div>
                                    <div class=" w-full px-4 mb-8">
                                        <label for="email" class="text-base text-black font-bold block mb-2">Email</label>
                                        <input type="email" id="email" placeholder="Silahkan isi email anda" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500">
                                    </div>
                                    <div class=" w-full px-4 mb-8">
                                        <label for="pesan" class="text-base text-black font-bold block mb-2">Pesan</label>
                                       <textarea name="pesan" id="" cols="30" rows="10" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500" placeholder="Ketik pesan anda"></textarea>   
                                    </div>
                                    <div class=" w-full px-4 mb-8 ">
                                        <button type="submit" class="text-base text-white  bg-green-400 hover:bg-green-700 transition duration-500 py-3 px-8 rounded-full w-full font-semibold lg:w-40  "> 
                                            Kirim
                                        </button>
                                    </div>
                                </form>
                                
                        </div>
                    </div>
                </div>
        </section>
        {{-- End section 3 --}}

        {{-- star section 4 --}}
        <section class="mt-20 mb-23">
            <h1 class="text-center mb-20 text-6xl">Massage</h1>
            <div class="flex flex-wrap justify-center mt-6">
                <div class="w-80 px-4 ">
                    <div class="transition duration-300 ease-in-out hover:bg-slate-400   rounded-xl shadow-lg shadow-gray-600/50 mb-10 overflow-hidden">
                        <div class="text-start p-3 bg-sky-400 pt-4  ">
                            <h1>name</h1>
                        </div>
                        <div class="py-8 px-6"> 
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quibusdam mollitia temporibus in alias dignissimos sed facere, officiis iusto atque!</p>
                        </div>
                    </div>
                </div>
                <div class="w-80 px-4 ">
                    <div class="transition duration-300 ease-in-out hover:bg-slate-400 rounded-xl shadow-lg shadow-gray-600/50 mb-10 overflow-hidden">
                        <div class="text-start p-3 bg-sky-400 pt-4  ">
                            <h1>name</h1>
                        </div>
                        <div class="py-8 px-6"> 
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quibusdam mollitia temporibus in alias dignissimos sed facere, officiis iusto atque!</p>
                        </div>
                    </div>
                </div>
                <div class="w-80 px-4 ">
                    <div class="transition duration-300 ease-in-out hover:bg-slate-400 rounded-xl shadow-lg shadow-gray-600/50 mb-10 overflow-hidden">
                        <div class="text-start p-3 bg-sky-400 pt-4  ">
                            <h1>name</h1>
                        </div>
                        <div class="py-8 px-6"> 
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quibusdam mollitia temporibus in alias dignissimos sed facere, officiis iusto atque!</p>
                        </div>
                    </div>
                </div>
                <div class="w-80 px-4 ">
                    <div class="transition duration-300 ease-in-out hover:bg-slate-400 rounded-xl shadow-lg shadow-gray-600/50 mb-10 overflow-hidden">
                        <div class="text-start p-3 bg-sky-400 pt-4  ">
                            <h1>name</h1>
                        </div>
                        <div class="py-8 px-6"> 
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quibusdam mollitia temporibus in alias dignissimos sed facere, officiis iusto atque!</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        {{-- end section 4 --}}

        {{-- footer --}}
        <footer class="w-full mx-auto bg-sky-100 pb-12 pt-12 mt-24 ">
            <div class="px-5 mx-auto">
                <div class="flex flex-wrap lg:justify-evenly md:justify-evenly">
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
                <p class="font-semibold text-blue-500 text-center px-3">Tetap terhubung dan dapatkan informasi terbaru melalui media sosial saya:</p>
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
