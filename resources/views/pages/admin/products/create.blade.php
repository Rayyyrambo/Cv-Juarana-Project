@extends('layouts.admin');
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12  ">
                <h1>Product</h1>
            </div>
        </div>
    </div>

    <div class="container">
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
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Pilih Katgeori</label>
                                <select name="category_id" id="" class="form-control" placeholder="silahkan isi pilih kategori" required>
                                    @foreach ($categories as $item)
                                        <option  value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                               
                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input type="text" class="form-control" name="name_product"
                                    placeholder="Silahkan isi nama Produk" required>
                                <label>Harga</label>
                                <input type="number" class="form-control" name="price"
                                    placeholder="Silahkan isi harga produk" required>
                                <label>stock</label>
                                <input type="number" class="form-control" name="stock"
                                    placeholder="Silahkan isi stock produk" required>
                                <label>Gambar</label>
                                <input type="file" class="form-control " name="image"
                                    placeholder="Silahkan upload file gambar produk" required>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" id="" cols="30" rows="10" class="form-control"
                                placeholder="Silahkan isi descripsi pada produk"></textarea>
                            </div>
                            <button class="btn btn-success mt-3" type="submit">
                                Simpan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
