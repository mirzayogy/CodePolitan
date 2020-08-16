<!DOCTYPE html>
<html lang="en">
@include('frontend.templates.partials.head')
<body>
    @include('frontend.templates.partials.navigation')
    <ul class="sidenav" id="mobile-demo">
        <li><a href="#">Login</a></li>
        <li><a href="#">Register</a></li>
    </ul>

    <div class="container">
        @yield('content')
    </div>
    @include('frontend.templates.partials.scripts')
</body>
</html>
