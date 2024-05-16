<nav>
    <div class="topnav">
        <div>
            <button id="hamburger" onclick="hamburger()"></button>
            <div id="buns"></div>
                <a href="/" class="homelink">Home</a>    
            </div>
        <form action="/search" method="get" class="searchbar">
            <input class="search" name="search" type="text" value="{{ session('search') ?? '' }}">
        </form>
        <div class="navbut">
            @if(!Auth::user())
                <form action="/login"> 
                    <button class="auth-but">Login</button>
                </form>
                <form action="/register">
                    <button class="auth-but">Register</button>
                </form>
            @endif
            <button id="theme-toggle" onclick="toggleMode()"></button>
            @auth

            <div class="dropdown">
                <button class="dropbtn">{{ Auth::user()->name }}</button>
                <div class="dropdown-content">
                    <a href="/profile">Profile</a>
                    <a href="/bookmarks">Bookmarks</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </div>
            </div>
            </div>
            @endauth
        </div>
        
    </div>
    <div id="navbar">
        <div id="nav-links">
            <x-nav-link href="/foods">Recipes</x-nav-link>
            @auth
            <x-nav-link href="/create">Add</x-nav-link>
            @endauth
            <x-nav-link href="/about">About</x-nav-link>
        </div> 
    </div>
    <div id="mobile-nav">
        <a class="mobile-a" href="/">Home</a>
        @if(!Auth::user())
            <form action="/login"> 
                <button id="auth-but">Login</button>
            </form>
            <form action="/register">
                <button id="auth-but">Register</button>
            </form>
        @endif
        @if(Auth::user())
            <a class="mobile-a" href="/profile">Profile</a>
            <a class="mobile-a" href="/bookmarks">Bookmarks</a>
        @endif
        @auth
        <form class="m-form-logout" method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
        @endauth
    </div>
</nav> 