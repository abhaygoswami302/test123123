@extends('layouts.users')

@section('content')
<section class="ClctMn" id="AfterSubFrm" style="background-image: url(http://localhost:8000/images/patteren.png);">
      
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="PriceData_1">
                <div class="TitleMn my-4">
                    <h2>Upgrade Plan</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row WtBg  justify-content-center">
        <div class="col-xl-8">
            <div class="ClctMnLft">
                <div class="LoginMnRtFrm">
                    <!--form method="POST" action="{{ route('user_upgradePlan.postregister') }}" class="user" enctype="multipart/form-data" -->                
                    <form method="POST" action="{{ route('upgradeplan_paypal.createAgreement') }}" class="user" enctype="multipart/form-data" >
                        @csrf
                    <div class="row">
                        @include('partials.alert')
                        
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="FrmRpt">
                                    <input type="hidden" value="{{ $flag1 }}" name="planID">
                                    <input type="hidden" value="{{ $flag2 }}" name="flag">
                                    <input type="hidden" value="{{ Auth::user()->password }}" name="password">
                                    <input id="name" type="text" class="SrchHdr form-control @error('name') is-invalid @enderror" 
                                    name="name" readonly value="{{ old('name', Auth::user()->name) }}" required autocomplete="name" placeholder="First Name" autofocus>
    
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
                                    name="name" readonly value="{{ old('name', Auth::user()->name) }}"  autocomplete="name" placeholder="Last Name" autofocus>
    
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
                                    name="email" readonly value="{{ old('email', Auth::user()->email) }}" required autocomplete="email" placeholder="Email Address">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                           
                            <!--div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
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
                            </div-->
    
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
                                    <input type="submit" class="LoginSbmt" value="Upgrade Plan" />
                                </div>
                            </div>
                    </div>
                </form>
    
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--
	<section class="LoginMn RegistrationMn">
		
		<div class="LoginMnRt">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="LoginMnRtTtl">
                            <h3>Subscription</h3>
                        </div>
                        
                    </div>
                </div>
            </div>
		</div>
	</section>
-->
    @endsection