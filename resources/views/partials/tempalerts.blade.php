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
@if (Session::get('message'))
<div class="alert alert-success animate__animated animate__flash">
<div class="row">
    <div class="col-sm-6">{{ Session::get('message') }}</div>
</div>
</div>
@endif 
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
@if (Session::get('productsLoaded'))
<div class="alert alert-success animate__animated animate__flash">
<div class="row">
    <div class="col-sm-6">{{ Session::get('productsLoaded') }}</div> <a href="{{ route('userproduct.index') }}">View My Products</a>
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
