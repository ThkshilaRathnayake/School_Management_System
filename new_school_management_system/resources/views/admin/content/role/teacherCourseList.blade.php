@extends('layouts.adminDashboard')
@section('admin')

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Assign Rolrs</li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.addCoursesForTeacher') }}">Add Courses For Teachers</a></li>
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
                                        <th>Employee ID</th>
                                        <th>Name</th>
                                        <th>Subject</th>
                                    </tr>
                                </thead>
                                <tbody>                
                                    <tr>
                                        <td>{{ $teacher->employeeID}}</td>
                                        <td>{{ $teacher->fullName}}</td>
                                        <td>{{ $teacher->subject}}</td>
                                    </tr>  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Course List</h6>
                        {{-- <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group" role="group" aria-label="First group">
                                <form method="GET" action="#">
                                    <div class="input-group">
                                      <input name="search" class="form-control" type="text" placeholder="Search course..." value="{{ request()->input('search') }}">
                                      <button class="btn btn-light btn-icon" type="submit" id="button-search-addon"><i data-feather="search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                        <p class="text-muted mb-3"></p>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table table-hover">
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
                                        @if (!$selectedTeachers->contains('courseID', $item->courseID))
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $item->courseID}}</td>
                                                <td>{{ $item->courseName}}</td>
                                                <td>{{ $item->courseCode}}</td>
                                                <td>{{ $item->description}}</td>
                                                <td>
                                                    <form method="POST" action="{{ route('admin.courseStoreForTeachers') }}">
                                                        @csrf
                                                        <input type="hidden" name="fullName" value="{{ $teacher->fullName }}">
                                                        <input type="hidden" name="employeeID" value="{{ $teacher->employeeID }}">
                                                        <input type="hidden" name="subject" value="{{ $teacher->subject }}">
                                                        <input type="hidden" name="courseID" value="{{ $item->courseID }}">
                                                        <input type="hidden" name="courseName" value="{{ $item->courseName }}">
                                                        <input type="hidden" name="courseCode" value="{{ $item->courseCode }}">
                                                        <button type="submit" class="btn btn-outline-success">Add</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Selected Course List</h6>
                        {{-- <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group" role="group" aria-label="First group">
                                <form method="GET" action="">
                                    <div class="input-group">
                                      <input name="search" class="form-control" type="text" placeholder="Search course..." value="{{ request()->input('search') }}">
                                      <button class="btn btn-light btn-icon" type="submit" id="button-search-addon"><i data-feather="search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Course ID</th>
                                        <th>Course Name</th>
                                        <th>Course Code</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($selectedTeachers as $key => $item)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $item->courseID}}</td>
                                            <td>{{ $item->courseName}}</td>
                                            <td>{{ $item->courseCode}}</td>
                                            <td>{{ $item->description}}</td>
                                            <td>
                                                <form method="POST" action="{{ route('admin.removeCourseFromTeacher', ['id' => $item->id]) }}">
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
    </div>
@endsection

        