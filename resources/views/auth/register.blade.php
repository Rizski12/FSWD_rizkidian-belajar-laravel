@extends('layouts.auth')

@section('content')

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row border rounded-5 p-3 bg-white shadow box-area">
        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #41a4bf;">
            <div class="featured-image mb-3">
                <img src="{{ asset('assets/Images/login-removebg-preview.png') }}" class="img-fluid" style="width: 300px;">
            </div>
            <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Register Your Account</p>
            <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced Designers on this platform.</small>
        </div>

        <div class="col-md-6 right-box">
            <div class="row align-items-center">
                <div class="header-text">
                    <h2>Hello, New User</h2>
                    <p>We are excited to welcome you.</p>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="input-group mb-2">
                        <input type="text" id="name" name="name" class="form-control form-control-lg bg-light fs-6" placeholder="Full Name" required autofocus>
                    </div>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="input-group mb-2">
                        <input type="email" id="email" name="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email" required>
                    </div>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="input-group mb-2">
                        <input type="tel" id="phone_number" name="phone_number" class="form-control form-control-lg bg-light fs-6" placeholder="Phone Number" required>
                    </div>
                    @error('phone_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="input-group mb-2">
                        <input type="text" id="username" name="username" class="form-control form-control-lg bg-light fs-6" placeholder="Username" required>
                    </div>
                    @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-2">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input id="password" type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password (Min. 8 characters)" required>
                            <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </div>
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <div class="input-group">
                            <input id="password_confirmation" type="password" name="password_confirmation" class="form-control form-control-lg bg-light fs-6" placeholder="Masukkan Password Ulang " required>
                            <button type="button" class="btn btn-outline-secondary" id="toggleConfirmPassword">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <select id="group_id" name="group_id" class="form-select form-control-lg bg-light fs-6" required>
                            <option value="" selected disabled>Pilih Grup</option>
                            <option value="1">Super Admin</option>
                            <option value="2">User</option>
                            <option value="3">Admin Product</option>
                        </select>
                    </div>
                    @error('group_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="input-group mb-2 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="formCheck" required>
                            <label for="formCheck" class="form-check-label text-secondary"><small>Agree to Register</small></label>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-info w-100 fs-6">Register</button>
                    </div>
                </form>
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn-light w-100 fs-6"><img src="{{ asset('assets/Images/google.png') }}" style="width:20px" class="me-2"><small>Sign Up with Google</small></button>
                </div>
                <div class="row">
                    <small>Already have an account? <a href="{{ route('login') }}">Login</a></small>
                </div>
                <div id="error-message" class="alert alert-danger" style="display: none;"></div>
            </div>
        </div>
    </div>
</div>
@endsection
