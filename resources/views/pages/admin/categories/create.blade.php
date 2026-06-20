@extends('layouts.admin')
@section('title', 'categori')
@section('content')
    <div class="flex-1 overflow-y-auto bg-gray-50">
        <div class="container  mx-auto px-4 lg:px-8 py-8">
            <div class="w-full flex flex-wrap justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Create Product</h2>
            </div>

            <div class="w-full  ">
                <div class="lg:w-3/2 w-full container mx-auto shadow-xl rounded-xl bg-gradient-to-br from-sky-500 via-sky-200 to-sky-500 py-5  px-3">
                    <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="w-full px-3 mb-3 mt-3">
                            <label for="" class="text-lg font-semibold  text-gray-800">Nama Kategori</label>
                            <input type="text" class="w-full border-sky-800 bg-cyan-100  rounded-lg" name="name"
                                placeholder="Silahkan isi produk"required>
                        </div>
                        
                        <div class="w-full px-5 mt-5">
                            <button class="bg-blue-300 px-3 py-2 rounded-lg ">
                                Simpan
                            </button>
                        </div>
                    </form>

                </div>
                
            </div>


        </div>
    </div>

@endsection
