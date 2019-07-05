<nav class="navbar navbar-expand-md navbar-light navbg fixed-top shadow-sm ">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
{{--            {{ config('app.name', '') }}--}}
            <img src="http://globalagra-vaishchamber.com/wp-content/uploads/2018/02/logo2-e1557846477241.png" alt="" class="img-fluid">
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
                <li class="nav-item">
                    <a class="nav-link" href="/">{{ _('Home') }}</a>
                </li>
                <li class="nav-item">
                    <a href="/listing" class="nav-link"> {{ _('Business Listing') }} </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('supporter') }}" class="nav-link"> {{ _('Supporter') }} </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}"> {{ _('About') }} </a>
                </li>

                <li class="nav-item">
                    <a href="/contact" class="nav-link">{{ _('Contact') }}</a>
                </li>
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
                            <a href="/membershipdetail" class="dropdown-item">Profile</a>
                            <a href="/listing/create" class="dropdown-item">Add Listing</a>
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
