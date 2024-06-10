@extends('layouts.adminDashboard')
@section('admin')

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Courses</li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.courseList') }}">Course List</a></li>
            </ol>
            <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group" role="group" aria-label="First group">
                    <form method="GET" action="{{ route('admin.searchCourseList') }}">
                        <div class="input-group">
                          <input name="search" class="form-control" type="text" placeholder="Search course..." value="{{ request()->input('search') }}">
                          <button class="btn btn-light btn-icon" type="submit" id="button-search-addon"><i data-feather="search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="input-group">
                    <a href="{{ route('admin.courseCreate') }}" class="btn btn-primary">Add a new course</a>

                </div>
            </div>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Course List</h6>
                        <p class="text-muted mb-3"></p>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
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
                                                <a href="{{ route('admin.updateDetail', $item->id) }}" class="btn btn-outline-success">Update</a>
                                                <a href="{{ route('admin.courseDelete', $item->id) }}" class="btn btn-outline-danger" id="delete">Delete</a>
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

        