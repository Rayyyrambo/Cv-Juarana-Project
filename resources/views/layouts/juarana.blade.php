<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
         @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

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
                                <li class="group lg:mx-3">
                                    <a
                                        class="flex  mx-8 py-2 lg:py-0 lg:mx-0 text-base text-white font-bold transition group-hover:text-blue-700"
                                        href="#"
                                    >
                                        About
                                    </a>
                                </li>
                                <li class="group lg:mx-3">
                                    <a
                                        class="flex mx-8 py-2 lg:py-0 lg:mx-0 text-base text-white font-bold transition group-hover:text-blue-700"
                                        href="#"
                                    >
                                        Careers
                                    </a>
                                </li>
                                <li class="group lg:mx-3">
                                    <a
                                        class="flex mx-8 py-2 lg:py-0 lg:mx-0 text-base text-white font-bold transition group-hover:text-blue-700"
                                        href="#"
                                    >
                                        History
                                    </a>
                                </li>
                                <li class="group lg:mx-3">
                                    <a
                                        class="flex mx-8 py-2 lg:py-0 lg:mx-0 text-base text-white font-bold transition group-hover:text-blue-700"
                                        href="#"
                                    >
                                        Services
                                    </a>
                                </li>

                                <li class="group lg:mx-3">
                                    <a
                                        class="flex mx-8 py-2 lg:py-0 lg:mx-0 text-base text-white font-bold transition group-hover:text-blue-700"
                                        href="#"
                                    >
                                        Projects
                                    </a>
                                </li>

                                <li class="group lg:mx-3">
                                    <a
                                        class="flex mx-8 py-2 lg:py-0 lg:mx-0 text-base text-white font-bold transition group-hover:text-blue-700"
                                        href="#"
                                    >
                                        Blog
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    
                        

                    <div class="flex items-center gap-4">
                        <div class="hidden sm:flex sm:gap-4">
                            <a
                                class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow-sm"
                                href="#"
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
                    <div class="bg-indigo-100 rounded-xl shadow-lg mb-10 overflow-hidden">
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
                    <div class="bg-indigo-100 rounded-xl shadow-lg mb-10 overflow-hidden">
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
                    <div class="bg-indigo-100 rounded-xl shadow-lg mb-10 overflow-hidden">
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
                    <div class="bg-indigo-100 rounded-xl shadow-lg mb-10 overflow-hidden">
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
    </body>
</html>
