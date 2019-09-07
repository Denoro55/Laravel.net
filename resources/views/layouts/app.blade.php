<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('libs/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        
    <header class="section-header">
        <div class="container">
            <div class="header">
                <div class="header__left">
                    <div class="header-user">
                        <div style="background-image: url(https://cs10.pikabu.ru/post_img/big/2018/11/03/2/1541206297198512579.jpg)"
                        class="header-user__logo header-user-logo"></div>
                        @guest
                            <a href="/" class="header-user-name">Гость</a>
                        @else
                            <a href="/" class="header-user-name">{{ Auth::user()->name }}</a>
                        @endguest
                    </div>
                </div>
                <div class="header__right">
                <div class="header__buttons">
                    @guest
                        <div class="header__button">
                            <a href="{{route('login')}}" class="btn btn-primary">Войти</a>
                        </div>
                        <div class="header__button">
                            <a href="{{route('register')}}" class="btn btn-success">Регистрация</a>
                        </div>
                    @else
                        <div class="header__button">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" class="btn btn-danger">Выход</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    @endguest
                    </div>
                </div>
            </div>
        </div>
    </header>

        <main >
            @yield('content')
        </main>
    </div>
</body>
</html>
