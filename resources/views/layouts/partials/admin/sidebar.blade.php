 <div id="sideBar" class="w-80 h-screen fixed  lg:sticky top-0 left-0 z-50 -translate-x-full lg:translate-x-0 transition-transfrom duration-300 ease-in-out  bg-blue-500">
            <img class="w-64 mx-auto pt-5" src="{{ asset('juaranaM.png') }}" alt="">
            <h1 class="text-3xl font-semibold mt-5 text-center text-gray-800">Juarana Mandiri</h1>
            <div class="flex  justify-center px-5 mt-12">
                <a href="{{ route('admin.dashboard') }}"
                    class="text-cyan-100 flex justify-center   text-md font-bold hover:bg-cyan-800  transition duration-200 ease-in-out rounded-xl px-5 py-2 w-full text-center">
                    <i class="fas fa-fw fa-tachometer-alt  mx-3 text-3xl"></i>
                    <span class="flex justify-center mt-1">Dashboard</span>
                </a>
            </div>
            <hr class="border w-full border-black mt-3">
            <p class="text-center mt-5 text-2xl text-gray-600 font-bold">Menu Admin</p>
            <div class="flex  justify-center px-5 mt-10">
                <a href="{{ route('admin.products.index') }}"
                    class="text-cyan-200 flex justify-center text-md font-bold hover:bg-cyan-800  transition duration-200 ease-in-out rounded-xl px-5 py-2 w-full text-center">
                    <i class="fas fa-fw fa-table lg:flex justify-center  mx-3 text-3xl"></i>
                    <span class="flex justify-center mt-1">Produk</span>
                </a>
            </div>
            <div class="flex  justify-center px-5 mt-5">
                <a href=""
                    class="text-cyan-200 flex justify-center text-md font-bold hover:bg-cyan-800  transition duration-200 ease-in-out rounded-xl px-5 py-2 w-full text-center">
                    <i class="fas fa-fw fa-table lg:flex justify-center  mx-3 text-3xl"></i>
                    <span class="flex justify-center mt-1">Project</span>
                </a>
            </div>
            <div class="flex  justify-center px-5 mt-5">
                <a href=""
                    class="text-cyan-200 flex justify-center text-md font-bold hover:bg-cyan-800  transition duration-200 ease-in-out rounded-xl px-5 py-2 w-full text-center">
                    <i class="fas fa-fw fa-table mx-3 text-3xl"></i>
                    <span class="flex justify-center mt-1">Kategory</span>
                </a>
            </div>
            <div class="flex  justify-center px-5 mt-5">
                <a href=""
                    class="text-cyan-200 flex justify-center text-md font-bold hover:bg-cyan-800  transition duration-200 ease-in-out rounded-xl px-5 py-2 w-full text-center">
                    <i class="fas fa-fw fa-chart-area mx-3 text-3xl"></i>
                    <span class="flex justify-center mt-1">Message</span>
                </a>
            </div>
            <div class="flex  justify-center px-5 mt-5">
                <a href=""
                    class="text-cyan-200 flex justify-center  text-md font-bold hover:bg-cyan-800  transition duration-200 ease-in-out rounded-xl px-5 py-2 w-full text-center">
                    <i class="fas fa-user mx-3 text-3xl"></i>
                    <span class="flex justify-center mt-1">Data Admin</span>
                </a>
            </div>

            <div class="flex justify-center">
                <a href="#" id="closeside"
                    class="text-4xl bg-blue-600 rounded-lg px-5 py-2 mt-12 text-cyan-200 font-bold
              hover:bg-blue-700 transition duration-300 ease-in-out lg:hidden"><</a>
            </div>
        </div>