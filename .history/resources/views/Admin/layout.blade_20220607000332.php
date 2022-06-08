<?php
session_start();
define('RESOURCES', './resources/');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,900,900italic"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/main.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/app.min.css') }}">
    <link href="{{ asset('backend/assets/vendors/datatables/dataTables.bootstrap.min.css') }}">
    <!-- icheck bootstrap -->
   <link rel="stylesheet" href="public/template/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css"> 
   <!-- Theme style -->
   <link rel="stylesheet" href="/template/admin/dist/css/adminlte.min.css">
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
   <link rel="stylesheet" href="/template/admin/plugins/fontawesome-free/css/all.min.css">
    <title>@yield('title')</title>
</head>

<body class=" app sidebar-mini rtl">
    @include('admin.partials.header')
    @include('admin.partials.navbar')
    <main class="app-content">
        @yield('content')
    </main>


    <script src="{{ asset('backend/assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/pace.min.js') }}"></script>
    <script src="/template/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/template/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/template/admin/dist/js/adminlte.min.js"></script>
{{-- ----aJax------------- --}}
<script src="/template/admin/js/main.js"></script>
</body>

</html>
