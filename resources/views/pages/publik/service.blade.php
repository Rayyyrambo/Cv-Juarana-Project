@extends('layouts.publik')
@section('title', 'service')

    @section('content')    
        {{-- start section1 --}}
       <div class="w-96 text-center mx-auto py-5">
            <h1 class="text-4xl mb-3 text-green-700 font-bold">This is my Service</h1>
            <p class="text-1xl font-bold">Kami menyediakan layanan service terbaik dengan pengerjaan cepat, rapi, dan terpercaya. Didukung oleh tenaga profesional dan peralatan yang memadai, kami siap membantu perawatan, perbaikan, hingga pengecekan berbagai kebutuhan Anda dengan hasil yang maksimal dan berkualitas.</p>
       </div>

       {{-- card service --}}
       <section class="w-full bg-blue-400 py-12 mt-12 px-4">
             <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 ">
                    <div class="bg-indigo-100 rounded-xl shadow-lg shadow-blue-800/90 overflow-hidden transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                        <div class="flex flex-col items-center p-6">
                            <img class="w-32 h-32 object-cover mb-4" src="{{ asset('images/helmetproject.png') }}" alt="">
                            <div class="text-center">
                                <p class="text-sm font-medium text-gray-700">Kami menyediakan layanan tukang profesional untuk berbagai kebutuhan pembangunan, renovasi, dan perbaikan. Dikerjakan oleh tenaga ahli berpengalaman dengan hasil yang rapi, berkualitas, dan terpercaya.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-indigo-100 rounded-xl shadow-lg shadow-blue-800/90 overflow-hidden transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                        <div class="flex flex-col items-center p-6">
                            <img class="w-32 h-32 object-cover mb-4" src="{{ asset('images/bangunanproject.png') }}" alt="">
                            <div class="text-center">
                                <p class="text-sm font-medium text-gray-700">Kami menyediakan layanan service terbaik dengan pengerjaan cepat, rapi, dan terpercaya. Didukung oleh tenaga profesional.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-indigo-100 rounded-xl shadow-lg shadow-blue-800/90 overflow-hidden transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                        <div class="flex flex-col items-center p-6">
                            <img class="w-32 h-32 object-cover mb-4" src="{{ asset('images/pemasanganproject.png') }}" alt="">
                            <div class="text-center">
                                <p class="text-sm font-medium text-gray-700">Kami menyediakan layanan service terbaik dengan pengerjaan cepat, rapi, dan terpercaya. Didukung oleh tenaga profesional.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-indigo-100 rounded-xl shadow-lg shadow-blue-800/90 overflow-hidden transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                        <div class="flex flex-col items-center p-6">
                            <img class="w-32 h-32 object-cover mb-4" src="{{ asset('images/dliveryproject.png') }}" alt="">
                            <div class="text-center">
                                <p class="text-sm font-medium text-gray-700">Kami menyediakan layanan service terbaik dengan pengerjaan cepat, rapi, dan terpercaya. Didukung oleh tenaga profesional.</p>
                            </div>
                        </div>
                    </div>
                    

                    {{-- Tambahkan card lain di sini sesuai kebutuhan --}}
                    {{-- Contoh card kedua:
                    <div class="bg-indigo-100 rounded-xl shadow-lg overflow-hidden transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                        <div class="flex flex-col items-center p-6">
                            <img class="w-32 h-32 object-cover mb-4" src="{{ asset('images/service2.png') }}" alt="">
                            <div class="text-center">
                                <p class="text-sm font-medium text-gray-700">Deskripsi layanan kedua Anda di sini.</p>
                            </div>
                        </div>
                    </div>
                    --}}
                </div>
             </div>
       </section>
       {{-- end section1 --}}
       
       {{-- strat section2 --}}
       <section class="w-full h-screen bg-cover py-16 px-5 flex justify-center items-center " style="background-image: url('{{ asset('images/latarjuaranamandiri.jpg') }}'); ">
              <div class="bg-black bg-opacity-30 py-16 px-16 rounded-lg">
                     <div class="max-w-4xl mx-auto px-4 text-center">
                            <h2 class="text-4xl font-bold text-white mb-6">Hubungi kami melalui via:</h2>
                            <div class="flex">
                                    <i class="fa-brands fa-whatsapp text-6xl text-green-500 cursor-pointer"></i>
                                    <a href="#" class="bg-green-400 flex items-center justify-center px-5 mx-3 rounded-2xl w-full font-bold text-2xl text-green-700 
                                    hover:bg-green-600 transition  duration-300">Chat</a>
                            </div>
                            <div class="flex mt-3">
                                    <i class="fa-brands fa-instagram text-6xl font-extrabold bg-gradient-to-r from-red-600 to-purple-600 bg-clip-text text-transparent cursor-pointer"></i>
                                    <a href="#" class="bg-gradient-to-r from-red-600 to-rose-500 flex items-center justify-center px-5 mx-3 rounded-2xl w-full font-bold text-2xl text-white 
                                    ">Send</a>
                            </div>
                     </div>
              </div>
       </section>
    @endsection
        
        {{-- end section2 --}}

        {{-- start section3--}}
        
        {{-- End section 3 --}}

        {{-- star section 4 --}}
        
        {{-- end section 4 --}}

        {{-- footer --}}
        