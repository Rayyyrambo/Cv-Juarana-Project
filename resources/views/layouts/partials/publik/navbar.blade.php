<header class="bg-sky-100 p-3 lg:w-full w-full">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between relative">
                    <div class="md:flex md:items-center">
                        <h1 class="text-red-600 text-3xl font-bold">
                            JUARANA <span class="text-blue-600">MANDIRI</span>
                        </h1>
                    </div>
                    <nav id="NavMenu" class="hidden lg:block lg:static lg:max-w-full lg:py-3 lg:px-3  lg:w-1/2 lg:bg-gradient-to-r from-red-500  to-blue-500 absolute  bg-blue-400 bg-opacity-40 background-bluer shadow-lg py-5 rounded-lg max-w-[250px] w-full top-full  right-4">
                            <ul class=" block lg:flex lg:justify-evenly  ">
                                <li class="group lg:mx-3 hover:bg-blue-400 p-1 rounded-lg">
                                    <a
                                        class="flex  mx-8 py-2 lg:py-0 lg:mx-0 text-base text-white font-bold transition group-hover:text-blue-700"
                                        href="{{ route('project') }}"
                                    >
                                        Project
                                    </a>
                                </li>
                                <li class="group lg:mx-3 hover:bg-blue-400 p-1 rounded-lg">
                                    <a
                                        class="flex mx-8 py-2 lg:py-0 lg:mx-0 text-base text-white font-bold transition group-hover:text-blue-700"
                                        href="{{ route('home') }}"
                                    >
                                        Home
                                    </a>
                                </li>
                                
                                <li class="group lg:mx-3 hover:bg-red-500 p-1 rounded-lg">
                                    <a
                                        class="flex mx-8 py-2 lg:py-0 lg:mx-0 text-base text-white font-bold transition group-hover:text-red-700"
                                        href="{{ route('service') }}"
                                    >
                                        Services
                                    </a>
                                </li>

                                <li class="group lg:mx-3 hover:bg-red-500 p-1 rounded-lg">
                                    <a
                                        class="flex mx-8 py-2 lg:py-0 lg:mx-0 text-base text-white font-bold transition group-hover:text-red-700"
                                        href="{{ route('product') }}"
                                    >
                                        Product
                                    </a>
                                </li>

                                
                            </ul>
                        </nav>
                    
                        

                    <div class="flex items-center gap-4">
                        <div class="hidden sm:flex sm:gap-4">
                            <a
                                class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow-sm"
                                href="{{ route('login') }}"
                            >
                                Login
                            </a>

                            <div class="hidden sm:flex">
                                <a
                                    class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600"
                                    href="{{ route('register') }}"
                                >
                                    Register
                                </a>
                            </div>
                        </div>

                        <div class="flex items-center px-4">
                            <button
                                id="hamburger"
                                class="lg:hidden"
                                name="hamburger"
                                type="button"
                            >
                                <span class="hamburger-line transition duration-300 ease-in-out origin-top-left "></span>
                                <span class="hamburger-line transition duration-300 ease-in-out"></span>
                                <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>