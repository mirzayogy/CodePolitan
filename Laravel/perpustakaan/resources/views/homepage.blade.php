@extends('frontend.templates.default')

@section('content')
    <div class="container">
        <h2>Koleksi Buku</h2>
        <blockquote>
            <p class="flow-text">Koleksi Buku yang bisa dibaca dan dipinjam</p>
        </blockquote>
        <div class="row">
            @for ($i = 0; $i < 10; $i++)
                <div class="col s12 m6">
                    <div class="card horizontal hoverable">
                        <div class="card-image">
                            <img src="https://lorempixel.com/100/190/nature/6">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.</p>
                            </div>
                            <div class="card-action">
                            <a href="#">This is a link</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
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
