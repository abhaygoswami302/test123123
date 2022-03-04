@extends('layouts.app')

@section('content')
<section class="Plain_First guest-product-show GuestGrid guest-product-show" style="background-image: url({{ asset('images/patteren.png') }});">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 py-2">
                <ul class="breadcrumb" style="background: transparent">
                    <li><a class="active" href="{{ route('welcome') }}">Home</a></li>
                    <li><a class="active" href="{{ route('product.index') }}">Products</a></li>
                     <li><a href="#">{{ ucfirst($user->name) }}</a></li>
                </ul> 
            </div>
        </div>
        <div class="row guest-product-row">
          

            <div class="col-sm-3 p-4">
                @if ($user->image == null)
                    <img src="{{ asset('images/noimage.png') }}" alt="" style="width:300px">                    
                @else
                    <img src="{{  asset($user->image)  }}" alt="" style="width:300px;">       
                @endif
            </div>
            <div class="col-sm-9 p-4">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="py-2">{{ ucfirst($user->name) }}</h3>
                    </div>
                    <div class="col-sm-12 pb-2">
                       
                        <h5 class="py-1"><b>Email :</b> {{ $user->email }} </h5>
                        <h5 class="py-1"><b>Location :</b> {{ $user->location }} </h5>
                        <h5 class="py-1"><b>Membership Type :</b> {{ $user->membership }} </h5>
                        <h5 class="py-1"><b>Gender :</b> {{ $user->gender }} </h5>
                        <h5 class="py-1"><b>Joined At :</b> {{ $user->created_at->diffForHumans() }} </h5>
                        <h5 class="py-1"><b>Total Products Added By {{ $user->name }} : {{ $total_products}} </b> </h5>
                        <h5 class="py-1"><b>Visible Products :</b> {{ $visible_products }} </h5>
                        <h5 class="py-1"><b>Hidden Products :</b> {{ $hidden_products }} </h5>


                    </div>

                    <div class="col-sm-12">
                    </div>
                </div>
            </div>
        </div>

        <div class="row p-4" style="background: transparent">

        </div>
       
    <div class="row guest-product-row-products cstProHvr" >
        <div class="col-sm-12 p-4 text-center" >
            <h2>All Products Added By <b>{{ $user->name }}</b> </h2>
        </div>

        @foreach ($products as $product)
            <div class="col-sm-4">
                <div class="product">
                    <div class="imgbox">
                        @if ($product->image1 == NULL)
                        <img src=" {{ asset('images/car_not_found.jpg')  }}" alt=""/>   
                        @else
                        <img src="{{  asset($product->image1) }}">
                        @endif
                    </div>
                    <div class="specifies">
                        <h2> {{ $product->name }} <br> <span>{{ $product->category_name }} | {{ $product->year }}</span></h2>
                        <!--div class="price">$1500</div--> <label>Series : 
                            <span  style="border: 1px solid rgb(194, 193, 193)" class="py-1 px-2">{{ $product->series }}</span></label>
                       
                            <div class="row">
                                <div class="col-sm-4">
                                    <b> Theme:</b> 
                                </div>
                                <div class="col-sm-8">
                                    {{ $product->theme }}
                                </div>
                                <div class="col-sm-4">
                                   <b> Casting:</b> 
                                </div>
                                <div class="col-sm-8">
                                    {{ $product->casting_name }}
                                </div>
                            </div>
                        <a href="{{ route('product.show', $product->id) }}">
                            <button class="btn btn-primary">View Product</button>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</section>
   
@endsection
