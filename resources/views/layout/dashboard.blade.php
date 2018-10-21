<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Icons -->
    <link href="/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Styles -->
    <link type="text/css" href="/assets/css/argon.min.css" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('dashboard.index') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                @auth
                    {{--<!-- Merchant -->--}}
                        {{--<li class="nav-item dropdown">--}}
                            {{--<a id="navbar-dropdown-merchant" class="nav-link dropdown-toggle" href="#" role="button"--}}
                               {{--data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                {{--{{ __('Merchant Management') }} <span class="caret"></span>--}}
                            {{--</a>--}}

                            {{--<div class="dropdown-menu" aria-labelledby="navbar-dropdown-merchant">--}}
                                {{--<a class="dropdown-item" href="{{ route('admin.merchants.index') }}">--}}
                                    {{--{{ __('Merchant List') }}--}}
                                {{--</a>--}}
                                {{--<a class="dropdown-item" href="{{ route('admin.merchants.create') }}">--}}
                                    {{--{{ __('Create Merchant') }}--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</li>--}}

                        {{--<!-- Upstream Merchant -->--}}
                        {{--<li class="nav-item dropdown">--}}
                            {{--<a id="navbar-dropdown-upstream-merchant" class="nav-link dropdown-toggle" href="#"--}}
                               {{--role="button"--}}
                               {{--data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                {{--{{ __('Upstream Merchant') }} <span class="caret"></span>--}}
                            {{--</a>--}}

                            {{--<div class="dropdown-menu" aria-labelledby="navbar-dropdown-upstream-merchant">--}}
                                {{--<a class="dropdown-item" href="{{ route('admin.upstream-merchants.index') }}">--}}
                                    {{--{{ __('Upstream Merchant List') }}--}}
                                {{--</a>--}}
                                {{--<a class="dropdown-item" href="{{ route('admin.upstream-merchants.create') }}">--}}
                                    {{--{{ __('Create Upstream Merchant') }}--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<!-- Deposit -->--}}
                        {{--<li class="nav-item dropdown">--}}
                            {{--<a id="navbar-dropdown-deposit" class="nav-link dropdown-toggle" href="#"--}}
                               {{--role="button"--}}
                               {{--data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                {{--{{ __('Deposit') }} <span class="caret"></span>--}}
                            {{--</a>--}}

                            {{--<div class="dropdown-menu" aria-labelledby="navbar-dropdown-deposit">--}}
                                {{--<a class="dropdown-item" href="{{ route('admin.deposits.index') }}">--}}
                                    {{--{{ __('Deposit List') }}--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</li>--}}

                        {{--<!-- Withdraw -->--}}
                        {{--<li class="nav-item dropdown">--}}
                            {{--<a id="navbar-dropdown-withdraw" class="nav-link dropdown-toggle" href="#"--}}
                               {{--role="button"--}}
                               {{--data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                {{--{{ __('Withdraw') }} <span class="caret"></span>--}}
                            {{--</a>--}}

                            {{--<div class="dropdown-menu" aria-labelledby="navbar-dropdown-withdraw">--}}
                                {{--<a class="dropdown-item" href="{{ route('admin.withdraws.index') }}">--}}
                                    {{--{{ __('Withdraw List') }}--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    @endauth
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard.login') }}">{{ __('Login') }}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->display_name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-dropdown-merchant">
                                <a class="dropdown-item" href="{{ route('dashboard.logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('dashboard.logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>

<!-- Core -->
<script src="/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Argon JS -->
<script src="/assets/js/argon.min.js"></script>

<!-- Custom JS -->
@yield('scripts')

</body>
</html>
