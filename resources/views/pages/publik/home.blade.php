@extends('layouts.publik')
@section('title', 'home')

@section('content')
    {{-- start section1 --}}

    <section class="w-full  bg-cover bg-no-repeat bg-center"
        style="background-image: url('{{ asset('images/latarCV.jpg') }}') ">
        <div class="container w-full px-12 py-12  ">
            <h1 class="lg:text-8xl animate-scaleIn-delay-200 text-5xl font-semibold text-red-600">Jumrana <span class="text-blue-600">Mandiri</span>
            </h1>
            <p class="lg:text-4xl text-2xl animate-scaleIn-delay-200 text-gray-800 font-bold lg:w-1/2">Pemasangan interior dan Ekterior plafon PVC,
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
                        class="lg:w-64 md:w-64 w-40 mx-3 mb-3 border-2 border-blue-400 bg-opacity-40 bg-blue-300 shadow-blue-800 rounded-xl shadow-lg hover:shadow-lg animate-fadeInLeft hover:shadow-blue-400/90 overflow-hidden transition duration-300 ease-in-out  hover:-translate-y-2">
                        <div class="flex flex-col items-center p-6">
                            <h1 class="text-3xl font-bold text-black">1</h1>
                            <div class="text-center ">
                                <p class="text-2xl text-black font-bold">Cuma di sulawesi</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="lg:w-64 md:w-64 w-40 mx-3 mb-3  border-2 border-blue-400 bg-opacity-40 bg-blue-300 shadow-blue-800 rounded-xl shadow-lg hover:shadow-lg animate-fadeInLeft hover:shadow-blue-400/90 overflow-hidden transition duration-300 ease-in-out  hover:-translate-y-2">
                        <div class="flex flex-col items-center p-6">
                            <h1 class="text-3xl font-bold text-black">5+</h1>
                            <div class="text-center">
                                <p class="text-2xl text-black font-bold"> Project Selesai</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="lg:w-64 md:w-64 w-40 mx-3 mb-3  border-2 border-blue-400 bg-opacity-40 bg-blue-300 shadow-blue-800 rounded-xl shadow-lg hover:shadow-lg animate-fadeInLeft hover:shadow-blue-400/90 overflow-hidden transition duration-300 ease-in-out  hover:-translate-y-2">
                        <div class="flex flex-col items-center p-6">
                            <h1 class="text-3xl font-bold text-black">15+</h1>
                            <div class="text-center">
                                <p class="text-2xl text-black font-bold">Pelanggan puas</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="lg:w-64 md:w-64 w-40 mx-3 mb-3  border-2 border-blue-400 bg-opacity-40 bg-blue-300 shadow-blue-800 rounded-xl shadow-lg hover:shadow-lg animate-fadeInLeft hover:shadow-blue-400/90 overflow-hidden transition duration-300 ease-in-out  hover:-translate-y-2">
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
    {{-- end section1 --}}

    {{-- strat section2 --}}
    <section class="w-full -400">
        <div class="grid grid-cols-1 lg:grid-cols-2 ">
            <div class="w-full  px-5 py-5">
                <div class="container mx-auto py-3 px-3 ">
                    <div
                        class="w-full rounded-full shadow-xl bg-opacity-50 shadow-sky-400/50 py-3 mx-auto lg:w-2/3 bg-teal-400 text-center">
                        <h1 class="text-3xl font-bold text-blue-700 font-mono">Silahkan Kunjungi Kantor Kami</h1>
                    </div>
                    <div class="mt-12 flex justify-center ">
                        <iframe
                            data-aos="flip-left"
                            data-aos-duration="1000"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.0230144253837!2d119.52321527600833!3d-5.099979994876951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefb9d871803d1%3A0x1e25201d9d13e800!2sJl.%20Permata%20Sudiang%20Raya%20No.30%2C%20Sudiang%20Raya%2C%20Kec.%20Biringkanaya%2C%20Kota%20Makassar%2C%20Sulawesi%20Selatan%2090552!5e0!3m2!1sid!2sid!4v1779960990472!5m2!1sid!2sid"
                            class="w-full h-80 lg:w-2/3 lg:h-80 rounded-xl shadow-lg shadow-sky-500/50" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div  data-aos="fade-right"  data-aos-duration="1000" class="mt-3 w-2/3 mx-auto">
                        <h1 class="font-bold ">Kantor buka pada pukul:</h1>
                        <p class="font-mono text-gray-800">8:30 WITA</p>
                        <hr class="border-gray-600 w-64">
                        <h1 class="font-bold ">Kantor tutup pada pukul:</h1>
                        <p class="text-gray-800 font-bold">5:30 WITA</p>
                    </div>
                </div>
            </div>
            <div class="w-full px-5 py-5">
                <div class="container mx-auto w-full ">
                    <div class="lg:w-2/3 w-full mx-auto rounded-full bg-teal-400 shadow-xl shadow-sky-400/50 bg-opacity-50">
                        <h1 class="text-3xl font-bold text-blue-700 font-mono text-center py-5">For Massage to</h1>
                    </div>
                    
                </div>
                <div class="container  lg:w-2/3 mt-8 lg:mx-auto w-full">
                    <form  action="">
                        <div data-aos="fade-left"  data-aos-duration="1000" class="w-full  px-3 mb-8">
                            <label for="name">Nama</label>
                            <input type="text" name="" id="" class="w-full border border-sky-600 bg-sky-200 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"  placeholder="Silahkan isi nama anda">
                        </div>
                        <div data-aos="fade-left"  data-aos-duration="1000" class="w-full px-3 mb-8">
                            <label for="email">email</label>
                            <input type="email" class="w-full  border border-sky-600 bg-sky-200 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500" name="" id="" class="w-full" placeholder="Silahkan isi nama anda">
                        </div>
                        <div data-aos="fade-left"  data-aos-duration="1000" class="w-full px-3">
                            <label for="pesan">Pesan</label>
                            <textarea name="" class="w-full  border border-sky-600 bg-sky-200 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500" id="" cols="30" rows="10" placeholder="Silahkan isi pesan anda"></textarea>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </section>
    {{-- end section2 --}}

    {{-- start section3 --}}
    
    {{-- End section 3 --}}

    {{-- star section 4 --}}

    {{-- end section 4 --}}
@endsection
