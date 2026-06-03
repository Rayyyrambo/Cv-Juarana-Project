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
                    <div class="bg-slate-300 rounded-lg w-full px-3 py-5 relative shadow-lg">
                        <div
                            class="absolute top-10 left-0 w-20 h-20 rounded-full bg-gradient-to-br from-blue-500 via-sky-500 to-sky-800 blur-2xl opacity-70 -translate-x-8/2 -translate-y-1/2">
                        </div>
                        <div
                            class="absolute bottom-0 right-0 w-24 h-20 rounded-full bg-gradient-to-br from-sky-500 via-indigo-500 to-sky-800 blur-2xl opacity-70 -translate-x-3/2 -translate-y-1/1">
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
                                class="bg-blue-500 button-location py-3 px-3 text-2xl font-light rounded-lg hover:bg-blue-700 hover:text-gray-100 hover:shadow-lg hover:shadow-blue-500 tarnsition ease-in-out duration-300 shadow-lg ">View
                                To Locations</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full  px-5 py-5 mx-auto">
                <div class="container mx-auto py-3 px-3 ">
                    <div class="bg-slate-300 rounded-lg w-full px-3 py-5 relative shadow-lg">
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
                                class="bg-blue-500 button-Massage py-3 px-3 text-2xl font-light rounded-lg hover:bg-blue-700 hover:text-gray-100 hover:shadow-lg hover:shadow-blue-500 tarnsition ease-in-out duration-300 shadow-lg ">
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

    {{-- End section 3 --}}

    {{-- star section 4 --}}
    <div class="max-w-4xl mx-auto lg:mr-auto lg:mx-3  px-4 py-8">
        <div class="flex flex-wrap justify-between items-center mb-6">
            <div
                class="w-full  mb-12 rounded-full shadow-lg  shadow-sky-400/50 py-3  lg:w-80 bg-gradient-to-br from-cyan-300 from-0% to-cyan-50 to-30% text-center loncat-loncat">
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
            <div class="flex-shrink-0 w-80 bg-white p-6 rounded-xl shadow-md border border-cyan-300 snap-center">

                <h3 class="text-lg font-semibold mb-2">Service AC</h3>
                <p class="text-gray-600 text-sm">Cuci AC, tambah freon, dan perbaikan bongkar pasang AC bergaransi.</p>
            </div>

            <div class="flex-shrink-0 w-80 bg-white p-6 rounded-xl shadow-md border border-cyan-300 snap-center">

                <h3 class="text-lg font-semibold mb-2">Instalasi Listrik</h3>
                <p class="text-gray-600 text-sm">Pemasangan instalasi baru, perbaikan korsleting, dan perapian kabel.</p>
            </div>

            <div class="flex-shrink-0 w-80 bg-white p-6 rounded-xl shadow-md border border-cyan-300 snap-center">

                <h3 class="text-lg font-semibold mb-2">Perbaikan Pompa</h3>
                <p class="text-gray-600 text-sm">Service pompa air mati total, suara bising, atau air tidak naik.</p>
            </div>

            <div class="flex-shrink-0 w-80 bg-white p-6 rounded-xl shadow-md border border-cyan-300 snap-center">

                <h3 class="text-lg font-semibold mb-2">Perawatan Rutin</h3>
                <p class="text-gray-600 text-sm">Kontrak perawatan berkala untuk kantor, ruko, maupun rumah tinggal.</p>
            </div>

        </div>
    </div>
    {{-- end section 4 --}}
@endsection
