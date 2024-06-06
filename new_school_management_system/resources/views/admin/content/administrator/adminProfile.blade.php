@extends('layouts.adminDashboard')
@section('admin')

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.adminList') }}">Administrators</a></li>
                <li class="breadcrumb-item active" aria-current="page">Administrator Profile</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Administrator Profile</h4>
                        <form class="forms-sample" method="POST" action="{{ route('admin.adminList') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="fullName" class="col-form-label">Full Name</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" maxlength="25" name="fullName" value="{{ $administrators->fullName }}" id="fullName" type="text" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="DOB" class="col-form-label">DOB</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" maxlength="20" name="DOB" value="{{ $administrators->DOB }}" id="DOB" type="text" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="gender" class="col-form-label">Gender</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" maxlength="10" name="gender" value="{{ $administrators->gender }}" id="gender" type="text" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="NICnumber" class="col-form-label">NIC Number</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" maxlength="10" name="NICnumber" value="{{ $administrators->NICnumber }}" id="NICnumber" type="text" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="employeeID" class="col-form-label">Employee ID</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" maxlength="10" name="employeeID" value="{{ $administrators->employeeID }}" id="employeeID" type="text" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="experience" class="col-form-label">Experience</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" maxlength="10" name="experience" value="{{ $administrators->experience }}" id="experience" type="text" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="qualifications" class="col-form-label">Qualifications</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" maxlength="10" name="qualifications" value="{{ $administrators->qualifications }}" id="qualifications" type="text" readonly>
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