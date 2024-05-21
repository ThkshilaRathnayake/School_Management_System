@extends('admin.adminDashboard')
@section('admin')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Courses</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Form</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Course Creation Form</h6>
                        <form class="forms-sample" method="POST" action="{{ route('admin.courseStoreData') }}">
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
    </div>
                
@endsection