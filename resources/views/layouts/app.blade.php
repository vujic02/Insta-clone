<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('../css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="h-16 flex justify-between items-center bg-white shadow bg-opacity-20 drop-shadow-sm font-sans pl-16 pr-16 border-b">
                <a class="ml-4 flex items-center h-full" href="{{ url('/') }}">
                    <img class="w-32 h-12 object-cover" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Instagram_logo.svg/800px-Instagram_logo.svg.png" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                    <ul class="mr-4 flex justify-around">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item ml-2 mr-2">
                                    <a class="nav-link text-white bg-blue-500 p-1 pl-4 pr-4 rounded-md flex justify-center items-center text-base font-semibold" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item ml-2 mr-2 flex justify-center items-center">
                                    <a class="nav-link text-blue-500 text-base font-semibold" href="{{ route('register') }}">{{ __('Signup') }}</a>
                                </li>
                            @endif
                        @else

                        <li class="group inline-block relative">
                            <button class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
                                <span class="mr-1">{{Auth::user()->name}}</span>
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                            </button>
                            <ul class="group-hover:block absolute hidden text-gray-700 pt-1">
                                <li class="">
                                    <a id="navbarDropdown" class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        My Profile
                                    </a>
                                </li>
                                <li class="">
                                    <a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                                <li class="">
                                    <a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Three</a>
                                </li>
                            </ul>
                        </li>
                        @endguest
                    </ul>
        </nav>

        <main class="py-4 bg-gray-50 h-screen">
            @yield('content')
        </main>
    </div>
</body>
</html>
