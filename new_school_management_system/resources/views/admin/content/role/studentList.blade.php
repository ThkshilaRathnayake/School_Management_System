@extends('layouts.adminDashboard')
@section('admin')

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Assign Rolrs</li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.addStudentsForCourse') }}">Add Students For Courses</a></li>
            </ol>
            
        </nav>

        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Course ID</th>
                                        <th>Course Name</th>
                                        <th>Course Code</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $course->courseID}}</td>
                                        <td>{{ $course->courseName}}</td>
                                        <td>{{ $course->courseCode}}</td>
                                        <td>{{ $course->description}}</td>                                    
                                    </tr>  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Selected Students List</h6>
                        <div class="col-lg-4">
                            <form method="GET" action="#">
                                <div class="input-group">
                                  <input name="search" class="form-control" type="text" placeholder="Search student..." value="{{ request()->input('search') }}">
                                  <button class="btn btn-light btn-icon" type="submit" id="button-search-addon"><i data-feather="search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Student ID</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($selectedStudents as $key => $item)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $item->studentID}}</td>
                                            <td>{{ $item->fullName}}</td>
                                            <td>{{ $item->grade}}</td>
                                            <td>
                                                {{-- <form method="POST" action="#">
                                                    @csrf
                                                    @method('DELETE') --}}
                                                    <button type="submit" class="btn btn-outline-danger">Remove</button>
                                                {{-- </form> --}}
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

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Students List</h6>
                        <div class="col-lg-4">
                            <form method="GET" action="#">
                                <div class="input-group">
                                  <input name="search" class="form-control" type="text" placeholder="Search student..." value="{{ request()->input('search') }}">
                                  <button class="btn btn-light btn-icon" type="submit" id="button-search-addon"><i data-feather="search"></i></button>
                                </div>
                            </form>
                        </div>
                        <p class="text-muted mb-3"></p>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
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
                                                <form method="POST" action="{{ route('admin.studentStoreForCourses') }}">
                                                    @csrf
                                                    <input type="hidden" name="fullName" value="{{ $item->fullName }}">
                                                    <input type="hidden" name="studentID" value="{{ $item->studentID }}">
                                                    <input type="hidden" name="grade" value="{{ $item->grade }}">
                                                    <input type="hidden" name="courseID" value="{{ $course->courseID }}">
                                                    <input type="hidden" name="courseName" value="{{ $course->courseName }}">
                                                    <input type="hidden" name="courseCode" value="{{ $course->courseCode }}">
                                                    <button type="submit" class="btn btn-outline-success">Add</button>
                                                </form>
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