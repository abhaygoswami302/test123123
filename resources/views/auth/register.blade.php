@extends('layouts.auth')

@section('content')
	<section class="LoginMn RegistrationMn">
		<div class="LoginMnLft">
			<div class="LoginMnLftMn">
				<h3>Welcome Back</h3>
				<!--p>To keep connect with us please login with your personal info</p-->
				<div class="LgnLftBtns">
					<a href="{{ route('welcome') }}">Home</a>
					<a href="{{ route('login') }}">Login</a>
				</div>
			</div>
            <span class="LoginBgLft" style="background-image: url({{ asset('images/login_bg.png') }})"></span>

		</div>
		<div class="LoginMnRt">
			<div class="LoginMnRtTtl">
				<h3>Subscription</h3>
			</div>
			<div class="LoginMnRtFrm">
                <!--form method="POST" action="{{ route('post.register') }}" class="user" enctype="multipart/form-data" -->                
                <form method="POST" action="{{ route('paypal.createAgreement') }}" class="user" enctype="multipart/form-data" >
                    @csrf
				<div class="row">
                    @include('partials.alert')
                    
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="FrmRpt">
                                <input type="hidden" value={{ $planID }} name="planID">
                                <input type="hidden" value={{ $flag }} name="flag">
                                <input id="name" type="text" class="SrchHdr form-control @error('name') is-invalid @enderror" 
                                name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="First Name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="FrmRpt">
                                <input id="name" type="text" class="SrchHdr form-control @error('name') is-invalid @enderror" 
                                name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Last Name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="FrmRpt">
                                <input id="email" type="email" class="SrchHdr form-control @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="FrmRpt">
                                <input id="password" type="password" class="SrchHdr form-control @error('password') is-invalid @enderror"
                                name="password" required autocomplete="new-password" placeholder="Password">

                               @error('password')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="FrmRpt">
                                <input id="password-confirm" type="password" class="SrchHdr form-control" 
                                name="password_confirmation" required autocomplete="new-password" placeholder="Repeat Password">

                            </div>
                        </div>
                       
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                            Upload Image
                        </div>
                        
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="FrmRpt">
                                <input type="file" class=" @error('image') is-invalid @enderror"
                                name="image"  autocomplete="new-image" placeholder="image">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 text-center p-0">
                            <a href="{{ route('general_disclaimer') }}" target="_blank" style="color: #4400bc">
                                General Disclaimer <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 text-center p-0">
                            <a href="{{ route('privacy_policy') }}"  target="_blank" style="color: #4400bc">
                                Privacy Policy <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 text-center p-0">
                            <a href="{{ route('terms_and_conditions') }}"  target="_blank" style="color: #4400bc">
                                Terms&Conditions <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center p-0 m-0">
                            <input type="checkbox" name="" id="" required>
                            <small>I hereby agree to abide by the terms and conditions as provided in the links.</small>
                        </div>

                        <div class="col-xl-12 pt-4">
                            <div class="FrmRpt" align="center">
                                <input type="submit" class="LoginSbmt" value="Subscribe Now" />
                            </div>
                        </div>
				</div>
            </form>

            </div>
		</div>
	</section>

    @endsection