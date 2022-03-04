@extends('layouts.auth')

@section('content')
    
	<section class="LoginMn LoginMnHdng">
		<div class="LoginMnLft">
			<div class="LoginMnLftMn">
				<h3>Welcome Back</h3>
				<!--p>To keep connect with us please login with your personal info</p-->
				<div class="LgnLftBtns">
					<a href="{{ route('welcome') }}" target="_blank">Home</a>
					<a href="{{ route('pricing') }}" target="_blank">Sign Up</a>
				</div>
			</div>
            <span class="LoginBgLft" style="background-image: url({{ asset('images/login_bg.png') }})"></span>
		</div>
		<div class="LoginMnRt">
			<div class="LoginMnRtTtl">
				<h3>Login</h3>
			</div>
			<div class="LoginMnRtFrm">
                @if (Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('login') }}" class="user">
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
                    <div class="FrmRpt">
                        <input id="password" type="password" class="SrchHdr form-control @error('password')
                        is-invalid @enderror" name="password" required autocomplete="current-password" 
                        placeholder="Enter Your Password">

                       @error('password')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                    </div>
                    <div class="FrmRpt">
                        <div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" id="customCheck">
                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                        </div>
                    </div>
                    <div class="FrmRpt" align="center">
                        <input type="submit" class="LoginSbmt" value="Login" />
                    </div>
                    <div class="FrmRpt" align="center">
                        <a href="{{ route('password.request') }}" class="FrgtPass">Forgot Password?</a>
                    </div>
                </form>
			</div>
		</div>
	</section>

@endsection
