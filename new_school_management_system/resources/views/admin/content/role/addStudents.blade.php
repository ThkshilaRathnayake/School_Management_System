@extends('layouts.adminDashboard')
@section('admin')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Assign Rolrs</li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.addStudentsForCourse') }}">Add Students For Courses</a></li>
        </ol>
        <div class="col-lg-4">
            <form method="GET" action="#">
                <div class="input-group">
                  <input name="search" class="form-control" type="text" placeholder="Search course..." value="{{ request()->input('search') }}">
                  <button class="btn btn-light btn-icon" type="submit" id="button-search-addon"><i data-feather="search"></i></button>
                </div>
            </form>
        </div>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <nav class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><h6 class="card-title">Add Students</h6></li>
                            <li class="breadcrumb-item active" aria-current="page">For Courses</li>
                        </ol>
                    </nav>
                    <div class="table-responsive pt-3">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <tr>
                                        <th>No</th>
                                            <th>Course ID</th>
                                            <th>Course Name</th>
                                            <th>Course Code</th>
                                            <th>Description</th>
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
                                            <td>{{ $item->description}}</td>
                                            <td>
                                                <a href="{{ route('admin.studentListForCourses', ['courseId' => $item->courseID]) }}" class="btn btn-outline-primary">Add Students</a>
                                            </td>
                                        </tr>  
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
