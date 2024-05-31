@extends('layouts.guestDashboard')
@section('guest')
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">
                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4 pe-md-0">
                                    <div class="auth-side-wrapper">

                                    </div>
                                </div>
                                <div class="col-md-8 ps-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        <a href="#" class="noble-ui-logo logo-light d-block mb-2">School<span>MANAGEMENT</span>System</a>
                                        <h5 class="text-muted fw-normal mb-4">Welcome back! Log in to your account.</h5>
                                        <form class="forms-sample" method="POST" action="{{ route('login.interface') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="userEmail" class="form-label">Email address</label>
                                                <input type="email" class="form-control" name="userEmail" id="userEmail" placeholder="Email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="userPassword" class="form-label">Password</label>
                                                <input type="password" class="form-control" name="userPassword" id="userPassword" autocomplete="current-password" placeholder="Password">
                                            </div>
                                            <div class="form-check mb-3">
                                                <input type="checkbox" class="form-check-input" name="authCheck" id="authCheck">
                                                <label class="form-check-label" for="authCheck">
                                                Remember me
                                                </label>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-primary text-white me-2 mb-2 mb-md-0">Login</button>
                                            </div>
                                            <a href="{{ route('registration.form') }}" class="d-block mt-3 text-muted">Not a user? Sign up</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection