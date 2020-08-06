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
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Font Awesome --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>

    {{-- tabbed pane --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> --}}

    {{-- reCAPTCHA --}}
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    {{-- bootstrap cdn --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 

</head>
<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
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
            </div>
        </nav> --}}
        @include('inc.topDesign')
        @include('inc.navbar')
            <marquee width="100%" direction="left" height="21em" scrollamount="8" style="background-color: #fff3cd;"><a>
                <a href="https://nepalkhabar.com/politics/33931-2020-08-04-10-25-11" style="text-decoration: none; color:black;"><i class="fa fa-circle" aria-hidden="true"></i> प्रधानमन्त्रीले बोलाउनु भएको आजको बैठकमा नेपाली कांग्रेसका तर्फबाट सभापति शेरबहादुर देउवाले राख्नु भएको ७ बुंदे सुझाव र माग । </a>
                <a href="https://ekantipur.com/news/2020/07/03/159377763026095477.html"  style="text-decoration: none; color:black;"><i class="fa fa-circle" aria-hidden="true"></i> नेपाली कांग्रेस कोभिड�१९ अनुगमन समितिको श्रावण ९ गतेको पत्रकार सम्मेलनमा वितरित प्रेस विज्ञप्ति </a>
            </marquee>
        <main class="container p-4">
            <div class="row">

                <div class="col-md-3 col-sm-3">
                    <h4><strong> Quick Links</strong></h4>
                   <div class="list-group a-hover">
                    <a href="" class="list-group-item list-group-item-action d-flex"><div class="col-2 pr-0"> <i class="fa fa-search" aria-hidden="true"></i></div><div class="col-10 pl-1"> Party Constitution</div></a>
                    <a href="" class="list-group-item list-group-item-action d-flex"><div class="col-2 float-right"> <i class="fa fa-search" aria-hidden="true"></i></div><div class="col-10 pl-1"> Manifesto</div></a>
                    <a href="" class="list-group-item list-group-item-action d-flex"><div class="col-2 float-right"> <i class="fa fa-search" aria-hidden="true"></i></div><div class="col-10 pl-1"> Rules and Regulations</div></a>
                    <a href="" class="list-group-item list-group-item-action d-flex"><div class="col-2 float-right"> <i class="fa fa-search" aria-hidden="true"></i></div><div class="col-10 pl-1"> National Conventions</div></a>
                    <a href="" class="list-group-item list-group-item-action d-flex"><div class="col-2 float-right"> <i class="fa fa-search" aria-hidden="true"></i></div><div class="col-10 pl-1"> General Counsils</div></a>
                    <a href="" class="list-group-item list-group-item-action d-flex"><div class="col-2 float-right"> <i class="fa fa-search" aria-hidden="true"></i></div><div class="col-10 pl-1"> CA Election 2070</div></a>
                    <a href="" class="list-group-item list-group-item-action d-flex"><div class="col-2 float-right"> <i class="fa fa-search" aria-hidden="true"></i></div><div class="col-10 pl-1"> Central Working Committee</div></a>
                    <a href="" class="list-group-item list-group-item-action d-flex"><div class="col-2 float-right"> <i class="fa fa-search" aria-hidden="true"></i></div><div class="col-10 pl-1"> Central Departmant and Committee</div></a>
                   <a href="" class="list-group-item list-group-item-action d-flex"><div class="col-2 float-right"> <i class="fa fa-search" aria-hidden="true"></i></div><div class="col-10 pl-1"> District Presidents</div></a>
                   <a href="" class="list-group-item list-group-item-action d-flex"><div class="col-2 float-right"> <i class="fa fa-search" aria-hidden="true"></i></div><div class="col-10 pl-1"> Constituency President</div></a>
                   <a href="" class="list-group-item list-group-item-action d-flex"><div class="col-2 float-right"> <i class="fa fa-search" aria-hidden="true"></i></div><div class="col-10 pl-1"> Manifeso</div></a>
                   <a href="" class="list-group-item list-group-item-action d-flex"><div class="col-2 float-right"> <i class="fa fa-search" aria-hidden="true"></i></div><div class="col-10 pl-1"> Manifeso</div></a>
                   <a href="" class="list-group-item list-group-item-action d-flex"><div class="col-2 float-right"> <i class="fa fa-search" aria-hidden="true"></i></div><div class="col-10 pl-1"> Manifeso</div></a>
                   <a href="" class="list-group-item list-group-item-action d-flex"><div class="col-2 float-right"> <i class="fa fa-search" aria-hidden="true"></i></div><div class="col-10 pl-1"> Manifeso</div></a>
                   <a href="" class="list-group-item list-group-item-action d-flex"><div class="col-2 float-right"> <i class="fa fa-search" aria-hidden="true"></i></div><div class="col-10 pl-1"> Manifeso</div></a>
                   <a href="" class="list-group-item list-group-item-action d-flex"><div class="col-2 float-right"> <i class="fa fa-search" aria-hidden="true"></i></div><div class="col-10 pl-1"> Manifeso</div></a>
                   </div>
                </div>
                <div class="col-md-9 col-sm-9">
                    @yield('content')
                </div>
            </div>
        </main>
        @include('inc.footer')
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
