@extends('layouts.adminDashboard')
@section('admin')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Assign Rolrs</li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.addCoursesForStudent') }}">Add Courses For Students</a></li>
        </ol>
        <div class="col-lg-4">
            <form method="GET" action="{{ route('admin.searchStudentForCourse') }}">
                <div class="input-group">
                  <input name="search" class="form-control" type="text" placeholder="Search student..." value="{{ request()->input('search') }}">
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
                            <li class="breadcrumb-item"><h6 class="card-title">Add Courses</h6></li>
                            <li class="breadcrumb-item active" aria-current="page">For Students</li>
                        </ol>
                    </nav>
                    <div class="table-responsive pt-3">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <tr>
                                        <th>No</th>
                                            <th>Student ID</th>
                                            <th>Name</th>
                                            <th>Grade</th>
                                            <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $key => $item)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $item->studentID}}</td>
                                            <td>{{ $item->fullName}}</td>
                                            <td>{{ $item->grade}}</td>
                                            <td>
                                                <a href="{{ route('admin.coursesListForStudent', ['studentID' => $item->studentID]) }}" class="btn btn-outline-primary">Add Courses</a>
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
