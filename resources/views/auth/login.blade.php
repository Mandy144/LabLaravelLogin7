@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-5">
            <div class="card border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;">
                <div class="card-header text-white text-center py-4" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                    <div class="mb-3">
                        <i class="bi bi-box-arrow-in-right" style="font-size: 3rem;"></i>
                    </div>
                    <h3 class="mb-0 fw-bold">{{ __('Welcome Back') }}</h3>
                    <p class="mb-0 mt-2" style="opacity: 0.9;">{{ __('Login to your account') }}</p>
                </div>

                <div class="card-body p-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="email" class="form-label fw-semibold">
                                <i class="bi bi-envelope me-2 text-primary"></i>{{ __('Email Address') }}
                            </label>
                            <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="you@example.com" style="border-radius: 12px; border: 2px solid #e0e0e0;">

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
                            <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="••••••••" style="border-radius: 12px; border: 2px solid #e0e0e0;">

                            @error('password')
                                <div class="invalid-feedback d-flex align-items-center">
                                    <i class="bi bi-exclamation-circle me-2"></i>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="border-radius: 6px; border: 2px solid #e0e0e0;">

                                <label class="form-check-label text-muted" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-lg text-white fw-bold py-3" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none; border-radius: 12px; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);">
                                <i class="bi bi-box-arrow-in-right me-2"></i>{{ __('Login') }}
                            </button>
                        </div>

                        @if (Route::has('password.request'))
                            <div class="text-center mt-4">
                                <a class="text-decoration-none" href="{{ route('password.request') }}" style="color: #667eea; font-weight: 500;">
                                    <i class="bi bi-key me-1"></i>{{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        @endif

                        <hr class="my-4">

                        <div class="text-center">
                            <p class="text-muted mb-0">
                                {{ __("Don't have an account?") }}
                                <a href="{{ route('register') }}" class="text-decoration-none fw-semibold" style="color: #667eea;">
                                    {{ __('Sign up here') }}
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>

            <div class="text-center mt-4">
                <p class="text-muted small">
                    <i class="bi bi-shield-check me-1"></i>
                    {{ __('Your information is protected and secure') }}
                </p>
            </div>
        </div>
    </div>
</div>

<style>
.form-control:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
}

.form-check-input:checked {
    background-color: #667eea;
    border-color: #667eea;
}

.form-check-input:focus {
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

a:hover {
    text-decoration: underline !important;
}
</style>
@endsection