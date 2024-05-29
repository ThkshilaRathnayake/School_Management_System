<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
        <meta name="author" content="NobleUI">
        <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

        <title>Welcome</title>

        <!-- Fonts -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <!-- End fonts -->

        <!-- core:css -->
            <link rel="stylesheet" href="{{ asset('backend/assets/vendors/core/core.css') }}">
        <!-- endinject -->

        <!-- Plugin css for this page -->
            <link rel="stylesheet" href="{{ asset('backend/assets/vendors/flatpickr/flatpickr.min.css') }}">
        <!-- End plugin css for this page -->

        <!-- inject:css -->
            <link rel="stylesheet" href="{{ asset('backend/assets/fonts/feather-font/css/iconfont.css') }}">
            <link rel="stylesheet" href="{{ asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
        <!-- endinject -->

        <!-- Layout styles -->  
            <link rel="stylesheet" href="{{ asset('backend/assets/css/demo1/style.css') }}">
        <!-- End layout styles -->

        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" />
    </head>
    <body>
        
        <!-- Page Content -->
            <div class="main-wrapper">
                <div class="page-wrapper">
                    <nav class="sidebar">
                        <div class="sidebar-header">
                            <a class="navbar-brand" href="#">
                                <img src="..." width="30" height="30" class="d-inline-block align-top" alt="">
                                Logo
                            </a>
                        </div>
                        <div class="sidebar-body">
                            
                        </div>
                    </nav>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <ul class="nav justify-content-end">
                            <a href="" type="button" class="btn btn-inverse-primary">Log in</a>
                            <a href="{{ route('registration.form') }}" type="button" class="btn btn-inverse-primary" id="delete">Register</a>
                        </ul>
                    </nav>
                    
                    
                </div>
            </div>

        <!-- End Page Content -->

        <!-- core:js -->
            <script src="{{ asset('backend/assets/vendors/core/core.js') }}"></script>
        <!-- endinject -->

        <!-- Plugin js for this page -->
            <script src="{{ asset('backend/assets/vendors/flatpickr/flatpickr.min.js') }}"></script>
            <script src="{{ asset('backend/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
        <!-- End plugin js for this page -->

        <!-- inject:js -->
            <script src="{{ asset('backend/assets/vendors/feather-icons/feather.min.js') }}"></script>
            <script src="{{ asset('backend/assets/js/template.js') }}"></script>
        <!-- endinject -->

        <!-- Custom js for this page -->
            <script src="{{ asset('backend/assets/js/dashboard-dark.js') }}"></script>
        <!-- End custom js for this page -->

    </body>
</html>    