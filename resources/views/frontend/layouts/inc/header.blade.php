<header class="header-area">
    <div class="header-top bg-2">
        <div class="fluid-container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <ul class="d-flex header-contact">
                        <li><i class="fa fa-phone"></i> +01 123 456 789</li>
                        <li><i class="fa fa-envelope"></i> youremail@gmail.com</li>
                    </ul>
                </div>
                <div class="col-md-6 col-12">
                    <ul class="d-flex account_login-area">
                        @if (Route::has('login'))
                            @auth

                                <li>
                                    <a href="javascript:void(0);"><i class="fa fa-user"></i> <span>Welcome,
                                            {{ Auth::user()->name }}
                                        </span> <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown_style">
                                        <li><a href="{{ route('profile.edit') }}">Account</a></li>
                                        <li><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();document.getElementById('logout').
                                    submit();">Logout</a>
                                            <form action="{{ route('logout') }}" method="post" id="logout">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @else
                                <li>
                                    <a href="javascript:void(0);"><i class="fa fa-user"></i> My Account <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown_style">
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                    </ul>
                                </li>
                            @endauth
                        @endif
                        {{-- <li><a href="register.html"> Login/Register </a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>

</header>
