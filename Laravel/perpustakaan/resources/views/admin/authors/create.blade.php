@extends('admin.templates.default')

@section('content')
    <h1>Penulis</h1>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Penulis</h3>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama penulis">
                </div>
                <div class="form-group">
                    <button type="submit" value="Tambah" class="btn btn-success"><i class="fa fa-save"></i>  Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
