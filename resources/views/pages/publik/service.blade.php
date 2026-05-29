@extends('layouts.publik')
@section('title', 'service')

@section('content')
    {{-- start section1 --}}
    <div class="w-96 text-center mx-auto py-5 animate-fadeInUp">
        <h1 class="text-4xl mb-3 text-green-700 font-bold">This is my Service</h1>
        <p class="text-1xl font-bold">Kami menyediakan layanan service terbaik dengan pengerjaan cepat, rapi, dan terpercaya.
            Didukung oleh tenaga profesional dan peralatan yang memadai, kami siap membantu perawatan, perbaikan, hingga
            pengecekan berbagai kebutuhan Anda dengan hasil yang maksimal dan berkualitas.</p>
    </div>

    {{-- card service --}}
    <section class="w-full bg-blue-400 py-12 mt-12 px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 ">
                <div
                    class="bg-indigo-100 rounded-xl shadow-lg animate-fadeInLeft shadow-blue-800/90 overflow-hidden transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                    <div class="flex flex-col items-center p-6">
                        <img class="w-32 h-32 object-cover mb-4" src="{{ asset('images/helmetproject.png') }}" alt="">
                        <div class="text-center">
                            <p class="text-sm font-medium text-gray-700">Kami menyediakan layanan tukang profesional untuk
                                berbagai kebutuhan pembangunan, renovasi, dan perbaikan. Dikerjakan oleh tenaga ahli
                                berpengalaman dengan hasil yang rapi, berkualitas, dan terpercaya.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-indigo-100 rounded-xl shadow-lg animate-fadeInLeft shadow-blue-800/90 overflow-hidden transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                    <div class="flex flex-col items-center p-6">
                        <img class="w-32 h-32 object-cover mb-4" src="{{ asset('images/bangunanproject.png') }}"
                            alt="">
                        <div class="text-center">
                            <p class="text-sm font-medium text-gray-700">Kami menyediakan layanan service terbaik dengan
                                pengerjaan cepat, rapi, dan terpercaya. Didukung oleh tenaga profesional.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-indigo-100 rounded-xl shadow-lg animate-fadeInLeft shadow-blue-800/90 overflow-hidden transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                    <div class="flex flex-col items-center p-6">
                        <img class="w-32 h-32 object-cover mb-4" src="{{ asset('images/pemasanganproject.png') }}"
                            alt="">
                        <div class="text-center">
                            <p class="text-sm font-medium text-gray-700">Kami menyediakan layanan service terbaik dengan
                                pengerjaan cepat, rapi, dan terpercaya. Didukung oleh tenaga profesional.</p>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-indigo-100 rounded-xl shadow-lg animate-fadeInLeft shadow-blue-800/90 overflow-hidden transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                    <div class="flex flex-col items-center p-6">
                        <img class="w-32 h-32 object-cover mb-4" src="{{ asset('images/dliveryproject.png') }}"
                            alt="">
                        <div class="text-center">
                            <p class="text-sm font-medium text-gray-700">Kami menyediakan layanan service terbaik dengan
                                pengerjaan cepat, rapi, dan terpercaya. Didukung oleh tenaga profesional.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end section1 --}}

    {{-- section2 --}}

    {{-- end section2 --}}

    {{-- strat section3 --}}
    <section class="w-full  bg-cover py-16 px-5 flex justify-center  "
        >
        <!-- Gradient Background Elements -->

        <div
            class="relative  overflow-hidden bg-gradient-to-r from-cyan-600 via-blue-300 to-cyan-400 py-16 px-16 rounded-3xl w-full lg:w-2/3 shadow-2xl border border-blue-600
            transition ease-in-out duration-300 translate-y-1 hover:shadow-lg hover:shadow-blue-600 hover:translate-y-0 lg:translate-y-0">
            <div
                class="absolute top-0 left-0 w-80 h-80 rounded-full bg-gradient-to-br from-purple-500 via-indigo-500 to-sky-800 blur-2xl opacity-30 -translate-x-1/2 -translate-y-1/2">
            </div>
            <div
                class="absolute bottom-0 right-0 w-96 h-96 rounded-full bg-gradient-to-tl from-cyan-500 via-blue-500 to-indigo-500 blur-2xl opacity-30 translate-x-1/2 translate-y-1/3">
            </div>
            <div class="  px-4 text-center ">
                <h2 class="text-4xl font-bold text-slate-800 mb-6">Wujudkan Project Impian Anda </h2>
                <p class="text-1xl lg:text-center lg:w-96 lg:mx-auto font-semibold text-gray-700">Bersama Kami Juarana Manadiri Dapat Membantu Project Impian Anda</p>
                <div class="flex flex-wrap justify-center mt-3 ">
                    <a href="#"
                        class="py-2 mb-3 translate-y-1 transition ease-in-out duration-300 hover:translate-y-0 hover:shadow-lg hover:shadow-blue-600 shadow-lg shadow-blue-500/40 bg-blue-600 flex items-center justify-center px-5 mx-3 rounded-2xl  font-bold text-1xl text-white 
                    h">
                        <i class="fa-brands fa-whatsapp text-4xl mx-3 text-white cursor-pointer"></i>
                        Chat</a>
                    <a href="#"
                        class="py-2 mb-3 translate-y-1 transition ease-in-out duration-300 hover:translate-y-0 hover:shadow-lg hover:shadow-red-600 shadow-lg shadow-blue-500/40 bg-red-600 flex items-center justify-center px-5 mx-3 rounded-2xl  font-bold text-1xl text-white 
                    h">
                        <i
                            class="fa-brands fa-instagram text-4xl mx-3 font-extrabold text-white cursor-pointer"></i>
                        Send</a>
                    
                </div>
                <div class="flex mt-3">

                </div>
            </div>
        </div>
    </section>
@endsection

{{-- end section2 --}}

{{-- start section3 --}}

{{-- End section 3 --}}

{{-- star section 4 --}}

{{-- end section 4 --}}

{{-- footer --}}
