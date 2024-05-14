<nav>
    <div class="topnav">
        <div>
            <a href="/">Home</a>
        </div>
        <form action="/search" method="get" class="searchbar">
            <input class="search" name="search" type="text">
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
    <div class="navbar">
        <div class="nav-links">
            <x-nav-link href="/foods">recipes</x-nav-link>
            @auth
            <x-nav-link href="/create">Add recipe</x-nav-link>
            @endauth
        </div> 
    </div>
</nav> 