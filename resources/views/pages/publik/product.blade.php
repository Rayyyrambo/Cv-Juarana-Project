    @extends('layouts.publik')
    @section('title', 'product')

    @section('content')
        <section class=" mx-auto ">
            <div class="bg-blue-300 w-full py-3 text-center mx-auto">
                <h1 class="text-4xl mb-3 text-green-700 font-bold">This is my product</h1>
                <p class="text-1xl font-bold">Berikut adalah beberapa produk yang saya sediakan dengan kualitas terbaik dan
                    pelayanan terpercaya untuk memenuhi kebutuhan Anda.</p>
            </div>
            <div class="container mx-auto grid grid-cols-2 px-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-1 lg:gap-6 mt-12">
                @forelse ($products as $item)
                    <div class="w-full px-4">
                        <div
                            class="bg-blue-600 border border-gray-500  rounded-xl shadow-lg mb-10 overflow-hidden transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-2">
                            <img class="w-full object-cover " src="{{ Storage::url('products/' . $item->image) }}" alt="{{ $item->name }}">
                            <div class="py-3 pb-4 px-6">
                                <h3 class="mb-5 text-sm lg:text-lg text-gray-300 font-extrabold uppercase">{{ $item->name_product }}</h3>
                                <a class="bg-emerald-400   p-3 rounded-xl view-button-product hover:bg-emerald-700"
                                    href="#">
                                    check
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse




            </div>
        </section>
    @endsection
