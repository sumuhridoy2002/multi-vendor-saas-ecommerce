@extends('ecommerce.layouts.master')

@section('title', 'Confirm Password')

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
                            <h4 class="mb-1 font-weight-bold text-primary text-center">Confirm Password</h4>
                            <p class="text-center mb-4 small text-gray-600">
                                This is a secure area of the application. Please confirm your password before continuing.
                            </p>
                            @if ($errors->any())
                                <div class="alert alert-danger py-2 px-3 small mb-3">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="POST" action="{{ route('password.confirm') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="password" class="font-weight-bold">Password</label>
                                    <input type="password" id="password" name="password"
                                           class="form-control @error('password') is-invalid @enderror"
                                           required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="d-flex justify-content-between align-items-center mt-4">
                                    <span></span>
                                    <button type="submit" class="btn btn-primary px-4">
                                        Confirm
                                    </button>
                                </div>
                            </form>
                            <div class="mt-3 text-center">
                                <span class="small text-muted">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="text-primary font-weight-bold">Forgot your password?</a>
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
