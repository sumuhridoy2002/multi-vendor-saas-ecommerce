@extends('ecommerce.layouts.master')

@section('title', 'Register')

@push('css')
    <style>
        body {
            background: #f8f9fc;
        }
        .login-card {
            border-radius: 1rem;
            box-shadow: 0 0.25rem 1rem rgba(0,0,0,0.07);
        }
        .login-img {
            border-top-left-radius: 1rem;
            border-bottom-left-radius: 1rem;
            object-fit: cover;
            height: 100%;
            background-color: #ddd;
        }
    </style>
@endpush

@section('content')
<div class="container py-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-7">
            <div class="card login-card shadow-lg">
                <div class="row no-gutters">
                    <div class="col-md-5 d-none d-md-block" style="background:#f3f3fa;">
                    <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=800&auto=format&fit=crop"
                         alt="marketplace" class="login-img w-100 h-100" style="object-fit: cover; object-position: center;" />
                    </div>
                    <div class="col-md-7">
                        <div class="card-body p-5">
                            <h4 class="mb-1 font-weight-bold text-primary text-center">Create Account</h4>
                            <p class="text-center mb-4 small text-gray-600">Sign up for a new account</p>
                            @if ($errors->any())
                                <div class="alert alert-danger py-2 px-3 small mb-3">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="name" class="font-weight-bold">Name</label>
                                    <input type="text" id="name" name="name"
                                           class="form-control @error('name') is-invalid @enderror"
                                           value="{{ old('name') }}" required autofocus autocomplete="name">
                                    @error('name')
                                        <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-3">
                                    <label for="email" class="font-weight-bold">Email address</label>
                                    <input type="email" id="email" name="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           value="{{ old('email') }}" required autocomplete="username">
                                    @error('email')
                                        <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-3">
                                    <label for="password" class="font-weight-bold">Password</label>
                                    <input type="password" id="password" name="password"
                                           class="form-control @error('password') is-invalid @enderror"
                                           required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-3">
                                    <label for="password_confirmation" class="font-weight-bold">Confirm Password</label>
                                    <input type="password" id="password_confirmation" name="password_confirmation"
                                           class="form-control @error('password_confirmation') is-invalid @enderror"
                                           required autocomplete="new-password">
                                    @error('password_confirmation')
                                        <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="d-flex justify-content-between align-items-center mt-4">
                                    <span></span>
                                    <button type="submit" class="btn btn-primary px-4">
                                        Register
                                    </button>
                                </div>
                            </form>
                            <div class="mt-3 text-center">
                                <span class="small text-muted">Already have an account?
                                    @if(Route::has('login'))
                                        <a href="{{ route('login') }}" class="text-primary font-weight-bold ml-1">Login</a>
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>     
        </div>
    </div>
</div>
@endsection
