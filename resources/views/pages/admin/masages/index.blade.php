@extends('layouts.admin')
@section('title', 'messages')


@section('content')
    <div class="flex-1 overflow-y-auto ">
        <div class="container mx-auto px-4 lg:px-8 py-8">
            <div class="w-full flex flex-wrap justify-between items-center mb-6">
                <h2 class="text-2xl px-3 py-3 rounded-lg font-bold border-2 border-green-500 text-green-400">Table Messages
                </h2>

            </div>

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
                                        <div class="flex gap-2 justify-center flex-wrap">
                                            <form action="{{ route('admin.masages.destroy', $item->id) }}"method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="px-3 py-1 bg-red-500 hover:bg-red-600 text-white rounded text-sm font-semibold transition duration-200 ease-in-out">
                                                    Hapus
                                                </button>
                                            </form>
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
