@extends('layouts.admin')
@section('title', 'categori')
    

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="get" class="d-flex flex-wrap justify-content-end gap-2 flex-grow-1 mx-3"
                    >
                        <input type="text" name="search" class="form-control mb-3"
                        style="width: 300px"
                        placeholder="Cari Kategori...." value="">
                        <select name="#" id="#" class="rounded-pill mx-2" style="min-width: 200px; h">
                            <option value="" class="text-center text-success">pilih kategori</option>
                        </select>
                         <button type="submit" class="btn btn-primary mx-2">Cari</button>
                    </form>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-end">
                            <a href="{{ route('admin.products.create') }}" class="btn btn-success mx-4 mt-5 ">
                                <i class="bi bi-plus-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @if (session('success'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    </div>
                </div>
            @endif
            @if (session('error'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="bg-primary text-center fw-bold text-white">
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Nama kategori</th>
                                    <th>Harga</th>  
                                    <th>stock</th>  
                                    <th>Gambar</th>  
                                    <th>aksi</th>  
                                      
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $item)
                                    <tr class="fw-bold text-dark">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name_product }}</td>
                                        <td>{{ $item->category->name }}</td>
                                        <td>{{number_format($item->price) }}</td>
                                        <td>{{ $item->stock }}</td>
                                        <td>
                                            @if ($item->image)
                                                <img src="{{ asset('storage/products/' . $item->image) }}" alt="{{ $item->name }} " width="100">
                                                
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.products.edit', $item->id) }}" class="btn btn-success btn-sm mx-3">Edit</a>
                                            <form action="{{ route('admin.products.destroy', $item->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm mt-3" type="submit">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr> 
                                @empty
                                   <tr>
                                        <td colspan="7" class="text-center">
                                            Data tidak tersedia
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