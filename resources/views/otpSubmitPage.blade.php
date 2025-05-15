@extends('layouts.app') 

@section('title', 'Verify OTP')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow p-5 border border-primary" style="max-width: 400px; width: 100%; border-radius: 1rem;">
        <h2 class="text-center text-primary mb-3">STEP-2</h2>
        <h4 class="text-center mb-3">OTP Verification!</h4>
        <p class="text-muted text-center mb-4">
            We’ve sent a 6-digit verification code to your email. <span class="text-danger fw-bold">Kindly, check your spam folder or inbox.</span> It might take few mins. <br> Please enter it below.
        </p>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if($errors->has('otp'))
            <div class="alert alert-danger">{{ $errors->first('otp') }}</div>
        @endif

        <form action="{{ route('verify.otp') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="otp">Enter OTP:</label>
                <input type="text" class="form-control form-control-lg text-center" id="otp" name="otp" maxlength="6" placeholder="••••••" required autofocus>
            </div>

            <button type="submit" class="btn btn-primary w-100">Verify OTP</button>
        </form>

        {{-- <div class="text-center mt-3">
            <form action="{{ route('resend.otp') }}" method="POST">
                @csrf
                <button class="btn btn-link p-0">Resend OTP</button>
            </form>
        </div> --}}
    </div>
</div>
@endsection
