@extends('layouts.admin')

@section('content')
<div class="container-fluid">
            <!-- Content Row -->
    <div class="row">

        <div class="col-sm-6 ">
            <h3 class="m-0 font-weight-bold text-primary">Edit New Hot Toys Products</h3>
        </div>
        <div class="col-sm-6 text-right pb-4 ">
           <a href="{{ route('editor_products.create') }}">
            <button class="btn btn-primary btn-sm">Add New Hot Wheels Product</button>
           </a>
        </div>

        <div class="col-lg-12 mb-2">
            @if (Session::get('hot_toys_products_edit'))
            <div class="alert alert-success animate__animated animate__flash">
            <div class="row">
                <div class="col-sm-6">{{ Session::get('hot_toys_products_edit') }}</div> 
                <!--div class="col-sm-6 text-right">
                    <a class="btn btn-danger" href="{{ route('hotToysCsv.show', Session::get('product_id')) }}">View Product</a>
                </div-->
            </div>
            </div>
            @endif 
            @include('admin.partials.alert')           
        </div>

        <div class="col-xl-12 ">
            <div class="row card shadow mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Edit New Hot Toys Product
                    </h6>
                </div>
                <div class="card-body">
                    <div class="col-sm-12">
                        <form action="{{ route('hotToysCsv.update', $product->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="row px-4">
                                <div class="col-sm-6 p-1">
                                    <label for="name">Toy Name</label>
                                    <input type="text" name="name"  value="{{ $product->name }}" class="form-control" required placeholder="Enter Product Name">
                                </div>
                                <div class="col-sm-6 p-1">
                                    <label for="category_name">Category Name</label>
                                    <select name="category_name" id="category_name" class="form-control">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->name }}" {{ $product->category_name == $category->name  ? 'selected' : '' }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6 p-1">
                                    <label for="toy_hash">Toy Hash</label>
                                    <input type="text" name="toy_hash" readonly value="{{ $product->toy_hash }}" class="form-control" required placeholder="Enter Fig Num">
                                </div>
                                <div class="col-sm-6 p-1">
                                    <label for="visibility">Visibility</label>
                                    <select name="visibility" id="" class="form-control">
                                        <option value="0">Select Visibility</option>
                                        <option value="1"  {{ $product->visibility == '1' ? 'selected' : '' }}>Visible</option>
                                        <option value="0"  {{ $product->visibility == '0' ? 'selected' : '' }}>Hidden</option>
                                    </select><br>
                                </div>
                                <div class="col-sm-12 p-0">
                                    <label for="notes">Notes</label>
                                    <textarea name="notes" id="notes" cols="30" rows="10" class="form-control">
                                        {{ $product->notes }}
                                    </textarea>
                                </div>
                                <div class="col-sm-12 py-4 px-0">
                                    <div class="">
                                        <button type="submit" class="btn-block btn btn-primary text-white mb-2" >Edit Hot Toys Product</button>
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