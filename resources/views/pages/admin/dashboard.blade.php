@extends('layouts.admin')
@section('title', 'dasboard')


@section('content')
    <div class=" overflow-y-auto ">
        <div class="container   mx-auto px-4 lg:px-8 py-8">
            <div class="w-full shadow-lg shadow-slate-800 bg-slate-800 rounded-xl px-3 py-8 mb-6">
                <h2 class="text-3xl font-bold text-slate-200">Selama Datang di Halaman Dashboard</h2>
                <div class="">
                    <p class="text-red-600 font-bold text-2xl">Juarana <span class="text-blue-600">Mandiri</span></p>
                </div>
            </div>
            {{-- grid untuk card produk, project, massage start --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-6">
                <div class="container rounded-xl  px-5 py-5">
                    <div
                        class="w-full mx-auto rounded-lg overflow-hidden flex bg-slate-200 hover:bg-slate-300  shadow-lg shadow-gray-600 ">
                        <div class=" w-3 bg-red-600">
                        </div>
                        <div class="flex justify-center flex-col px-5 py-5">
                            <h1 class="text-2xl font-bold ">Total Produk</h1>
                            <p class="text-gray-700 text-base font-bold">Cv. Juarana Mandiri</p>
                        </div>
                    </div>
                </div>
                <div class="container rounded-xl  px-5 py-5">
                    <div
                        class="w-full mx-auto rounded-lg overflow-hidden flex bg-slate-200 hover:bg-slate-300  shadow-lg shadow-gray-600 ">
                        <div class=" w-3 bg-blue-600">
                        </div>
                        <div class="flex justify-center flex-col px-5 py-5">
                            <h1 class="text-2xl font-bold ">Total Project</h1>
                            <p class="text-gray-700 text-base font-bold">Cv. Juarana Mandiri</p>
                        </div>
                    </div>
                </div>
                <div class="container rounded-xl  px-5 py-5">
                    <div
                        class="w-full mx-auto rounded-lg overflow-hidden flex bg-slate-200 hover:bg-slate-300 shadow-lg shadow-gray-600  ">
                        <div class=" w-3 bg-orange-600">
                        </div>
                        <div class="flex justify-center flex-col px-5 py-5">
                            <h1 class="text-2xl font-bold ">Total Pesan Yang Masuk</h1>
                            <p class="text-gray-700 text-base font-bold">Cv. Juarana Mandiri</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- main detail Product --}}
            <main class="container mx-auto px-3 py-3 mt-12 rounded-xl shadow-lg shadow-gray-800  bg-slate-200">
                <h1 class="text-3xl text-slate-800 font-bold">Detail data Produk </h1>
                <div class="mt-12 ">
                    <h1 class="text-xl text-black font-semibold">Total Product</h1>
                    <p class="text-4xl font-bold text-slate-600">4 product</p>
                </div>
                <div
                    class="bg-gray-700/70 hover:bg-slate-600  transition duration-200 ease-in-out shadow-md mt-12 text-center rounded-lg btn-menuProduct w-72  text-md py-2 cursor-pointer">
                    <h1 class="text-slate-200 font-bold">Nama Kategori Berdasarkan Produk</h1>
                </div>
                {{-- dropdwo kategori berdasarkan produk --}}
                <div
                    class="dropdown-product max-h-0 border border-slate-700  scale-y-95 opacity-0 overflow-hidden bg-gray-600/30 px-2 py-2 transition duration-300 ease-in-out origin-top">
                    <h1 class="">kategori <span>product</span></h1>
                    <h1>kategori <span>product</span></h1>
                    <h1>kategori <span>product</span></h1>
                    <h1>kategori <span>product</span></h1>
                    <h1>kategori <span>product</span></h1>
                    <h1>kategori <span>product</span></h1>
                    <h1>kategori <span>product</span></h1>
                </div>
            </main>
                        <main class="container mx-auto px-3 py-3 mt-12 rounded-xl shadow-lg shadow-gray-800  bg-slate-200">
                <h1 class="text-3xl text-slate-800 font-bold">Detail data Project </h1>
                <div class="mt-12 ">
                    <h1 class="text-xl text-black font-semibold">Total Product</h1>
                    <p class="text-4xl font-bold text-slate-600">4 product</p>
                </div>
                <div
                    class="bg-gray-700/70 hover:bg-slate-600  transition duration-200 ease-in-out shadow-md mt-12 text-center rounded-lg btn-menuProduct w-72  text-md py-2 cursor-pointer">
                    <h1 class="text-slate-200 font-bold">Nama Kategori Berdasarkan Produk</h1>
                </div>
                {{-- dropdwo kategori berdasarkan produk --}}
                <div
                    class="dropdown-product max-h-0 border border-slate-700  scale-y-95 opacity-0 overflow-hidden bg-gray-600/30 px-2 py-2 transition duration-300 ease-in-out origin-top">
                    <h1 class="">kategori <span>product</span></h1>
                    <h1>kategori <span>product</span></h1>
                    <h1>kategori <span>product</span></h1>
                    <h1>kategori <span>product</span></h1>
                    <h1>kategori <span>product</span></h1>
                    <h1>kategori <span>product</span></h1>
                    <h1>kategori <span>product</span></h1>
                </div>
            </main>
                        <main class="container mx-auto px-3 py-3 mt-12 rounded-xl shadow-lg shadow-gray-800  bg-slate-200">
                <h1 class="text-3xl text-slate-800 font-bold">Detail data Message </h1>
                <div class="mt-12 ">
                    <h1 class="text-xl text-black font-semibold">Total Product</h1>
                    <p class="text-4xl font-bold text-slate-600">4 product</p>
                </div>
                <div
                    class="bg-gray-700/70 hover:bg-slate-600  transition duration-200 ease-in-out shadow-md mt-12 text-center rounded-lg btn-menuProduct w-72  text-md py-2 cursor-pointer">
                    <h1 class="text-slate-200 font-bold">Nama Kategori Berdasarkan Produk</h1>
                </div>
                {{-- dropdwo kategori berdasarkan produk --}}
                <div
                    class="dropdown-product max-h-0 border border-slate-700  scale-y-95 opacity-0 overflow-hidden bg-gray-600/30 px-2 py-2 transition duration-300 ease-in-out origin-top">
                    <h1 class="">kategori <span>product</span></h1>
                    <h1>kategori <span>product</span></h1>
                    <h1>kategori <span>product</span></h1>
                    <h1>kategori <span>product</span></h1>
                    <h1>kategori <span>product</span></h1>
                    <h1>kategori <span>product</span></h1>
                    <h1>kategori <span>product</span></h1>
                </div>
            </main>
        </div>
    </div>
</div>
@endsection
