<nav class="navbar navbar-expand-lg navbar-light bg-info mb-3">
    <div class="container">
      <a class="navbar-brand" href="/">BLOG LARAVEL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/posts">Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Welcome Back, {{auth()->user()->name}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">My Dashboard</a>
                      <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="nav-link px-3 bg-dark border-0">
                          <span data-feather = "log-out"></span>Logout
                        </button>
                      </form>
                  </li>
                @else
                   <li class="nav-item">
                  @if ($active != "login")
                      <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}" ><i class="bi bi-door-open"></i> Login </a>
                 @else
                      <a href="/login" class="nav-link {{ ($active === "register") ? 'active' : '' }}" ><i class="bi bi-door-open"></i> Regiser </a>
                 @endif
                   </li>
                @endauth
        </ul>
      </div>
    </div>
  </nav>
