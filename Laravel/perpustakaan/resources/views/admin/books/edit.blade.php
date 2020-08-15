@extends('admin.templates.default')

@section('content')
    <h1>Buku</h1>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Ubah Data Buku</h3>
        </div>
        <div class="card-body">
        <form action="{{route('admin.book.update', $book)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" name="title" class="form-control
                    @error('title')
                        is-invalid
                    @enderror"
                    placeholder="Masukkan judul buku"
                    value="{{ $book->title ?? old('title') }}">
                    @error('title')
                        <span class="help-block">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Judul</label>
                    <textarea name="description" id="description" rows="3" class="form-control" placeholder="Tuliskan deskripsi">{{$book->description ?? old('description')}}</textarea>
                    @error('description')
                        <span class="help-block">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Penulis</label>
                    <select name="author_id" id="" class="form-control select2">
                        @foreach ($authors as $author)
                            <option
                                value="{{$author->id}}"
                                @if ($author->id === $book->author_id)
                                    selected
                                @endif
                                >
                                {{$author->name}}
                            </option>
                        @endforeach
                    </select>
                    @error('author_id')
                        <span class="help-block">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Sampul</label>
                    <input type="file" name="cover" class="form-control
                    @error('cover')
                        is-invalid
                    @enderror">
                    @error('cover')
                        <span class="help-block">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Jumlah</label>
                    <input type="number" name="qty" class="form-control
                    @error('qty')
                        is-invalid
                    @enderror"
                    placeholder="Masukkan judul buku"
                    value="{{ $book->qty ?? old('qty') }}">
                    @error('qty')
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

@push('select2css')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
@endpush

@push('scripts')
<!-- Select2 -->
<script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
<script>
    $('.select2').select2();
</script>
@endpush
