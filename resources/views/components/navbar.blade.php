<nav>
    <div class="navbar">
        <div class="nav-links"> 
            <x-nav-link href="/">Home</x-nav-link>
            <x-nav-link href="/create">Add recipe</x-nav-link>
        </div>
        <div class="button-div">
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
            @endauth
        </div> 
    </div>
</nav> 