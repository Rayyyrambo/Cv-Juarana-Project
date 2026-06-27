@extends('layouts.admin')
@section('title', 'dasboard')


@section('content')
    <div class=" overflow-y-auto ">
        <div class="container  mx-auto px-4 lg:px-8 py-8">
            <div class="w-full shadow-lg shadow-slate-800 bg-slate-800 rounded-xl px-3 py-8 mb-6">
                <h2 class="text-3xl font-bold text-slate-200">Selama Datang di Halaman Dashboard</h2>
                <div class="">
                    <p class="text-red-600 font-bold text-2xl">Juarana <span class="text-blue-600">Mandiri</span></p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-6">
                <div class="container rounded-xl  px-5 py-5">
                    <div class="w-full mx-auto rounded-lg overflow-hidden flex bg-slate-200 hover:bg-slate-300  shadow-lg shadow-gray-600 ">
                        <div class=" w-3 bg-red-600">
                        </div>
                        <div class="flex justify-center flex-col px-5 py-5">
                            <h1 class="text-2xl font-bold ">Total Produk</h1>
                            <p class="text-gray-700 text-lg font-bold">{{ $totalProduct }} Produk</p>
                        </div>
                    </div>
                </div>
                <div class="container rounded-xl  px-5 py-5">
                    <div class="w-full mx-auto rounded-lg overflow-hidden flex bg-slate-200 hover:bg-slate-300  shadow-lg shadow-gray-600 ">
                        <div class=" w-3 bg-blue-600">
                        </div>
                        <div class="flex justify-center flex-col px-5 py-5">
                            <h1 class="text-2xl font-bold ">Total Project</h1>
                            <p class="text-gray-700 text-lg font-bold">{{ $totalProject }} Project</p>
                        </div>
                    </div>
                </div>
                <div class="container rounded-xl  px-5 py-5">
                    <div class="w-full mx-auto rounded-lg overflow-hidden flex bg-slate-200 hover:bg-slate-300 shadow-lg shadow-gray-600  ">
                        <div class=" w-3 bg-orange-600">
                        </div>
                        <div class="flex justify-center flex-col px-5 py-5">
                            <h1 class="text-2xl font-bold ">Total Pesan Yang Masuk</h1>
                            <p class="text-gray-700 text-lg font-bold">{{ $totalMessage }} Pesan</p>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
@endsection
