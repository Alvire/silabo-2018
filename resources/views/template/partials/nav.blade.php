<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="{{ url('semestre/create') }}">Crear Semestre</a></li>
  <li class="divider"></li>
  <li><a href="{{ url('curso/create') }}">Registrar cursos</a></li>
  <li><a href="#!">Activar cursos</a></li>
  <li class="divider"></li>
  <li><a href="{{ url('docente/create') }}">Crear Usuarios Docente</a></li>
  <li class="divider"></li>
  <li><a href="{{ url('silabo/create') }}">Crear Silabo</a></li>
</ul>

  <nav class="blue darken-3">
    <div class="nav-wrapper">
      <a href="{{ url('/') }}" class="brand-logo hide-on-med-and-down"><i class="material-icons md-light left md-48 hide-on-med-and-down">book</i>{{ $tema }}</a>

      <a href="{{ url('/') }}" class="hide-on-large-only" style="font-size: 1.8rem;">{{ $tema }}</a>

      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li class="@yield('class-li-active')"><a href="#"><i class="material-icons left">home</i>Inicio</a></li>
        <li><a href="#">Quienes somos</a></li>
        <li><a href="#">Iniciativa</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Opciones de la aplicacion<i class="material-icons right">arrow_drop_down</i></a></li>

      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li class="@yield('class-li-active')"><a href="#"><i class="material-icons left">home</i>Inicio</a></li>
        <li><a href="#">Quienes somos</a></li>
        <li><a href="#">Iniciativa</a></li>
      </ul>
    </div>
  </nav>
