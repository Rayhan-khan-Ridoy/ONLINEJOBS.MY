@extends('layouts.app') 

@section('title', 'Send OTP')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow p-5 border border-primary" style="max-width: 400px; width: 100%; border-radius: 1rem;">
        <h2 class="text-center text-primary mb-3">STEP-1</h2>
        <h5 class="text-center mb-3 ">Verify Your E-mail First !</h5>
      
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if($errors->has('email'))
            <div class="alert alert-danger">{{ $errors->first('email') }}</div>
        @endif

        <form action="{{ route('sendEmail') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="email">Enter Email Address:</label>
                <input type="email" class="form-control form-control-lg " id="email" name="email" placeholder="example@example.com" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Send OTP</button>
        </form>
    </div>
</div>
@endsection
