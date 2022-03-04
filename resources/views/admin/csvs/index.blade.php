@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center p-4">
                <div class="row">
                    <div class="col-sm-2">
                        @if (count($products) > 0)
                        <a href="{{ route('admin.tempLoadProducts') }}">
                            <button class="btn btn-primary">Upload Products</button>
                        </a>
                        @endif
                    </div>
                    <div class="col-sm-8">
                        <h3 class="m-0 font-weight-bold text-primary">Temporary Products Uploaded By ADMIN</h3>
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ route('admin.csv.create') }}">
                            <button class="btn btn-primary">Go Back</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 py-4">     
                @include('admin.partials.alert')
                @if (count($products) > 0)
               
                <div class="card shadow table-responsive">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-8 text-primary font-weight-bold">Temporary Products Uploaded By ADMIN</div>
                            <div class="col-sm-4 text-right">
                                <!--button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">Help</button-->
                            </div>
                        </div>
                    </div>
                    <table class="table card-body table-hover table-striped table-bordered">
                        <thead>
                            <tr class="text-primary">
                                <th>Action</th>
                                <th>Image 1</th>
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
                                <th>Image 2</th>
                                <th>Image 3</th>
                                <th>Image 4</th>
                                <th>Image 5</th>
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
                
                @else
                <div class="row">
                    <div class="col-sm-12">
                        <p>
                            <h4 class="alert alert-info text-center">No Temporary Products Added Yet!</h4>
                        </p>
                    </div>
                </div>
                @endif
               
                </div>
        </div>
    </div>
@endsection