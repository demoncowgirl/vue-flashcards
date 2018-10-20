<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <!-- Brand -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Snakke Norsk') }}</a>
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>
        </div>
        <ul>
            <div id="navbar-links" class="flex-center position-ref full-height">
                {{-- @if (Route::has('login')) --}}
                <div class="top-right links">
                    {{-- @auth --}}
                    <a href="/word">Start</a>
                    <a href="/logout">Logout</a>
                    {{-- @else --}}
                    {{-- @if($route !== '/') --}}
                    <a href="/">Home</a>
                    {{-- @else --}}
                    <a href="login">Login</a>
                    <a href="register">Register</a>
                    <a href="/word">Guest</a>
                    {{-- @endif --}}
                    {{-- @endauth --}}
                </div>
                {{-- @endif --}}
            </div>
</nav>
