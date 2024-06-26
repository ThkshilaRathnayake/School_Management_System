@extends('layouts.adminDashboard')
@section('admin')

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.courseList') }}">Courses</a></li>
                <li class="breadcrumb-item active" aria-current="page">Update Course</li>
            </ol>
        </nav>

        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Course Update Form</h6>
                    <form class="forms-sample" method="POST" action="{{ route('admin.courseUpdate', $courses->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="defaultconfig" class="col-form-label">Course ID</label>
                            </div>
                            <div class="col-lg-8">
                                <input class="form-control" maxlength="25" name="courseID" value="{{ $courses->courseID }}" id="defaultconfig" type="text">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="defaultconfig-2" class="col-form-label">Course Name</label>
                            </div>
                            <div class="col-lg-8">
                                <input class="form-control" maxlength="20" name="courseName" value="{{ $courses->courseName }}" id="defaultconfig-2" type="text">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="defaultconfig-3" class="col-form-label">Course Code</label>
                            </div>
                            <div class="col-lg-8">
                                <input class="form-control" maxlength="10" name="courseCode" value="{{ $courses->courseCode }}" id="defaultconfig-3" type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label for="defaultconfig-4" class="col-form-label">Description</label>
                            </div>
                            <div class="col-lg-8">
                                <textarea id="maxlength-textarea" class="form-control" name="description" value="{{ $courses->description }}" id="defaultconfig-4" maxlength="100" rows="8" placeholder="This textarea has a limit of 100 chars."></textarea>
                            </div>
                       </div>
                    <!--<div class="mb-3">
                            <label for="exampleFormControlSelect2" class="form-label">Teachers</label>
                            <select multiple class="form-select" id="exampleFormControlSelect2">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect2" class="form-label">Students</label>
                            <select multiple class="form-select" id="exampleFormControlSelect2">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                            </select>
                        </div>-->

                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-secondary">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 
@endsection