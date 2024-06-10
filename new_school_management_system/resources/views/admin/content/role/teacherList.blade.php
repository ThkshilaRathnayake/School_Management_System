@extends('layouts.adminDashboard')
@section('admin')

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Assign Rolrs</li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.addTeachersForCourse') }}">Add Teachers For Courses</a></li>
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
                        <h6 class="card-title">Selected Teachers List</h6>
                        <div class="col-lg-4">
                            <form method="GET" action="#">
                                <div class="input-group">
                                  <input name="search" class="form-control" type="text" placeholder="Search tearch..." value="{{ request()->input('search') }}">
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
                                        <th>Employee ID</th>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($selectedTeachers as $key => $item)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $item->employeeID }}</td>
                                            <td>{{ $item->fullName }}</td>
                                            <td>{{ $item->subject }}</td>
                                            <td>
                                                <form method="POST" action="#">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger">Remove</button>
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
                           

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Teachers List</h6>
                        <div class="col-lg-4">
                            <form method="GET" action="#">
                                <div class="input-group">
                                  <input name="search" class="form-control" type="text" placeholder="Search tearch..." value="{{ request()->input('search') }}">
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
                                        <th>Employee ID</th>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teachers as $key => $item)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $item->employeeID}}</td>
                                            <td>{{ $item->fullName}}</td>
                                            <td>{{ $item->subject}}</td>
                                            <td>
                                                <form method="POST" action="{{ route('admin.teacherStoreForCourses') }}">
                                                    @csrf
                                                    <input type="hidden" name="fullName" value="{{ $item->fullName }}">
                                                    <input type="hidden" name="employeeID" value="{{ $item->employeeID }}">
                                                    <input type="hidden" name="subject" value="{{ $item->subject }}">
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