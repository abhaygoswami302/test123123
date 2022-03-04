@extends('layouts.app')

@section('content')
		
    <section class="InnerBanner" style="background-image: url({{ asset('images/banner.png') }});">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
                    
					<div class="InnerBannerTxt">
						<div class="TitleMn">
							<h2>Coming Soon</h2>
						</div>
						<!--p>Total <b>2</b> Collections | <b>2</b>  in this page</p-->
                    
                            <div class="col-xl-12 text-center">
                                <ul class="breadcrumb">
                                    <li><a class="active" href="{{ route('welcome') }}">Home</a></li>
                                    <li><a href="#">Coming Soon</a></li>
                                </ul> 
                            </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="Plain_First GuestGrid " style="background-image: url({{ asset('images/patteren.png') }});">
        <div class="container">
            <div class="row">
                @if (Session('message'))
                    <div class="col-sm-12">
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    </div>
                @endif
            </div>
            <div class="row cstClctTpFrm">
                <div class="ClctMnRtTp">
                    <form action="{{ route('suggestions') }}" method="POST">
                        @csrf
                        <div class="ClctMnRtTpLft">
                            <div class="search">
                                <span class="SrchHvr">
                                        <input type="email" name="email" class="SrchHdr form-control" 
                                        placeholder="Your Email" required>
                                </span>
                            </div>
                        </div>
                        <div class="ClctMnRtTpRt">
                            <div class="search">
                                <span class="SrchHvr">
                                    <input type="text" name="collection" class="SrchHdr form-control" 
                                    placeholder="Suggest New Collection" required>
                                    <button type="submit" class="SrcBtn text-white" >Send</button>
                                </span>
                            </div>
                        </div>
                    </form>

                  </div>
            </div>
        
            <div class="row mt-4">


                    <div class="col-sm-4">
                        <div class="product">
                            <div class="imgbox"> <img src="{{ asset('images/collection_not_found.jpg') }}" > </div>
                            <div class="specifies">
                                <h2> Funskool <br> <span>Collection</span></h2>
                                <div class=""> 
                                <a href="#">
                                    <button class="btn btn-primary">View All Categories/Themes In Funskool</button>
                                </a>
                                </div> <label>Description</label>
                                <!--ul>
                                    <li>10MM</li>
                                    <li>20MM</li>
                                    <li>30MM</li>
                                    <li>40MM</li>
                                    <li>50MM</li>
                                </ul> <label>Colors</label>
                                <ul class="colors">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul-->
                                <p class="py-1">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae tenetur consequuntur, omnis illo laboriosam accusamus iusto perspiciatis.
                                     culpa ipsum ea suscipit molestias quis adipisci.
                                </p>
                               
                            </div>
                        </div>
                    </div>
            </div>
        </div>
	</section>
   
@endsection
