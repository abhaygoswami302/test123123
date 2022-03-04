@extends('layouts.editor')

@section('content')
<div class="container-fluid">
            <!-- Content Row -->
    <div class="row">

        <div class="col-sm-6 ">
            <h3 class="m-0 font-weight-bold text-primary">Add New Lego MiniFigures Products</h3>
        </div>
        <div class="col-sm-6 text-right pb-4 ">
           <a href="{{ route('editor_products.create') }}">
            <button class="btn btn-primary btn-sm">Add New Hot Wheels Product</button>
           </a>
        </div>

        <div class="col-lg-12 mb-2">
            @include('editor.partials.alert')           
        </div>

        <div class="col-xl-12 ">
            <div class="row card shadow mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Add New Lego MiniFigures Product
                    </h6>
                </div>
                <div class="card-body">
                    <div class="col-sm-12">
                        <form action="{{ route('editor_lego_minifigures_form.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row px-4">
                                <div class="col-sm-4 p-1">
                                    <input type="text" name="product_name" required class="form-control" required placeholder="Enter Product Name">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <input type="text" name="fig_num" required class="form-control" required placeholder="Enter Fig Num">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <input type="text" name="num_parts" required class="form-control" required placeholder="Enter Num Parts">
                                </div>
                                <div class="col-sm-12 py-2"></div>
                                <div class="col-sm-4 p-0">
                                    <select name="visibility" id="" required class="form-control">
                                        <option value="0">Select Visibility</option>
                                        <option value="1">Visible</option>
                                        <option value="0">Hidden</option>
                                    </select><br>
                                </div>
                                <div class="col-sm-4">
                                    <input type="file" name="image1" id="">
                                </div>
                                <div class="col-sm-4">
                                    <input type="file" name="image2" id="">
                                </div>
                                <div class="col-sm-4">
                                    <input type="file" name="image3" id="">
                                </div>
                                <div class="col-sm-4">
                                    <input type="file" name="image4" id="">
                                </div>
                                <div class="col-sm-4">
                                    <input type="file" name="image5" id="">
                                </div>
                                <div class="col-sm-12 py-2"></div>
                                <div class="col-sm-12">
                                    <div class="">
                                        <button type="submit" class="btn-block btn btn-primary text-white mb-2" >Add Lego MiniFigures Product</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>  
        </div>
    </div>
</div>

    </div>

    
</div>
@endsection