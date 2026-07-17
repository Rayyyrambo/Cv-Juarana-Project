    @extends('layouts.publik')
    @section('title', 'product')

    @section('content')
        <section id="product" class=" mx-auto  ">
            <div class="w-full bg-slate-100 px-2 py-5 text-center mx-auto">
                <h1 class="text-4xl mb-3 text-slate-900 font-bold">This Is My Product</h1>
                <p class="lg:text-2xl text-sm w-full text-gray-600 text-center mx-auto font-bold">We offer a selection of high-quality products backed
                    by reliable service to meet your needs.</p>
            </div>
            <hr class="border border-gray-400 w-full ">



            <div class="container mx-auto grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4 px-2  mt-12">
                @forelse ($products as $item)
                    <div class="lg:w-64 w-full mx-auto  ">
                        <div
                            class=" bg-gradient-to-r from-sky-100 via-sky-200 to-sky-300 border border-gray-500  rounded-xl shadow-lg mb-10 overflow-hidden transition duration-300 ease-in-out hover:shadow-sky-300 hover:border-sky-300 hover:shadow-xl hover:-translate-y-2">
                            <img class="w-full  object-cover " src="{{ Storage::url('products/' . $item->image) }}"
                                alt="{{ $item->name }}">
                            <div class="py-5 px-2">
                                <h3 class="mb-5 text-sm lg:text-lg text-gray-800 font-extrabold uppercase text-center lg:text-start">
                                    {{ $item->name_product }}</h3>
                                <a class="bg-teal-300 text-start shadow-lg transition view-button-product ease-in-out duration-300 font-semibold  px-3 py-3 rounded-xl  hover:bg-cyan-600"
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
