<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Fixed top navbar example · Bootstrap v5.1</title>

    <!-- Bootstrap core CSS -->
    {{-- <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet"> --}}

<link rel="icon" type="image/png" sizes="32x32" href="{!! url('assets/images/favicon.png') !!}">
    

<!-- ADMIN LTE --> 
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{!! url('assets/plugins/fontawesome-free/css/all.min.css')!!}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{!! url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')!!}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{!! url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')!!}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{!! url('assets/plugins/jqvmap/jqvmap.min.css')!!}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{!! url('assets/dist/css/adminlte.min.css')!!}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{!! url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')!!}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{!! url('assets/plugins/daterangepicker/daterangepicker.css')!!}">
  <!-- summernote -->
  <link rel="stylesheet" href="{!! url('assets/plugins/summernote/summernote-bs4.min.css')!!}">
<!-- ADMIN LTE --> 

    
</head>
<body>
    
    @include('layouts.partials.navbar')
    @include('layouts.partials.sidebar')
    @include('layouts.partials.dashboard')
    

    <main class="container mt-5">
        @yield('content')
    </main>
{{-- 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script> --}}
    
    @section("scripts")

    @show
  </body>
</html>