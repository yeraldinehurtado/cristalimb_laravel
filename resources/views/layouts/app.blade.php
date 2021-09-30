<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v3.4.0
* @link https://coreui.io
* Copyright (c) 2020 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/dashboard/assets/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <!-- Main styles for this application-->
    <link href="{{ asset('assets/dashboard/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard/css/datatables.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/dashboard/css/datatables.min.css') }}" rel="stylesheet"/>
    
    
    @yield('style')

    <script defer src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"></script>
  </head>
  <body class="c-app">
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
      <div class="c-sidebar-brand d-lg-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="{{ asset('assets/dashboard/assets/brand/coreui.svg#full')}}"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="{{ asset('assets/dashboard/assets/img/coreui.svg#signet')}}"></use>
        </svg>
      </div>
      <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/Propietarios">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="{{ asset('assets/dashboard/vendors/@coreui/icons/svg/free.svg#cil-speedometer')}}"></use>
            </svg> Propietarios</a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/Inmuebles">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="{{ asset('assets/dashboard/vendors/@coreui/icons/svg/free.svg#cil-speedometer')}}"></use>
            </svg> Inmuebles</a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/Empleados">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="{{ asset('assets/dashboard/vendors/@coreui/icons/svg/free.svg#cil-speedometer')}}"></use>
            </svg> Empleados</a></li>   
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/Citas">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="{{ asset('assets/dashboard/vendors/@coreui/icons/svg/free.svg#cil-speedometer')}}"></use>
            </svg> Citas</a></li>    
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/Inmuebles/Servicios">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="{{ asset('assets/dashboard/vendors/@coreui/icons/svg/free.svg#cil-speedometer')}}"></use>
            </svg> Servicios inmueble</a></li>    
      </ul>
      <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
    </div>
    <div class="c-wrapper c-fixed-components">
      <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
          <svg class="c-icon c-icon-lg">
            <use xlink:href="{{ asset('assets/dashboard/vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
          </svg>
        </button><a class="c-header-brand d-lg-none" href="#">
          <svg width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('assets/dashboard/assets/brand/coreui.svg#full') }}"></use>
          </svg></a>
        <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
          <svg class="c-icon c-icon-lg">
            <use xlink:href="{{ asset('assets/dashboard/vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
          </svg>
        </button>
        <ul class="c-header-nav d-md-down-none">
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="/">Inicio</a></li>
        </ul>
        <ul class="c-header-nav ml-auto mr-4">
          <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
              <svg class="c-icon">
                <use xlink:href="{{ asset('assets/dashboard/vendors/@coreui/icons/svg/free.svg#cil-bell') }}"></use>
              </svg></a></li>
          <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
              <svg class="c-icon">
                <use xlink:href="{{ asset('assets/dashboard/vendors/@coreui/icons/svg/free.svg#cil-list-rich') }}"></use>
              </svg></a></li>
          <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
              <svg class="c-icon">
                <use xlink:href="{{ asset('assets/dashboard/vendors/@coreui/icons/svg/free.svg#cil-envelope-open') }}"></use>
              </svg></a></li>
          <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <a href="{{ url('/logout') }}"> logout </a>
          </li>
        </ul>
        <div class="c-subheader px-3">
          <!-- Breadcrumb-->
          <ol class="breadcrumb border-0 m-0">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
            <!-- Breadcrumb Menu-->
          </ol>
        </div>
      </header>
      <div class="c-body">
        <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in"></div>
            @yield('body')
          </div>
        </main>
        <footer class="c-footer">
          <div><a href="https://coreui.io">CristalImb</a> © 2020 creativeLabs.</div>
          <div class="ml-auto">Powered by&nbsp;<a href="https://coreui.io/">CoreUI</a></div>
        </footer>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/dashboard/assets/vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
    <!--[if IE]><!-->
    <script src="{{ asset('assets/dashboard/assets/vendors/@coreui/icons/js/svgxuse.min.js') }}"></script>
    <!--<![endif]-->
    <script type="text/javascript" src="{{ asset('assets/dashboard/js/datatables.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/dashboard/js/datatables.min.js') }}"></script>
    
    @yield('scripts')
  </body>
</html>