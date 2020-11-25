<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @laravelPWA
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}"/>
    <title>{{ config('app.name', 'Church Administration') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.printPage.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
            integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
          integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/argon.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/css/uikit.min.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css">
    @laravelPWA
</head>

<body style="font-family: 'Montserrat', sans-serif;">
<div id="app">
    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <a class="navbar-brand uk-margin-small-right nav-link" uk-toggle="target: #offcanvas-nav" href="{{ url('/') }}">
            <span class="uk-margin-small-right" uk-icon="icon: table"></span>
            <img src="{{ asset('images/favicon.ico') }}"/>
            {{ config('app.name', 'ChurchAdmin') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                           style="position: relative; padding-left: 50px;" v-pre>
                            Quick Functions<span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @auth('admin')
                                <a class="dropdown-item" href={{ url('/members/create') }}><span
                                            class="uk-margin-small-right" uk-icon="icon: user"></span> Add Member</a>
                            @endauth
                            <a class="dropdown-item" href={{ url('/attendance/create') }}><span
                                        class="uk-margin-small-right" uk-icon="icon: gitter"></span> Add Attendance</a>
                            <a class="dropdown-item" href={{ url('/income/create') }}><span
                                        class="uk-margin-small-right" uk-icon="icon: pull"></span> Add Income</a>
                            <a class="dropdown-item" href={{ url('/expense/create') }}><span
                                        class="uk-margin-small-right" uk-icon="icon: push"></span> Add Expense</a>
                            @auth('admin')
                                <a class="dropdown-item" href={{ url('/sermons/create') }}><span
                                            class="uk-margin-small-right" uk-icon="icon: bookmark"></span> Add
                                    Sermon</a>
                                <a class="dropdown-item" href={{ url('/conferences/create') }}><span
                                            class="uk-margin-small-right" uk-icon="icon: calendar"></span> Add Event</a>
                            @endauth
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                           style="position: relative; padding-left: 50px;" v-pre>
                            <img src="/uploads/avatars/{{ Auth::user()->avatar }}"
                                 style="width: 32px; height:32px; position: absolute; top: 10px; left: 10px; border-radius: 45%">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href={{ url('/profile') }}><span class="uk-margin-small-right"
                                                                                      uk-icon="icon: user"></span> Edit
                                Profile</a>
                            {{-- <a class="dropdown-item" href="/notifications"><span class="uk-margin-small-right" uk-icon="icon: bell"></span> Notifications <span class="badge badge-pill badge-dark" >{{ count(auth()->user()->unreadNotifications) }}</span></a> --}}
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"><span
                                        class="uk-margin-small-right" uk-icon="icon: sign-out"></span>
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>

    <div id="offcanvas-nav" uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar">
            <ul class="uk-nav uk-nav-default">
                <li><a href="/home"><span class="uk-margin-small-right" uk-icon="icon: home"></span> Dashboard</a></li>
                <br>
                <li class="uk-nav-divider"></li>
                <br>
                @auth('admin')
                    <li><a href="/members"><span class="uk-margin-small-right" uk-icon="icon: users"></span> Members</a>
                    </li>
                @endauth
                <li><a href="/expense"><span class="uk-margin-small-right" uk-icon="icon: push"></span> Expenses</a>
                </li>
                <li><a href="/income"><span class="uk-margin-small-right" uk-icon="icon: pull"></span> Incomes</a></li>
                <br>
                <li class="uk-nav-divider"></li>
                <br>
                <li><a href="/sermons"><span class="uk-margin-small-right" uk-icon="icon: bookmark"></span> Bible Notes</a>
                </li>
                <li><a href="/conferences"><span class="uk-margin-small-right" uk-icon="icon: calendar"></span> Events
                        &amp; Conferences</a></li>
                <br>
                @auth('admin')
                <li class="uk-nav-divider"></li>
                    <br>
                    <li><a href="/messaging"><span class="uk-margin-small-right" uk-icon="icon: phone"></span> Messaging</a>
                    </li>
                @endauth
                <br>
                <li class="uk-nav-divider"></li>
                <br>
                {{-- <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: album"></span> Finance</a></li> --}}
                {{-- <li class="uk-parent">
                    <a href="#"><span class="uk-margin-small-right" uk-icon="icon: album"></span> Finance</a>
                    <ul class="uk-nav-sub">
                        <li><a href="/expense"><span class="uk-margin-small-right" uk-icon="icon: push"></span> Expenses</a></li>
                        <li><a href="/income"><span class="uk-margin-small-right" uk-icon="icon: pull"></span> Income</a></li>
                    </ul>
                </li> --}}
                <li><a href="/attendance"><span class="uk-margin-small-right" uk-icon="icon: gitter"></span> Attendance</a>
                </li>
                <br>
                {{-- <li class="uk-nav-divider"></li>
                <br>
                <li><a href="/insights"><span class="uk-margin-small-right" uk-icon="icon: album"></span> Insights</a></li>
                <br> --}}
                <li class="uk-nav-divider"></li>
                <br>
                <li><a href="/reports"><span class="uk-margin-small-right" uk-icon="icon: file-pdf"></span> Reports</a>
                </li>

            </ul>
        </div>
    </div>

    <main class="py-4">
        @include('inc.messages')
        @yield('content')
    </main>
</div>

<script type="text/javascript">
    // Initialize the service worker
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/serviceworker.js', {
            scope: '.'
        }).then(function (registration) {
            // Registration was successful
            console.log({{ config('app.name', 'Church Administration') }}' ServiceWorker registration successful with scope: ', registration.scope);
        }, function (err) {
            // registration failed :(
            console.log({{ config('app.name', 'Church Administration') }}' ServiceWorker registration failed: ', err);
        });
    }
</script>
<script src="{{ asset('js/argon.js') }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit-icons.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
<script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
<script src="{{ asset('assets') }}/js/core/popper.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
</body>
</html>
