<div class="container-fluid" style="background-color: #5b21b6;">
  <nav class="navbar navbar-expand-lg navbar-dark mb-5 container">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">BlogPost</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ ($setActiveNav === "Home") ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($setActiveNav === "Blog") ? 'active' : '' }}" href="/blog">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($setActiveNav === "Categories") ? 'active' : '' }}" href="/categories">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($setActiveNav === "About") ? 'active' : '' }}" href="/about">About</a>
            </li>
          </ul>
  
  
          <ul class="navbar-nav ms-auto">
            @auth
            
            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                Welcome, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class='dropdown-item'>Logout</button>
                  </form>
                </li>
              </ul>
            </li>
  
            @else
  
            <li class="nav-item">
              <a class="nav-link" href="/login">Login</a>
            </li>
            
            @endauth
          </ul>
        </div>
      </div>
  </nav>
</div>