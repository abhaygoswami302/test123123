@extends('layouts.app')

@section('content')
		
    <section class="InnerBanner" style="background-image: url({{ asset('images/banner.png') }});">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
                    
					<div class="InnerBannerTxt">
						<div class="TitleMn">
                            <h2>{{ $category->name }}</h2>
						</div>
						<!--p>Total <b>2</b> Collections | <b>2</b>  in this page</p-->
                    
                            <div class="col-xl-12 text-center">
                                <ul class="breadcrumb">
                                    <li><a class="active" href="{{ route('welcome') }}">Home</a></li>
                                    <li><a class="active" href="{{ route('category.index') }}">Categories</a></li>
                                    <li><a href="#">{{ $category->name }}</a></li>
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

            <div class="row">
                <div class="col-sm-12">
                    @if ($category->description <> null & $category->description <> 'N/A')
                    {{ substr($category->description, 0, 350) }}...
                    @endif
                </div>
            </div>

            <div class="row py-4">
                @foreach ($subseries123 as $year => $subseries)
                    <div class="col-sm-12">
                        <div class="YearLst">
                            <h4 class="">
                                <a href="#{{ $year }}">{{ $year }}</a>
                            </h4>
                        </div>
                    </div>  
                    <div class="col-sm-12 py-2">
                        <div class="row">
                        @foreach ($subseries as $s1)    
                            <div class="col-sm-4">
                                <div class="YrLstAll">
                                    <h6>
                                        <a href="#{{ $s1->name }}_{{ $s1->id }}">
                                            {{ $s1->name }}
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        @endforeach
                        </div>                     
                    </div> 
                @endforeach
            </div>

            <div class="row mt-4 cstProHvr">
                @forelse ($subseries123 as $year => $subseries)
                <div class="col-sm-12" id="{{ $year }}">
                    <div class="TitleMn" align="left" style="margin-bottom:10px">
                        <h4>{{ $year }}</h4>
                    </div>
                </div>
                @foreach ($subseries as $s1)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="product" id="{{ $s1->name }}_{{ $s1->id }}">
                            <div class="imgbox"> <img src="{{ asset('images/car_not_found.jpg') }}" > </div>
                            <!--div class="specifies">
                                <h2> {{ $s1->name }} <br> <span>{{ $s1->series }}</span></h2>
                                <div class=""> 
                                <a href="{{ route('product.show', $s1->id) }}">
                                    <button class="btn btn-primary">View Product</button>
                                </a>
                                </div> 
                                <div class="row">
                                    <div class="col-sm-5">
                                         <b>Color: </b>{{ $s1->colour }}
                                    </div>
                                    <div class="col-sm-5">
                                     <b>  Casting:</b> {{ $s1->casting_name }}
                                    </div>
                                    <div class="col-sm-2">
                                        {{ $s1->year }}
                                    </div>  
                                </div>
                            <p></p>
                            
                            </div-->
                            <div class="specifies">
                                <div class="row">
                                    <div class="col-sm-9 col-9">
                                        <h2> {{ $s1->name }} </h2>
                                    </div>
                                       <livewire:bookmark :product="$s1"/>
                                    <div class="col-sm-12">
                                            <span>Theme : {{ $s1->theme == null ? 'N/A' : $s1->theme }} | {{ $s1->year }}</span>
                                        </h2>
                                    </div>
                                </div>
                                
                                <div class=""> 
                                <a href="{{ route('product.show', $s1->id) }}">
                                    <button class="btn btn-primary">View Product </button>
                                </a>
                                </div> 
                                <div class="row">
                                    @if($s1->collection_name == 'Hot Toys')
                                    <div class="col-sm-3">
                                        <b><small>Series :</small></b> 
                                   </div>
                                   <div class="col-sm-9">
                                       {{ $s1->series }}
                                   </div>
                                    <div class="col-sm-3">
                                        <b> <small>Category:</small></b> 
                                     </div>
                                     <div class="col-sm-9">
                                         {{ $s1->category_name }}
                                     </div>
                                     @elseif($s1->collection_name == 'Hot Wheels')
                                        <div class="col-sm-3">
                                            <b><small>Series :</small></b> 
                                        </div>
                                        <div class="col-sm-9">
                                            {{ $s1->series }}
                                        </div>
                                        <div class="col-sm-3">
                                            <b><small> Casting:</small></b> 
                                        </div>
                                        <div class="col-sm-9">
                                            {{ $s1->casting_name }}
                                        </div>
                                     @elseif($s1->collection_name == 'Lego MiniFigures')
                                     <div class="col-sm-3">
                                        <b><small>Fig Num:</small></b> 
                                    </div>
                                    <div class="col-sm-9">
                                        {{ $s1->lego_mf_fig_num }}
                                    </div>
                                    <div class="col-sm-3">
                                        <b><small>NumParts:</small></b> 
                                    </div>
                                    <div class="col-sm-9">
                                        {{ $s1->lego_mf_num_parts }}
                                    </div>
                                     @endif

                                </div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @empty
                <div class="col-xl-12 text-center">
                    <h3>No Products In <b>{{ $category->name }}</b></h3>
                </div>
            @endforelse
            </div>

        </div>
	</section>
   
@endsection
