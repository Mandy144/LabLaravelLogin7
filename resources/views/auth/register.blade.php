@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;">
                <div class="card-header text-white text-center py-4" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                    <div class="mb-3">
                        <i class="bi bi-person-plus-fill" style="font-size: 3rem;"></i>
                    </div>
                    <h3 class="mb-0 fw-bold">{{ __('Create Account') }}</h3>
                    <p class="mb-0 mt-2" style="opacity: 0.9;">{{ __('Join us today!') }}</p>
                </div>

                <div class="card-body p-5">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="form-label fw-semibold">
                                <i class="bi bi-person me-2 text-primary"></i>{{ __('Name') }}
                            </label>
                            <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter your full name" style="border-radius: 12px; border: 2px solid #e0e0e0;">

                            @error('name')
                                <div class="invalid-feedback d-flex align-items-center">
                                    <i class="bi bi-exclamation-circle me-2"></i>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label fw-semibold">
                                <i class="bi bi-envelope me-2 text-primary"></i>{{ __('Email Address') }}
                            </label>
                            <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="you@example.com" style="border-radius: 12px; border: 2px solid #e0e0e0;">

                            @error('email')
                                <div class="invalid-feedback d-flex align-items-center">
                                    <i class="bi bi-exclamation-circle me-2"></i>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label fw-semibold">
                                <i class="bi bi-lock me-2 text-primary"></i>{{ __('Password') }}
                            </label>
                            <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="••••••••" style="border-radius: 12px; border: 2px solid #e0e0e0;">

                            @error('password')
                                <div class="invalid-feedback d-flex align-items-center">
                                    <i class="bi bi-exclamation-circle me-2"></i>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password-confirm" class="form-label fw-semibold">
                                <i class="bi bi-shield-check me-2 text-primary"></i>{{ __('Confirm Password') }}
                            </label>
                            <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password" placeholder="••••••••" style="border-radius: 12px; border: 2px solid #e0e0e0;">
                        </div>

                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-lg text-white fw-bold py-3" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none; border-radius: 12px; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);">
                                <i class="bi bi-check-circle me-2"></i>{{ __('Register') }}
                            </button>
                        </div>

                        <div class="text-center mt-4">
                            <p class="text-muted">
                                {{ __('Already have an account?') }}
                                <a href="{{ route('login') }}" class="text-decoration-none fw-semibold" style="color: #667eea;">
                                    {{ __('Login here') }}
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.form-control:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
}

button[type="submit"]:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
}

button[type="submit"]:active {
    transform: translateY(-1px);
}
</style>
@endsection