<nav>
    <div class="navbar">
        <div class="nav-links"> 
            <x-nav-link href="/">Home</x-nav-link>
            <x-nav-link href="/create">Add recipe</x-nav-link>
            <x-nav-link href="login">Login</x-nav-link>
        </div>
        <div>
            <button id="theme-toggle" onclick="toggleMode()">Toggle dark mode</button>
            @auth
                <div class="dropdown">
                    <button class="dropbtn">{{ Auth::user()->name }}</button>
                    <div class="dropdown-content">
                        <a href="/profile">Profile</a>
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