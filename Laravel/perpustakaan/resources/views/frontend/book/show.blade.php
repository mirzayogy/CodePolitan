@extends('frontend.templates.default')

@section('content')
    <div class="container">
        <h2>Detail Buku</h2>
        <blockquote>
            <p class="flow-text">Keterangan lengap pada buku</p>
        </blockquote>
        <div class="row">
                <div class="col s12 m12">
                    <div class="card horizontal hoverable">
                        <div class="card-image">
                            <img src="{{ $book->getCOver() }}">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                            <h4 class="red-text accent-2">{{$book->title}}</h4>
                            <blockquote>
                                <p>{{ $book->description}}</p>
                            </blockquote>
                            </div>
                            <div class="card-action">
                                <a class="btn red accent-1 right waves-light waves-effect" href="#">Pinjam Buku</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        {{-- {{$books->render('vendor.pagination.materialize')}} --}}
    </div>
@endsection
