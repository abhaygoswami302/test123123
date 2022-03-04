@extends('layouts.app')

@section('content')
<section class="" >
    <div class="container-fluid">
        <div class="row">
            <div class="HomeSec1Data HomeSec1Data2">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="TitleMn" align="center">
                            <h2>All Products in <b>{{ $casting }}</b></h2>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="row py-1 m-0">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 ResponsiveLot1">
                                <a href="{{ $products->previousPageUrl() }}">
                                    <button class="btn btn-info btn-sm" style="background:rgba(238,2,17,1);border:none; width:auto;">Previous</button>
                                </a>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-3 col-sm-3 col-6 text-center ResponsiveLot2">
                                <p>Total <b>{{ $products->total() }}</b> | <b>{{ $products->count() }}</b> In This Page | Current Page <b>{{ $products->currentPage() }}</b> </p>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 ResponsiveLot3">
                                <a href="{{ $products->nextPageUrl() }}" style="float: right;">
                                    <button class="btn btn-info btn-sm" style="background:rgba(58,0,198,1);border:none">Next</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <livewire:by-casting-select :products="$products" :casting="$casting"/>


 <div class="col-xl-12">
                        <div class="row py-1 m-0">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 ResponsiveLot1">
                                <a href="{{ $products->previousPageUrl() }}">
                                    <button class="btn btn-info btn-sm" style="background:rgba(238,2,17,1);border:none; width:auto;">Previous</button>
                                </a>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-3 col-sm-3 col-6 text-center ResponsiveLot2">
                                <!--p>Total <b>{{ $products->total() }}</b> | <b>{{ $products->count() }}</b> In This Page | Current Page <b>{{ $products->currentPage() }}</b> </p-->
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 ResponsiveLot3">
                                <a href="{{ $products->nextPageUrl() }}" style="float: right;">
                                    <button class="btn btn-info btn-sm" style="background:rgba(58,0,198,1);border:none">Next</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>

@endsection




