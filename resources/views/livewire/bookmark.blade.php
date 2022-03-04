<div class="col-sm-3 col-3 text-right"  style="position:relative;">
   
    <div class="row">
        <div class="col-sm-6 col-6 ">
            @if ($flag == 0)
            <i class="far fa-bookmark p-2" style="cursor: pointer;color:#007bff" 
            wire:click="bookmark({{ $product }})"  data-toggle="tooltip" 
            data-placement="top" title="Add To My Products Collection"></i>
            @else
            <i class="fas fa-check p-2" style="cursor: pointer;color:#007bff" 
            wire:click="bookmark({{ $product }})"  data-toggle="tooltip" 
            data-placement="top" title="Remove From My Products Collection"></i>
            @endif
        </div>
        <div class="col-sm-6 col-6 py-1" >
           <a href="{{ route('userproduct.index') }}">
            <i class="fas fa-paper-plane"  style="cursor: pointer;color:#007bff" 
            data-toggle="tooltip" data-placement="top" 
            title="Go To My Products Collection"></i>
           </a>
        </div>
        <div class="col-sm-12 py-1">
            
        </div>
    </div>
    <div class="row pt-2" id="count_exceeded">
        @if ($count_exceeded == 1)
            <p class="alert alert-danger">
                <small>Limit Exceeded , switch to premium</small>
            </p>
        @endif
    </div>
</div>