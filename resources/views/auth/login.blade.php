<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Login Dashboard_pro</title>


</head>

<body>

    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 mx-auto   ">
        <section class="bg-slate-300 hidden py-2 min-h-screen lg:flex justify-center items-center flex-col ">
            <h1 class="text-6xl text-blue-700 font-bold text-center">Welcome Admin</h1>
            <div class="w-1/2 mx-auto py-3">
                <p class="text-lg fosnt-semibold text-blue-500 text-center mt-5">Kelola layanan terbaik dengan
                    dedikasi penuh Masuk untuk memulai aktivitas Anda hari ini, Masukkan akun Anda untuk mengakses
                    panel kontrol dan mengelola sistem dengan aman</p>

            </div>
        </section>

        <section class="flex justify-center items-center min-h-screen bg-cover bg-no-repeat "
            style="background-image: url('{{ asset('images/iconLogin.jpg') }}') ">
            <main class="bg-blue-500 bg-opacity-80 shadow-lg shadow-gray-600  rounded-lg w-1/2 px-3 py-8">
                <div class="flex gap-2 py-2 px-2 ">
                    <div class="rounded-full border-2 border-white w-16 h-16  flex justify-center items-center mb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                    </div>
                    <div class="flex w-full py-3">
                        <h1 class="text-md text-gray-300 font-semibold ">Silakan login untuk melanjutkan ke
                            Dashboard Utama
                            Juarana Mandiri</h1>
                    </div>
                </div>


                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    {{-- input user name start --}}
                    <div class="mb-4">
                        <label for="" class="blok font-semibold text-white text-lg ">nama</label>
                        <div class="relative mt-3">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-slate-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                            </div>
                            <input type="name" id="name"
                                class="w-full pl-10 pr-12 py-2 bg-blue-50 border border-blue-200 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-[0_0px_3px_blue]"
                                name="name" required">
                        </div>
                    </div>
                    {{-- input user name end --}}

                    {{-- input password start --}}
                    <div class="mt-5">
                        <label for="" class="blok font-semibold text-white text-lg ">password</label>
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
                                name="password" required">
                        </div>
                    </div>
                    {{-- input password end --}}

                    <div class="w-full flex justify-between items-center ">
                        <button type="submit"
                            class="bg-blue-500 shadow-lg shadow-blue-700 text-white mt-5 border border-white rounded-lg px-3 py-2 ">Login</button>

                        <span>Belum punya akun? <a href="{{ route('register') }}">Daftar</a></span>

                    </div>
                </form>

            </main>
        </section>


    </div>



</body>
