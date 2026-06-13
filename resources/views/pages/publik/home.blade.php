@extends('layouts.publik')
@section('title', 'home')

@section('content')
    {{-- start section1 --}}


    {{-- end section1 --}}

    {{-- strat section2 --}}
    <section class="w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 ">
            <div class="w-full  px-5 py-5">
                <div class="container mx-auto py-3 px-3 ">
                    <div class="bg-slate-200 rounded-lg w-full px-3 py-5 relative shadow-lg">
                        <div
                            class="absolute top-16 left-5 w-20 h-20 rounded-t-sm bg-gradient-to-br  from-sky-500 via-indigo-500 to-sky-800 blur-2xl opacity-70 -translate-x-8/2 -translate-y-1/2">
                        </div>
                        <div
                            class="absolute bottom-2 right-5 w-24 h-20 rounded-t-sm bg-gradient-to-br from-sky-500 via-indigo-500 to-sky-800 blur-2xl opacity-70 -translate-x-3/2 -translate-y-1/1">
                        </div>
                        <h1 class="text-2xl text-center text-gray-800 font-bold">Location from <span
                                class="text-red-500 font-bold">Juarana</span> <span
                                class="text-blue-500 font-bold">Mandiri</span>
                        </h1>
                        <p class="w-90 text-center text-gray-600 text-lg font-bold">Juarana Mandiri siap melayani kebutuhan
                            konstruksi, pemasangan, dan service profesional. Kunjungi
                            lokasi kami atau lihat rute perjalanan melalui peta untuk mendapatkan layanan terbaik.</p>
                        <hr class="w-full px-2 border border-gray-400 mt-2">
                        <div class="w-2/3 mx-auto  px-5 py-5 flex justify-center  rounded-lg mt-3">
                            <a href="#"
                                class="text-gray-100 bg-blue-500 button-location py-3 px-3 text-2xl font-light rounded-lg hover:bg-blue-700 hover:text-gray-100 hover:shadow-lg hover:shadow-blue-500 tarnsition ease-in-out duration-300 shadow-lg ">View
                                To Locations</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full  px-5 py-5 mx-auto">
                <div class="container mx-auto py-3 px-3 ">
                    <div class="bg-slate-200 rounded-lg w-full px-3 py-5 relative shadow-lg">
                        <div
                            class="absolute top-10 left-0 w-20 h-20 rounded-full bg-gradient-to-br from-blue-500 via-sky-500 to-sky-800 blur-2xl opacity-70 -translate-x-8/2 -translate-y-1/2">
                        </div>
                        <div
                            class="absolute bottom-0 right-0 w-24 h-20 rounded-full bg-gradient-to-br from-sky-500 via-indigo-500 to-sky-800 blur-2xl opacity-70 -translate-x-3/2 -translate-y-1/1">
                        </div>
                        <h1 class="text-2xl text-center text-gray-800 font-bold">Massage For <span
                                class="text-red-500 font-bold">Juarana</span> <span
                                class="text-blue-500 font-bold">Mandiri</span>
                        </h1>
                        <p class="w-90 text-center text-gray-600 text-lg font-bold">Masukan dan saran dari pelanggan sangat
                            berarti bagi kami untuk terus meningkatkan kualitas layanan dan memberikan pengalaman terbaik
                            kepada setiap pelanggan.</p>
                        <hr class="w-full px-2 border border-gray-400 mt-2">
                        <div class="w-2/3 mx-auto  px-5 py-5 flex justify-center  rounded-lg mt-3">
                            <a href="" id=""
                                class="text-gray-100 bg-blue-500 button-Massage py-3 px-3 text-2xl font-light rounded-lg hover:bg-blue-700 hover:text-gray-100 hover:shadow-lg hover:shadow-blue-500 tarnsition ease-in-out duration-300 shadow-lg ">
                                Massage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    {{-- end section2 --}}

    {{-- start section3 --}}

    {{-- end section3 --}}

    {{-- start section - products --}}
    <section
        class="w-full border border-blue-500 container shadow-lg mx-auto rounded-2xl mt-12 py-12 px-12 bg-gradient-to-r from-slate-200 to-blue-200">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-10">
                <h2 class="text-4xl font-bold text-gray-800 mb-2">
                    Produk Unggulan <span class="text-red-600">Juarana</span> <span class="text-blue-600">Mandiri</span>
                </h2>
                <p class="text-gray-600 text-lg">Lihat koleksi lengkap produk berkualitas kami yang siap memenuhi kebutuhan
                    Anda</p>
            </div>

            <div class="flex justify-center">
                <a href="{{ route('product') }}"
                    class="inline-block bg-gradient-to-r from-blue-500 to-cyan-500 hover:from-blue-600 hover:to-cyan-600 text-white font-bold py-4 px-8 rounded-lg shadow-lg hover:shadow-xl transition ease-in-out duration-300 transform hover:-translate-y-1">
                    <span class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                        Lihat Semua Produk
                    </span>
                </a>
            </div>
        </div>
        <hr class="border border-gray-600 mt-12 mb-12 w-full">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-10">
                <h2 class="text-4xl font-bold text-gray-800 mb-2">
                    Ayo liat semua project kami <span class="text-red-600">Juarana</span> <span
                        class="text-blue-600">Mandiri</span>
                </h2>
                <p class="text-gray-600 text-lg">Lihat koleksi lengkap project yang sudah kami selesaikan
                </p>
            </div>

            <div class="flex justify-center">
                <a href="{{ route('project') }}"
                    class="inline-block bg-gradient-to-r from-blue-500 to-cyan-500 hover:from-blue-600 hover:to-cyan-600 text-white font-bold py-4 px-8 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                    <span class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                        Lihat Semua Project
                    </span>
                </a>
            </div>
        </div>
    </section>
    {{-- end section - products --}}

    {{-- star section 4 --}}
    <div class="max-w-6xl mx-auto lg:mr-auto lg:mx-3 px-4 py-8">
        <div class="flex flex-wrap justify-between items-center mb-6">
            <div
                class="w-full mb-12 rounded-full shadow-lg shadow-sky-400/50 py-3 lg:w-80 bg-gradient-to-br from-cyan-300 from-0% to-cyan-50 to-30% text-center loncat-loncat">
                <h1 class="text-4xl font-bold text-gray-700 font-mono">For massage</h1>
                <h1 class="text-3xl text-red-600 font-bold">Juarana <span class="text-blue-600">Mandiri</span></h1>
            </div>
            <div class="flex gap-2">
                <button id="prevBtn"
                    class="bg-blue-300 hover:bg-blue-600 text-gray-800 p-2 rounded-full transition-colors focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button id="nextBtn"
                    class="bg-blue-300 hover:bg-blue-600 text-gray-800 p-2 rounded-full transition-colors focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>

        <div id="sliderContainer"
            class="flex border-2 rounded-lg bg-gray-300 border-gray-200 py-3 px-2 gap-6 overflow-x-auto scroll-smooth snap-x snap-mandatory scrollbar-none pb-4">

            @forelse ($messages as $item)
                <div class="flex-shrink-0 w-80 bg-white p-6 rounded-xl shadow-md border border-cyan-300 snap-center">
                    <h3 class="text-lg text-blue-800 font-semibold mb-2 bg-sky-300 px-2 py-2 w-20 text-center rounded-xl">
                        {{ $item->user }}</h3>
                    <h3 class="text-lg  mb-2">{{ $item->email }}</h3>
                    <p class="text-gray-600 text-sm font-semibold">{{ $item->description }}</p>
                </div>
            @empty
                <div class="flex-shrink-0 w-80 bg-white p-6 rounded-xl shadow-md border border-cyan-300 snap-center">
                    <h3 class="text-lg font-semibold mb-2">Belum ada pesan</h3>
                </div>
            @endforelse

        </div>
    </div>
    {{-- end section 4 --}}
@endsection
