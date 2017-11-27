<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>БЛОГ</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;<li> <a href="main">Главная</a></li>
                        <li> <a href="news">Новости</a></li>
                        <li> <a href="about">Обо мне</a></li>
                        <li> <a href="contacts">Контакты</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <!-- Логотип и название блога -->
                <div id="footer-info" class="col-sm-4 col-md-3 col-lg-2">
                    © МОЙ БЛОГ, 2017.

                </div>
                <!-- Кнопки социальных сетей -->
                <div class="col-sm-8 col-md-9 col-lg-10">
                    <div id="social-icons">
                        <a href="#" target="_blank" title="Twitter">
  <span class="fa-stack fa-lg">
    <i class="fa fa-square fa-stack-2x"></i>
    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
  </span>
                        </a>
                        <a href="#" target="_blank" title="Facebook">
  <span class="fa-stack fa-lg">
    <i class="fa fa-square fa-stack-2x"></i>
    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
  </span>
                        </a>
                        <a href="#" target="_blank" title="ВКонтакте">
  <span class="fa-stack fa-lg">
    <i class="fa fa-square fa-stack-2x"></i>
    <i class="fa fa-vk fa-stack-1x fa-inverse"></i>
  </span>
                        </a>
                        <a href="#" target="_blank" title="Одноклассники">
  <span class="fa-stack fa-lg">
    <i class="fa fa-square fa-stack-2x"></i>
    <i class="fa fa-odnoklassniki fa-stack-1x fa-inverse"></i>
  </span>
                        </a>
                        <a href="#" target="_blank" title="Google+">
  <span class="fa-stack fa-lg">
    <i class="fa fa-square fa-stack-2x"></i>
    <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
  </span>
                        </a>
                    </div>
                </div>
            </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
