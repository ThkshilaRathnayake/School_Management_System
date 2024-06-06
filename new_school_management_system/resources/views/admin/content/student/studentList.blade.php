@extends('layouts.adminDashboard')
@section('admin')

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Students</li>
                <li class="breadcrumb-item active" aria-current="page">Students List</li>
            </ol>
            <div class="col-lg-4">
                <div class="input-group">
                  <input class="form-control" type="text" placeholder="Search mail...">
                  <button class="btn btn-light btn-icon" type="button" id="button-search-addon"><i data-feather="search"></i></button>
                </div>
            </div>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Students List</h6>
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
                                                <a href="{{ route('admin.studentProfile', $item->id) }}" class="btn btn-outline-success {{ request()->routeIs('admin.studentProfile') && request()->id == $student->id ? 'active' : '' }}">Profile</a>
                                                <a href="{{ route('admin.editStudentProfile', $item->id) }}" class="btn btn-outline-danger" id="delete">Edite</a>
                                                <a href="{{ route('admin.studentDelete', $item->id) }}" class="btn btn-outline-danger" id="delete">Delete</a>
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