@extends('layouts.admin')
@section('title', 'categori')


@section('content')
    <div class="flex-1 overflow-y-auto ">
        <div class="container relative mx-auto px-4 lg:px-8 py-8">
            <div class="w-full flex flex-wrap  justify-between items-center mb-6">
                <h2 class="text-2xl font-bold border-2 border-green-500 rounded-lg px-5 py-2 text-green-400">Table Kategori
                </h2>
            </div>
             <div class="absolute -top-100 -right-44 w-64">
                <a href="{{ route('admin.categories.create') }}"
                    class="px-6 py-2 bg-green-500 hover:bg-green-600 text-white rounded-lg font-semibold transition duration-200 ease-in-out shadow-lg">
                    +
                </a>
            </div>
            <!-- Table Wrapper untuk Responsive -->
            <div class="bg-indigo-400 rounded-lg shadow-lg overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="bg-blue-800 text-white">
                                <th class="px-4 py-3 text-left font-semibold">No</th>
                                <th class="px-4 py-3 text-left font-semibold">Nama Kategory</th>
                                <th class="px-4 py-3 text-center font-semibold">aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $item)
                                <tr class="border-b border-indigo-300 hover:bg-indigo-300 transition duration-150">
                                    <td class="px-4 py-3 text-black font-bold">{{ $loop->iteration }}</td>
                                    <td class="px-4 py-3 text-black font-bold">{{ $item->name }}</td>

                                    <td class="px-4 py-3">
                                        <div class="flex gap-2 justify-center flex-wrap">
                                            <a href="{{ route('admin.categories.edit', $item->id) }}"
                                                class="px-3 py-1 bg-green-500 hover:bg-green-600 text-white rounded text-sm font-semibold transition duration-200 ease-in-out">
                                                Edit
                                            </a>
                                            <form action="{{ route('admin.categories.destroy', $item->id) }}"method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="px-3 py-1 bg-red-500 hover:bg-red-600 text-white rounded text-sm font-semibold transition duration-200 ease-in-out">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="px-6 py-10 text-center text-gray-400 italic">
                                        Category Kosong
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
