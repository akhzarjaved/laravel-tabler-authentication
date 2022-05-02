@extends('layouts.guest')

@section('title', 'Password Reset')

@section('content')
    <div class="page page-center">
        <div class="container-tight py-4">
            <div class="text-center mb-4">
                <a href="{{ url('/') }}"><img src="{{ asset('assets/static/logo.svg') }}" height="60" alt="{{ config('app.name') }}"></a>
            </div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form class="card card-md" action="{{ route('password.email') }}" method="post" autocomplete="off">
                @csrf
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Reset Password</h2>
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" name="email" required class="form-control" placeholder="Enter Email">
                        @error('email')
                        <span class="invalid-feedback" style="display: block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">{{ __('Send Password Reset Link') }}</button>
                    </div>
                </div>
            </form>
            <div class="text-center text-muted mt-3">
                Want to <a href="/login">Login</a> or <a href="/register">Sign Up</a>?
            </div>
        </div>
    </div>
@endsection
