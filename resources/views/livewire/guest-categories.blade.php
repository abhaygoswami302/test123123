<div>
    <div class="ClctMnRtTp">
        <div class="row cstUsrDashboard">
            <div class="col-xl-12">
            <div class="ClctMnRtTpRt">
                <div class="search">
                <span class="SrchHvr">
                    <form action="">
                        <input type="text" name="search" class="SrchHdr form-control" 
                        placeholder="Search Categories Here" wire:model="searchTerm1">
                    </form>
                    <button type="submit" class="SrcBtn">
                    <img src="{{ asset('images/search.png') }}" alt="">
                    </button>
                </span>
                </div>
            </div>
            </div>

            <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-12">
            <div class="ClctMnRtTpLft">
                <div class="TitleMn">
                    <h2>My Categories</h2> 
                </div>
            </div>
            </div>

            <!--div class="col-xl-4 col-lg-4 col-md-5 col-sm-5 col-12">
            <div class="VwBtn">
                <a href="{{ route('category.create') }}">
                <button class="glow-on-hover btn btn-1 text-white" type="button">Add Category</button>
                </a>
            </div>
            </div-->
        </div>
        </div>
        <div class="ClctMnRtBtm">
        <div class="CltnGrid">
            <div class="row">
            @forelse ($categories as $category_name => $category)

            
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="CollectionGrdMN">
                    <div class="CollectionGrdMNImg">
                        
                        @foreach ($category as $s1)
                            <div class="CollectionGrdMNImg_1">
                                @if ($s1->image == null)
                                <img src="{{ asset('images/category_not_found.jpg') }}" alt="">
                                @else
                                <img src="{{ asset($s1->image) }}" alt="">
                                @endif
                            </div>
                        
                            <div class="CollectionGrdMNImg_2">
                                <a class="GridNwAkr" href="{{ route('usercategory.show', $s1->category_id) }}"></a>
                                <h3>{{ $category_name }}</h3>
                                @if (count($category) == 1)
                                <p>{{ count($category) }} product in your collection.</p>
                                @else
                                <p>{{ count($category) }} products in your collection.</p>
                                @endif  
                            </div>
                            
                        @break
                        @endforeach
                    </div>

                        <div class="CollectionGrdMNTxt">
                            <div class="row">
                            <div class="col-sm-7 text-left">
                                <h3>{{ $category_name }}</h3>
                            </div>
                            <div class="col-sm-5 text-right">
                                @foreach ($category as $s1)
                                @if (count($category) == 1)
                                <p>{{ count($category) }} Product</p>
                                @else
                                <p>{{ count($category) }} Products</p>
                                @endif  
                                @break
                                @endforeach
                            </div>
                            </div>
                        </div>
                    </div>
                </div>                  
                @empty
                    <div class="row text-center">
                    <div class="col-sm-12">
                    <h4>No Categories Results Found!</h4>   
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
</div><!-- Categories -->