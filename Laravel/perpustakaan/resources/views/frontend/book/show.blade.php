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
                        <img src="{{ $book->getCOver() }}">
                        <div class="card-stacked">
                            <div class="card-content">
                            <h4 class="red-text accent-2">{{$book->title}}</h4>
                            <blockquote>
                                <p>{{ $book->description}}</p>
                            </blockquote>
                            <p>
                                <i class="material-icons">person</i> : {{$book->author->name}}
                            </p>
                            <p>
                                <i class="material-icons">book</i> : {{$book->qty}}
                            </p>
                            </div>
                            <div class="card-action">
                                <form action="{{route('book.borrow',$book)}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn red accent-1 right waves-light waves-effect">Pinjam Buku</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <div class="container">
        <h5>Buku lainnya dari penulis {{$book->author->name}}</h5>
        <div class="row">
            @foreach ($book->author->books->shuffle()->take(4) as $book)
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
    </div>
@endsection
