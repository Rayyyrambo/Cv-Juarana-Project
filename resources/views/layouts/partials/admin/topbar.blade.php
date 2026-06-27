 <nav class="w-full flex relative border-b-2 border-gray-400 justify-between bg-slate-600 shadow-lg px-12 py-5 flex-shrink-0">
     <div class="flex flex-wrap justify-center lg:flex lg:justify-start  w-1/2 ">
         <div class="px-2 py-2 rounded-lg lg:flex lg:justify-star  text-center ">
             <button href="#" id="toggle-produk" type="submit"
                 class="bg-sky-600  mx-3 w-full text-white font-semibold  px-1 py-2
                        rounded-lg transition ease-in-out duration-200 translate-y-1 hover:translate-y-0 ">
                 Search Produk
             </button>
         </div>
         <div class="px-2 py-2  rounded-lg lg:flex lg:justify-center  text-center ">
             <button href="#" id="toggle-kategori" type="submit"
                 class="bg-sky-600 text-white font-semibold mx-3 w-full  px-2 py-2
                        rounded-lg transition ease-in-out duration-200 translate-y-1 hover:translate-y-0 ">
                 Kategori
             </button>
         </div>
     </div>

     <div class="flex justify-center items-center   mx-3">
         <hr class="h-10 lg:flex lg:justify-center lg:items-center bg-white hidden  mx-5" style="width: 3px; ">
         <a href="" id="dropUser">
             <h1
                 class="font-semibold text-lg text-black hover:text-white hover:bg-blue-500 transition duration-300 ease-in-out px-5 py-2 rounded-lg">
                 RayyAdmin</h1>
         </a>
     </div>
     <div class="user-down flex flex-wrap justify-center">
         <div class="px-3 py-2 w-full  ">
             <form action="{{ route('logout') }}" method="POST">
                 @csrf
                 <button type="submit" class="hover:text-white">Logout</button>
             </form>

         </div>
         <div class="px-3 py-2 w-full  ">
             <a href="{{ route('home') }}">
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="size-6 hover:text-white">
                     <path stroke-linecap="round" stroke-linejoin="round"
                         d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                 </svg>
             </a>

         </div>
     </div>
     <div class="search-menu flex justify-between lg:w-80 lg:left-5 lg:flex lg:justify-center py-3 px-3  ">
         <form action="{{ route('admin.products.index') }}" method="get" class="flex w-full">
             <input type="text" name="search" class="px-2 py-2 w-full rounded-lg" placeholder="cari produk...."
                 value="{{ $search ?? '' }}">

             <div class="mx-5 bg-cyan-300 rounded-xl flex flex-col justify-center items-center ">
                 <button type="submit">
                     <i class="fa-solid  mx-5 fa-magnifying-glass text-gray-500"></i>
                 </button>
             </div>
         </form>
     </div>
     <div class="kategori-admin px-10  lg:w-80 lg:left-5 lg:flex lg:justify-center ">
         <form action="{{ route('admin.products.index') }}" method="get" class="">
             <select name="category_id" id="categoryFilter" onchange="this.form.submit()" class="rounded-xl ">
                 <option value="" class="text-center font-bold w-full  ">Silahkan pilih kategori</option>
                 @foreach ($golongan as $item)
                     <option value="{{ $item->id }}" {{ request('category_id') == $item->id ? 'selected' : '' }}>
                         {{ $item->name }}</option>
                 @endforeach
             </select>
         </form>
     </div>

 </nav>
