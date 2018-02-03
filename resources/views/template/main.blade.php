<?php

    $tema='Sistema de Control de Silabo';
    $color="blue darken-4"

?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Control de Silabo')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Stilos de la pagina..
  ================================================== -->
  @include('template.partials.style')

</head>
<body>

  <header>
    @include('template.partials.nav')
  </header>

  <main>
    <div class="container">
      <!-- Contenido de la pagina..
      ================================================== -->
      @include('flash::message')
      @yield('content')
    </div>
  </main>
  <footer>
    <div>
      <!-- Footer de la pagina..
      ================================================== -->
      @include('template.partials.footer')      
    </div>
  </footer>

	<!-- Script's..
	================================================== -->
	@include('template.partials.script')

</body>
</html>