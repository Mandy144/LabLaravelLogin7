@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show shadow-sm mb-4" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card border-0 shadow-lg">
                <div class="card-header bg-gradient text-white py-4" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                    <h3 class="mb-0 fw-bold">
                        <i class="bi bi-speedometer2 me-2"></i>{{ __('Dashboard') }}
                    </h3>
                </div>

                <div class="card-body p-5">
                    <div class="text-center mb-4">
                        <div class="avatar-circle bg-gradient mx-auto mb-3" style="width: 80px; height: 80px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-person-check text-white" style="font-size: 2.5rem;"></i>
                        </div>
                        <h4 class="fw-bold mb-2">{{ __('Welcome back!') }}</h4>
                        <p class="text-muted">{{ __('You are successfully logged in') }}</p>
                    </div>

                    <div class="row g-4 mt-4">
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm h-100 hover-card" style="transition: transform 0.3s;">
                                <div class="card-body text-center p-4">
                                    <div class="icon-box mb-3" style="width: 60px; height: 60px; background: #e3f2fd; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                        <i class="bi bi-person text-primary" style="font-size: 1.8rem;"></i>
                                    </div>
                                    <h5 class="fw-bold">Profile</h5>
                                    <p class="text-muted small">Manage your account</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm h-100 hover-card" style="transition: transform 0.3s;">
                                <div class="card-body text-center p-4">
                                    <div class="icon-box mb-3" style="width: 60px; height: 60px; background: #f3e5f5; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                        <i class="bi bi-gear text-purple" style="font-size: 1.8rem; color: #9c27b0;"></i>
                                    </div>
                                    <h5 class="fw-bold">Settings</h5>
                                    <p class="text-muted small">Customize preferences</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm h-100 hover-card" style="transition: transform 0.3s;">
                                <div class="card-body text-center p-4">
                                    <div class="icon-box mb-3" style="width: 60px; height: 60px; background: #e8f5e9; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                        <i class="bi bi-bell text-success" style="font-size: 1.8rem;"></i>
                                    </div>
                                    <h5 class="fw-bold">Notifications</h5>
                                    <p class="text-muted small">View your alerts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.hover-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15) !important;
}
</style>

@endsection