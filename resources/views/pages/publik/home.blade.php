
@extends('layouts.publik')
@section('title', 'home')
       
    @section('content')    
        {{-- start section1 --}}
        <section>
            <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8 border-b-4 border-indigo-500">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:items-center md:gap-8">
                    <div>
                        <div class="max-w-prose md:max-w-none">
                            <h2 class="text-2xl font-semibold text-red-600 sm:text-3xl lg:text-5xl">
                                JUARANA <span class="text-blue-600">MANDIRI</span>
                            </h2>
                            <p class="text-2xl font-bold text-gray-400 mt-3 ">Pemasangan interior dan Ekterior  plafon PVC, lantai Vinyl, Dinding WPC, Pengecatan ,  pemasangan produk Conwood lantai, Conwood Dinding, Fasad Conwood,</p>
                            <hr class="w-full border-gray-300 mb-3">
                            <h1 class="text-2xl text-gray-800 font-bold">Founder by:</h1>
                            <p class="text-1xl text-gray-500 font-bold">Nizulul Ramdan</p>
                            <h1 class="text-2xl text-gray-800 font-bold">Created:</h1>
                            <p class="text-1xl text-gray-500 font-bold">18 November 2022</p>    
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
        <section class="py-5 mb-23 w-full ">
            <div class="flex flex-wrap justify-center ">
                <div class="w-80 px-4 ">
                    <div class="bg-slate-300  rounded-xl shadow-lg shadow-gray-600/50 mb-10 overflow-hidden">
                        <div class="text-start p-3 bg-sky-400 pt-4  ">
                            <h1 class="text-5xl font-bold text-gray-600">4+</h1>
                        </div>
                        <div class="py-8 px-6"> 
                            <p class="text-2xl font-bold text-gray-600">Tahun Pengalaman</p>
                        </div>
                    </div>
                </div>
                <div class="w-80 px-4 ">
                    <div class="bg-slate-300  rounded-xl shadow-lg shadow-gray-600/50 mb-10 overflow-hidden">
                        <div class="text-start p-3 bg-sky-400 pt-4  ">
                            <h1 class="text-5xl font-bold text-gray-600">10+</h1>
                        </div>
                        <div class="py-8 px-6"> 
                            <p class="text-2xl font-bold text-gray-600">Proyek Selesai</p>
                        </div>
                    </div>
                </div>
                <div class="w-80 px-4 ">
                    <div class="bg-slate-300  rounded-xl shadow-lg shadow-gray-600/50 mb-10 overflow-hidden">
                        <div class="text-start p-3 bg-sky-400 pt-4  ">
                            <h1 class="text-5xl font-bold text-gray-600">15+</h1>
                        </div>
                        <div class="py-8 px-6"> 
                            <p class="text-2xl font-bold text-gray-600">Pelanggan Puas</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end section2 --}}

        {{-- start section3--}}
        <section>
                <div class="w-full bg-slate-100 ">
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
    @endsection

        
