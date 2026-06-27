@extends('layouts.admin')
@section('title', 'categori')
@section('content')
    <div class="flex-1 overflow-y-auto ">
        <div class="container  mx-auto px-4 lg:px-8 py-8">
            <div class="w-full flex flex-wrap justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Create Product</h2>
            </div>

            <div class="w-full  ">
                <div class="lg:w-3/2 w-full container mx-auto shadow-xl border border-white rounded-xl bg-blue-400 py-5  px-3">
                    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="w-full px-3 ">
                            <label for="user" class="block text-lg font-semibold  text-gray-800 mb-2">Pilih Kategori</label>
                            <select name="category_id" id="" class="w-full border border-sky-800 rounded-lg bg-indigo-200 g" required>
                                <option value="">Pilih Kategori</option>
                                @foreach ($categories as $item )
                                    <option value="{{ $item->id }}" class="">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="w-full px-3 mb-3 mt-3">
                            <label for="" class="text-lg font-semibold  text-gray-800">NamaProduk</label>
                            <input type="text" class="w-full border-sky-800 bg-indigo-200  rounded-lg" name="name_product"
                                placeholder="Silahkan isi produk"required>
                        </div>
                        <div class="w-full px-3 mb-3 mt-3 ">
                            <label for="" class="text-lg font-semibold  text-gray-800">Harga</label>
                            <input type="number" class="w-full border-sky-800 bg-indigo-200  rounded-lg" name="price"
                                placeholder="Silahkan isi harga produk"required>
                        </div>
                        <div class="w-full px-3 mt-3 ">
                            <label for="" class="text-lg font-semibold  text-gray-800">Stock</label>
                            <input type="number" class="w-full border-sky-800 bg-indigo-200  rounded-lg" name="stock"
                                placeholder="Silahkan isi harga stock"required>
                        </div>
                        <div class="w-full px-3 mb-3 mt-3">
                            <label for="" class="text-lg font-semibold  text-gray-800">Gambar</label>
                            <input type="file" class="w-full border border-sky-800 bg-indigo-200  rounded-lg" name="image" placeholder="Silahkan isi produk">
                        </div>
                        <div class="w-full px-3 mb-3 mt-3">
                            <label for="" class="text-lg font-semibold  text-gray-800">Description</label>
                            <textarea name="description" id="description"
                                class="w-full border-sky-800 bg-indigo-200 derror rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
                                cols="30" rows="10" placeholder="Silahkan isi pesan anda"></textarea>
                        </div>
                        <div class="w-full px-5 mt-5">
                            <button class="bg-white font-bold text-blue-800 shadow-lg border border-blue-800
                            hover:bg-blue-800 hover:text-white hover:-translate-y-1 hover:shadow-lg hover:shadow-blue-800 transition duration-200 ease-in-out
                             px-3 py-2 rounded-lg ">
                                Simpan
                            </button>
                        </div>
                    </form>

                </div>
                
            </div>


        </div>
    </div>

@endsection
