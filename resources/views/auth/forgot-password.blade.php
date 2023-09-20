@extends('layouts.guest')

@section('main-content')
    <div class="container mt-5">
        <div class="w-50 m-auto border rounded shadow p-5">
            <div>
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>
        
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
        
                <!-- Email Address -->
                <div class="mt-4">
                    <label for="email" class="form-label">
                        Email
                    </label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>
        
                <div class="mt-4">
                    <button type="submit" class="btn btn-outline-success w-100">
                        Email Password Reset Link
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
