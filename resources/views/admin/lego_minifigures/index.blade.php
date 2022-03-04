@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="row p-2">
                <div class="col-sm-3">
                    <a href="{{ $products->PreviousPageUrl() }}">
                        <button class="btn btn-primary btn-sm">Previous</button>
                    </a>
                </div>
                <div class="col-sm-6 text-center">
                    <h3 class="m-0 font-weight-bold text-primary">All Lego MiniFigures Products</h3>
                    <p>Total <b>{{ $products->total() }}</b> | <b>{{ $products->count() }}</b> In This Page | Current Page <b> {{ $products->currentPage() }} </b> </p>        
                </div>
                <div class="col-sm-3 text-right">
                    <a href="{{ $products->NextPageUrl() }}">
                        <button class="btn btn-primary btn-sm">Next</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            @include('admin.partials.alert')
            <div class="card shadow mb-4">
                <div class="table-responsive">
                    <table class="table card-body table-condensed table-hover table-striped table-bordered">
                        <thead>
                            <tr class="text-primary">
                                <th>Action</th>
                                <th>Name</th>
                                <th>Fig_Num</th>
                                <th>Num_Parts</th>
                                <th>Visibility</th>
                                <th>Image1</th>
                                <th>Image2</th>
                                <th>Image3</th>
                                <th>Image4</th>
                                <th>Image5</th>
                                <th>Created_At</th>  
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-6 text-center">
                                            <a href="{{ route('lego_minifigures_form.edit', $product->id) }}"><i class="fas fa-edit"></i></a>
                                        </div>
                                        <div class="col-sm-6 text-center p-0 m-0">
                                           <form action="{{ route('lego_minifigures_form.destroy', $product->id) }}" method="POST">
                                               @csrf
                                               @method('DELETE')
                                               <button type="submit" style="border: none;background:none;" onclick="return confirm('Are you sure you want to delete this product?');">
                                                   <i class="fas fa-trash" style="color:rgb(247, 108, 108)"></i>
                                               </button>
                                           </form>
                                        </div>
                                    </div>
                                </td>
                                <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;">
                                    <a href="{{ route('admin_products.show', $product->id) }}">
                                        {{ $product->name }}
                                    </a>
                                </td>
                                <td>{{ $product->lego_mf_fig_num }}</td>
                                <td>{{ $product->lego_mf_num_parts }}</td>
                                <td>
                                    @if ($product->visibility == '0')
                                        Hidden
                                    @else
                                        Visible
                                    @endif    
                                </td>  
                                <td>
                                    @if ($product->image1 <> null)
                                    <img src="{{ asset($product->image1) }}" alt="" style="width:70px;height:50px">                                        
                                    @else
                                        N/A
                                    @endif
                                </td> 
                                <td>
                                    @if ($product->image2 <> null)
                                    <img src="{{ asset($product->image2) }}" alt="" style="width:70px;height:50px">                                        
                                    @else
                                        N/A
                                    @endif
                                </td> 
                                <td>
                                    @if ($product->image3 <> null)
                                    <img src="{{ asset($product->image3) }}" alt="" style="width:70px;height:50px">                                        
                                    @else
                                        N/A
                                    @endif
                                </td> 
                                <td>
                                    @if ($product->image4 <> null)
                                    <img src="{{ asset($product->image4) }}" alt="" style="width:70px;height:50px">                                        
                                    @else
                                        N/A
                                    @endif
                                </td> 
                                <td>
                                    @if ($product->image5 <> null)
                                    <img src="{{ asset($product->image5) }}" alt="" style="width:70px;height:50px">                                        
                                    @else
                                        N/A
                                    @endif
                                </td> 
                                <td>{{ $product->created_at->diffForHumans() }}</td>  
                            </tr>
                            @empty
                                <h3 class="m-0 font-weight-bold text-center">No Products Added Yet!</h3>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>      
    </div>
</div>
@endsection