<nav class="navbar navbar-expand-lg navbar-dark bg-primary py-3">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="/">Home</a>
            </li>
            
              <li class="nav-item">
                <a class="nav-link" href="/mycar">MyCar</a>
              </li>
            
          </ul>
        </div>

        @auth
        <div class="d-flex gap-4">
          <a href="/mycar/create" class="btn btn-light">add car</a>
          <div class="dropdown">
            <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              faris
            </a>

            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="profile-faris.php">Profile</a></li>
              <form action="/logout" method="post">
              @csrf
                <li><button class="dropdown-item" type="submit">Logout</button></li>
              </form>
            </ul>
          </div>
        </div>
        @endauth

        @guest
        <a href="/login" class="text-white text-decoration-none">Login</a>
        @endguest

    
          
        
      </div>
    </nav>