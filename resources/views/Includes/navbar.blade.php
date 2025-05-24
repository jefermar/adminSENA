<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    <!-- Logo / Marca -->
    <a class="navbar-brand fw-bold text-warning" href="{{ route('welcome.index') }}" class="btn btn-outline-dark btn-sm">Admin</a>

    <!-- Botón del menú (Responsive) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Contenido del menú -->
 <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ request()->is('area*') || request()->is('teacher*') || request()->is('trainingcenter*') || request()->is('course*') || request()->is('apprentice*') || request()->is('computer*') ? 'active' : '' }}"
             href="#" id="gestionarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tablas
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="gestionarDropdown">
            <li><a class="dropdown-item {{ request()->is('area*') ? 'active' : '' }}" href="{{ route('area.index') }}">Areas</a></li>
            <li><a class="dropdown-item {{ request()->is('teacher*') ? 'active' : '' }}" href="{{ route('teacher.index') }}">Teachers</a></li>
            <li><a class="dropdown-item {{ request()->is('trainingcenter*') ? 'active' : '' }}" href="{{ route('trainingCenter.index') }}">Training Centers</a></li>
            <li><a class="dropdown-item {{ request()->is('course*') ? 'active' : '' }}" href="{{ route('course.index') }}">Courses</a></li>
            <li><a class="dropdown-item {{ request()->is('apprentice*') ? 'active' : '' }}" href="{{ route('apprentice.index') }}">Apprentices</a></li>
            <li><a class="dropdown-item {{ request()->is('computer*') ? 'active' : '' }}" href="{{ route('computer.index') }}">Computers</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  </div>
</nav>
