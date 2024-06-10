@extends('layouts.adminDashboard')
@section('admin')

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Teachers</li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.teacherList') }}">Teachers List</a></li>
            </ol>
            <div class="col-lg-4">
                <form method="GET" action="{{ route('admin.searchTeacherList') }}">
                    <div class="input-group">
                      <input name="search" class="form-control" type="text" placeholder="Search tearch..." value="{{ request()->input('search') }}">
                      <button class="btn btn-light btn-icon" type="submit" id="button-search-addon"><i data-feather="search"></i></button>
                    </div>
                </form>
            </div>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Teachers List</h6>
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
                                                <a href="{{ route('admin.teacherProfile', $item->id) }}" class="btn btn-outline-success {{ request()->routeIs('admin.teacherProfile') && request()->id == $teacher->id ? 'active' : '' }}">Profile</a>
                                                <a href="{{ route('admin.editTeacherProfile', $item->id) }}" class="btn btn-outline-danger" id="delete">Edite</a>
                                                <a href="{{ route('admin.teacherDelete', $item->id) }}" class="btn btn-outline-danger" id="delete">Delete</a>
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