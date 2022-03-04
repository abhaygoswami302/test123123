@extends('layouts.users')

@section('content')
<div class="container">
    <div class="row bg-container">
        <div class="col-sm-12 bg-white p-4">
              <div class="ClctMnRt tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                  <div class="ClctMnRtTp ProductWtBdcrm">
                    <div class="ClctMnRtTpLft">
                        <div class="TitleMn">
                          <h2>Add New Product</h2>
                        </div>
                    </div>
                    <div class="ClctMnRtTpRt">
                        <ul class="breadcrumb">
                            <li><a class="active" href="{{ route('users.dashboard') }}">Home</a></li>
                            <li><a href="{{ route('product.index') }}">Products</a></li>
                            <li><a href="{{ route('userproduct.create') }}">Add New Product</a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- Collections -->  
        </div>

        @if ($message = Session::get('message'))
            <div class="col-xl-12 text-center">
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            </div>
        @endif

        <!------ Start Accordian Code -------->
        
        <div class="col-xl-12 cstProduct_Form">
            <div id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        1. Add Product Using Form
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="ProductFrm">
                                        <div class="FrmRpt">
                                            <input type="text" name="name" id="" class="form-control SrchHdr" placeholder="Enter Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="ProductFrm">
                                        <div class="FrmRpt">
                                            <select name="category_name" id="" class="form-control SrchHdr py-3">
                                                <option value="1">Select Category Name</option>
                                                <option value="Hot Wheels">Hot Wheels</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="ProductFrm">
                                        <div class="FrmRpt">
                                            <select name="collection_name" id="" class="form-control SrchHdr py-3">
                                                <option value="1">Select Collection Name</option>
                                                <option value="Flying Colors">Flying Colors</option>
                                                <option value="Speed Machines">Speed Machnies</option>
                                                <option value="Collector Number 1-1121">Collector Number 1-1121</option>
                                                <option value="Real Riders">Real Riders</option>
                                                <option value="Ultra Hot (Original)">Ultra Hot (Original)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="ProductFrm">
                                        <div class="FrmRpt">
                                            <input type="text" name="price" id="" class="form-control SrchHdr" placeholder="Enter Price">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="ProductFrm">
                                        <div class="FrmRpt">
                                            <input type="text" name="year" id="" class="form-control SrchHdr" placeholder="Enter Year">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="ProductFrm">
                                        <div class="FrmRpt">
                                            <input type="text" name="colour" id="" class="form-control SrchHdr" placeholder="Enter Colour">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="ProductFrm">
                                        <div class="FrmRpt">
                                            <input type="text" name="type" id="" class="form-control SrchHdr" placeholder="Enter Type">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="ProductFrm">
                                        <div class="FrmRpt">
                                            <input type="text" name="design" id="" class="form-control SrchHdr" placeholder="Enter Design">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="ProductFrm">
                                        <div class="FrmRpt">
                                            <select name="visibility" id="" class="form-control SrchHdr py-3">
                                                <option value="none">Select Visibility</option>
                                                <option value="0">Hidden</option>
                                                <option value="1">Visible</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ProductFrm">
                                <div class="FrmRpt">
                                    <input type="file" name="image" id="image" class="product_image">
                                </div>
                            </div>
                            <div class="ProductFrm">
                                <div class="FrmRpt">
                                    <textarea name="description" id="" cols="30" rows="3" placeholder="Enter Description" class="form-control SrchHdr"></textarea>
                                </div>
                            </div>
                            <div class="ProductFrm">
                                <div class="FrmRpt" align="right">
                                    <input type="submit" value="Insert Product" class="LoginSbmt">
                                </div>
                            </div>     
                            
                        </form>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        2. Add Products Using CSV Upload
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <form action="{{ route('ProductImport') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="file" id="" class="my-2 text-center" >
                            <div class="VwBtn">
                                <button class="glow-on-hover btn btn-1 text-white mb-2" 
                                type="submit" >Upload CSV</button>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
                
              </div>
        </div>
        
        <!------ End Accordian Code ---------->
      
        <div class="col-xl-12">
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
                                    @if (empty($product->image))
                                    <td><img src="{{ asset($product->image) }}" alt="" style="width:60px;height:50px"></td>

                                    @else
                                    <td><img src="{{ asset($product->image) }}" alt="" style="width:60px;height:50px"></td>

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
        </div>
        

    </div>
</div>
@endsection