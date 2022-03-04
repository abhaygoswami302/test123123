@extends('layouts.admin')

@section('content')
<div class="container-fluid">
            <!-- Content Row -->
    <div class="row">

        <div class="col-sm-6 ">
            <h3 class="m-0 font-weight-bold text-primary">Add New Hot Wheels Products</h3>
        </div>
        <div class="col-sm-6 text-right ">
           <a href="{{ route('lego_minifigures_form.create') }}">
            <button class="btn btn-primary btn-sm">Add New Lego MiniFigures Product</button>
           </a>
        </div>

        <div class="col-lg-12 mb-4">
            @include('admin.partials.alert')           
        </div>

        <div class="col-xl-12 ">
            <div class="row card shadow mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">
                                Add New Hot Wheels Product
                    </h6>
                </div>
                <div class="card-body">
                    <div class="col-sm-12">
                        @if (Session::get('productform'))
                            <div class="alert alert-success animate__animated animate__slideInRight">
                                {{ Session::get('productform') }}
                            </div>
                        @endif 
                        @if (Session::get('csvmessage'))
                        <div class="alert alert-success animate__animated animate__slideInRight">
                            <div class="row">
                                <div class="col-sm-6">{{ Session::get('csvmessage') }}</div>
                                <div class="col-sm-6 text-right"><a href="{{ route('tempIndex') }}" class="btn btn-sm btn-danger">View CSV Products</a></div>
                            </div>
                        </div>
                        @endif 
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (Session::get('admin_product_added'))
                        <div class="alert alert-success animate__animated animate__slideInRight">
                            <div class="row">
                                <div class="col-sm-6">{{ Session::get('admin_product_added') }}</div>
                                <div class="col-sm-6 text-right">
                                    <a href="{{ route('admin_products.show',  Session::get('product_id')) }}" class="btn btn-sm btn-danger">View Product</a></div>
                            </div>
                        </div>
                        @endif   
                    </div>  
                 
            <form action="{{ route('admin_products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                    <livewire:admin-product-name-validation />
                </div>
                <livewire:admin-product-form />
            </div>
               
                <livewire:admin-product-validation-form />
        
               
                <div class="row p-2"></div>
            </form>
        </div>
    </div>
</div>

    </div>

    
</div>
@endsection