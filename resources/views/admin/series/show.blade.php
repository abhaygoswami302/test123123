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
                    <h3 class="m-0 font-weight-bold text-primary">All Products in <b>{{ $series->series_name }}</h3>
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
            <div class="card shadow mb-4">
                <div class="table-responsive">
                    <table class="table card-body table-hover table-striped table-bordered">
                        <thead>
                            <tr class="text-primary">
                                <th>Action</th>
                                <th>Image_1</th>
                                <th>Name</th>
                                <th>Series</th>
                                <th>Category_name</th>
                                <th>Collection_name</th>
                                <th>Subseries_name</th>
                                <th>Theme</th>
                                <th>Model_name</th>
                                <th>Casting_name</th>  
                                <th>Year</th>  
                                <th>Colour</th>  
                                <th>Tampo</th>  
                                <!--th>Decoration</th-->  
                                <th>Base_Colour</th>  
                                <th>Type</th>  
                                <th>Window_Colour</th>  
                                <th>Interior_Colour</th>  
                                <th>Wheel_Type</th>  
                                <th>Visibility</th>  
                                <th>Country</th>  
                                <th>Class</th>  
                                <th>Notes</th>  
                                <th>Toy#</th>
                                <th>Col#</th>
                                <th>Series#</th>
                                <th>Image_2</th>
                                <th>Image_3</th>
                                <th>Image_4</th>
                                <th>Image_5</th>
                                <th>Created_At</th>  
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-6 text-center">
                                            <a href="{{ route('admin_products.edit', $product->id) }}"><i class="fas fa-edit"></i></a>
                                        </div>
                                        <div class="col-sm-6 text-center p-0 m-0">
                                           <form action="{{ route('admin_products.destroy', $product->id) }}" method="POST">
                                               @csrf
                                               @method('DELETE')
                                               <button type="submit" style="border: none;background:none;" onclick="return confirm('Are you sure you want to delete this product?');">
                                                   <i class="fas fa-trash" style="color:rgb(247, 108, 108)"></i>
                                               </button>
                                           </form>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    @if ($product->image1 <> null)
                                    <img src="{{ asset($product->image1) }}" alt="" style="width:70px;height:50px">                                        
                                    @else
                                        N/A
                                    @endif
                                </td>  
                                <td>
                                    <a href="{{ route('admin_products.show', $product->id) }}">
                                        {{ $product->name }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.series.show.custom', $product->series) }}">
                                        {{ $product->series }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin_categories.show', $product->category_id) }}">
                                        <b>{{ $product->category_name }}</b>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin_collections.show', $product->collection_id) }}">
                                        {{ $product->collection_name }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.series.show.custom',[ $product->category_name, $product->subseries_name]) }}">
                                        {{ $product->subseries_name }}
                                    </a>
                                </td>
                                <td>
                                    @if ($product->theme_id <> null)
                                    <a href="{{ route('admin_themes.show', $product->theme_id) }}">
                                        {{ $product->theme }}
                                    </a>
                                    @else
                                        {{ $product->theme }}
                                    @endif
                                </td>
                                <td>{{ $product->model_name }}</td>
                                <td>{{ $product->casting_name }}</td>  
                                <td>{{ $product->year }}</td>  
                                <td>{{ $product->colour }}</td>  
                                <td>{{ $product->tampo }}</td>  
                                <!--td>{{ $product->decoration }}</td-->  
                                <td>{{ $product->base_colour }}</td>  
                                <td>{{ $product->type }}</td>  
                                <td>{{ $product->window_colour }}</td>  
                                <td>{{ $product->interior_colour }}</td>  
                                <td>{{ $product->wheel_type }}</td>  
                                <td>
                                    @if ($product->visibility == '0')
                                        Hidden
                                    @else
                                        Visible
                                    @endif    
                                </td>  
                                <td>{{ $product->country }}</td>  
                                <td>{{ $product->class }}</td>  
                                <td>{{ substr($product->notes , 0, 20)}}</td>  
                                <td>{{ $product->toy_hash }}</td>
                                <td>{{ $product->col_hash }}</td>
                                <td>{{ $product->series_hash }}</td>
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