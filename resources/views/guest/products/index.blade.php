@extends('layouts.app')

@section('content')
		
    <section class="InnerBanner" style="background-image: url({{ asset('images/banner.png') }});">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
                    
			 		<div class="InnerBannerTxt">
						<div class="TitleMn">
							<h2>All Products</h2>
						</div>
						<!--p>Total <b>2</b> products | <b>2</b>  in this page</p-->
                    
                            <div class="col-xl-12 text-center">
                                <ul class="breadcrumb">
                                    <li><a class="active" href="{{ route('welcome') }}">Home</a></li>
                                    <li><a href="{{ route('product.index') }}">Products</a></li>
                                </ul>
                                <ul class="breadcrumb">
                                    <li>Total <b>{{ $products->total() }}</b> Products | <b>{{ $products->count() }}</b> In This Page | Current Page <b> {{ $products->currentPage() }} </b> </li>    
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

            <div class="row cstProFltr">
                <div class="col-sm-12" style="font-size: 12px!important">
                    <form action="{{ route('product.filter.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-1">
                                <input type="text" wire:model.debounce.350ms="search" name="name" id="name" placeholder="Search Product Name" class="form-control">
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 p-1">
                                <select name="category_name" wire:model="category_name" class="form-control">
                                    <option value="">Category Name</option>
                                    @foreach ($categories as $categories)
                                        <option value="{{ $categories->category_name }}">{{ $categories->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 p-1">
                                <select name="series" wire:model="series" class="form-control">
                                    <option value="">Series Name</option>
                                    @foreach ($series as $s)
                                        @if ($s->series <> null)
                                        <option value="{{ $s->series }}">{{ $s->series }}</option>                                            
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 p-1">
                                <select name="casting_name" wire:model="casting_name" class="form-control">
                                    <option value="">Casting Name</option>
                                    @foreach ($casting_name as $casting)
                                        @if ($casting->casting_name <> null)
                                        <option value="{{ $casting->casting_name }}">{{ $casting->casting_name }}</option>                                            
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 p-1">
                                <select name="year" wire:model="year" class="form-control">
                                    <option value="">Select Year</option>
                                    @foreach ($year as $y)
                                        @if ($y->year <> null)
                                        <option value="{{ $y->year }}">{{ $y->year }}</option>                                            
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-1 col-lg-1 col-md-6 col-sm-12 col-12 p-1">
                                <button type="submit" class="btn btn-outline-secondary my_show_product_filter_button px-2 py-2"
                                 style="padding-top: 0%;margin-top: 0%; color:black;">Filter</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 pt-4"> 
                                @if ($requestName || $requestCategoryName || $requestSeries || $requestCastingName || $requestYear)                                                
                                    <nav aria-label="breadcrumb">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <ol class="breadcrumb">
                                                @if ($requestName)
                                                <li class="breadcrumb-item"><a href="#">{{ $requestName  }}</a></li>
                                                @endif 
                                                @if ($requestCategoryName)
                                                <li class="breadcrumb-item"><a href="#">{{ $requestCategoryName  }}</a></li>
                                                @endif 
                                                @if ($requestSeries)
                                                <li class="breadcrumb-item"><a href="#">{{ $requestSeries  }}</a></li>
                                                @endif 
                                                @if ($requestCastingName)
                                                <li class="breadcrumb-item"><a href="#">{{ $requestCastingName  }}</a></li>
                                                @endif 
                                                @if ($requestYear)
                                                <li class="breadcrumb-item"><a href="#">{{ $requestYear }}</a></li>
                                                @endif                                                
                                                </ol>
                                            </div>
                                            <div class="col-sm-3 text-right p-0 m-0">
                                                <a href="{{ route('product.index') }}">
                                                    <button class="btn btn-outline-secondary my_show_product_filter_button px-2 py-2" 
                                                    style="padding-top: 0%;margin-top: 0%; 
                                                    background:rgba(58,0,198,1);border:none">Go Back</button>
                                                </a>
                                            </div>
                                        </div>
                                    </nav>                                          
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <a href="{{ $products->previousPageUrl() }}">
                                <button class="btn btn-info" style="background:rgba(238,2,17,1);border:none; width:auto;">Previous</button>
                            </a>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <a href="{{ $products->nextPageUrl() }}" style="float: right;">
                                <button class="btn btn-info" style="background:rgba(58,0,198,1);border:none">Next</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="row mt-4 cstProHvr">
                
                    @forelse ($products as $product)
                        <div class="col-sm-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product">
                                <div class="imgbox"> 
                                    @if ($product->image1 == NULL)
                                    <img src="{{ asset('images/car_not_found.jpg') }}" alt="">
                                    @else
                                    <img src="{{ asset($product->image1) }}" >                                        
                                    @endif
                                </div>
                                <div class="specifies">
                                    <div class="row">
                                        <div class="col-sm-9 col-9">
                                            <h2> {{ $product->name }} </h2>
                                        </div>
                                           <livewire:bookmark :product="$product"/>
                                        <div class="col-sm-12">
                                                <span>Theme : {{ $product->theme == null ? 'N/A' : $product->theme }} | {{ $product->year }}</span>
                                            </h2>
                                        </div>
                                    </div>
                                    
                                    <div class=""> 
                                    <a href="{{ route('product.show', $product->id) }}">
                                        <button class="btn btn-primary">View Product </button>
                                    </a>
                                    </div> 
                                    <div class="row">
                                      
                                        @if($product->collection_name == 'Hot Toys')
                                        <div class="col-sm-3">
                                            <b><small>Series :</small></b> 
                                       </div>
                                       <div class="col-sm-9">
                                           {{ $product->series }}
                                       </div>
                                        <div class="col-sm-3">
                                            <b> <small>Category:</small></b> 
                                         </div>
                                         <div class="col-sm-9">
                                             {{ $product->category_name }}
                                         </div>
                                         @elseif($product->collection_name == 'Hot Wheels')
                                            <div class="col-sm-3">
                                                <b><small>Series :</small></b> 
                                            </div>
                                            <div class="col-sm-9">
                                                {{ $product->series }}
                                            </div>
                                            <div class="col-sm-3">
                                                <b><small> Casting:</small></b> 
                                            </div>
                                            <div class="col-sm-9">
                                                {{ $product->casting_name }}
                                            </div>
                                         @elseif($product->collection_name == 'Lego MiniFigures')
                                         <div class="col-sm-3">
                                            <b><small>Fig Num:</small></b> 
                                        </div>
                                        <div class="col-sm-9">
                                            {{ $product->lego_mf_fig_num }}
                                        </div>
                                        <div class="col-sm-3">
                                            <b><small>NumParts:</small></b> 
                                        </div>
                                        <div class="col-sm-9">
                                            {{ $product->lego_mf_num_parts }}
                                        </div>
                                         @endif
                                    </div>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-xl-12 text-center">
                            <h3>No Products Found!</h3>
                        </div>
                    @endforelse
            </div>

            <div class="col-sm-12">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <a href="{{ $products->previousPageUrl() }}">
                                <button class="btn btn-info" style="background:rgba(238,2,17,1);border:none; width:auto;">Previous</button>
                            </a>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <a href="{{ $products->nextPageUrl() }}" style="float: right;">
                                <button class="btn btn-info" style="background:rgba(58,0,198,1);border:none">Next</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</section>
   
@endsection
