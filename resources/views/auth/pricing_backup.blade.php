@extends('layouts.auth')

@section('content')
	
	@include('partials.guest.nav')
	
    <section class="InnerBanner" style="background-image: url({{ asset('images/banner.png') }});">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="InnerBannerTxt">
						<div class="TitleMn">
							<h2>Subscription</h2>
						</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="Plain_First" style="background-image: url({{ asset('images/patteren.png') }});">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="PriceData_1">
						<div class="TitleMn">
							<h2>Select Plan</h2>
						</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					</div>
					<div class="PriceData_2">
						<div class="row justify-content-center">
							<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="Price1">
									<h2>$20.00</h2>
									<p>Per Month</p>
									<h4>Standard</h4>
									<ul>
										<li><b>20</b> Categories</li>
										<li><b>25</b> Categories</li>
										<li><b>05</b> Categories</li>
									</ul>
									<div class="PriceBtn">
										<a href="{{ route('register', 2) }}">Sign Up</a>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="Price1 Price2">
									<h2>$80.00</h2>
									<p>Per Month</p>
									<h4>Premium</h4>
									<ul>
										<li><b>20</b> Categories</li>
										<li><b>25</b> Categories</li>
										<li><b>05</b> Categories</li>
									</ul>
									<div class="PriceBtn">
										<a href="{{ route('register', 3) }}">Sign Up</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="Plain_Second" style="background-image: url({{ asset('images/price_bg.png') }});"></section>
	@include('partials.guest.footer')

   
@endsection
