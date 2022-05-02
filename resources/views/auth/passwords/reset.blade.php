@extends('layouts.guest')

@section('title', 'Password Reset')

@section('content')
    <div class="page page-center">
        <div class="container-tight py-4">
            <div class="text-center mb-4">
                <a href="javascript:void(0)"><img src="{{ asset('assets/static/logo.svg') }}" height="60" alt="{{ config('app.name') }}"></a>
            </div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form class="card card-md" action="{{ route('password.update') }}" method="post" autocomplete="off">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Reset Password</h2>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" name="email" required class="form-control" placeholder="Enter email" value="{{ $email ?? old('email') }}">
                        @error('email')
                        <span class="invalid-feedback" style="display: block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" required class="form-control" placeholder="Password">
                        @error('password')
                        <span class="invalid-feedback" style="display: block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" required class="form-control" placeholder="Confirm Password">
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">{{ __('Reset Password') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
