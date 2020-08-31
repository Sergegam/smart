<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">SmatrCheetah-Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Opciones
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="dropdown-item">Cerrar Sesion</button>
            </form>
          </div>
        </li>
      </ul>
    </div>
  </nav>
