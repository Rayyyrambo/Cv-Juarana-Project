<!doctype html>
<html lang="en" class="h-screen overflow-hidden">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
    @include('layouts.partials.publik.style')

</head>

<body class="h-screen overflow-hidden">
    <div class="w-full h-screen flex">
        {{-- star Sidebar --}}
        <div class="w-80 h-screen  bg-blue-500">
            <img class="w-64 mx-auto pt-5" src="{{ asset('juaranaM.png') }}" alt="">
            <h1 class="text-3xl font-semibold mt-5 text-center text-gray-800">Juarana Mandiri</h1>
            <div class="flex  justify-center px-5 mt-12">
                <a href=""
                    class="text-cyan-100  text-md font-bold hover:bg-cyan-800  transition duration-200 ease-in-out rounded-xl px-5 py-2 w-full text-center">
                    Dashboard
                </a>
            </div>
            <hr class="border w-full border-black mt-3">
            <p class="text-center mt-5 text-2xl text-gray-600 font-bold">Menu Admin</p>
            <div class="flex  justify-center px-5 mt-10">
                <a href=""
                    class="text-cyan-200 text-md font-bold hover:bg-cyan-800  transition duration-200 ease-in-out rounded-xl px-5 py-2 w-full text-center">
                    Produk
                </a>
            </div>
            <div class="flex  justify-center px-5 mt-5">
                <a href=""
                    class="text-cyan-200 text-md font-bold hover:bg-cyan-800  transition duration-200 ease-in-out rounded-xl px-5 py-2 w-full text-center">
                    Project
                </a>
            </div>
            <div class="flex  justify-center px-5 mt-5">
                <a href=""
                    class="text-cyan-200 text-md font-bold hover:bg-cyan-800  transition duration-200 ease-in-out rounded-xl px-5 py-2 w-full text-center">
                    Kategory
                </a>
            </div>
            <div class="flex  justify-center px-5 mt-5">
                <a href=""
                    class="text-cyan-200 text-md font-bold hover:bg-cyan-800  transition duration-200 ease-in-out rounded-xl px-5 py-2 w-full text-center">
                    Message
                </a>
            </div>
            <div class="flex  justify-center px-5 mt-5">
                <a href=""
                    class="text-cyan-200  text-md font-bold hover:bg-cyan-800  transition duration-200 ease-in-out rounded-xl px-5 py-2 w-full text-center">
                    Data Admin
                </a>
            </div>

            <div class="flex justify-center">
                <a href="#" id="openside"
                    class="text-4xl bg-blue-600 rounded-lg px-5 py-2 mt-12 text-cyan-200 font-bold
              hover:bg-blue-700 transition duration-300 ease-in-out">></a>
            </div>
        </div>
        {{-- end sidebar --}}

        {{-- content --}}
        <div class="w-full h-screen bg-black flex flex-col">
            {{-- top bar --}}
            <nav class="w-full flex justify-between bg-gray-100 shadow-lg px-12 py-5 flex-shrink-0">
                <form action="" method="get" class="">
                    <input type="text" name="search" class="rounded-lg bg-gray-200" placeholder="Cari Produk...."
                        value="">
                    <select name="category_id" id="categoryFilter" class="rounded-xl bg-gray-200">
                        <option value="" class="text-center font-bold">Silahkan Pili kategori</option>
                    </select>
                    <button
                        class="bg-white text-blue-600 border border-blue-600 hover:bg-blue-600 hover:text-white transition duration-300 ease-in-out font-bold mx-2
                     px-5 py-2 rounded-lg shadow-lg hover:shadow-lg hover:shadow-blue-600">
                        Search
                    </button>
                </form>
                <div class="flex justify-center items-center">
                    <hr class="h-10 lg:flex lg:justify-center lg:items-center bg-black hidden  mx-5"
                        style="width: 3px; ">
                    <a href="">
                        <h1
                            class="font-semibold text-lg hover:bg-slate-300 duration-200 ease-in-out px-5 py-2 rounded-lg">
                            RayyAdmin</h1>
                    </a>
                </div>
            </nav>
            {{-- end topbar --}}

            {{-- main content --}}
            <div class="flex-1 overflow-y-auto bg-gray-50">
                <div class="container mx-auto px-4 lg:px-8 py-8">
                    <div class="w-full flex flex-wrap justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold text-gray-800">Daftar Produk</h2>
                        <a href=""
                            class="px-6 py-2 bg-green-500 hover:bg-green-600 text-white rounded-lg font-semibold transition duration-200 ease-in-out shadow-lg">
                            + Tambah Product
                        </a>
                    </div>

                    <!-- Table Wrapper untuk Responsive -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="w-full border-collapse">
                                <thead>
                                    <tr class="bg-blue-500 text-white">
                                        <th class="px-4 py-3 text-left font-semibold">No</th>
                                        <th class="px-4 py-3 text-left font-semibold">Nama Produk</th>
                                        <th class="px-4 py-3 text-left font-semibold">Kategori</th>
                                        <th class="px-4 py-3 text-left font-semibold">Harga</th>
                                        <th class="px-4 py-3 text-left font-semibold">Stock</th>
                                        <th class="px-4 py-3 text-left font-semibold">Gambar</th>
                                        <th class="px-4 py-3 text-center font-semibold">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b hover:bg-gray-100 transition duration-150">
                                        <td class="px-4 py-3 text-gray-700">1</td>
                                        <td class="px-4 py-3 text-gray-700 font-medium">Plafon</td>
                                        <td class="px-4 py-3 text-gray-700">Bahan Keras</td>
                                        <td class="px-4 py-3 text-gray-700">Rp 200.000</td>
                                        <td class="px-4 py-3">
                                            <span
                                                class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold">5</span>
                                        </td>
                                        <td class="px-4 py-3 text-gray-700">gambar1</td>
                                        <td class="px-4 py-3">
                                            <div class="flex gap-2 justify-center flex-wrap">
                                                <a href=""
                                                    class="px-3 py-1 bg-green-500 hover:bg-green-600 text-white rounded text-sm font-semibold transition duration-200 ease-in-out">
                                                    Edit
                                                </a>
                                                <button type="submit"
                                                    class="px-3 py-1 bg-red-500 hover:bg-red-600 text-white rounded text-sm font-semibold transition duration-200 ease-in-out">
                                                    Hapus
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>



                </div>
            </div>


        </div>
    </div>

</body>
