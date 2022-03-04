@if (Session::get('message'))
<div class="row">
    <div class="col-sm-12">
        <div class="alert alert-success animate__animated animate__flash">
            {{ Session::get('message') }}
        </div>
    </div>
</div>
@endif
@if ($message = Session::get('error'))
    <div class="row">
        <div class="col-sm-12">
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        </div>
    </div>
@endif
@if (Session::get('contributor_products_edit'))
<div class="alert alert-success animate__animated animate__flash">
<div class="row">
    <div class="col-sm-6">{{ Session::get('contributor_products_edit') }}</div> 
    <div class="col-sm-6 text-right">
        <a class="btn btn-danger" href="{{ route('contributor_products.show', Session::get('product_id')) }}">View Product</a>
    </div>
</div>
</div>
@endif  
