@extends('frontend.templates.default')

@section('content')
    <div class="container">
        <h3>Login</h3>
    <form action="{{route('login')}}" class="col s12" method="POST">
        @csrf
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="email" class="@error('email')is-invalid @enderror" name="email" id="email" value="{{ old('email') }}">
                <label for="email">Email</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">lock</i>
                <input type="password" class="@error('password')is-invalid @enderror" id="password" name="password" autocomplete="new-password">
                <label for="password">Password</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input field right">
                <button type="submit" value="Login" class="waves-effect waves-light btn red accent-1">Login</button>
            </div>
        </div>
    </form>
    </div>
@endsection
