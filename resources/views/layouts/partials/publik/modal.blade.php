{{-- modal product --}}
<div class="hidden bg-gray-400 px-2 py-3 bg-opacity-90  fixed z-50 left-0 top-0 w-full h-screen overflow-auto"
    id="modalProduct">
    <div class=" bg-slate-600 shadow-gray-800 relative p-5 m-auto w-80  lg:w-96 mt-24 rounded-lg shadow-lg">
        <button id="closeModalBtn"
            class="absolute top-0 right-0 p-2 text-gray-700 hover:text-black text-2xl font-bold">×</button>
        <div class="container    ">
            <img id="modalImg" class="w-60   object-cover " src="{{ asset('images/project1.jpg') }}" alt="">
            <div class="mt-3 border border-gray-400 rounded-lg px-3 p-5 bg-slate-800">
                <h1 id="modalTitle"
                    class="text-1xl shadow-lg shadow-slate-600 text-center font-bold bg-yellow-400 rounded-lg w-40 px-5 py-2 mb-2">
                    Nama Produk</h1>
                <p id="modalPrice" class="px-5 text-gray-300 font-semibold mt-3">200.000</p>
                <p id="modalStock" class="px-5 py-2 text-gray-300  font-semibold">stock produk</p>
                <p id="modalCategory"
                    class="bg-zinc-950 text-center w-40 mt-1 text-gray-100 px-3 font-semibold border-2 border-yellow-300 py-2 rounded-xl">
                    kategori produk</p>
                <p id="modalDesc" class="mt-2 text-gray-200">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Libero
                    repellendus voluptas amet,
                    inventore officia maiores veniam molestias, facilis, asperiores omnis neque? Sit eius laboriosam
                    ipsum quo dolorem aut rerum nulla?</p>
                <div class="flex justify-end ">
                    <a href="https://api.whatsapp.com/send?phone=6282194809529&text=Halo%20Admin%20Saya%20ingin%20pesan%20 {{ $product->name_product }}"
                        target="_blank"
                        class="bg-sky-700 px-3 py-3 rounded-lg font-bold shadow-lg transition ease-in-out duration-300 hover:bg-sky-400 hover:text-white text-lg  ">Pesan</a>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- maps modal --}}
<div class="hidden bg-gray-400 px-2 py-3 bg-opacity-90  fixed z-50 left-0 top-0 w-full h-screen overflow-auto"
    id="mapsModal">
    <div class=" bg-slate-600 relative p-5 m-auto w-80  lg:w-96 mt-24 rounded-lg shadow-lg shadow-gray-800">
        <button id="closeMapsBtn"
            class="absolute top-0 right-0 p-2 text-gray-700 hover:text-black text-2xl font-bold">×</button>
        <div class="container">
            <div class="mt-10 flex justify-center ">
                <iframe data-aos="flip-left" data-aos-duration="1000"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.0230144253837!2d119.52321527600833!3d-5.099979994876951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefb9d871803d1%3A0x1e25201d9d13e800!2sJl.%20Permata%20Sudiang%20Raya%20No.30%2C%20Sudiang%20Raya%2C%20Kec.%20Biringkanaya%2C%20Kota%20Makassar%2C%20Sulawesi%20Selatan%2090552!5e0!3m2!1sid!2sid!4v1779960990472!5m2!1sid!2sid"
                    class="w-full h-80  lg:h-80 rounded-xl shadow-lg shadow-gray-400/40" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div data-aos="fade-right" data-aos-duration="1000" class="mt-5 w-2/3 ">
                <h1 class="font-bold bg-gray-400 shadow-lg shadow-gray-800 px-3 py-3 text-lg rounded-lg ">Kantor buka
                    pada pukul:</h1>
                <p class="font-bold text-gray-200 px-3 mt-2">8:30 WITA</p>
                <h1 class="font-bold bg-gray-400 px-3 py-3 text-lg rounded-lg mt-3 shadow-lg shadow-gray-800 ">Kantor
                    tutup pada pukul:</h1>
                <p class="text-gray-200 mt-2 px-3 font-bold">5:30 WITA</p>
            </div>
        </div>
    </div>
</div>

