@extends('layouts.admin')
@section('title', 'messages')


@section('content')
    <div class="flex-1 overflow-y-auto ">
        <div class="container mx-auto px-4 lg:px-8 py-8">
            <div class="w-full flex flex-wrap justify-between items-center mb-6">
                <h2 class="text-2xl px-3 py-3 rounded-lg font-bold border-2 border-green-500 text-green-400">Table Messages
                </h2>

            </div>
            @if (session('success'))
                <div id="succesAlert" role="alert"
                    class="fixed top-12 mt-12 right-0 z-[60] shadow-lg max-w-sm text-green-800 font-bold px-3 py-2 bg-green-400 transition-opacity duration-500">
                    <div class="flex gap-2 items-center">
                        <!-- Ikon Centang Biasa -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor"
                            class="rounded-full border border-green-900 px-2 py-1 w-8 h-8 text-green-800">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        {{ session('success') }}
                    </div>
                </div>
            @endif
            @if (session('error'))
                <div class="w-full px-3 py-2 bg-red-400 mb-3 mt-3 ">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Table Wrapper untuk Responsive -->
            <div class="bg-indigo-400 border border-white rounded-lg shadow-lg overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="bg-blue-800 text-white">
                                <th class="px-4 py-3 text-left font-semibold">No</th>
                                <th class="px-4 py-3 text-left font-semibold">User Name</th>
                                <th class="px-4 py-3 text-left font-semibold">Email</th>
                                <th class="px-4 py-3 text-left font-semibold">Message</th>
                                <th class="px-4 py-3 text-left font-semibold">Created At</th>
                                <th class="px-4 py-3 text-center font-semibold">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($messages as $item)
                                <tr class="border-b border-indigo-300 hover:bg-indigo-300 transition duration-150">
                                    <td class="px-4 py-3 text-black font-bold">{{ $loop->iteration }}</td>
                                    <td class="px-4 py-3 text-black font-bold ">{{ $item->user }}</td>
                                    <td class="px-4 py-3 text-black font-bold">{{ $item->email }}</td>
                                    <td class="px-4 py-3 text-black font-bold">{{ $item->description ?? '-' }}</td>
                                    <td class="px-4 py-3 text-black font-bold">
                                        {{ $item->created_at->translatedFormat('d F Y H:i') }}</td>
                                    <td class="px-4 py-3">
                                        <button type="button"
                                            class="btnMassageDelete px-3 py-1 bg-red-500 hover:bg-red-600 text-white rounded text-sm font-semibold transition duration-200 ease-in-out">
                                            Hapus
                                        </button>
                                        <div id="modalDeleteMassage"
                                            class="hidden px-12 bg-gray-400 bg-opacity-65 fixed z-50 w-full h-screen left-0 top-0 flex justify-center items-center">
                                            <div class="bg-slate-200 shadow-gray-600 px-2 py-2 shadow-lg rounded-lg">
                                                <div class="w-full flex items-center px-2 py-1">
                                                    <img class="mr-4 object-cover w-12 h-12"
                                                        src="{{ asset('images/warning_delete_r.png') }}"
                                                        alt="gambar delete">
                                                    <div class="w-1/2 ">
                                                        <h1 class="text-lg text-black font-bold">Are You Sure ?</h1>
                                                        <p class="text-base text-slate-700">If you are sure you want to
                                                            delete the product from the
                                                            projects label, please press the delete
                                                            button press cancel if you wish to cancel.</p>
                                                    </div>
                                                </div>
                                                <div class="w-full flex justify-end gap-4 px-3 ">
                                                    <button type="button" id="ButtonCancelMassage"
                                                        class="bg-green-400 px-2 py-3 rounded-lg text-green-700 font-bold">
                                                        CANCEL
                                                    </button>
                                                    <form
                                                        action="{{ route('admin.masages.destroy', $item->id) }}"method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" id="ButtonDelete"
                                                            class="bg-red-400 px-2 py-3 rounded-lg text-red-700 font-bold">
                                                            DELETE
                                                        </button>
                                                    </form>

                                                </div>

                                            </div>
                                        </div>

                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-10 text-center text-gray-400 italic">
                                        Belum ada pesan yang masuk.
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
