@extends('layouts.app')

@section('content')
<section class="Plain_First guest-product-show GuestGrid guest-product-show" style="background-image: url({{ asset('images/patteren.png') }});">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 py-2">
                <ul class="breadcrumb" style="background: transparent">
                    <li><a class="active" href="{{ route('welcome') }}">Home</a></li>
                    <li><a class="active" href="{{ route('product.index') }}">Products</a></li>
                    <li><a href="{{ route('userproduct.show', $product->id) }}">{{ $product->name }}</a></li>
                </ul> 
            </div>
        </div>
        <div class="row guest-product-row">
            <div class="col-sm-6 p-4">
                <img src="{{  asset('images/Another Category/Lovepreet kaur/1636528286.jpg')  }}" alt="" style="width:500px;">
            </div>
            <div class="col-sm-6 p-4">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="py-2">{{ $product->name }}</h3>
                        <p>
                            {{ substr($product->description, 0, 600) }}
                        </p>
                    </div>
                    <div class="col-sm-12 pb-2">
                        <h5 class="py-1"><b>Category :</b> {{ $product->category_name }} </h5>  
                        <h5 class="py-1"><b>Collection :</b> {{ $product->collection_name }} </h5>
                        <h5 class="py-1"><b>Design :</b> {{ $product->design }} </h5>
                        <h5 class="py-1"><b>Type :</b> {{ $product->type }} </h5>
                        <h5 class="py-1"><b>Year :</b> {{ $product->year }} </h5>
                        <h5 class="py-1"><b>Price : <span style="font-size:20px">${{ $product->price }}</span> </b> </h5>
                    </div>
                    <div class="col-sm-6 ">
                        <div class="">
                            <a href="#">
                            <button class="btn btn-outline-dark py-2 text-black" style="color: black" 
                            type="button"> <i class="fab fa-cart-plus"></i> Add To Cart</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 ">
                        <div class="">
                            <a href="#" >
                            <button class="btn btn-dark py-2 text-white" 
                            type="button"> <i class="fab fa-shopping-bag"></i> Buy Now</button>
                            </a>
                        </div>
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
            <h2>Related Products</h2>
        </div>

        @foreach ($products as $product)
            <div class="col-sm-4">
                <div class="product">
                    <div class="imgbox"> <img src="{{  asset('images/Another Category/Lovepreet kaur/1636528286.jpg') }}"> </div>
                    <div class="specifies">
                        <h2> {{ $product->name }} <br> <span>{{ $product->collection_name }}</span></h2>
                        <div class="price">$1500</div> <label>Category : {{ $product->category_name }}</label>
                        <div class="row">
                            <div class="col-sm-4">
                                <label>Colour</label>
                                {{ $product->colour }}
                            </div>
                            <div class="col-sm-3">
                                <label>Type</label>
                                {{ $product->type }}
                            </div>
                            <div class="col-sm-3">
                                <label>Design</label>
                                {{ $product->design }}
                            </div>
                            <div class="col-sm-2">
                                <label>Year</label>
                                {{ $product->year }}
                            </div>  
                        </div>
                        <a href="{{ route('product.show', $product->id) }}">
                            <button class="btn btn-primary">Buy Now</button>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</section>
   
@endsection
