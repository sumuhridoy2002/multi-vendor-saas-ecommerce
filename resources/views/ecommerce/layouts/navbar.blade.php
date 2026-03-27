<nav class="navbar navbar-expand-lg navbar-light bg-white shadow mb-4">
    <div class="container">
        <a class="navbar-brand font-weight-bold text-primary" href="#">
            <i class="fas fa-shopping-bag"></i> {{ config('app.name', 'ShopNow') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarEcom" aria-controls="navbarEcom" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarEcom">
            <ul class="navbar-nav mr-auto ml-4">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fas fa-home mr-1"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-th-list mr-1"></i>Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-tags mr-1"></i>Deals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-address-book mr-1"></i>Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/dashboard') }}"><i class="fas fa-tachometer-alt mr-1"></i>Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt mr-1"></i>Login</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus mr-1"></i>Register</a>
                        </li>
                        @endif
                    @endauth
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Cart (0)</a>
                </li>
            </ul>
        </div>
    </div>
</nav>