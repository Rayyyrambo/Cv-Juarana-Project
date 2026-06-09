@extends('layouts.publik')
@section('title', 'project')



@section('content')
    <section class="container mx-auto py-8">
        <div class="w-96 text-center mx-auto">
            <h1 class="text-4xl mb-3 text-green-700 font-bold">This is my project</h1>
            <p class="text-1xl font-bold">Berikut adalah beberapa project yang kami selesaikan dengan kualitas terbaik dan
                pelayanan terpercaya untuk memenuhi kebutuhan Anda.</p>
        </div>
        <div class="grid grid-cols-1 px-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-12">
            @forelse ($projects as $item)
                <div class="w-full px-4">
                    <div
                        class="shadow-xl bg-blue-400 rounded-xl border border-gray-600  mb-10 overflow-hidden transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                        <img class="w-full object-cover " src="{{ Storage::url('projects/' . $item->image) }}"
                            alt="{{ $item->name }}">
                        <div class="py-8 px-3">
                            <div class="bg-blue-600 px-2 py-2 flex  rounded-xl mb-3 items-center justify-center">
                                <h1 class="text-lg font-bold mb-2">{{ $item->name_project }}</h1>
                            </div>
                            <p class="text-md font-bold text-gray-300">{{ $item->tanggal_project }}</p>
                            <p class="text-md font-bold text-gray-300">{{ $item->alamat_project }}</p>
                            <h1 class="font-semibold text-red-700">Cv.Juarana Mandiri</h1>
                            <button class="bg-emerald-400 p-3 rounded-xl hover:bg-emerald-700 mt-3">
                                check
                            </button>
                        </div>
                    </div>
                </div>
            @empty
                <div>
                    <h1>belum ada project</h1>
                </div>
            @endforelse

            {{-- <div class="w-full px-4">
                <div
                    class="bg-indigo-100 rounded-xl shadow-lg mb-10 overflow-hidden transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                    <img class="w-full object-cover " src="{{ asset('images/project1.jpg') }}" alt="">
                    <div class="py-8 px-6">
                        <h3>product</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quibusdam mollitia temporibus in
                            alias dignissimos sed facere, officiis iusto atque!</p>
                        <button class="bg-emerald-400 p-3 rounded-xl hover:bg-emerald-700">
                            check
                        </button>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="w-full px-4">
                <div
                    class="bg-indigo-100 rounded-xl shadow-lg mb-10 overflow-hidden transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                    <img class="w-full object-cover " src="{{ asset('images/project1.jpg') }}" alt="">
                    <div class="py-8 px-6">
                        <h3>product</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quibusdam mollitia temporibus in
                            alias dignissimos sed facere, officiis iusto atque!</p>
                        <button class="bg-emerald-400 p-3 rounded-xl hover:bg-emerald-700">
                            check
                        </button>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="w-full px-4">
                <div
                    class="bg-indigo-100 rounded-xl shadow-lg mb-10 overflow-hidden transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                    <img class="w-full object-cover " src="{{ asset('images/project1.jpg') }}" alt="">
                    <div class="py-8 px-6">
                        <h3>product</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quibusdam mollitia temporibus in
                            alias dignissimos sed facere, officiis iusto atque!</p>
                        <button class="bg-emerald-400 p-3 rounded-xl hover:bg-emerald-700">
                            check
                        </button>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="w-full px-4">
                <div
                    class="bg-indigo-100 rounded-xl shadow-lg mb-10 overflow-hidden transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                    <img class="w-full object-cover " src="{{ asset('images/project1.jpg') }}" alt="">
                    <div class="py-8 px-6">
                        <h3>product</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quibusdam mollitia temporibus in
                            alias dignissimos sed facere, officiis iusto atque!</p>
                        <button class="bg-emerald-400 p-3 rounded-xl hover:bg-emerald-700">
                            check
                        </button>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="w-full px-4">
                <div
                    class="bg-indigo-100 rounded-xl shadow-lg mb-10 overflow-hidden transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                    <img class="w-full object-cover " src="{{ asset('images/project1.jpg') }}" alt="">
                    <div class="py-8 px-6">
                        <h3>product</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quibusdam mollitia temporibus in
                            alias dignissimos sed facere, officiis iusto atque!</p>
                        <button class="bg-emerald-400 p-3 rounded-xl hover:bg-emerald-700">
                            check
                        </button>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
@endsection
