<div class="Header_Bottom_Rt">
    <div class="search" style="overflow: visible !important;">
        <span class="SrchHvr">
            <input type="text" name="search" wire:model="searchTerm"  class="SrchHdr form-control" placeholder="Search Products Here" />
        
            @if (count($myproducts) > 0)

            <!-- ul style="margin-top:10%;margin-left:4%;position:absolute; z-index:999; width:400px; list-style-type:none; background:white; box-shadow:#8ca5f0 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 5px 5px;" -->
                <ul>
                <li style="background:white;" class="p-2">
                    <p style="padding: 2%" class="alert alert-info"><b>{{ count($myproducts) }} Product Results</b></p>
                </li>

                @foreach ($myproducts as $product)
                <li style="">
                    <a href="{{ route('product.show', $product->id) }}" style="color: black;text-decoration:none;">
                        <div class="row" style="background: white;padding:0px;margin:0px">
                            <div class="col-sm-8">
                                <b>{{ $product->name }}</b><br>
                                <small>{{ $product->series }} | {{ $product->collection_name }}</small> <br>
                                <small>{{ $product->theme }} | {{ $product->casting_name }}</small> 
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
        </span>
    </div>
</div>

