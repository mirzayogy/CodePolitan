@extends('admin.templates.default')

@section('content')
    <h1>Penulis</h1>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Buku</h3>
        </div>
        <div class="card-body">
        <form action="{{route('admin.book.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" name="title" class="form-control
                    @error('title')
                        is-invalid
                    @enderror"
                    placeholder="Masukkan nama penulis"
                    value="{{ old('title') }}">
                    @error('title')
                        <span class="help-block">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Judul</label>
                    <textarea name="description" id="description" rows="3" class="form-control" placeholder="Tuliskan deskripsi">
                        {{old('description')}}
                    </textarea>
                    @error('description')
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
