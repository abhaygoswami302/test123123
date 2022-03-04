@extends('layouts.auth')

@section('content')
    
	<section class="LoginMn resetPasswordEmail">
		<div class="LoginMnLft">
			<div class="LoginMnLftMn">
				<h3>Welcome Back</h3>
				<p>To keep connect with us please login with your personal info</p>
				<div class="LgnLftBtns">
					<a href="{{ route('welcome') }}">Home</a>
					<a href="{{ route('login') }}">Login</a>
				</div>
			</div>
            <span class="LoginBgLft" style="background-image: url({{ asset('images/login_bg.png') }})"></span>
		</div>
		<div class="LoginMnRt">
            @if (Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif
			<div class="LoginMnRtTtl">
				<h3>Forgot Password?</h3>
			</div>
			<div class="LoginMnRtFrm">
              
                <form method="POST" action="{{ route('password.email.ucc') }}" class="user">
                    @csrf
                    <div class="FrmRpt">
                        <input id="email" type="email" class="SrchHdr  form-control @error('email') is-invalid @enderror" name="email" 
                        value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Your Email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="FrmRpt" align="center">
                        <input type="submit" class="LoginSbmt" value="Send Link" />
                    </div>
                </form>
			</div>
		</div>
	</section>

@endsection
