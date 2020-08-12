@extends('admin.templates.default')

@section('content')
    <h1>Penulis</h1>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Data Penulis</h3>
        </div>
        <div class="card-body">
        <form action="{{route('admin.author.update', $author)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Nama</label>
                <input type="text" name="name" class="form-control
                    @error('name')
                        is-invalid
                    @enderror"
                    placeholder="Masukkan nama penulis"
                    value="{{ old('name') ?? $author->name}}">
                    @error('name')
                        <span class="help-block">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" value="Tambah" class="btn btn-success"><i class="fa fa-save"></i>  Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
