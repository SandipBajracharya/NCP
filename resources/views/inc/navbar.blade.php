<nav class="navbar navbar-expand-md topnav shadow-sm">
    <div class="container">
        <button class="navbar-toggler" style="background-color: #f8f9fa;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav justify-content-between mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">{{ __('Home')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/introduction">{{ __('Introduction')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/introduction">{{ __('History')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/relatedlinks">{{ __('Related Links')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('Online Gallery')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/feedback">{{ __('Feedback')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/electioncommittee">{{ __('Election Committee')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contacts">{{ __('Contacts')}}</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            {{-- <div class="col-md-2"> --}}
                {{-- @if(Auth::guard('admin')->check())
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="{{ asset('admin/dist/img/admin.jpg')}}" class="rounded-circle" alt="User Image" style="height: 1em;">
                                {{Auth::guard('admin')->user()->username}} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('dashboard.admin')}}">
                                    {{__('Dashboard')}}
                                </a>
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
                    </ul>

                @else --}}
                    {{-- <ul class="navbar-nav ml-auto">
                        @guest

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{Auth::user()->brandname}} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{url('/user/products')}}"> {{__('Dashboard')}}</a>

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
                    </ul> --}}
                {{-- @endif --}}
            {{-- </div> --}}
        </div>
    </div>
</nav>