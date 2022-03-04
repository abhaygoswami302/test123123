@extends('layouts.editor')

@section('content')
<div class="container-fluid">
            <!-- Content Row -->
    <div class="row">

        <div class="col-sm-6">
            <h3 class="m-0 font-weight-bold text-primary">Add New Hot Wheels Products</h3>
        </div>
        <div class="col-sm-6 text-right pb-4">
           <a href="{{ route('editor_lego_minifigures_form.create') }}">
            <button class="btn btn-primary btn-sm">Add New Lego MiniFigures Product</button>
           </a>
        </div>

        <div class="col-lg-12 mb-2">
            @include('editor.partials.alert')           
        </div>

        <div class="col-xl-12 ">
            <div class="row card shadow mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Add New Hot Wheels Product
                    </h6>
                </div>
                <div class="card-body">
                    
                 
            <form action="{{ route('editor_products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                    <livewire:editor-product-name-validation />
                </div>
                <livewire:editor-product-form />
            </div>
               
                <livewire:editor-product-validation-form />
        
               
                <div class="row p-2"></div>
            </form>
        </div>
    </div>
</div>

    </div>

    
</div>
@endsection