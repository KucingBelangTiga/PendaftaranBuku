<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link {{ ($title === "home") ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ ($title === "about") ? 'active' : '' }}" href="/about">about</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/dashboard">DASHBOARD</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                    @auth
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome back, {{ auth()->user()->email }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/dashboard">My dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="post" action="/logout">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                    </li>
                    @else
                    <li class="navbar-item">
                        <a href="/login" class="nav-link">Login</a>
                    </li>
                    @endauth
            </ul>
            </div>
        </div>
    </nav>