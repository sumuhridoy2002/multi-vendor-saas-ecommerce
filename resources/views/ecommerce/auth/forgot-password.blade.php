@extends('ecommerce.layouts.master')

@section('title', 'Forgot Password')

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
                            <h4 class="mb-1 font-weight-bold text-primary text-center">Forgot Password?</h4>
                            <p class="text-center mb-4 small text-gray-600">
                                Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
                            </p>

                            @if (session('status'))
                                <div class="alert alert-success py-2 px-3 small mb-3">
                                    {{ session('status') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger py-2 px-3 small mb-3">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="email" class="font-weight-bold">Email address</label>
                                    <input type="email" id="email" name="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           value="{{ old('email') }}" required autofocus autocomplete="username">
                                    @error('email')
                                        <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="d-flex justify-content-between align-items-center mt-4">
                                    <span></span>
                                    <button type="submit" class="btn btn-primary px-4">
                                        Email Password Reset Link
                                    </button>
                                </div>
                            </form>
                            <div class="mt-3 text-center">
                                <span class="small text-muted">Remember your password?
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
