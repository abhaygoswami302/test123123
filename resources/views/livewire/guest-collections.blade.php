    <div>
        <div class="ClctMnRtTp">
            <div class="ClctMnRtTpLft">
              <div class="TitleMn">
                  <h2>My Collections</h2>
              </div>
            </div>
            <div class="ClctMnRtTpRt">
              <div class="search">
                <span class="SrchHvr">
                  <form action="">
                      <input type="text" name="search" class="SrchHdr form-control" 
                      placeholder="Search Collections Here" wire:model="searchTerm">
                  </form>
                  <button type="submit" class="SrcBtn">
                    <img src="{{ asset('images/search.png') }}" alt="">
                  </button>
                </span>
              </div>
            </div>
          </div>

          <div class="ClctMnRtBtm">
            <div class="CltnGrid">
              <div class="row">
                @forelse ($collections as $collection_name => $collection)

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="CollectionGrdMN">
                        <div class="CollectionGrdMNImg">
                      
                            @foreach ($collection as $s1)
                              <div class="CollectionGrdMNImg_1">
                           
                                @if ($s1->collection->image == null)
                                <img src="{{ asset('images/collection_not_found.jpg') }}" alt="">
                                @else
                                <img src="{{ asset($s1->collection->image) }}" alt="">
                                @endif
                              </div>        
                              <div class="CollectionGrdMNImg_2">
                                <a class="GridNwAkr" href="{{ route('usercollection.show', $s1->collection_id) }}"></a>
                                <h3>{{ $collection_name }}</h3>
                                @if ($total_products == 1)
                                  <p>View collection.</p>
                                @else
                                  <p>View collection.</p>
                                @endif  
                              </div>
                            @break
                            @endforeach
                        </div>
                        <div class="CollectionGrdMNTxt">
                            <div class="row">
                              <div class="col-sm-6 text-left">
                                <h3>{{ $collection_name }}</h3>
                              </div>
                              <!--div class="col-sm-6 text-right">
                                @foreach ($collection as $s1)
                                @if ($total_products == 1)
                                <p>{{ $total_products }} Product</p>
                                @else
                                <p>{{ $total_products }} Products</p>
                                @endif  
                                @break
                                @endforeach
                              </div-->
                            </div>
                        </div>
                        </div>
                    </div>                  
                    @empty
                    <div class="row text-center">
                      <div class="col-sm-12">
                        <h4>No Collections Results Found!</h4>   
                      </div>  
                      </div>     
                    @endforelse
                <div class="col-xl-12">
                    <!--div class="VwBtn">
                        <a href="{{ route('category.index') }}">
                          <button class="glow-on-hover btn btn-1 text-white" type="button">View More</button>
                        </a>
                    </div-->
                </div>
              </div>
            </div>
          </div>
    </div><!-- Collections -->