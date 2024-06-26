@extends('layouts.adminDashboard')
@section('admin')

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">History</li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.deletedCourse') }}">Deleted Courses</a></li>
            </ol>
            <div class="col-lg-4">
                <form method="GET" action="{{ route('admin.searchDeletedCourses') }}">
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
                        <h6 class="card-title">Deleted Courses</h6>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($deletedCourse as $key => $item)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $item->courseID}}</td>
                                            <td>{{ $item->courseName}}</td>
                                            <td>{{ $item->courseCode}}</td>
                                            <td>{{ $item->description}}</td>
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

        