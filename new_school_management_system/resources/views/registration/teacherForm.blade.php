@extends('layouts.guestDashboard')
@section('guest')
<div class="main-wrapper">
    <div class="page-wrapper full-page">
        <div class="page-content d-flex align-items-center justify-content-center">
            <div class="row w-100 mx-0 auth-page">
                <div class="col-md-8 col-xl-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="auth-form-wrapper px-4 py-5">
                                <a href="#" class="noble-ui-logo logo-light d-block mb-2">School<span>MANAGEMENT</span>System</a>
                                <h5 class="text-muted fw-normal mb-4">Admin Form</h5>
                                <form class="forms-sample" method="POST" action="{{ route('teacher.personalDetailsStore') }}">
                                    @csrf
                                    <input type="hidden" name="register_id" value="{{ request()->register_id }}">
                                    <div class="mb-3">
                                        <label for="fullName" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Full Name">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Date Of Birth</label>
                                        <input type="date" class="form-control" name="DOB" id="DOB" placeholder="dd/mm/yyyy"/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Gender</label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="gender" id="gender1" value="Male">
                                                <label class="form-check-label" for="gender1">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="gender" id="gender2" value="Female">
                                                <label class="form-check-label" for="gender2">Female</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="gender" id="gender3" value="Other">
                                                <label class="form-check-label" for="gender3">Other</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="subject" class="form-label">Subject</label>
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                    </div>
                                    <div class="mb-3">
                                        <label for="NICnumber" class="form-label">NIC Number</label>
                                        <input type="text" class="form-control" name="NICnumber" id="NICnumber" placeholder="NIC Number">
                                    </div>        
                                    <div class="mb-3">
                                        <label for="employeeID" class="form-label">Employee ID</label>
                                        <input type="text" class="form-control" name="employeeID" id="employeeID" placeholder="Employee ID">
                                    </div>
                                    <div class="mb-3">
                                        <label for="experience" class="form-label">Work Experience</label>
                                        <select class="form-select" name="experience" id="experience">
                                            <option selected disabled>Select Years</option>
                                            <option value="1-3">1-3</option>
                                            <option value="3-10">3-10</option>
                                            <option value="10-20">10-20</option>
                                            <option value="20-30">20-30</option>
                                            <option value="Above 30">Above 30</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="qualifications" class="form-label">Qualifications</label>
                                        <input type="text" class="form-control" name="qualifications" id="qualifications" placeholder="Qualifications">
                                    </div> 
                                    <button type="submit" class="btn btn-primary text-white me-2 mb-2 mb-md-0">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
