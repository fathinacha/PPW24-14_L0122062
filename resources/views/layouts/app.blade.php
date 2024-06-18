<!DOCTYPE html>
<html>
<head>
    <title>List Buku Perpustakaan</title>
</head>
<body>
    <header>
        <h1>List Buku Perpustakaan</h1>
        <nav>
            @if(Auth::check())
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endif
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
