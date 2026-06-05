@extends('layouts.admin');
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12  ">
                <h1>Project edit</h1>
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
                        <form action="{{ route('admin.projects.update', $projects->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            {{-- <div class="form-group">
                                <label>Pilih Katgeori</label>
                                <select name="category_id" id="" class="form-control" placeholder="silahkan isi pilih kategori" required>
                                    @foreach ($categories as $item)
                                        <option  value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                            
                               
                            <div class="form-group">
                                <label>Nama Project</label>
                                <input type="text" class="form-control" name="name_project"
                                    placeholder="Silahkan isi nama Project...." required>
                                <label>tanggal project</label>
                                <input type="date" class="form-control" name="tanggal_project"
                                    placeholder="tanggal project....." >
                                <label>alamat project/label>
                                <input type="text" class="form-control" name="alamat_project"
                                    placeholder="Silahkan isi stock produk" >
                                <label>Gambar</label>
                                <input type="file" class="form-control " name="image"
                                    placeholder="Silahkan upload file gambar produk" >
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
