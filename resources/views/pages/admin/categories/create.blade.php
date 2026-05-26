@extends('layouts.admin');
@section('content')
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
                        <form action="{{ route('admin.categories.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Nama Katgeori</label>
                                <input type="text" class="form-control" name="name" placeholder="Silahkan isi kategori" required>
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