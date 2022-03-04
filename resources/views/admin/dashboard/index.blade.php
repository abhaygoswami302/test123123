@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
       <div class="div">
        <a href="{{ route('admin_products.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus-circle fa-sm text-white-50"></i> Add New Product 
        </a>
        <a href="{{ route('admin.csv.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus-circle fa-sm text-white-50"></i> Upload CSV 
        </a>
       </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('admin_collections.index') }}" style="text-decoration: none">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total (Collections)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $collections_count }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('admin_products.index') }}" style="text-decoration: none;">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Total (Products)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $products_count }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-list-alt fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <a href="{{ route('admin.visible_products') }}" style="text-decoration: none">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Visible Products
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $visible_products_count }}</div>
                                    </div>
                                    <!--div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                style="width: 50%" aria-valuenow="40" aria-valuemin="0"
                                                aria-valuemax="70"></div>
                                        </div>
                                    </div-->
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-eye fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <a href="{{ route('admin.hidden_products') }}" style="text-decoration: none">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Hidden Products</div>
                                    <div class="row" style="padding: 0px; margin: 0px">
                                        <div class="col-sm-4" style="padding: 0px; margin: 0px">
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $hidden_products_count }}</div>
                                        </div>
                                        <!--div class="col-sm-8 p-2" style="padding: 0px; margin: 0px">
                                                <div class="progress progress-sm ">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 50%" aria-valuenow="20" aria-valuemin="0"
                                                        aria-valuemax="50"></div>
                                                </div>
                                        </div-->
                                    </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-eye-slash fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <!-- Content Row -->
    <div class="row">

        <div class="col-lg-4 mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4 my-card">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">All Collections</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <a href="{{ route('admin_collections.index') }}">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                            src="{{ asset('images/admin/undraw_posting_photo.svg') }}" alt="Image">
                        </a>
                    </div>
                    <!--p>Add some quality, svg illustrations to your project courtesy of <a
                            target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                        constantly updated collection of beautiful svg images that you can 
                        completely free and without attribution!</p-->
                    <a rel="nofollow" href="{{ route('admin_collections.index') }}">Browse All Collections &rarr;</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4 my-card">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">All Categories</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <a href="{{ route('admin_categories.index') }}">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                            src="{{ asset('images/admin/undraw_posting_photo.svg') }}" alt="Image">
                        </a>
                    </div>
                    <!--p>Add some quality, svg illustrations to your project courtesy of <a
                            target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                        constantly updated collection of beautiful svg images that you can 
                        completely free and without attribution!</p-->
                    <a rel="nofollow" href="{{ route('admin_categories.index') }}">Browse All Categories &rarr;</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4 my-card">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">All Products</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <a href="{{ route('admin_products.index') }}">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                            src="{{ asset('images/admin/undraw_posting_photo.svg') }}" alt="Image">
                        </a>
                    </div>
                    <a rel="nofollow" href="{{ route('admin_products.index') }}">Browse All Products &rarr;</a>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- /.container-fluid -->
@endsection