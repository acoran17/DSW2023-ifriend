<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">iFriend</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{$router->generate('index')}}">Home</a>
        </li>
        @if(isset($_SESSION['id']))
          <li class="nav-item">
            <a class="nav-link" href="{{$router->generate('user_index')}}">Users</a>
          </li>
        @endif
      </ul>
      @if(isset($_SESSION['id']))
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Filter</button>
      </form>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="User-options" data-bs-toggle="dropdown" aria-expanded="false">
            {{$_SESSION['user']}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{$router->generate('logout')}}">Logout</a></li>
          </ul>
        </li>
      </ul>
      @else
        <form method="post" class="d-flex" role="login" action="{{$router->generate('validate')}}"
        >
          <input class="form-control me-2" type="text" placeholder="Name" aria-label="Name" id="inputName" name="inputName">
          <input class="form-control me-2" type="password" placeholder="Password" aria-label="Password" id="inputPassword" name="inputPassword">
          <button class="btn btn-outline-success" type="submit">Login</button>
        </form>
      @endif
    </div>
  </div>
</nav>