{{-- masagemodal --}}
<div class="hidden bg-gray-400 px-2 py-3 bg-opacity-90  fixed z-50 left-0 top-0 w-full h-screen overflow-auto"
    id="masageModal">
    <div class=" bg-gray-200 relative p-5 m-auto w-80  lg:w-2/3 mt-24 rounded-lg shadow-lg shadow-gray-800">
        <button id="closeMassageBtn"
            class="absolute top-0 right-0 p-2 text-gray-700 hover:text-black text-2xl font-bold">×</button>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="flex items-start lg:items-center gap-5 ">
            <div class="px-2 py-1 bg-blue-400 rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="lg:w-24 lg:h-24 w-12 h-12  text-blue-700  rounded-lg  ">
                    <path fill-rule="evenodd"
                        d="M4.804 21.644A6.75 6.75 0 0 1 3 16.5V7.5A4.5 4.5 0 0 1 7.5 3h9A4.5 4.5 0 0 1 21 7.5v9a4.5 4.5 0 0 1-4.5 4.5H9a6.75 6.75 0 0 1-4.196-1.456Z"
                        clip-rule="evenodd" />
                </svg>
            </div>

            <div class="flex flex-wrap lg:flex-wrap lg:w-1/2  lg:mt-5 items-center lg:gap-3 ">
                <h1 class="lg:text-3xl text-lg text-slate-700 font-bold">Massage For <span
                        class="text-red-700">Juarana</span><span class="text-blue-700">Mandiri</span></h1>
                <p class="lg:text-lg text-sm text-start font font-semibold text-slate-600">Masukkan dan saran dari
                    pelanggan sangat
                    berpengaruh bagi kami untuk lebih baik lagi

                </p>
            </div>
        </div>

        <div class="container mt-5 lg:mt-12">
            <form action="{{ route('masages.store') }}" method="POST" id="massageForm">
                @csrf
                <div class="grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 lg:gap-4">
                    <div data-aos="fade-left" data-aos-duration="1000"
                        class="w-full relative flex items-center px-3 mb-3 lg:mb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-6 h-6 absolute right-5">
                            <path fill-rule="evenodd"
                                d="M12 2.25a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5ZM3.75 21a8.25 8.25 0 1 1 16.5 0h-16.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <input type="text" name="user" id="user"
                            class="w-full border bg-slate-200 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
                            placeholder="Nama Lengkap" required>
                    </div>
                    <div data-aos="fade-left" data-aos-duration="1000"
                        class="w-full relative flex items-center px-3  lg:mb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 absolute right-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5H4.5a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0l-7.5-4.615A2.25 2.25 0 0 1 2.25 6.993V6.75" />
                        </svg>
                        <input type="email" name="email" id="email"
                            class="w-full border bg-slate-200  rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
                            placeholder="Email" required>
                    </div>
                </div>

                <div data-aos="fade-left" data-aos-duration="1000" class="w-full px-3 lg:mb-8 mb-3">
                    <label for="description" class="block text-sm font-medium text-gray-200 mb-2">Pesan</label>
                    <textarea name="description" id="description"
                        class="w-full border bg-slate-200 derror rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
                        cols="30" rows="10" placeholder="Silahkan isi pesan anda"></textarea>

                </div>
                <div class="mt-5 px-3">
                    <button type="submit"
                        class="px-4 py-2 bg-gray-100 border rounded-lg w-full border-blue-400 shadow-lg text-blue-600 
                        text-lg font-semibold transition ease-in-out duration-500 hover:bg-blue-500 hover:text-gray-100 hover:shadow-lg hover:shadow-blue-600">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- modalproject --}}
<div class=" hidden bg-gray-400 px-2 py-3 bg-opacity-90  fixed z-50 left-0 top-0 w-full h-screen overflow-auto flex items-center justify-center"
    id="modalProject">
    <div class=" bg-slate-600 relative w-80  lg:w-1/2  rounded-lg shadow-lg">
        <button id="closeProjectBtn"
            class="absolute top-0 right-0 p-2 text-gray-700 hover:text-black text-2xl font-bold">×</button>
        <div class="container ">
            <img id="modalImgProject" class="w-full  shadow-xl border object-cover "
                src="{{ asset('images/project1.jpg') }}" alt="">
            {{-- <div class="mt-3 border border-gray-400 rounded-lg px-3 p-5 bg-slate-800">
                <h1 id="modalTitle"
                    class="text-1xl shadow-lg shadow-slate-600 text-center font-bold bg-yellow-400 rounded-lg w-40 px-5 py-2 mb-2">
                    Nama Produk</h1>
                <p id="modalPrice" class="px-5 text-gray-300 font-semibold mt-3">200.000</p>
                <p id="modalStock" class="px-5 py-2 text-gray-300  font-semibold">stock produk</p>
                <p id="modalCategory"
                    class="bg-zinc-950 text-center w-40 mt-1 text-gray-100 px-3 font-semibold border-2 border-yellow-300 py-2 rounded-xl">
                    kategori produk</p>
                <p id="modalDesc" class="mt-2 text-gray-200">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero
                    repellendus voluptas amet,
                    inventore officia maiores veniam molestias, facilis, asperiores omnis neque? Sit eius laboriosam
                    ipsum quo dolorem aut rerum nulla?</p>
                <div class="flex justify-end ">
                    <a href=""
                        class="bg-sky-700 px-3 py-3 rounded-lg font-bold shadow-lg transition ease-in-out duration-300 hover:bg-sky-400 hover:text-white text-lg  ">Pesan</a>
                </div>
            </div> --}}
        </div>
    </div>
</div>
