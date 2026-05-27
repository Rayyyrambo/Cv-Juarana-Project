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
    <section class="w-full  py-12 px-5">
        <div data-aos="fade-up" data-aos-duration="1000"
            class="w-full lg:w-2/3 mx-auto shadow-lg shadow-teal-400/50 bg-opacity-20 bg-cyan-100 text-center mb-10 p-4 rounded-lg">
            <h6 class="text-6xl  text-cyan-400 font-bold ">Layanan</h6>
            <p class="mt-5 text-4xl text-red-500 font-bold">Juarana <spa class="text-blue-500">Mandiri</spa>
            </p>
        </div>
        <div class="container lg:flex lg:gap-6 mx-auto  py-5 px-5 w-full lg:w-2/3">
            <div data-aos="fade-right" data-aos-duration="1000"
                class="flex w-full lg:w-1/2 mx-auto p-5 mb-10 bg-blue-300  rounded-lg shadow-lg hover:bg-cyan-300 transition duration-500 ease-in-out hover:shadow-2xl hover:-translate-y-2 lg:hover:translate-y-0"
                data-aos="fade-right">
                <i class="fa-solid fa-house text-blue-600 text-5xl mx-2"></i>
                <p class="mx-3 text-lg font-bold">Temukan rumah impian Anda bersama kami. Hunian berkualitas dengan desain
                    eksklusif, harga terjangkau, dan lingkungan yang nyaman untuk keluarga tercinta</p>
            </div>
            <div data-aos="fade-right" data-aos-duration="1000"
                class="flex w-full lg:w-1/2 mx-auto p-5 mb-10 bg-blue-300  rounded-lg shadow-lg hover:bg-cyan-300 transition duration-500 ease-in-out hover:shadow-2xl hover:-translate-y-2 lg:hover:translate-y-0">
                <i class="fa-solid fa-helmet-safety text-blue-600 text-5xl mx-2"></i>
                <p class="mx-3 text-lg font-bold">Kami menyediakan layanan pemasangan bahan bangunan dengan kualitas terbaik
                    dan
                    pengerjaan yang profesional. Didukung oleh tenaga kerja berpengalaman, setiap proyek dikerjakan dengan
                    teliti
                    untuk menghasilkan bangunan yang kokoh, rapi, dan sesuai kebutuhan</p>
            </div>
            <div data-aos="fade-right" data-aos-duration="1000"
                class="flex w-full lg:w-1/2 mx-auto p-5 mb-10 bg-blue-300  rounded-lg shadow-lg hover:bg-cyan-300 transition duration-500 ease-in-out hover:shadow-2xl hover:-translate-y-2 lg:hover:translate-y-0 animate-fadeInUp ">
                <i class="fa-solid fa-screwdriver-wrench text-blue-600 text-5xl mx-2"></i>
                <p class="mx-3 text-lg font-bold">Kami menyediakan layanan service bahan bangunan dengan pengerjaan
                    profesional dan
                    hasil berkualitas. Setiap proyek ditangani oleh tenaga berpengalaman untuk memastikan bangunan tetap
                    kuat, aman,
                    dan tahan lama</p>
            </div>
        </div>
    </section>
   {{-- end section2 --}}

    {{-- strat section3 --}}
    <section class="w-full h-screen bg-cover py-16 px-5 flex justify-center items-center "
        style="background-image: url('{{ asset('images/latarjuaranamandiri.jpg') }}'); ">
        <div class="bg-black bg-opacity-30 py-16 px-16 rounded-lg">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h2 class="text-4xl font-bold text-white mb-6">Hubungi kami melalui via:</h2>
                <div class="flex">
                    <i class="fa-brands fa-whatsapp text-6xl text-green-500 cursor-pointer"></i>
                    <a href="#"
                        class="bg-green-400 flex items-center justify-center px-5 mx-3 rounded-2xl w-full font-bold text-2xl text-green-700 
                                    hover:bg-green-600 transition  duration-300">Chat</a>
                </div>
                <div class="flex mt-3">
                    <i
                        class="fa-brands fa-instagram text-6xl font-extrabold bg-gradient-to-r from-red-600 to-purple-600 bg-clip-text text-transparent cursor-pointer"></i>
                    <a href="#"
                        class="bg-gradient-to-r from-red-600 to-rose-500 flex items-center justify-center px-5 mx-3 rounded-2xl w-full font-bold text-2xl text-white 
                                    ">Send</a>
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
