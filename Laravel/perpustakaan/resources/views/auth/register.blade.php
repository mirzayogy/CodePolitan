@extends('frontend.templates.default')

@section('content')
    <div class="container">
        <h3>Register</h3>
    <form action="{{route('register')}}" class="col s12" method="POST">
        @csrf
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">person</i>
                <input type="text" class="@error('name')is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                <label for="name">Name</label>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="email" class="@error('email')is-invalid @enderror" name="email" id="email" value="{{ old('email') }}">
                <label for="email">Password Confirmation</label>
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
            <div class="input-field col s12">
                <i class="material-icons prefix">lock</i>
                <input type="password" class="@error('password_confirmation')is-invalid @enderror" id="password_confirmation" name="password_confirmation" autocomplete="new-password">
                <label for="password_confirmation">Password Confirmation</label>
                {{-- @error('password_confirmation')
                    <span class="helper-text" data-error="{{$message}}">
                    </span>
                @enderror --}}
            </div>
            <div class="input field right">
                <button type="submit" value="Register" class="waves-effect waves-light btn red accent-1">Register</button>
            </div>
        </div>
    </form>
    </div>
@endsection
