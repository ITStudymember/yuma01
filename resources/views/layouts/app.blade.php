<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ITStudy</title>
    @yield('link')
</head>
<body id="app-layout">
    <nav class="nav-bar">
        <div>
            <div class="logo">
                <a href="{{ url('/') }}">ITStudy</a>
            </div>
            <div>
                <ul class="nav-items-left">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/new_blog') }}">ブログを書く</a></li>
                </ul>
                <ul class="nav-items-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a>{{ Auth::user()->name }}</a>
                            <ul>
                                <li><a href="{{ url('/logout') }}">Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>
