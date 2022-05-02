@extends('layouts.guest')

@section('title', 'Register')

@section('content')
    <div class="page page-center">
        <div class="container-tight py-4">
            <div class="text-center mb-4">
                <a href="{{ url('/') }}"><img src="{{ asset('assets/static/logo.svg') }}" height="60" alt="{{ config('app.name') }}"></a>
            </div>
            <form class="card card-md" action="{{ route('register') }}" method="post" autocomplete="off">
                @csrf
                <div class="card-body">
                    <h2 class="card-title text-center mb-3">Create your new account</h2>

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" required class="form-control" placeholder="Name" value="{{ old('name') }}">
                        @error('name')
                        <span class="invalid-feedback" style="display: block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" required class="form-control" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                        <span class="invalid-feedback" style="display: block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input name="password" required type="password" class="form-control"  placeholder="Password"  autocomplete="off">

                        @error('password')
                        <span class="invalid-feedback" style="display: block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input name="password_confirmation" required type="password" class="form-control"  placeholder="Confirm Password"  autocomplete="off">
                    </div>

                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Register</button>
                    </div>
                </div>
            </form>
            <div class="text-center text-muted mt-3">
                Already have account? <a href="{{ route('login') }}" tabindex="-1">Sign in</a>
            </div>
        </div>
    </div>
@endsection
