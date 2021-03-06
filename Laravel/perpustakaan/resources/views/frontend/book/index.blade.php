@extends('frontend.templates.default')

@section('content')
    <div class="container">
        <h2>Koleksi Buku</h2>
        <blockquote>
            <p class="flow-text">Koleksi Buku yang bisa dibaca dan dipinjam</p>
        </blockquote>
        <div class="row">
            @foreach ($books as $book)
                <div class="col s12 m6">
                    <div class="card horizontal hoverable">
                        <div class="card-image">
                            <img src="{{ $book->getCOver() }}" height="200px">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                            <h6>
                            <a href="{{route('book.show',$book)}}">{{ Str::limit($book->title,20)}}</a>
                            </h6>
                            <p>{{ Str::limit($book->description,30)}}</p>
                            </div>
                            <div class="card-action">
                            <a href="#">Pinjam Buku</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{$books->render('vendor.pagination.materialize')}}
    </div>
@endsection
