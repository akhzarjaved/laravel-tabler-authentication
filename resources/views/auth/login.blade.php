@extends('layouts.guest')

@section('title', 'Login')

@section('content')
    <div class="page page-center">
        <div class="container-tight py-4">
            <div class="text-center mb-4">
                <a href="{{ url('/') }}"><img src="{{ asset('assets/static/logo.svg') }}" height="60" alt="{{ config('app.name') }}"></a>
            </div>
            <form class="card card-md" action="{{ route('login') }}" method="post" autocomplete="off">
                @csrf
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Login to your account</h2>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" name="email" required class="form-control" placeholder="Enter email">
                        @error('email')
                        <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                            Password

                            @if (Route::has('password.request'))
                                <span class="form-label-description">
                        <a tabindex="-1" href="{{ route('password.request') }}">I forgot my password</a>
                    </span>
                            @endif

                        </label>
                        <input name="password" required type="password" class="form-control"  placeholder="Password"  autocomplete="off">

                        @error('password')
                        <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                        @enderror

                    </div>
                    <div class="mb-2">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                            <span class="form-check-label">Remember me</span>
                        </label>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Sign in</button>
                    </div>
                </div>
            </form>

            <div class="text-center text-muted mt-3">
                New here? <a href="{{ route('register') }}" tabindex="-1">Sign Up</a> here
            </div>
        </div>
    </div>
@endsection
