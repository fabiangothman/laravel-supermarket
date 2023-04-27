<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda los compitas | Home</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <meta content="" name="Sitio web de la tienda los compitas" />
    <meta content="" name="compitas" />
    

    <!-- Fuentes Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Archivos Vendor CSS -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!--  CSS  -->
    <link href="assets/css/main.css" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('hardcoded_styles.css') }}" >
  </head>
  <body>
    <div id="app">


      <!-- ======= Header ======= -->
      <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
          <a
            href="{{ route('home') }}"
            class="logo d-flex align-items-center me-auto me-lg-0 {{ Request::routeIs('home') ? 'linkActive' : '' }}"
          >
            <!-- para añadir el logo descomente la siguiente linea, la imagen debe tener el nombre logo y tener formato png -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>{{ config('app.name') }}</h1>
          </a>

          <!-- Sección del navbar -->
          <nav id="navbar" class="navbar">
            <ul>
              <li><a href="{{ route('home') }}#home">Inicio</a></li>
              <li><a href="{{ route('home') }}#menu">Menú</a></li>
              <li><a href="{{ route('home') }}#gallery">Galeria</a></li>
              <!-- menú desplegable -->
              <li class="dropdown">
                <a href="#"
                  ><span>Vistas Mockups</span>
                  <i class="bi bi-chevron-down dropdown-indicator"></i
                ></a>
                <ul>
                  @guest
                    <li><a  href="{{ route('login') }}" class="{{ Request::routeIs('login') ? 'linkActive' : '' }}">Inicio de sesión</a></li>
                  @endguest
                  <li><a href="{{ route('list') }}">Lista Productos</a></li>
                  <li><a href="#footer">Footer</a></li>
                </ul>
              </li>
              @auth
                <li><!--  Empty  --></li>
                <li class="dropdown">
                  <a href="#"
                    ><span>Hola, {{ auth()->user()->name }}</span>
                    <i class="bi bi-chevron-down dropdown-indicator"></i
                  ></a>
                  <ul>
                    <li><a href="{{ route('welcome') }}" class="{{ Request::routeIs('welcome') ? 'linkActive' : '' }}">Bienvenida Admin</a></li>
                    <li><a href="{{ route('products.index') }}" class="{{ Request::routeIs('products.index') ? 'linkActive' : '' }}">Lista de productos</a></li>
                    <li><a href="{{ route('products.create') }}" class="{{ Request::routeIs('products.create') ? 'linkActive' : '' }}">Crear producto</a></li>
                  </ul>


                </li>
                <li>
                  <a href="{{ route('logout') }}" class="logout">Salir</a>
                </li>
              @endauth
            </ul>
          </nav>
          <!-- .navbar -->

          <!-- en el siguiente boton se redireccióna al back administrativo -->
          @guest
            <a href="{{ route('login') }}" class="btn-book-a-table {{ Request::routeIs('login') ? 'linkActive' : '' }}">
              <i class="bi bi-box-arrow-in-right"></i>
            </a>
          @endguest
          <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
          <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        </div>
      </header>
      <!-- End Header -->

      <div id="bodyContent">
