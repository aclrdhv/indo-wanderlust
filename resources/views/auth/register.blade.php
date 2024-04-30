@extends('layouts.guest')

@section('content')
<div id="auth">
    <div class="row h-100">
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">
                <!-- Konten di sini -->
            </div>
        </div>
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <h1 class="auth-title">Indo Wanderlust</h1>
                    <!-- <a href="index.html"><img src="assets/images/logo/logo.svg" alt="Logo"></a> -->
                </div>
                <h5 class="auth-title">Sign Up</h5>
                <p class="auth-subtitle mb-5">Input your data to register to our website.</p>

                <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate="">
                @csrf
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" id= "name" name= "name" 
                            class="form-control @error('name') is invalid 
                        @enderror 
                            form-control-xl" placeholder="{{ __('Name') }}" required autocomplete="name" autofocus>
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                        @error('name')
                            <small class="btn btn-danger">{{ $message }} </small>
                        @enderror
                    </div>

                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" id= "email" name= "email" 
                            class="form-control 
                        @error('email') 
                            is invalid 
                        @enderror 
                        form-control-xl" placeholder="{{ __('Email') }}" required autocomplete="email">
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        @error('email')
                            <small class="btn btn-danger">{{ $message }} </small>
                        @enderror
                    </div>

                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" id= "password" name= "password" 
                        class="form-control 
                        @error('password') 
                            is invalid 
                        @enderror 
                            form-control-xl" placeholder="{{ __('Password') }}">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        @error('password')
                            <small class="btn btn-danger">{{ $message }} </small>
                        @enderror
                    </div>
                    
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" id= "confirmpass" name= "confirmpass" class="form-control 
                        @error('confirmpass') 
                            is invalid 
                        @enderror 
                            form-control-xl" placeholder="{{ __('Confirm Password') }}">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        @error('confirmpass')
                            <small class="btn btn-danger">{{ $message }} </small>
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class='text-gray-600'>Already have an account? <a href="{{ route('login')}}" class="font-bold">Log
                            in</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
