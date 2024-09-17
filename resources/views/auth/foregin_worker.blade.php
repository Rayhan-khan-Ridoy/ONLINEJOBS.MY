@extends('layouts.app')

<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="{{asset("site/images/icons/favicon.ico")}}"/> 
<!--===============================================================================================-->
 {{-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> --}}
<!--===============================================================================================-->
{{-- <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">  --}}
<!--===============================================================================================-->
{{-- <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css"> --}}
<!--===============================================================================================-->
{{-- <link rel="stylesheet" type="text/css" href="{{asset("vendor/animate/animate.css")}}"> --}}
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="{{asset("site/vendor/css-hamburgers/hamburgers.min.css")}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset("site/vendor/animsition/css/animsition.min.css")}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset("site/vendor/select2/select2.min.css")}}">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="{{asset("site/vendor/daterangepicker/daterangepicker.css")}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset("site/css/util.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("site/css/main.css")}}">
<!--===============================================================================================-->

@section('content')
<style>
	.text3:hover{
		color: #e05024 !important;
	}
</style>
<div class="limiter">
	<div class="container-login100" style="background-image: url('{{asset("site/images/hero_1.jpg")}}')">
		<div class="wrap-login p-l-110 p-r-110 p-t-60 p-b-33" style="margin-top: 84px;">
			<form class="login100-form validate-form flex-sb flex-w" method="" action="" aria-label="{{ __('Login') }}">
				
				<h4 style="text-align: center; margin: auto; margin-bottom: 20px;  margin-top: -20px;">
					Foregin Worker Signin
				</h4>
{{-- 
				<a href="#" class="btn-face m-b-20">
					<i class="fa fa-facebook-official"></i>
					Facebook
				</a>

				<a href="#" class="btn-google m-b-20">
					<img src="{{asset("site/images/icons/icon-google.png")}}" alt="GOOGLE">
					Google
				</a> --}}

				<div class="form-group row" style="width: 107%;">
					<div class="col-sm-12">
						<?php /*<input id="name" type="text" name="email" value="" placeholder="Username" required class="form-control" /> */?>
						<label class="form-label" for="form1Example1">Email address</label>
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror

						<input id="ltype" name="ltype" type="hidden" value="{{ request()->route()->uri }}">

					</div>
				</div>

				<div class="form-group row" style="width: 107%;">
					<div class="col-sm-12">
						<?php /*<input type="password" id="name" type="password" name="password" value="" placeholder="Password" required class="form-control" /> */?>
						<label class="form-label" for="form1Example2">Password</label>

						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
				</div>

				<div class="container-login100-form-btn m-t-10">
					<button class="login100-form-btn">
						Sign In
					</button>
				</div>

				<div class="w-full text-center p-t-55 member-sign-up">
					<div>
						<span class="txt2">
							Not a member?
						</span>

						<a href='{{route('foreign.worker.registration')}}' class="txt2 text3" style="color: blue;">
							Sign up now
						</a>
					</div>
					<div>
						<a href="forgotpassword.html" class="txt2 text3">
							Forgot your password
						</a>
					</div>
					
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
