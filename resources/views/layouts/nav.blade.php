<nav class="navbar navbar-expand-md navbar-light navbar-laravel " style="background-image: linear-gradient(to right, #076585, #2a5298);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04);
        color: #ffff; height: 80px;">
            <div class="container">
                <a class="navbar-brand" href="{{route('/')}}">
                    KEGIATANBARU
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item hover">
                        <a href="{{route('home')}}" class="nav-link text-white ">{{ _('Dashboard')}}</a>
                        </li>
                        @role('admin')
                            <li class="nav-item hover">
                                <a href="{{route('data.siswa')}}" class="nav-link text-white">{{ _('Data Siswa')}}</a>
                            </li>
                            <li class="nav-item hover">
                                <a href="{{route('manage-kegiatan')}}" class="nav-link text-white">{{ _('Manage Kegiatan')}}</a>
                            </li>
                        @endrole
                        @role('bendahara')
                            <li class="nav-item hover">
                                <a href="{{route('verifikasi-pendaftaran')}}" class="nav-link text-white">{{ _('Verifikasi Pendaftaran')}}</a>
                            </li>
                        @endrole
                        @role('student')
                            <li class="nav-item hover">
                                <a href="{{route('/')}}" class="nav-link text-white">{{ _('Cek Kegiatan')}}</a>
                            </li>
                            <li class="nav-item hover">
                                <a href="{{route('activity')}}" class="nav-link text-white">{{ _('Daftar Kegiatan')}}</a>
                            </li>
                        @endrole
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
        </nav>