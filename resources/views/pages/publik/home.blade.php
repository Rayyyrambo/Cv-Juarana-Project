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
                    <div
                        class="w-full px-3 rounded-full shadow-lg bg-gradient-to-br from-cyan-300 from-0% to-cyan-50 to-30%  shadow-sky-400/50 py-3 mx-auto lg:w-2/3  text-center">
                        <h1 class="text-3xl font-bold text-gray-700 font-mono">Silahkan Kunjungi Kantor Kami</h1>
                    </div>
                    <div class="mt-12 flex justify-center ">
                        <iframe data-aos="flip-left" data-aos-duration="1000"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.0230144253837!2d119.52321527600833!3d-5.099979994876951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefb9d871803d1%3A0x1e25201d9d13e800!2sJl.%20Permata%20Sudiang%20Raya%20No.30%2C%20Sudiang%20Raya%2C%20Kec.%20Biringkanaya%2C%20Kota%20Makassar%2C%20Sulawesi%20Selatan%2090552!5e0!3m2!1sid!2sid!4v1779960990472!5m2!1sid!2sid"
                            class="w-full h-80 lg:w-2/3 lg:h-80 rounded-xl shadow-lg shadow-gray-400/40" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div data-aos="fade-right" data-aos-duration="1000" class="mt-3 w-2/3 mx-auto">
                        <h1 class="font-bold ">Kantor buka pada pukul:</h1>
                        <p class="font-mono text-gray-800">8:30 WITA</p>
                        <hr class="border-gray-600 w-64">
                        <h1 class="font-bold ">Kantor tutup pada pukul:</h1>
                        <p class="text-gray-800 font-bold">5:30 WITA</p>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-2/3 px-5 py-5 mx-auto">
                <div class="container mx-auto w-full mb-4 ">
                    <div
                        class="lg:w-2/3  w-full mx-auto rounded-full bg-gradient-to-br from-cyan-300 from-0% to-cyan-50 to-30%  shadow-lg shadow-sky-400/50 bg-opacity-50">
                        <h1 class="text-3xl font-bold text-gray-700 font-mono text-center py-5">For Massage to</h1>
                    </div>
                </div>
                <form action="">
                    <div data-aos="fade-left" data-aos-duration="1000" class="w-full  px-3 mb-8">
                        <label for="name">Nama</label>
                        <input type="text" name="" id=""
                            class="w-full border border-sky-600 bg-sky-200 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
                            placeholder="Silahkan isi nama anda">
                    </div>
                    <div data-aos="fade-left" data-aos-duration="1000" class="w-full px-3 mb-8">
                        <label for="email">email</label>
                        <input type="email"
                            class="w-full  border border-sky-600 bg-sky-200 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
                            name="" id="" class="w-full" placeholder="Silahkan isi nama anda">
                    </div>
                    <div data-aos="fade-left" data-aos-duration="1000" class="w-full px-3">
                        <label for="pesan">Pesan</label>
                        <textarea name=""
                            class="w-full  border border-sky-600 bg-sky-200 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
                            id="" cols="30" rows="10" placeholder="Silahkan isi pesan anda"></textarea>
                    </div>
                </form>
                <button type="submit" class="px-2 py-3 bg-gray-100 border rounded-lg overflow-hidden w-40 mx-3 border-blue-400 shadow-lg text-blue-600 
                text-lg font-semibold transition ease-in-out duration-500 hover:bg-blue-500 hover:text-gray-100 hover:shadow-lg hover:shadow-blue-600">Kirim</button>
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
