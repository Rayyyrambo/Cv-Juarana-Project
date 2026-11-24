<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('myfont/stylesheet.css') }}">


    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Login Dashboard_pro</title>


</head>

<body>

    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 mx-auto   ">
        <section class="bg-gray-100 relative hidden py-2 min-h-screen lg:flex justify-center items-center flex-col ">
            <div
                class="absolute bottom-0 left-0 w-full h-52 rounded-t-full bg-gradient-to-tl from-cyan-200 via-blue-300 to-indigo-500  -translate-x-2/2 -translate-y-2/2">
            </div>
            <div
                class="absolute top-0 left-0 w-52 h-52 rounded-br-full bg-gradient-to-tl from-cyan-200 via-blue-300 to-indigo-500   -translate-x-2/2 -translate-y-2/2">
            </div>
            <h1
                class="text-8xl flex gap-7 font-semibold bg-gradient-to-r from-blue-600 via-sky-500 to-sky-400 bg-clip-text text-transparent">
                WELCOME <span class="flex"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-user-round preview-icon w-24 h-24 text-sky-500 ">
                        <circle cx="12" cy="8" r="5" />
                        <path d="M20 21a8 8 0 0 0-16 0" />
                    </svg>DMIN</span>

            </h1>
            <div class=" w-98 mx-auto py-3 px-11">
                <p class="text-xl font-bold text-blue-800 text-center">Kelola layanan terbaik dengan
                    dedikasi penuh Masuk untuk memulai aktivitas Anda hari ini, Masukkan akun Anda untuk mengakses
                    panel kontrol dan mengelola sistem dengan aman</p>

            </div>
            <div class="flex  w-full justify-evenly mt-10">
                <div class="bg-blue-400/30 px-12 py-5 rounded-lg shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-database-cog preview-icon w-20 h-20 text-blue-800 mx-auto">
                        <path d="m14.305 19.53.923-.382" />
                        <path d="m15.228 16.852-.923-.383" />
                        <path d="m16.852 15.228-.383-.923" />
                        <path d="m16.852 20.772-.383.924" />
                        <path d="m19.148 15.228.383-.923" />
                        <path d="m19.53 21.696-.382-.924" />
                        <path d="m20.772 16.852.924-.383" />
                        <path d="m20.772 19.148.924.383" />
                        <path d="M21 10.5V5" />
                        <path d="M3 12a9 3 0 0 0 7.599 2.963" />
                        <path d="M3 5v14a9 3 0 0 0 8.148 2.987" />
                        <circle cx="18" cy="18" r="3" />
                        <ellipse cx="12" cy="5" rx="9" ry="3" />
                    </svg>
                    <h1 class="text-lg text-blue-800 mt-3 font-semibold">Database Setting</h1>
                </div>
                <div class="bg-blue-400/30 rounded-lg px-12 py-5 shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-blue-800 mx-auto" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 18L9 11.25l4.306 4.306a11.95 11.95 0 015.814-5.518l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                    </svg>
                    <h1 class="text-lg text-blue-800 mt-3 font-semibold">Activity Project</h1>
                </div>
                <div class="bg-blue-400/30 px-12 py-5 rounded-lg shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-monitor-activity preview-icon w-20 h-20 text-blue-800 mx-auto">
                        <path d="M12 17v4" />
                        <path
                            d="M18 10h-2.315a1 1 0 00-.932.64l-.787 2.034a.5.5 0 01-.932 0l-2.068-5.348a.5.5 0 00-.932 0l-.787 2.035a1 1 0 01-.932.639H6" />
                        <path d="M8 21h8" />
                        <rect x="2" y="3" width="20" height="14" rx="2" />
                    </svg>
                    <h1 class="text-lg text-blue-800 mt-3 font-semibold">Monitoring Activiyt</h1>
                </div>

            </div>
        </section>

        <section class="flex justify-center items-center min-h-screen bg-cover bg-no-repeat px-3 "
            style="background-image: url('{{ asset('images/iconLogin.jpg') }}') ">
            @if (session('error') || $errors->any())
                <div id="errorAlert" role="alert" class="error-alert fixed top-12 right-0 opacity-1 z-[60]">
                    <div class="mb-4 rounded-md border border-red-300 bg-red-100 px-4 py-3 text-red-800" role="alert"
                        aria-live="polite">
                        @if (session('error'))
                            <p>{{ session('error') }}</p>
                        @else
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        @endif
                    </div>
                </div>
            @endif
            <main class="bg-blue-500 bg-opacity-80 shadow-lg shadow-gray-600  rounded-lg w-full  lg:w-1/2 px-3 py-8">
                <div class="lg:flex
                 gap-2 py-2 px-2 ">
                    <div class="rounded-full border-2 border-white px-5 py-5  flex justify-center items-center mb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 lg:w-12 lg:h-12 h-10 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                    </div>
                    <div class="flex w-full py-3">
                        <h1 class="text-md text-white font-semibold ">Silakan login untuk melanjutkan ke
                            Dashboard Utama
                            Juarana Mandiri</h1>
                    </div>
                </div>



                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    {{-- input user name start --}}
                    <div class="mb-4">
                        <label for="name" class="blok font-semibold text-white text-lg ">nama</label>
                        <div class="relative mt-3">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-slate-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                            </div>
                            <input type="text" id="name"
                                class="w-full pl-10 pr-12 py-2 bg-blue-50 border border-blue-200 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-[0_0px_3px_blue]"
                                name="name" value="{{ old('name') }}" required>
                        </div>
                    </div>
                    {{-- input user name end --}}

                    {{-- input password start --}}
                    <div class="mt-5">
                        <label for="password" class="blok font-semibold text-white text-lg ">password</label>
                        <div class="relative mt-3">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-slate-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                            </div>
                            <input type="password" id="password"
                                class="w-full pl-10 pr-12 py-2 bg-blue-50 border border-blue-200 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-[0_0px_3px_blue]"
                                name="password" required>
                        </div>
                    </div>
                    {{-- input password end --}}

                    <div class="w-full flex justify-between items-center ">
                        <button type="submit"
                            class="bg-blue-500 shadow-lg shadow-blue-700 font-semibold text-white mt-5 border border-white rounded-lg px-3 py-2 transition duration-300 ease-in-out hover:bg-white hover:text-blue-600 ">Login</button>

                        <span class="text-cyan-100 cursor-default font-bold">Belum punya akun? <a
                                href="{{ route('register') }}">Daftar</a></span>

                    </div>
                </form>

            </main>
        </section>


    </div>



</body>
