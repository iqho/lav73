<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="Smile Shop Bangladesh">
    <meta name="keywords" content="Smile Shop">
    <meta name="author" content="Iqbal">
    <title>Smile Shop Bangladesh</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('saassets/app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
  
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('saassets/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('saassets/app-assets/vendors/css/ui/prism.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('saassets/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('saassets/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('saassets/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('saassets/app-assets/css/components.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('saassets/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('saassets/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

  </head>

  <body data-menu="vertical-menu-modern" class="vertical-layout vertical-menu-modern 2-column navbar-sticky footer-static menu-expanded">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top navbar-light navbar-shadow">
        @include('admin.layouts.topbar')
    </nav>

    <!-- BEGIN Navigation-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow expanded">
        @include('admin.layouts.sidebar')
    </div>
    <!-- END Navigation-->

    <!-- BEGIN Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>
    <!-- END Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- START FOOTER LIGHT-->
    <footer class="footer footer-static footer-light">
      @include('admin.layouts.footer')
    </footer>
    <!-- END FOOTER LIGHT-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('saassets/app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('saassets/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('saassets/app-assets/vendors/js/ui/prism.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('saassets/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('saassets/app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

  </body>
</html>