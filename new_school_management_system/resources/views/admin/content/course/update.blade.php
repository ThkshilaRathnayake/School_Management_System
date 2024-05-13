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
            <link rel="stylesheet" href="{{ asset('../../../assets/css/demo2/style.css') }}">
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
                            <li class="breadcrumb-item active" aria-current="page">Update</li>
                        </ol>
                    </nav>

                    <div class="col-lg-6 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Courses Update Form</h4>
								<p class="text-muted mb-3"></p>
								<div class="row mb-3">
									<div class="col-lg-3">
										<label for="defaultconfig" class="col-form-label">Add Teachers</label>
									</div>
									<div class="col-lg-8">
										<label class="form-label">Teachers</label>
									    <select class="js-example-basic-multiple form-select" multiple="multiple" data-width="100%">
										    <option value="TX">Texas</option>
									    	<option value="WY">Wyoming</option>
									    	<option value="NY">New York</option>
									    	<option value="FL">Florida</option>
									    	<option value="KN">Kansas</option>
									    	<option value="HW">Hawaii</option>
									    </select>
                                    </div>
								</div>
								<div class="row mb-3">
									<div class="col-lg-3">
										<label for="defaultconfig-2" class="col-form-label">Add Students</label>
									</div>
									<div class="col-lg-8">
										<label class="form-label">Students</label>
									    <select class="js-example-basic-multiple form-select" multiple="multiple" data-width="100%">
										    <option value="TX">Texas</option>
									    	<option value="WY">Wyoming</option>
									    	<option value="NY">New York</option>
									    	<option value="FL">Florida</option>
									    	<option value="KN">Kansas</option>
									    	<option value="HW">Hawaii</option>
									    </select>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3">
										<label for="defaultconfig-4" class="col-form-label">Description</label>
									</div>
									<div class="col-lg-8">
										<textarea id="maxlength-textarea" class="form-control" id="defaultconfig-4" maxlength="100" rows="8" placeholder="This textarea has a limit of 100 chars."></textarea>
									</div>
								</div>
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
