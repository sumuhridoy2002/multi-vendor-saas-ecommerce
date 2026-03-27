@extends('ecommerce.layouts.master')

@section('title', 'Verify Email')

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
                            <h4 class="mb-1 font-weight-bold text-primary text-center">Verify Your Email Address</h4>
                            <p class="text-center mb-4 small text-gray-600">
                                Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
                            </p>

                            @if (session('status') == 'verification-link-sent')
                                <div class="alert alert-success py-2 px-3 small mb-3 text-center">
                                    A new verification link has been sent to the email address you provided during registration.
                                </div>
                            @endif

                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf
                                <div class="d-flex justify-content-between align-items-center mt-4">
                                    <span></span>
                                    <button type="submit" class="btn btn-primary px-4">
                                        Resend Verification Email
                                    </button>
                                </div>
                            </form>
                            <div class="mt-3 text-center">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-link font-weight-bold text-muted px-0" style="text-decoration:underline;">
                                        Log Out
                                    </button>
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
