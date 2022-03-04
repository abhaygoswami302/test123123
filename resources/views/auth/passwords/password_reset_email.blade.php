@extends('layouts.auth')

@section('content')
    
	<section class="LoginMn resetPasswordDemo">
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
            @include('partials.alert')
			<div class="LoginMnRtTtl">
				<h3>Update Password</h3>
			</div>
			<div class="LoginMnRtFrm">
              
                <form method="POST" action="{{ route('password.email.ucc.edit') }}" class="user">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="FrmRpt">
                        <input id="email" type="email" class="SrchHdr  form-control @error('email') is-invalid @enderror" name="email" 
                        value="{{ old('email', $email) }}" required autocomplete="email" placeholder="Enter Your Email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="FrmRpt">
                        <input id="password" type="password" class="SrchHdr form-control @error('password')
                        is-invalid @enderror" name="password" required autocomplete="current-password" 
                        placeholder="Enter Your New Password">

                       @error('password')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                    </div>
                    <div class="FrmRpt">
                        <input id="password" type="password" class="SrchHdr form-control @error('password')
                        is-invalid @enderror" name="password_confirmation" required autocomplete="current-password" 
                        placeholder="Confirm Password">

                       @error('password')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                    </div>
                    <div class="FrmRpt" align="center">
                        <input type="submit" class="LoginSbmt" value="Change Password" />
                    </div>
                </form>
			</div>
		</div>
	</section>

@endsection
