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
                            <h6>{{ Str::limit($book->title,20)}}</h6>
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

        <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>
    </div>
@endsection
