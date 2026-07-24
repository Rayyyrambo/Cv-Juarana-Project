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
                    <div data-target="DetailProduct"
                        class="nav-btn cursor-pointer w-full mx-auto rounded-lg overflow-hidden flex bg-slate-200 hover:bg-slate-300  shadow-lg shadow-gray-600 ">
                        <div class=" w-3 bg-red-600">
                        </div>
                        <div class="flex justify-center flex-col px-5 py-5">
                            <h1 class="text-2xl font-bold ">Total Produk</h1>
                            <p class="text-gray-700 text-base font-bold">Cv. Juarana Mandiri</p>
                        </div>
                    </div>
                </div>
                <div class="container rounded-xl  px-5 py-5">
                    <div data-target="DetailProject"
                        class="nav-btn cursor-pointer w-full mx-auto rounded-lg overflow-hidden flex bg-slate-200 hover:bg-slate-300  shadow-lg shadow-gray-600 ">
                        <div class=" w-3 bg-blue-600">
                        </div>
                        <div class="flex justify-center flex-col px-5 py-5">
                            <h1 class="text-2xl font-bold ">Total Project</h1>
                            <p class="text-gray-700 text-base font-bold">Cv. Juarana Mandiri</p>
                        </div>
                    </div>
                </div>
                <div class="container rounded-xl  px-5 py-5">
                    <div data-target="DetailMessage"
                        class="w-full cursor-pointer nav-btn mx-auto rounded-lg overflow-hidden flex bg-slate-200 hover:bg-slate-300 shadow-lg shadow-gray-600  ">
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
            <main id="DetailProduct"
                class="container opacity-0 translate-y-4 transition-all duration-700 ease-in-out tab-content mx-auto px-3 py-5 mt-12 rounded-xl shadow-lg shadow-gray-800   bg-slate-200">
                <h1 class="text-3xl text-slate-800 font-bold">Detail data Produk </h1>
                <div class="mt-12 ">
                    <h1 class="text-xl text-black font-semibold">Total Product</h1>
                    <p class="text-4xl font-bold text-slate-600">{{ $totalProduct }} product</p>
                </div>
                <div
                    class="bg-slate-500 hover:bg-slate-600  transition duration-200 ease-in-out shadow-md mt-12 lg:text-center rounded-lg btn-menuProduct w-full lg:w-72 text-start px-2   text-md py-2 cursor-pointer">
                    <h1 class="text-slate-200 font-bold ">Nama Kategori Berdasarkan Produk</h1>
                </div>
                {{-- dropdwo kategori berdasarkan produk --}}
                <div
                    class="dropdown-product  border border-slate-700 mb-5  scale-y-95 opacity-0 overflow-hidden bg-gray-600/30 px-2 py-2 transition duration-300 ease-in-out origin-top">
                    
                    @forelse ($golongan as $item)
                        <div class="mb-4 border-b border-slate-500 pb-3">
                            <div class="flex items-center justify-between gap-4">
                                <span class="text-lg font-semibold text-slate-600">{{ $item->name }}</span>
                                <span class="text-sm text-slate-600">{{ $item->products->count() }} produk</span>
                            </div>
                            <div class="mt-2   flex flex-wrap gap-2">
                                @forelse ($item->products as $product)
                                    <span class="rounded-full bg-slate-700 px-3 py-1 text-sm text-slate-100">{{ $product->name_product }}</span>
                                @empty
                                    <span class="text-sm text-white font-semibold px-2 py-2 rounded-lg bg-yellow-500">Belum ada produk</span>
                                @endforelse
                            </div>
                        </div>
                    @empty
                        <p class="text-slate-300">Kategori tidak ditemukan.</p>
                    @endforelse
                </div>
                <a href="{{ route('admin.products.index') }}"
                    class="px-2 py-3  rounded-lg bg-red-500 shadow-lg text-white">Views Table Product</a>
            </main>

            {{-- main detail Project --}}
            <main id="DetailProject"
                class="container hidden opacity-0 translate-y-4 transition duration-700 ease-in-out tab-content mx-auto px-3 py-5 mt-12 rounded-xl shadow-lg shadow-gray-800  bg-slate-200">
                <h1 class="text-3xl text-slate-800 font-bold">Detail data Project </h1>
                <div class="mt-12 ">
                    <h1 class="text-xl text-black font-semibold">Total Project</h1>
                    <p class="text-4xl font-bold text-slate-600 mb-12">4 Project</p>
                </div>
                <a href="{{ route('admin.projects.index') }}"
                    class="px-2 py-3 rounded-lg bg-blue-500 shadow-lg text-white">Views Table Project</a>
                {{-- dropdwo kategori berdasarkan produk --}}

            </main>

            {{-- main detail massage --}}
            <main id="DetailMessage"
                class="container hidden opacity-0 translate-y-4 transition duration-700 ease-in-out tab-content mx-auto px-3 py-5 mt-12 rounded-xl shadow-lg shadow-gray-800  bg-slate-200">
                <h1 class="text-3xl text-slate-800 font-bold">Detail data Message </h1>
                <div class="mt-12 ">
                    <h1 class="text-xl text-black font-semibold">Total Pesan Yang Masuk</h1>
                    <p class="text-4xl font-bold text-slate-600">6 Pesan Yang masuk</p>
                </div>
                <div class="w-full mt-6 flex gap-8 mb-8 flex-wrap">
                    <div class="mt-5 ">
                        <label for="" class="font-semibold border-b border-gray-900 py-2">Total Email
                            masuk</label>
                        <p class="text-xl font-bold text-slate-600 mt-6">6 Email</p>
                    </div>
                    <div class="mt-5 ">
                        <label for="" class="font-semibold border-b border-gray-900 py-2">Total username
                            masuk</label>
                        <p class="text-xl font-bold text-slate-600 mt-6">6 Username</p>
                    </div>
                </div>
                <a href="{{ route('admin.masages.index') }}"
                    class="px-2 py-3 rounded-lg  bg-orange-500 shadow-lg text-white">Views Table Massage</a>

                {{-- dropdwo kategori berdasarkan produk --}}

            </main>
        </div>
    </div>
    </div>
@endsection
