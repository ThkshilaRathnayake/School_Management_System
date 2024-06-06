
@extends('layouts.adminDashboard')
@section('admin')

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.studentList') }}">Students</a></li>
                <li class="breadcrumb-item active" aria-current="page">Student Profile</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Student Profile</h4>
                        <form class="forms-sample" method="POST" action="{{ route('admin.studentList') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="fullName" class="col-form-label">Full Name</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" maxlength="25" name="fullName" value="{{ $students->fullName }}" id="fullName" type="text" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="DOB" class="col-form-label">DOB</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" maxlength="20" name="DOB" value="{{ $students->DOB }}" id="DOB" type="text" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="gender" class="col-form-label">Gender</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" maxlength="10" name="gender" value="{{ $students->gender }}" id="gender" type="text" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="grade" class="col-form-label">Grade</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" name="grade" value="{{ $students->grade }}" id="grade" type="text" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="studentID" class="col-form-label">Student ID</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" maxlength="10" name="studentID" value="{{ $students->studentID }}" id="studentID" type="text" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="activities" class="col-form-label">Activities</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" maxlength="10" name="activities" value="{{ $students->activities }}" id="activities" type="text" readonly>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary me-2">OK</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>      

@endsection