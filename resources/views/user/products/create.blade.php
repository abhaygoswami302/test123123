@extends('layouts.users')

@section('content')
<div class="container">
    <div class="row bg-container">
        <div class="col-sm-12 bg-white p-4">
              <div class="ClctMnRt tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                  <div class="ClctMnRtTp ProductWtBdcrm" id="all_products_create_button">
                    <div class="ClctMnRtTpLft text-center"  style="width:100%!important;">
                        <div class="TitleMn">
                          <h2>Add New Hot Wheels Product</h2>
                          <form action="{{ route('user.lego.minifigures.select') }}" method="POST">
                            @csrf
                            <div class="row pt-2">
                                <div class="col-sm-6 offset-2 pt-2">
                                    <select name="new_product_flag" class="form-control" required>
                                        <option value="">Add New Product In Other Collections</option>
                                        <option value="1">Add New Lego MiniFigures Product</option>
                                        <option value="2">Add New Hot Wheels Product</option>
                                        <option value="3">Add New Hot Toys Product</option>
                                    </select>
                                </div>
                                <div class="col-sm-1">
                                    <div class="VwBtn">
                                        <button class="glow-on-hover btn btn-1 text-white mb-2" 
                                        type="submit" >Open Form</button>
                                    </div>
                                </div>
                                <div class="col-sm-4"></div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!--div class="ClctMnRtTpRt"-->
                        <!--ul class="breadcrumb">
                            <li><a class="active" href="{{ route('users.dashboard') }}">Home</a></li>
                            <li><a href="{{ route('product.index') }}">Products</a></li>
                            <li><a href="{{ route('userproduct.index') }}">All Products</a></li>
                        </ul>
                        <form action="{{ route('tempImport') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-4 offset-4">
                                    <input type="file" name="file" id="" required class="my-2 text-center" >
                                </div>
                                <div class="col-sm-4">
                                    <div class="VwBtn">
                                        <button class="glow-on-hover btn btn-1 text-white mb-2" 
                                        type="submit" >Upload CSV</button>
                                    </div>
                                </div>
                            </div>
                        </form-->
                        <!--div class="row">
                            <div class="col-sm-4 ">
                                <a href="{{ route('userproduct.index') }}">
                                    <div class="VwBtn text-left">  
                                        <button class="glow-on-hover btn btn-1 text-white mb-2">My Products</button>
                                    </div>
                                </a>
                            </div-->
                            <!--div class="col-sm-4">
                                <div class="VwBtn">
                                    <a href="{{ route('tempIndex') }}">
                                        <button class="glow-on-hover btn btn-1 text-white mb-2" >Upload CSV</button>
                                    </a>
                                </div>
                            </div-->
                        <!--/div-->
                    <!--/div-->
                </div>
            </div> <!-- Collections -->  
        </div>

        @if ($count_exceeded_flag == 0)
        <livewire:product-validation-form />
        @else
        <div class="col-xl-12">
            <div class="alert alert-danger text-center">
                Limit Exceeded , Switch To Premium
            </div>
        </div>
        @endif

        <!------ End Accordian Code ---------->
      
        <!--div class="col-xl-12">
            <div class="HomeSec1Data2 HomeSec1Data2Pro">
                <div class="CollectionGrd">
                    <div class="table-responsive">
                        <table class="table table-hover table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Category Name</th>
                                    <th>Collection Name</th>
                                    <th>Year</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        @forelse ($products as $product)
                                <tr>
                                    @if ($product->image1 == null)
                                    <td><img src="{{ asset('images/car_not_found.jpg') }}" alt="" style="width:60px;height:50px"></td>
                                    @else
                                    <td><img src="{{ asset($product->image1) }}" alt="" style="width:60px;height:50px"></td>
                                    @endif
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->category_name }}</td>
                                    <td>{{ $product->collection_name }}</td>
                                    <td>{{ $product->year }}</td>
                                    <td>{{ $product->created_at->diffForHumans() }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-6 text-center">
                                                <i class="fas fa-edit"></i>
                                            </div>
                                            <div class="col-sm-6 text-center">
                                                <i class="fas fa-trash"></i>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                        @empty
                            
                        @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div--> <!-- Table Ends Here -->
        

        </div>

    </div>
</div>
@endsection