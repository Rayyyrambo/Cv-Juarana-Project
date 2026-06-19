@extends('layouts.admin')
@section('title', 'categori')


@section('content')
    <div class="flex-1 overflow-y-auto bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8 py-8">
            <div class="w-full flex flex-wrap justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Table Product</h2>
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
@endsection
