    @extends('layouts.publik')
    @section('title', 'product')

    @section('content')
        <section class="container mx-auto ">
            <div class="w-96 py-5 text-center mx-auto">
                <h1 class="text-4xl mb-3 text-green-700 font-bold">This is my product</h1>
                <p class="text-1xl font-bold">Berikut adalah beberapa produk yang saya sediakan dengan kualitas terbaik dan
                    pelayanan terpercaya untuk memenuhi kebutuhan Anda.</p>
            </div>
            <hr class="border border-gray-400 w-full ">

            

            <div class="grid grid-cols-2 px-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-1 lg:gap-6 mt-12">
                @forelse ($products as $item)
                    <div class="w-full px-4">
                        <div
                            class=" bg-gradient-to-r from-sky-100 via-sky-200 to-sky-300 border border-gray-500  rounded-xl shadow-lg mb-10 overflow-hidden transition duration-300 ease-in-out hover:shadow-sky-300 hover:border-sky-300 hover:shadow-xl hover:-translate-y-2">
                            <img class="w-full object-cover " src="{{ Storage::url('products/' . $item->image) }}"
                                alt="{{ $item->name }}">
                            <div class="py-5 px-6">
                                <h3 class="mb-5 text-sm lg:text-lg text-gray-800 font-extrabold uppercase">
                                    {{ $item->name_product }}</h3>
                                <a class="bg-teal-300 shadow-lg transition view-button-product ease-in-out duration-300 font-semibold  px-3 py-3 rounded-xl  hover:bg-cyan-600"
                                    href="#" data-name="{{ $item->name_product }}" data-price="{{ $item->price }}"
                                    data-stock="{{ $item->stock }}" data-desc="{{ $item->description }}"
                                    data-image="{{ Storage::url('products/' . $item->image) }}"
                                    data-category="{{ $item->category->name }}">

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
