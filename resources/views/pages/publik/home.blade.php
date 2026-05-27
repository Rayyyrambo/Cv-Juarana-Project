@extends('layouts.publik')
@section('title', 'home')

@section('content')
    {{-- start section1 --}}

    <section class="w-full  bg-cover bg-no-repeat bg-center"
        style="background-image: url('{{ asset('images/latarCV.jpg') }}') ">
        <div class="container w-full px-12 py-12  ">
            <h1 class="lg:text-8xl text-5xl font-semibold text-red-600">Jumrana <span class="text-blue-600">Mandiri</span></h1>
            <p class="lg:text-4xl text-2xl text-gray-800 font-bold lg:w-1/2">Pemasangan interior dan Ekterior  plafon PVC, lantai Vinyl, Dinding WPC, Pengecatan ,  pemasangan produk Conwood lantai, Conwood Dinding, Fasad Conwood,</p>
            <hr class="border-black border-1 w-2/3 mt-2 mb-2 ">
            <h1 class="text-black lg:text-3xl text-2xl font-bold font-sans">Founder:</h1>
            <p class="text-black lg:text-2xl text-1xl font-bold">Nizulul Ramdan</p>
            <h1 class="text-black lg:text-3xl text-2xl font-bold font-sans">Create:</h1>
            <p class="text-black lg:text-2xl text-1xl  font-bold">18 November 2022</p>    
        </div>
        <div class="container w-full px-9 py-12">
            <div class="max-w-6xl">

                <div class="grid grid-col-1 lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 gap-6 ">
                    <div
                        class="lg:w-64 w-64 mx-3 mb-3 bg-indigo-100 rounded-xl shadow-lg animate-fadeInLeft shadow-blue-800/90 overflow-hidden transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                        <div class="flex flex-col items-center p-6">
                           <h1 class="text-3xl font-bold text-black">1</h1>
                            <div class="text-center">
                                <p class="text-2xl text-gray-600 font-bold">Cuma di sulawesi</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="lg:w-64 w-64 mx-3 mb-3 bg-indigo-100 rounded-xl shadow-lg animate-fadeInLeft shadow-blue-800/90 overflow-hidden transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                        <div class="flex flex-col items-center p-6">
                           <h1 class="text-3xl font-bold text-black">5+</h1>
                            <div class="text-center">
                                <p class="text-2xl text-gray-600 font-bold"> Project Selesai</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="lg:w-64 w-64 mx-3 mb-3 bg-indigo-100 rounded-xl shadow-lg animate-fadeInLeft shadow-blue-800/90 overflow-hidden transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                        <div class="flex flex-col items-center p-6">
                           <h1 class="text-3xl font-bold text-black">15+</h1>
                            <div class="text-center">
                                <p class="text-2xl text-gray-600 font-bold">Pelanggan puas</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="lg:w-64 w-64 mx-3 mb-3 bg-indigo-100 rounded-xl shadow-lg animate-fadeInLeft shadow-blue-800/90 overflow-hidden transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                        <div class="flex flex-col items-center p-6">
                           <h1 class="text-3xl font-bold text-black">4+</h1>
                            <div class="text-center">
                                <p class="text-2xl text-gray-600 font-bold">Tahun Pengalaman</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>

    </section>

            {{-- end section1 --}}

            {{-- strat section2 --}}

            {{-- end section2 --}}

            {{-- start section3 --}}

            {{-- End section 3 --}}

            {{-- star section 4 --}}

            {{-- end section 4 --}}
        @endsection
