<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body class="h-100">
    <div id="app" class="h-100">
        <b-navbar toggleable="lg" type="dark" variant="dark">
            <b-container>
                <b-navbar-brand href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </b-navbar-brand>
                <b-navbar-toggle target="navbarSupportedContent"></b-navbar-toggle>

                <b-collapse id="navbarSupportedContent" is-nav>
                    <!-- Left Side Of Navbar -->
                    <b-navbar-nav>
                       
                    </b-navbar-nav>
                    <!-- Right Side Of Navbar -->
                    <b-navbar-nav class="ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <b-nav-item href="{{ route('login') }}">
                                {{ __('Login') }}
                            </b-nav-item>
                            @if (Route::has('register'))
                                <b-nav-item href="{{ route('register') }}">
                                    {{ __('Register') }}
                                </b-nav-item>
                            @endif
                        @else
                            <b-nav-item-dropdown text="{{ Auth::user()->name }}" right>
                                <b-dropdown-item href="#"
                                    @click="logout">
                                    {{ __('Logout') }}
                                </b-dropdown-item>
                                <b-nav-form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </b-nav-form>
                            </b-nav-item-dropdown>
                        @endguest
                    </b-navbar-nav>
                </b-collapse>
            </b-container>
        </b-navbar>

        <main style="height: calc(100vh - 56px);">
            @yield('content')
        </main>
    </div>
    @yield('scripts')
</body>
</html>
