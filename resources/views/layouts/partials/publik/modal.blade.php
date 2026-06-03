<div class="hidden bg-gray-400 px-2 py-3 bg-opacity-90  fixed z-50 left-0 top-0 w-full h-screen overflow-auto"
    id="modalProduct">
    <div class=" bg-slate-600 relative p-5 m-auto w-80  lg:w-96 mt-24 rounded-lg shadow-lg">
        <button id="closeModalBtn"
            class="absolute top-0 right-0 p-2 text-gray-700 hover:text-black text-2xl font-bold">×</button>
        <div class="container    ">
            <img class="w-60   object-cover " src="{{ asset('images/project1.jpg') }}" alt="">
            <div class="mt-3 border border-gray-400 rounded-lg px-3 p-5 bg-slate-800">
                <h1
                    class="text-1xl shadow-lg shadow-slate-600 text-center font-bold bg-yellow-400 rounded-lg w-40 px-5 py-2 mb-2">
                    Nama Produk</h1>
                <p class="px-5 text-gray-300 font-semibold mt-3">200.000</p>
                <p class="px-5 py-2 text-gray-300  font-semibold">stock produk</p>
                <p
                    class="bg-zinc-950 text-center w-40 mt-1 text-gray-100 px-3 font-semibold border-2 border-yellow-300 py-2 rounded-xl">
                    kategori produk</p>
                <p class="mt-2 text-gray-200">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero
                    repellendus voluptas amet,
                    inventore officia maiores veniam molestias, facilis, asperiores omnis neque? Sit eius laboriosam
                    ipsum quo dolorem aut rerum nulla?</p>
                <div class="flex justify-end ">
                    <a href=""
                        class="bg-sky-700 px-3 py-3 rounded-lg font-bold shadow-lg transition ease-in-out duration-300 hover:bg-sky-400 hover:text-white text-lg  ">Pesan</a>
                </div>
            </div>
        </div>
    </div>
</div>

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

<div class="hidden bg-gray-400 px-2 py-3 bg-opacity-90  fixed z-50 left-0 top-0 w-full h-screen overflow-auto"
    id="masageModal">
    <div class=" bg-slate-600 relative p-5 m-auto w-80  lg:w-96 mt-24 rounded-lg shadow-lg shadow-gray-800">
        <button id="closeMassageBtn"
            class="absolute top-0 right-0 p-2 text-gray-700 hover:text-black text-2xl font-bold">×</button>
        <div class="container">
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
            <button type="submit"
                class="px-2 py-3 bg-gray-100 border rounded-lg overflow-hidden w-40 mx-3 border-blue-400 shadow-lg text-blue-600 
                text-lg font-semibold transition ease-in-out duration-500 hover:bg-blue-500 hover:text-gray-100 hover:shadow-lg hover:shadow-blue-600">Kirim</button>
        </div>
    </div>
</div>
