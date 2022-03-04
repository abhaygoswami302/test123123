<div class="col-xl-12">
    <div class="CollectionGrd">
        <form action="{{ route('saveCollection.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row pb-1">
                <div class="col-sm-6 offset-3">
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <div class="form-check py-1">
                                <input type="checkbox" wire:click="allClicked({{ $flag }})" 
                                value="1" id="b">

                                <label class="form-check-label" for="b">
                                    Add All To My Products Collection
                                </label>
                            </div>
                        </div>
                        <!--div class="col-sm-6 text-left">
                            <button type="submit" class="btn btn-outline-secondary btn-sm" style="color: #4A148C;border:1px solid #4A148C;background:white" >Add To My Collection</button>
                        </div-->
                      
                    </div>
                </div>
                <div class="col-sm-3">
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover  table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Select</th>
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
                    @foreach ($products as $product)      
                    <tr>
                        <td class="text-center">
                            <div class="form-check">
                                <!--input class="form-check-input"
                                name="myproducts[{{$product->id}}]" class="select_process"
                                 value="{{$product->id}}" wire:model="selectBox"
                              type="checkbox" id="flexCheckDefault"
                                {{ $flag == '1' && $myproducts == '1' ? 'checked' : '' }} -->
                                
                                <!--input type="checkbox"  wire:click="levelClicked" name="lchecked"
                                value="{{ $product->id }}" id="a" 
                                {{ $level == "1" ? 'checked' : '' }} -->

                                <div wire:key="{{ $product->id }}">
                                    <input wire:model.defer="selectedRows.{{ $product->id }}" type="checkbox" />
                                </div>
                                
                            </div>
                        </td> 
                        <td>
                            @if ($product->image1 <> null)
                                <img src="{{ asset($product->image1) }}" alt="" style="width:70px;height:50px">                                        
                            @else
                                <img src="{{ asset('images/car_not_found.jpg') }}" alt=""  style="width:70px;height:50px">
                            @endif
                        </td>  
                        <td>
                            <a href="{{ route('product.show', $product->id) }}">
                                {{ $product->name }}
                            </a>
                        </td>
                        <td>
                            @if ($product->series <> null)
                            <a href="{{ route('byseries',$product->series) }}">
                                {{ $product->series }}
                            </a>
                            @else
                            N/A
                            @endif
                        </td>
                        <td>
                            @if ($product->casting_name <> null)
                            <a href="{{ route('category.show', $product->category_id) }}">
                                {{ $product->category_name }}
                            </a>    
                            @else
                                N/A
                            @endif                                    
                        </td>
                        <td>
                            @if ($product->collection_id <> null)
                            <a href="{{ route('collection.show', $product->collection_id) }}">
                                {{ $product->collection_name }}
                            </a>                                        
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            @if ($product->series)
                            <a href="{{ route('byseries',$product->series) }}">
                                {{ $product->subseries_name }}
                            </a>
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            @if ($product->theme_id <> null)
                            <a href="{{ route('bytheme', $product->theme_id) }}">
                                {{ $product->theme }}
                            </a>
                            @else
                                N/A
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
                    @endforeach
                    </tbody>
                  </table>
                  <div class="col-sm-6 text-left">
                    <button wire:click="doSomethingWithRows">Submit</button>

                </div>
            </div> 
        </form>
    </div>
</div>