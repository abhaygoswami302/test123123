<div>
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-1 small"  wire:model="searchTerm"  
                placeholder="Search For Products , Categories And Collections"
                aria-label="Search" aria-describedby="basic-addon2" style="border: 1px solid rgb(218, 218, 218)">
        </div>
        @if (count($products) > 0)

            <ul style="position:absolute; z-index:99999; width:400px; background:white; box-shadow:#8ca5f0 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 5px 5px;">
                
                @if (count($categories) > 0)
                    <li style="background:white;" class="p-2">
                        <p style="padding: 2%" class="alert alert-primary"><b>{{ count($categories) }} Categories Results</b></p>
                    </li>

                    @foreach ($categories as $category)
                    <li style="">
                        <a href="{{ route('admin_categories.show', $category->id) }}" style="color: black;text-decoration:none;">
                            <div class="row" style="background: white;padding:0px;margin:0px">
                                <div class="col-sm-8">
                                    <b>{{ $category->name }}</b>
                                  
                                </div>
                                <div class="col-sm-4">
                                    {{ $category->created_at->diffForHumans() }}
                                </div>
                                <div class="col-sm-12">
                                    {{ substr($category->description, 0, 60) }}
                                    <hr>
                                </div>
                            </div> 
                        </a>
                    </li>
                    @endforeach
                    <hr>
                @endif

                <li style="background:white;" class="p-2">
                    <p style="padding: 2%" class="alert alert-primary"><b>{{ count($products) }} Product Results</b></p>
                </li>


                @foreach ($products as $product)
                <li style="">
                    <a href="{{ route('admin_products.show', $product->id) }}" style="color: black;text-decoration:none;">
                        <div class="row" style="background: white;padding:0px;margin:0px">
                            <div class="col-sm-8">
                                <b>Name : {{ $product->name }}</b><br>
                                <small>
                                    <b>Toy Hash : {{ $product->toy_hash }}</b><br>
                                    <b>Collection Name : {{ $product->collection_name }}</b>
                                </small>
                            </div>
                            <div class="col-sm-4">
                                {{ $product->created_at->diffForHumans() }}
                            </div>
                            <div class="col-sm-12">
                                {{ substr($product->description, 0, 100) }}
                                <hr>
                            </div>
                        </div> 
                    </a>
                </li>
                @endforeach
            </ul>
            @endif
    </form>
</div>