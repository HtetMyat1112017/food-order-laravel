<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('adminDashboard/fontawesome-free/css/all.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminDashboard/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!--start Navbar -->
   @include('Admin_Dashboard.Include.navbar')
    <!--end navbar -->

    <!--start Main Sidebar Container -->
   @include('Admin_Dashboard.Include.leftsidebar')
    <!-- end Main Sidebar Container-->

    <!--start Content Wrapper. Contains page content -->
   @include('Admin_Dashboard.Include.content')
    <!-- end content-wrapper -->
    @include('Admin_Dashboard.Include.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('adminDashboard/Jquery/Jquery.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('bootstrap-4/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminDashboard/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
