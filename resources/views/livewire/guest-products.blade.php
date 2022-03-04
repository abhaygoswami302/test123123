    <div>
        <div class="ClctMnRtTp">
          <div class="row cstUsrDashboard">
            <div class="col-xl-12">
              <div class="ClctMnRtTpRt">
                <div class="search">
                  <span class="SrchHvr">
                    <form action="">
                        <input type="text" name="search" class="SrchHdr form-control" 
                        placeholder="Search Products Here" wire:model="searchTerm2">
                    </form>
                    <button type="submit" class="SrcBtn">
                      <img src="{{ asset('images/search.png') }}" alt="">
                    </button>
                  </span>
                </div>
              </div>
            </div>
    
            <div class="col-xl-6 col-lg-8 col-md-12 col-sm-12 col-12">
              <div class="ClctMnRtTpLft">
                <div class="TitleMn">
                    <h2>My Products</h2> 
                </div>
              </div>
            </div>
    
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 pb-2">
              <div class="VwBtn">
                <a href="{{ route('userproduct.index') }}">
                  <button class="glow-on-hover btn btn-1 text-white" type="button">
                     All My Products
                  </button>
                </a>
              </div>
            </div>                    
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 pb-2">
              <div class="VwBtn">
                <a href="{{ route('userproduct.create') }}">
                  <button class="glow-on-hover btn btn-1 text-white" type="button">
                    Add New Product
                  </button>
                </a>
              </div>
            </div>
          
          </div>
         
          <div class="ClctMnRtBtm DsbrdProduct">
            <div class="CltnGrid">
              <div class="row">
                  @forelse ($products as $product)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="CollectionGrdMN">
                        <div class="CollectionGrdMNImg">
                            <div class="CollectionGrdMNImg_1">
                              @if ($product->image1 <> NULL)
                              <img src="{{ asset($product->image1) }}" alt="">
                              @else
                              <img src="{{ asset('images/car_not_found.jpg') }}" alt="" class="noimage_border">
                              @endif
                            </div>
                            <div class="CollectionGrdMNImg_2" >
                              @if ($product->visibility == '1')
                              <a class="GridNwAkr" href="{{ route('product.show', $product->id) }}">
                              @endif
                                @if ($product->collection_name == 'Hot Wheels')
                                <h6>{{ $product->name }}</h6>
                                @else
                                <br>
                                <h6>{{ $product->name }}</h6>
                                @endif  
                                @if ($product->collection_name == 'Hot Wheels')
                                  <p>{{ $product->colour }}</p>
                                  <p>{{ $product->year }}</p>
                                  <p>{{ $product->casting_name }}</p>
                                  <p>{{ $product->theme }}</p>
                                @endif
                              @if ($product->visibility == '1')
                              </a>
                              @endif
                            </div>                               
                        </div>
                        <div class="CollectionGrdMNTxt">
                            <div class="row">
                              <div class="col-sm-5">
                                <h3>{{ substr($product->name, 0, 30) }}...</h3>
                              </div>
                              <div class="col-sm-7">
                                <h3>{{ $product->category_name }}</h3>
                              </div>
                            </div>
                        </div>
                        </div>
                    </div>   
                  @empty
                  <div class="row text-center">
                    <div class="col-sm-12">
                      <h4>No Products Results Found!</h4>   
                    </div>  
                    </div>                 
                  @endforelse
                <div class="col-xl-12">
                  <div class="VwBtn">
                    <a href="{{ route('userproduct.index') }}">
                      <button class="glow-on-hover btn btn-1 text-white" type="button"> Load All </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>