@extends('layouts.users')

@section('content')
<div class="container">
    <div class="row bg-container">
        <div class="col-sm-12 bg-white p-4">
              <div class="ClctMnRt tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                  <div class="ClctMnRtTp ProductWtBdcrm" id="all_products_create_button">
                    <div class="ClctMnRtTpLft text-center" style="width:100%!important;">
                        <div class="TitleMn">
                          <h2>Add New Lego MiniFigures Product</h2>
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
                    <!--div class="ClctMnRtTpRt">
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="{{ route('userproduct.index') }}">
                                    <div class="VwBtn text-left">  
                                        <button class="glow-on-hover btn btn-1 text-white mb-2">My Products</button>
                                    </div>
                                </a>
                              
                            </div>
                        </div>
                    </div-->
                </div>
            </div> <!-- Collections -->  
        </div>
    </div>

        <div class="row px-4">
            <div class="col-sm-8 offset-2 px-4 text-center">
                @include('partials.alert')
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <livewire:user-lego-mini-figures />
            <div class="col-sm-2"></div>
        </div>
        <div class="row py-4"></div>
        </div>
    </div>
</div>
@endsection