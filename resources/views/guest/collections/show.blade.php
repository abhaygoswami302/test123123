@extends('layouts.app')

@section('content')
		
    <section class="InnerBanner" style="background-image: url({{ asset('images/banner.png') }});">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
                    
					<div class="InnerBannerTxt">
						<div class="TitleMn">
							<h2>All Categories In {{ $collection->name }}</h2>
						</div>
						<!--p>Total <b>2</b> categorys | <b>2</b>  in this page</p-->
                    
                            <div class="col-xl-12 text-center">
                                <ul class="breadcrumb">
                                    <li><a class="active" href="{{ route('welcome') }}">Home</a></li>
                                    <li><a href="{{ route('collection.index') }}">collections</a></li>
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
        
            <div class="row mt-4 cstProHvr">
                    @foreach ($categories as $category)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="product">
                                <div class="imgbox">
                                    @if ($category->image == null)
                                    <img src="{{ asset('images/category_not_found.jpg') }}" >                                     
                                    @else
                                    <img src="{{ asset($category->image) }}" > 
                                    @endif
                                </div>
                                <div class="specifies">
                                    <h2> {{ $category->name }} <br> <span>category</span></h2>
                                    <div class=""> 
                                    <a href="{{ route('guest.collection.products', $category->id) }}">
                                        <button class="btn btn-primary">View All Products In {{ $category->name }}</button>
                                    </a>
                                    </div>
                                    <p>
                                    {{ substr($category->description, 0, 80) }}...
                                    </p>
                                
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
	</section>
   
@endsection
