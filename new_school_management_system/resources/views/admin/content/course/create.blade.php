<!DOCTYPE html>
 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
        <meta name="author" content="NobleUI">
        <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

        <title>Create Courses</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <!-- End fonts -->

        <!-- core:css -->
        <link rel="stylesheet" href="{{ asset('../../../assets/vendors/core/core.css') }}">
        <!-- endinject -->

        <!-- Plugin css for this page -->
        <!-- End plugin css for this page -->

        <!-- inject:css -->
        <link rel="stylesheet" href="{{ asset('../../../assets/fonts/feather-font/css/iconfont.css') }}">
        <link rel="stylesheet" href="{{ asset('../../../assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
        <!-- endinject -->

        <!-- Layout styles -->  
            <link rel="stylesheet" href="{{ asset('../../../assets/css/demo1/style.css') }}">
        <!-- End layout styles -->

        <link rel="shortcut icon" href="{{ asset('../../../assets/images/favicon.png') }}" />
    </head>
    <body>
        <div class="main-wrapper">

            <!-- partial:partials/_sidebar.html -->
                @include('admin.body.sidebar')
            <!-- partial -->

            <div class="page-wrapper">
                        
                <!-- partial:partials/_navbar.html -->
                    @include('admin.body.header')
                <!-- partial -->

                <div class="page-content">

                    <nav class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Courses</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create</li>
                        </ol>
                    </nav>

                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">

                                <h6 class="card-title">Course Creation Form</h6>

                                <form class="forms-sample" method="POST" action="{{ route('admin.storeCourse') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputUsername1" class="form-label">Course ID</label>
                                        <input type="text" class="form-control" name="courseID" id="exampleInputUsername1" autocomplete="off" placeholder="Course ID">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputUsername1" class="form-label">Course Name</label>
                                        <input type="text" class="form-control" name="courseName" id="exampleInputUsername1" autocomplete="off" placeholder="Course Name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputUsername1" class="form-label">Course Code</label>
                                        <input type="text" class="form-control" name="courseCode" id="exampleInputUsername1" autocomplete="off" placeholder="Course Code">
                                    </div>
                                    

                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    <button class="btn btn-secondary">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- partial:partials/_footer.html -->
                @include('admin.body.footer')
                <!-- partial -->
            
            </div>
        </div>

        <!-- core:js -->
        <script src="{{ asset('../../../assets/vendors/core/core.js') }}"></script>
        <!-- endinject -->

        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->

        <!-- inject:js -->
        <script src="{{ asset('../../../assets/vendors/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('../../../assets/js/template.js') }}"></script>
        <!-- endinject -->

        <!-- Custom js for this page -->
        <!-- End custom js for this page -->

    </body>
</html>
