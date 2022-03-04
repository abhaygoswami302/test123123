@extends('layouts.users')

@section('content')
<div class="container">
    <div class="row bg-container">
        <div class="col-sm-12 bg-white p-4">
              <div class="ClctMnRt tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                  <div class="ClctMnRtTp ProductWtBdcrm">
                    <div class="ClctMnRtTpLft">
                        <div class="TitleMn">
                          <h2>My Products Collection</h2>
                          <!--p>Total : <b>{{ $products->total() }}</b> | <b>{{ $products->count() }}</b> in this page | Current Page <b>{{ $products->currentPage() }}</b> </p-->
                        </div>
                    </div>
                    <div class="ClctMnRtTpRt">
                        <ul class="breadcrumb">
                            <li><a class="active" href="{{ route('users.dashboard') }}">Home</a></li>
                            <li><a class="active" href="{{ route('users.dashboard') }}">Products</a></li>
                            <li><a href="{{ route('userproduct.index') }}">All My Products</a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- Collections -->  
        </div>

        <div class="col-xl-12">
            <div class="row py-1 m-0">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 ResponsiveLot1">
                    <a href="{{ $products->previousPageUrl() }}">
                        <button class="btn btn-info btn-sm" style="background:rgba(238,2,17,1);border:none; width:auto;color:white">Previous</button>
                    </a>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-3 col-sm-3 col-6 text-center ResponsiveLot2">
                    <p>Total <b>{{ $products->total() }}</b> | <b>{{ $products->count() }}</b> In This Page | Current Page <b>{{ $products->currentPage() }}</b> </p>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 ResponsiveLot3">
                    <a href="{{ $products->nextPageUrl() }}" style="float: right;">
                        <button class="btn btn-info btn-sm" style="background:rgba(58,0,198,1);border:none;color:white">Next</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <livewire:user-products-search :products="$products" />
        </div>

            <div class="col-xl-12">
            <div class="row py-1 m-0">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 ResponsiveLot1">
                    <a href="{{ $products->previousPageUrl() }}">
                        <button class="btn btn-info btn-sm" style="background:rgba(238,2,17,1);border:none; width:auto;color:white">Previous</button>
                    </a>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-3 col-sm-3 col-6 text-center ResponsiveLot2">
                    <!--p>Total <b>{{ $products->total() }}</b> | <b>{{ $products->count() }}</b> In This Page | Current Page <b>{{ $products->currentPage() }}</b> </p-->
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 ResponsiveLot3">
                    <a href="{{ $products->nextPageUrl() }}" style="float: right;">
                        <button class="btn btn-info btn-sm" style="background:rgba(58,0,198,1);border:none;color:white">Next</button>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection