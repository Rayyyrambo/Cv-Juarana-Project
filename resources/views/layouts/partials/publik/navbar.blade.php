<section class="w-full  bg-cover bg-no-repeat bg-center"
    style="background-image: url('{{ asset('images/latarCV.jpg') }}') ">
    <header class="bg-teal-300 bg-opacity-10 shadow-lg shadow-cyan-500/20  p-3 lg:w-full w-full">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between relative">
                <div class="md:flex md:items-center">
                    <h1 class="text-red-600 text-3xl font-bold">
                        JUARANA <span class="text-blue-600">MANDIRI</span>
                    </h1>
                </div>
                <nav id="NavMenu"
                    class="navbar-menu   lg:mx-3 lg:bg-white lg:background-bluer   lg:bg-opacity-30 lg:py-2 lg:px-3 
                        lg:rounded-full lg:w-1/2 lg:shadow-lg lg:shadow-blue-700/50  lg:border lg:border-blue-500">

                    <ul class="block  justify-end lg:flex lg:justify-evenly   ">
                        <li class="group  lg:mx-3 hover:bg-blue-400 transition ease-in-out duration-500 p-1 rounded-lg">
                            <a class="flex   mx-8 py-2 lg:py-0 lg:mx-0 font-bold text-white lg:lg:text-blue-700 lg:text-1xl  transition group-hover:text-blue-700"
                                href="{{ route('project') }}">
                                Project
                            </a>
                        </li>
                        <li class="group lg:mx-3 hover:bg-blue-400 transition ease-in-out duration-500 p-1 rounded-lg">
                            <a class="flex mx-8 py-2 lg:py-0 lg:mx-0 font-bold text-white lg:text-blue-700 lg:text-1xl  transition group-hover:text-blue-700"
                                href="{{ route('home') }}">
                                Home
                            </a>
                        </li>

                        <li class="group lg:mx-3 hover:bg-red-400 transition ease-in-out duration-500 p-1 rounded-lg">
                            <a class="flex mx-8 py-2 lg:py-0 lg:mx-0 font-bold text-white lg:text-blue-700  lg:text-1xl transition group-hover:text-red-700"
                                href="{{ route('service') }}">
                                Services
                            </a>
                        </li>

                        <li class="group lg:mx-3 hover:bg-red-400 transition ease-in-out duration-500 p-1 rounded-lg">
                            <a class="flex mx-8 py-2 lg:py-0 lg:mx-0 font-bold text-white lg:text-blue-700 lg:text-1xl  transition group-hover:text-red-700"
                                href="{{ route('product') }}">
                                Product
                            </a>

                        <li class="group  lg:mx-3 hover:bg-red-400 transition ease-in-out duration-500 p-1 rounded-lg">

                            <a class="flex mx-8 py-2 lg:py-0 lg:mx-0 font-bold text-white lg:text-blue-700 lg:text-1xl  transition group-hover:text-red-700"
                                href="#" id="kategori">
                                Kategori
                            </a>
                            <div class="mobile-kategori rounded-lg bg-gray-200 lg:hidden">
                                @forelse ($categories as $category)
                                    <div
                                        class="py-1 px-2 hover:bg-blue-500 transition ease-in-out duration-300  rounded cursor-pointer">
                                        <a href="{{ route('product', ['category'=> $category->name]) }}"
                                            class="text-1xl text-white category-clik font-bold {{ request('category')=== $category->name }} ">{{ $category->name }}</a>
                                    </div>

                                @empty
                                    <div class="py-2 px-3 text-gray-500 text-center">Tidak ada kategori</div>
                                @endforelse

                            </div>
                        </li>
                    </ul>


                </nav>
                <div class="kategori-menu hidden w-full rounded-xl border border-gray-600   lg:w-64  lg:block">
                    <div class="w-full px-3 py-2 ">
                        @forelse ($categories as $item)
                            <div
                                class="py-1 px-2 hover:bg-blue-500 transition ease-in-out duration-300  rounded cursor-pointer">
                                <a href="{{ route('product', ['category' => $item->name]) }}"
                                    class="text-1xl text-gray-700 hover:text-gray-200 font-bold ">{{ $item->name }}</a>
                            </div>

                        @empty
                            <div class="py-2 px-3 text-gray-500 text-center">Tidak ada kategori</div>
                        @endforelse


                    </div>
                </div>



                <div class="flex items-center gap-4">
                    <div class="hidden sm:flex sm:gap-4">
                        @if (Auth::check())
                            <a class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-cyan-300 shadow-sm"
                                href="{{ route('admin.dashboard') }}">
                                Dashboard
                            </a>
                        @else
                            <a class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-cyan-300 shadow-sm"
                                href="{{ route('login') }}">
                                Login
                            </a>
                        @endif
                        <div class="hidden sm:flex">
                            <a class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600"
                                href="{{ route('register') }}">
                                Register
                            </a>
                        </div>

                    </div>

                    <div class="flex items-center px-4">
                        <button id="hamburger" class="lg:hidden " name="hamburger" type="button">
                            <span class="hamburger-line transition duration-300 ease-in-out origin-top-left "></span>
                            <span class="hamburger-line transition duration-300 ease-in-out"></span>
                            <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container w-full px-12 py-12  ">
        <h1 class="lg:text-8xl animate-scaleIn-delay-200 text-5xl font-semibold text-red-600">Juarana <span
                class="text-blue-600">Mandiri</span>
        </h1>
        <p class="lg:text-4xl text-2xl animate-scaleIn-delay-200 text-gray-800 font-bold lg:w-1/2">Pemasangan interior
            dan Ekterior plafon PVC,
            lantai Vinyl, Dinding WPC, Pengecatan , pemasangan produk Conwood lantai, Conwood Dinding, Fasad Conwood,
        </p>
        <hr class="border-black  animate-fadeInLeft duration-1000 border-1 w-2/3 mt-2 mb-2 ">
        <h1 class="text-black animate-slideInUp lg:text-3xl text-2xl font-bold font-sans">Founder:</h1>
        <p class="text-black animate-slideInUp lg:text-2xl text-1xl font-bold">Nizulul Ramdan</p>
        <h1 class="text-black animate-slideInUp lg:text-3xl text-2xl font-bold font-sans">Create:</h1>
        <p class="text-black animate-slideInUp lg:text-2xl text-1xl  font-bold">18 November 2022</p>
    </div>
    <div class="container w-full  py-12">
        <div class="max-w-6xl ">
            <div class="grid grid-cols-2  lg:grid-cols-4 md:grid-cols-2 gap-6 ">
                <div
                    class="lg:w-64 md:w-64 w-40 mx-3 mb-3 border-2 border-blue-400 bg-opacity-70 bg-blue-300 shadow-blue-800 rounded-xl shadow-lg hover:shadow-lg animate-fadeInLeft hover:shadow-blue-400/90 overflow-hidden transition duration-300 ease-in-out  hover:-translate-y-2">
                    <div class="flex flex-col items-center p-6">
                        <h1 class="text-3xl font-bold text-black">1</h1>
                        <div class="text-center ">
                            <p class="text-2xl text-black font-bold">Cuma di sulawesi</p>
                        </div>
                    </div>
                </div>
                <div
                    class="lg:w-64 md:w-64 w-40 mx-3 mb-3  border-2 border-blue-400 bg-opacity-70 bg-blue-300 shadow-blue-800 rounded-xl shadow-lg hover:shadow-lg animate-fadeInLeft hover:shadow-blue-400/90 overflow-hidden transition duration-300 ease-in-out  hover:-translate-y-2">
                    <div class="flex flex-col items-center p-6">
                        <h1 class="text-3xl font-bold text-black">5+</h1>
                        <div class="text-center">
                            <p class="text-2xl text-black font-bold"> Project Selesai</p>
                        </div>
                    </div>
                </div>
                <div
                    class="lg:w-64 md:w-64 w-40 mx-3 mb-3  border-2 border-blue-400 bg-opacity-70 bg-blue-300 shadow-blue-800 rounded-xl shadow-lg hover:shadow-lg animate-fadeInLeft hover:shadow-blue-400/90 overflow-hidden transition duration-300 ease-in-out  hover:-translate-y-2">
                    <div class="flex flex-col items-center p-6">
                        <h1 class="text-3xl font-bold text-black">15+</h1>
                        <div class="text-center">
                            <p class="text-2xl text-black font-bold">Pelanggan puas</p>
                        </div>
                    </div>
                </div>
                <div
                    class="lg:w-64 md:w-64 w-40 mx-3 mb-3  border-2 border-blue-400 bg-opacity-70 bg-blue-300 shadow-blue-800 rounded-xl shadow-lg hover:shadow-lg animate-fadeInLeft hover:shadow-blue-400/90 overflow-hidden transition duration-300 ease-in-out  hover:-translate-y-2">
                    <div class="flex flex-col items-center p-6">
                        <h1 class="text-3xl font-bold text-black">4+</h1>
                        <div class="text-center">
                            <p class="text-2xl text-black font-bold">Tahun Pengalaman</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
