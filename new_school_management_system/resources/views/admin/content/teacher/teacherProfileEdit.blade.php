@extends('layouts.adminDashboard')
@section('admin')

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.teacherList') }}">Teachers</a></li>
                <li class="breadcrumb-item active" aria-current="page">Teacher Profile Edit Form</li>
            </ol>
        </nav>
    
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Personal Information</h6>
                        <p class="text-muted mb-3">Administrators <code>can't change</code> the personal information of teachers</p>
                        <form class="forms-sample" method="POST" action="{{ route('admin.updateTeacherProfile', $teachers->id) }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="fullName" class="col-form-label">Full Name</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" maxlength="25" name="fullName" value="{{ $teachers->fullName }}" id="fullName" type="text" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="NICnumber" class="col-form-label">NIC Number</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" maxlength="10" name="NICnumber" value="{{ $teachers->NICnumber }}" id="NICnumber" type="text" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="gender" class="col-form-label">Gender</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" maxlength="10" name="gender" value="{{ $teachers->gender }}" id="gender" type="text" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="DOB" class="col-form-label">DOB</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" maxlength="20" name="DOB" value="{{ $teachers->DOB }}" id="DOB" type="text" readonly>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Official Information</h6>
                        <p class="text-muted mb-3">Administrators <code>can change</code> the official information of teachers</p>
                        <form class="forms-sample" method="POST" action="{{ route('admin.updateTeacherProfile', $teachers->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="employeeID" class="col-form-label">Employee ID</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" maxlength="10" name="employeeID" value="{{ $teachers->employeeID }}" id="employeeID" type="text" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="subject" class="col-form-label">Subject</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" maxlength="10" name="subject" value="{{ $teachers->subject }}" id="subject" type="text">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="experience" class="col-form-label">Experience</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" maxlength="10" name="experience" value="{{ $teachers->experience }}" id="experience" type="text">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="qualifications" class="col-form-label">Qualifications</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" maxlength="10" name="qualifications" value="{{ $teachers->qualifications }}" id="qualifications" type="text">
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-lg-3">
                                    <label for="note" class="col-form-label">Note</label>
                                </div>
                                <div class="col-lg-8">
                                    <textarea id="note" class="form-control" name="note" maxlength="100" rows="8" placeholder="This textarea has a limit of 100 chars.">{{ $teachers->note }}</textarea>
                                </div>
                            </div> --}}
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-secondary">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection