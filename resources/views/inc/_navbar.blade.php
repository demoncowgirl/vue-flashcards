<nav class="navbar-laravel navbar-static-top w-100">
    <div class="container">
        <div class="navbar-header">
          <ul>
            <a class="navbar-brand" href="{{ url('/') }}">Snakke Norsk</a>
            <div id="navbar-links" class="flex-center">
              @if (Route::has('login'))
              <div class="top-right links">
                <a href="/">Home</a>
                    @auth
                    <a href="/word">Start</a>
                    <a href="/logout">Logout</a>
                    @endauth

                    @guest
                    <a href="/login">Login</a>
                    <a href="/register">Register</a>
                    <a href="/word">Guest</a>
                    @endguest

                </div>
                @endif
            </div>
        </ul>
</nav>
