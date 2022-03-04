@extends('layouts.app')

@section('content')
		
    <section class="InnerBanner" style="background-image: url({{ asset('images/banner.png') }});">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
                    
					<div class="InnerBannerTxt">
						<div class="TitleMn">
							<h2>All Collections</h2>
						</div>
						<!--p>Total <b>2</b> Collections | <b>2</b>  in this page</p-->
                    
                            <div class="col-xl-12 text-center">
                                <ul class="breadcrumb">
                                    <li><a class="active" href="{{ route('welcome') }}">Home</a></li>
                                    <li><a href="#">Collections</a></li>
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
                    @forelse ($collections as $collection)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="product">
                                <div class="imgbox">
                                    @if ($collection->image == null)
                                    <img src="{{ asset('images/collection_not_found.jpg') }}" > </div>
                                    @else
                                    <img src="{{ asset($collection->image) }}" > </div>
                                    @endif
                                <div class="specifies">
                                    <h2> {{ $collection->name }} <br> <span>Collection</span></h2>
                                    <div class=""> 
                                        @guest
                                        <a href="#">
                                            <button class="btn btn-primary">View All Categories In {{ $collection->name }}</button>
                                        </a>
                                            @else
                                        <a href="{{ route('collection.show', $collection->id) }}">
                                            <button class="btn btn-primary">View All Categories In {{ $collection->name }}</button>
                                        </a>
                                        @endguest
                                    </div> 
                                    <p>
                                        {{ substr($collection->description, 0, 80) }}...
                                    </p>    
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-xl-12 text-center">
                            <h3>No Collections Added Yet!</h3>
                        </div>
                    @endforelse
            </div>
        </div>
	</section>
   
@endsection
