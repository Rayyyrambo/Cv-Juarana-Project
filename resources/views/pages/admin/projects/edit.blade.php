@extends('layouts.admin')
@section('title', 'Project')


@section('content')
    <div class="flex-1 overflow-y-auto bg-gray-50">
        <div class="container  mx-auto px-4 lg:px-8 py-8">
            <div class="w-full flex flex-wrap justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Edit Project</h2>
            </div>
            @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block sm:inline">{{ session('error') }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <title>Close</title>
                            <path
                                d="M14.348 5.652a1 1 0 00-1.414 0L10 8.586 7.066 5.652a1 1 0 10-1.414 1.414L8.586 10l-2.934 2.934a1 1 0 101.414 1.414L10 11.414l2.934 2.934a1 1 0 001.414-1.414L11.414 10l2.934-2.934a1 1 0 000-1.414z" />
                        </svg>
                    </span>
                </div>
            @endif

            <div class="w-full  ">
                <div
                    class="lg:w-3/2 w-full container mx-auto shadow-xl rounded-xl bg-gradient-to-br from-sky-500 via-sky-200 to-sky-500 py-5  px-3">
                    <form action="{{ route('admin.projects.update', $projects->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="w-full px-3 mb-3 mt-3">
                            <label for="" class="text-lg font-semibold  text-gray-800">Nama Project</label>
                            <input type="text" value="{{ old('name_project', $projects->name_project) }}"
                                class="w-full border-sky-800 bg-cyan-100  rounded-lg" name="name_project"
                                placeholder="Silahkan isi produk">
                        </div>
                        <div class="w-full px-3 mb-3 mt-3 ">
                            <label for="" class="text-lg font-semibold  text-gray-800">Tanggal Project </label>
                            <input type="date" value="{{ old('tanggal_project', $projects->tanggal_project) }}"
                                class="w-full border-sky-800 bg-cyan-100  rounded-lg" name="tanggal_project"
                                placeholder="Silahkan isi harga produk">
                        </div>
                        <div class="w-full px-3 mt-3 ">
                            <label for="" class="text-lg font-semibold  text-gray-800">Alamat Project</label>
                            <input type="text" value="{{ old('alamat_project', $projects->alamat_project) }}"
                                class="w-full border-sky-800 bg-cyan-100  rounded-lg" name="alamat_project"
                                placeholder="Silahkan isi harga stock">
                        </div>
                        <div class="w-full px-3 mb-3 mt-3">
                            <label for="" class="text-lg font-semibold  text-gray-800">Gambar</label>
                            <input type="file" class="w-full border border-sky-800 bg-cyan-100  rounded-lg"
                                name="image" placeholder="Silahkan isi produk">
                            @if ($projects->image)
                                <p class="text-sm text-gray-600 mt-1">Gambar saat ini: <span
                                        class="font-medium">{{ $projects->image }}</span></p>
                            @endif
                        </div>

                        <div class="w-full px-5 mt-5">
                            <button class="bg-blue-300 px-3 py-2 rounded-lg " type="submit">
                                Simpan
                            </button>
                        </div>
                    </form>

                </div>

            </div>


        </div>
    </div>
@endsection
