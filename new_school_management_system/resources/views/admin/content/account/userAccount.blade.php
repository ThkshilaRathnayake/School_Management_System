@extends('layouts.adminDashboard')
@section('admin')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">User Accounts</a></li>
            <li class="breadcrumb-item active" aria-current="page">Accounts Lists</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">New Administrators List</h6>
                    <div class="table-responsive pt-3">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Employee ID</th>
                                    <th>Full Name</th>
                                    <th>NIC Number</th>
                                    <th>Gender</th>
                                    <th>DOB</th>
                                    <th>Experience</th>
                                    <th>Qualifications</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($administrators as $key => $item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $item->employeeID}}</td>
                                        <td>{{ $item->fullName}}</td>
                                        <td>{{ $item->NICnumber}}</td>
                                        <td>{{ $item->gender}}</td>
                                        <td>{{ $item->DOB}}</td>
                                        <td>{{ $item->experience}}</td>
                                        <td>{{ $item->qualifications}}</td>
                                        <td>
                                            <form method="POST" action="{{ route('admin.storeAdminData') }}" style="display:inline;">
                                                @csrf
                                                <input type="hidden" name="register_id" value="{{ $item->register_id }}">
                                                <input type="hidden" name="fullName" value="{{ $item->fullName }}">
                                                <input type="hidden" name="DOB" value="{{ $item->DOB }}">
                                                <input type="hidden" name="gender" value="{{ $item->gender }}">
                                                <input type="hidden" name="NICnumber" value="{{ $item->NICnumber }}">
                                                <input type="hidden" name="employeeID" value="{{ $item->employeeID }}">
                                                <input type="hidden" name="experience" value="{{ $item->experience }}">
                                                <input type="hidden" name="qualifications" value="{{ $item->qualifications }}">
                                                <button type="submit" class="btn btn-primary me-2">Accept</button>
                                            </form>
                                            <form method="POST" action="{{ route('admin.newAdminDelete', $item->id) }}" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-danger me-2">Delete</button>
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
                    <h6 class="card-title">New Teachers List</h6>
                    <div class="table-responsive pt-3">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Employee ID</th>
                                    <th>Full Name</th>
                                    <th>NIC Number</th>
                                    <th>Gender</th>
                                    <th>DOB</th>
                                    <th>Subject</th>
                                    <th>Experience</th>
                                    <th>Qualifications</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teachers as $key => $item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $item->employeeID}}</td>
                                        <td>{{ $item->fullName}}</td>
                                        <td>{{ $item->NICnumber}}</td>
                                        <td>{{ $item->gender}}</td>
                                        <td>{{ $item->DOB}}</td>
                                        <td>{{ $item->subject}}</td>
                                        <td>{{ $item->experience}}</td>
                                        <td>{{ $item->qualifications}}</td>
                                        <td>
                                            <form method="POST" action="{{ route('admin.storeTeacherData') }}" style="display:inline;">
                                                @csrf
                                                <input type="hidden" name="register_id" value="{{ $item->register_id }}">
                                                <input type="hidden" name="fullName" value="{{ $item->fullName }}">
                                                <input type="hidden" name="DOB" value="{{ $item->DOB }}">
                                                <input type="hidden" name="gender" value="{{ $item->gender }}">
                                                <input type="hidden" name="subject" value="{{ $item->subject }}">
                                                <input type="hidden" name="NICnumber" value="{{ $item->NICnumber }}">
                                                <input type="hidden" name="employeeID" value="{{ $item->employeeID }}">
                                                <input type="hidden" name="experience" value="{{ $item->experience }}">
                                                <input type="hidden" name="qualifications" value="{{ $item->qualifications }}">
                                                <button type="submit" class="btn btn-primary me-2">Accept</button>
                                            </form>
                                            <form method="POST" action="{{ route('admin.newTeacherDelete', $item->id) }}" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-danger me-2">Delete</button>
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
                    <h6 class="card-title">New Students List</h6>
                    <div class="table-responsive pt-3">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Student ID</th>
                                    <th>Full Name</th>
                                    <th>Gender</th>
                                    <th>DOB</th>
                                    <th>Grade</th>
                                    <th>Activities</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $key => $item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $item->studentID}}</td>
                                        <td>{{ $item->fullName}}</td>
                                        <td>{{ $item->gender}}</td>
                                        <td>{{ $item->DOB}}</td>
                                        <td>{{ $item->grade}}</td>
                                        <td>{{ $item->activities}}</td>
                                        <td>
                                            <form method="POST" action="{{ route('admin.storeStudentData') }}" style="display:inline;">
                                                @csrf
                                                <input type="hidden" name="register_id" value="{{ $item->register_id }}">
                                                <input type="hidden" name="fullName" value="{{ $item->fullName }}">
                                                <input type="hidden" name="DOB" value="{{ $item->DOB }}">
                                                <input type="hidden" name="gender" value="{{ $item->gender }}">
                                                <input type="hidden" name="grade" value="{{ $item->grade }}">
                                                <input type="hidden" name="studentID" value="{{ $item->studentID }}">
                                                <input type="hidden" name="activities" value="{{ $item->activities }}">
                                                <button type="submit" class="btn btn-primary me-2">Accept</button>
                                            </form>
                                            <form method="POST" action="{{ route('admin.newStudentDelete', $item->id) }}" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-danger me-2">Delete</button>
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
@endsection

        