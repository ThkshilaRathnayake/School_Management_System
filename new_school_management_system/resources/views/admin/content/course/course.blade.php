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
        <link rel="stylesheet" href="{{ asset('../../../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">
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
                            <li class="breadcrumb-item active" aria-current="page">Delete</li>
                        </ol>
                    </nav>

                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h6 class="card-title">Delete Courses</h6>
                    <p class="text-muted mb-3"></p>
                    <div class="table-responsive">
                      <table id="dataTableExample" class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Course ID</th>
                            <th>Course Name</th>
                            <th>Course Code</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $key => $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->courseID}}</td>
                                    <td>{{ $item->courseName}}</td>
                                    <td>{{ $item->courseCode}}</td>
                                    <td>
                                        <button type="button" class="btn btn-success">Update</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
        <script src="{{ asset('../../../assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('../../../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
	
        <!-- End plugin js for this page -->

        <!-- inject:js -->
        <script src="{{ asset('../../../assets/vendors/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('../../../assets/js/template.js') }}"></script>
        <!-- endinject -->

        <!-- Custom js for this page -->
        <!-- End custom js for this page -->

    </body>
</html>
