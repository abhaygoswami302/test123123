@if (Session::get('message'))
<div class="row">
    <div class="col-sm-12">
        <div class="alert alert-success animate__animated animate__flash">
            {{ Session::get('message') }}
        </div>
    </div>
</div>
@endif
<!--
@if ($message = Session::get('error'))
    <div class="row">
        <div class="col-sm-12">
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        </div>
    </div>
@endif
-->
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

<!--
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
-->

@if (Session::get('productform'))
<div class="alert alert-success animate__animated animate__slideInRight">
    {{ Session::get('productform') }}
</div>
@endif  
@if (Session::get('failures'))
   <div class="alert alert-danger" role="alert">
      <strong>Errors:</strong>
      <ul>
         @foreach (Session::get('failures') as $failure)
            @foreach ($failure->errors() as $error)
                <li>{{ $error }}</li>
            @endforeach
         @endforeach
      </ul>
   </div>
@endif

@if(count($errors->getMessages()) > 0)
<div class="alert alert-danger alert-dismissible" role="alert">
    <strong>Validation Errors:</strong>
    <ul>
        @foreach($errors->getMessages() as $errorMessages)
            @foreach($errorMessages as $errorMessage)
                <li>
                    {{ $errorMessage }}
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                </li>
            @endforeach
        @endforeach
    </ul>
</div>@endif
@if (Session::get('tempDelete'))
<div class="alert alert-success animate__animated animate__slideInRight">
    {{ Session::get('tempDelete') }}
</div>
@endif   
@if (Session::get('csvmessage'))
<div class="alert alert-success animate__animated animate__flash">
<div class="row">
    <div class="col-sm-6">{{ Session::get('csvmessage') }}</div>
</div>
</div>
@endif 
<!--
@if (Session::get('message'))
<div class="alert alert-success animate__animated animate__flash">
<div class="row">
    <div class="col-sm-6">{{ Session::get('message') }}</div>
</div>
</div>
@endif
--> 
@if (Session::get('tempEdit'))
<div class="alert alert-success animate__animated animate__flash">
<div class="row">
    <div class="col-sm-6">{{ Session::get('tempEdit') }}</div>
</div>
</div>
@endif
@if (Session::get('error'))
<div class="alert alert-danger animate__animated animate__flash">
<div class="row">
    <div class="col-sm-12">{{ Session::get('error') }}</div>
</div>
</div>
@endif
@if (Session::get('admin.productsLoaded'))
<div class="alert alert-success animate__animated animate__flash">
<div class="row">
    <div class="col-sm-6">{{ Session::get('admin.productsLoaded') }}</div> 
    <a href="{{ route('admin_products.index') }}">View Products</a>
</div>
</div>
@endif  
@if (Session::get('admin.legoproductsLoaded'))
<div class="alert alert-success animate__animated animate__flash">
<div class="row">
    <div class="col-sm-6">{{ Session::get('admin.legoproductsLoaded') }}</div> 
    <a href="{{ route('lego_minifigures_form.index') }}">View Products</a>
</div>
</div>
@endif  
@if (Session::get('admin.hottoysproductsLoaded'))
<div class="alert alert-success animate__animated animate__flash">
<div class="row">
    <div class="col-sm-6">{{ Session::get('admin.hottoysproductsLoaded') }}</div> 
    <a href="{{ route('hotToys.index') }}">View Products</a>
</div>
</div>
@endif  
@if (Session::get('csverror'))
<div class="alert alert-danger animate__animated animate__flash">
    <div class="row">
        <div class="col-sm-12">{{ Session::get('csverror') }}
            <p>ERROR IN THIS ROW : ON LINE ({{ Session::get('line') }})</p>
            <p>
            @foreach (Session::get('row') as $item)
            <u>{{ $item }}</u> |
            @endforeach
            </p>
        </div>
    </div>
</div>    
@endif

@if (Session::get('csverror123'))
<div class="alert alert-danger animate__animated animate__flash">
    <div class="row">
        <div class="col-sm-12">{{ Session::get('csverror') }}
            <p>Toy Hash Already Exists:</p>
            <p>ERROR IN THIS ROW:</p>
            <p>
            @foreach (Session::get('row') as $item)
            <p>
                Product Name : <u>{{ $item->name }}</u> |
                Category Name : <u>{{ $item->category_name }}</u> |
                Series Name : <u>{{ $item->series }}</u> |
                <b>Toy Hash : <u>{{ $item->toy_hash }}</u> </b>|        
             </p>
            @endforeach
            </p>
        </div>
    </div>
</div>    
@endif

@if (Session::get('admincsverror'))
<div class="alert alert-danger animate__animated animate__flash">
    <div class="row">
        <div class="col-sm-12">{{ Session::get('admincsverror') }}
            <p>ERROR IN THIS PRODUCT : ({{ Session::get('name') }})</p>
            <p>
            @foreach (Session::get('rows') as $item)
            <u>{{ $item }}</u> |
            @endforeach
            </p>
        </div>
    </div>
</div>    
@endif

@if (Session::get('toy_hash_error'))
<div class="alert alert-danger animate__animated animate__flash">
    <div class="row">
        <div class="col-sm-12"><b>{{ Session::get('toy_hash_error') }}</b>
            <p>ERROR IN THIS PRODUCT </p>
            <p>
               Product Name : <u>{{ Session::get('rows')->name }}</u> |
               Category Name : <u>{{ Session::get('rows')->category_name }}</u> |
               Series Name : <u>{{ Session::get('rows')->series }}</u> |
               <b>Toy Hash : <u>{{ Session::get('rows')->toy_hash }}</u> </b>|        
            </p>
        </div>
    </div>
</div>    
@endif

@if (Session::get('admin_products_edit'))
<div class="alert alert-success animate__animated animate__flash">
<div class="row">
    <div class="col-sm-6">{{ Session::get('admin_products_edit') }}</div> 
    <div class="col-sm-6 text-right">
        <a class="btn btn-danger" href="{{ route('admin_products.show', Session::get('product_id')) }}">View Product</a>
    </div>
</div>
</div>
@endif  


@if (Session::get('user_created'))
<div class="alert alert-success animate__animated animate__slideInRight">
    {{ Session::get('user_created') }}
</div>
@endif 

@if (Session::get('lego_minifigures_imported'))
<div class="alert alert-success animate__animated animate__slideInRight">
    {{ Session::get('lego_minifigures_imported') }} 
</div>
@endif 

@if (Session::get('hot_toys_imported'))
<div class="alert alert-success animate__animated animate__slideInRight">
    {{ Session::get('hot_toys_imported') }}
</div>
@endif 

@if (Session::get('limit_exceeded_lego_mf'))
<div class="alert alert-danger animate__animated animate__slideInRight">
    {{ Session::get('limit_exceeded_lego_mf') }}
</div>
@endif 

@if (Session::get('user_deleted'))
<div class="alert alert-success animate__animated animate__slideInRight">
    {{ Session::get('user_deleted') }}
</div>
@endif 


