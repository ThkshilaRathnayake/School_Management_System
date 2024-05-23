@extends('layouts.userDashboard')

@section('user')
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
                                <form class="forms-sample" method="POST" action="{{ route('student.personalDetailsStore') }}">
                                    @csrf
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
                                        <label for="grade" class="form-label">Grade</label>
                                        <input type="text" class="form-control" name="grade" id="grade" placeholder="Grade">
                                    </div>        
                                    <div class="mb-3">
                                        <label for="studentID" class="form-label">Student ID</label>
                                        <input type="text" class="form-control" name="studentID" id="studentID" placeholder="Student ID">
                                    </div>
                                    <div class="mb-3">
                                        <label for="activities" class="form-label">Extracurricular Activities</label>
                                        <select class="form-select" name="activities[]" id="activities" multiple>
                                            <option disabled>Select Activities</option>
                                            <option value="Sports" {{ in_array('Sports', old('activities', [])) ? 'selected' : '' }}>Sports</option>
                                            <option value="Clubs and Societies" {{ in_array('Clubs and Societies', old('activities', [])) ? 'selected' : '' }}>Clubs and Societies</option>
                                            <option value="Aesthetic" {{ in_array('Aesthetic', old('activities', [])) ? 'selected' : '' }}>Aesthetic</option>
                                            <option value="Academic Competitions" {{ in_array('Academic Competitions', old('activities', [])) ? 'selected' : '' }}>Academic Competitions</option>
                                            <option value="Community Service and Leadership" {{ in_array('Community Service and Leadership', old('activities', [])) ? 'selected' : '' }}>Community Service and Leadership</option>
                                        </select>
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
