<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ isset($title) ? $title  . ' | ' : '' }} 2-SIX</title>
    <link rel="shortcut icon" type="image/x-icon" href="/img/ds.png" />
    
  <link href="{{asset('/slide/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('/slide/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/slide/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('/slide/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('/slide/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('/slide/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{asset('/slide/assets/css/style.css')}}" rel="stylesheet">  <!-- Template Main CSS File -->


  <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('/global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    
    <!-- /global stylesheets -->
    <!-- Core JS files -->
    <script src="{{asset('/global_assets/js/main/jquery.min.js')}}"></script>
    <script src="{{asset('/global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <script src="{{asset('/global_assets/js/plugins/ui/ripple.min.js')}}"></script>
    <!-- /core JS files -->
    <!-- Theme JS files -->
    <script src="{{asset('/global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
    <script src="{{asset('/global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
    <script src="{{asset('/global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
    <script src="{{asset('/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
    <script src="{{asset('/global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script src="{{asset('/global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>
    <script src="{{asset('/global_assets/js/plugins/ui/perfect_scrollbar.min.js')}}"></script>
    @include('layouts.tetes.tableau')
    <script src="{{asset('/global_assets/js/plugins/ui/prism.min.js')}}"></script>
    <script src="{{asset('/assets/js/app.js')}}"></script>
    <script src="{{asset('/global_assets/js/demo_pages/dashboard.js')}}"></script>
    <script src="{{asset('/global_assets/js/demo_pages/layout_fixed_sidebar_custom.js')}}"></script>
  <!-- Vendor CSS Files -->
      <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('/master/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('/master/plugins/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('/master/plugins/icon-kit/dist/css/iconkit.min.css')}}">
        <link rel="stylesheet" href="{{asset('/master/plugins/ionicons/dist/css/ionicons.min.css')}}">
      <link rel="stylesheet" href="{{asset('/master/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}">
      <link rel="stylesheet" href="{{asset('/master/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('/master/plugins/jvectormap/jquery-jvectormap.css')}}">
        <link rel="stylesheet" href="{{asset('/master/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css')}}">
        <link rel="stylesheet" href="{{asset('/master/plugins/weather-icons/css/weather-icons.min.css')}}">
        <link rel="stylesheet" href="{{asset('/master/plugins/c3/c3.min.css')}}">
        <link rel="stylesheet" href="{{asset('/master/plugins/owl.carousel/dist/assets/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('/master/plugins/owl.carousel/dist/assets/owl.theme.default.min.css')}}">
           <script src="{{asset('/assets/js/app.js')}}"></script>
        <link rel="stylesheet" href="{{asset('/master/dist/css/theme.min.css')}}">
        <script src="{{asset('/master/src/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body >
@include('layouts.nav1')
@yield('section')
