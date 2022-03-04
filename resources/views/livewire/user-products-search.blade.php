<div class="row">
    <div class="col-xl-12 p-2">
        <form action="">
            <input type="text" name="search" class="SrchHdr form-control" 
            placeholder="Search Your Products, Categories, Series And Toy Hash Here" wire:model="searchTerm">
        </form>
    </div>

    <div class="col-xl-12">
        @include('partials.alert')
        <div class="card">
            <div class="table-responsive">
                <table class="card-body table table-hover table-striped table-bordered ">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Name</th>
                            <th>Series</th>
                            <th>Category_Name</th>
                            <th>Collection_Name</th>
                            <th>Subseries_Name</th>
                            <th>Theme</th>
                            <th>Model_Name</th>
                            <th>Casting_Name</th>  
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
                            <th>Image1</th>  
                            <th>Image2</th>  
                            <th>Image3</th>  
                            <th>Image4</th>  
                            <th>Image5</th>  
                            @foreach ($products as $key => $product)
                            @if($key == 0 && $product->collection_name == 'Hot Toys')
                            <th>Image6</th>  
                            <th>Image7</th>  
                            <th>Image8</th>  
                            <th>Image9</th>  
                            <th>Image10</th>  
                            <th>Image11</th>  
                            <th>Image12</th>  
                            <th>Image13</th>  
                            <th>Image14</th>  
                            <th>Image15</th>  
                            <th>Image16</th>  
                            <th>Image17</th>  
                            <th>Image18</th>  
                            <th>Image19</th>  
                            <th>Image20</th>  
                            <th>Image21</th>  
                            <th>Image22</th>  
                            <th>Image23</th>  
                            <th>Image24</th>  
                            <th>Image25</th>  
                            <th>Image26</th>  
                            <th>Image27</th>  
                            <th>Image28</th>  
                            <th>Image29</th>  
                            <th>Image30</th>  
                            <th>Image31</th>  
                            <th>Image32</th>  
                            <th>Image33</th>  
                            <th>Image34</th>  
                            <th>Image35</th>  
                            <th>Image36</th>  
                            <th>Image37</th>  
                            <th>Image38</th>    
                            @endif
                            @endforeach
                            <!--th>Created_At</th-->  
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                        <tr>
                            <td>
                                <button  wire:click="bookmark({{ $product }})" class="btn btn-danger">
                                    Remove From My Collection
                                </button>
                            </td>
                            <td>
                                <a href="{{ route('product.show', $product->id) }}">
                                    {{ $product->name }}
                                </a>
                            </td>
                            <td>{{ $product->series }}</td>
                            <td>{{ $product->category_name }}</td>
                            <td>{{ $product->collection_name }}</td>
                            <td>{{ $product->subseries_name }}</td>
                            <td>{{ $product->theme }}</td>
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
                            <td>{!! substr($product->notes , 0, 20) !!}</td>
                            <td>{{ $product->toy_hash }}</td>
                            <td>{{ $product->col_hash }}</td>  
                            <td>{{ $product->series_hash }}</td>  
                            <td>
                                @if ($product->image1 <> null)
                                <img src="{{ asset($product->image1) }}" alt="" style="width:70px;height:50px">
                                @endif
                            </td>  
                            <td>
                                @if ($product->image2 <> null)
                                <img src="{{ asset($product->image2) }}" alt="" style="width:70px;height:50px">
                                @endif
                            </td>  
                            <td>
                                @if ($product->image3 <> null)
                                <img src="{{ asset($product->image3) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif
                            <td>
                                @if ($product->image4 <> null)
                                <img src="{{ asset($product->image4) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif
                            <td>
                                @if ($product->image5 <> null)
                                <img src="{{ asset($product->image5) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif

                            @if ($product->collection_name == 'Hot Toys')
                                
                           
                            <td>
                                @if ($product->productImage->image6 <> null)
                                <img src="{{ asset($product->productImage->image6) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif
                            <td>
                                @if ($product->productImage->image7 <> null)
                                <img src="{{ asset($product->productImage->image7) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif
                            <td>
                                @if ($product->productImage->image8 <> null)
                                <img src="{{ asset($product->productImage->image8) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif                           
                            <td>
                                @if ($product->productImage->image9 <> null)
                                <img src="{{ asset($product->productImage->image9) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif                            
                            <td>
                                @if ($product->productImage->image10 <> null)
                                <img src="{{ asset($product->productImage->image10) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif                            
                            <td>
                                @if ($product->productImage->image11 <> null)
                                <img src="{{ asset($product->productImage->image11) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif                         
                            <td>
                                @if ($product->productImage->image12 <> null)
                                <img src="{{ asset($product->productImage->image12) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif                            
                            <td>
                                @if ($product->productImage->image13 <> null)
                                <img src="{{ asset($product->productImage->image13) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif     
                            <td>
                                @if ($product->productImage->image14 <> null)
                                <img src="{{ asset($product->productImage->image14) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif                           
                            <td>
                                @if ($product->productImage->image15 <> null)
                                <img src="{{ asset($product->productImage->image15) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif                            
                            <td>
                                @if ($product->productImage->image16 <> null)
                                <img src="{{ asset($product->productImage->image16) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif                            
                            <td>
                                @if ($product->productImage->image17 <> null)
                                <img src="{{ asset($product->productImage->image17) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif                            
                            <td>
                                @if ($product->productImage->image18 <> null)
                                <img src="{{ asset($product->productImage->image18) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif                            
                            <td>
                                @if ($product->productImage->image19 <> null)
                                <img src="{{ asset($product->productImage->image19) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif                            
                            <td>
                                @if ($product->productImage->image20 <> null)
                                <img src="{{ asset($product->productImage->image20) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif                            
                            <td>
                                @if ($product->productImage->image21 <> null)
                                <img src="{{ asset($product->productImage->image21) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif                            
                            <td>
                                @if ($product->productImage->image22 <> null)
                                <img src="{{ asset($product->productImage->image22) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif      
                            <td>
                                @if ($product->productImage->image23 <> null)
                                <img src="{{ asset($product->productImage->image23) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif      
                            <td>
                                @if ($product->productImage->image24 <> null)
                                <img src="{{ asset($product->productImage->image24) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif                            
                            <td>
                                @if ($product->productImage->image25 <> null)
                                <img src="{{ asset($product->productImage->image25) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif                            
                            <td>
                                @if ($product->productImage->image26 <> null)
                                <img src="{{ asset($product->productImage->image26) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif                            
                            <td>
                                @if ($product->productImage->image27 <> null)
                                <img src="{{ asset($product->productImage->image27) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif                            
                            <td>
                                @if ($product->productImage->image28 <> null)
                                <img src="{{ asset($product->productImage->image28) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif                            
                            <td>
                                @if ($product->productImage->image29 <> null)
                                <img src="{{ asset($product->productImage->image29) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif
                            <td>
                                @if ($product->productImage->image30 <> null)
                                <img src="{{ asset($product->productImage->image30) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif                            
                            <td>
                                @if ($product->productImage->image31 <> null)
                                <img src="{{ asset($product->productImage->image31) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif         
                            <td>
                                @if ($product->productImage->image32 <> null)
                                <img src="{{ asset($product->productImage->image32) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif             
                            <td>
                                @if ($product->productImage->image33 <> null)
                                <img src="{{ asset($product->productImage->image33) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif 
                            <td>
                                @if ($product->productImage->image34 <> null)
                                <img src="{{ asset($product->productImage->image34) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif                            
                            <td>
                                @if ($product->productImage->image35 <> null)
                                <img src="{{ asset($product->productImage->image35) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif              
                            <td>
                                @if ($product->productImage->image36 <> null)
                                <img src="{{ asset($product->productImage->image36) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif                            
                            <td>
                                @if ($product->productImage->image37 <> null)
                                <img src="{{ asset($product->productImage->image37) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif                            
                            <td>
                                @if ($product->productImage->image38 <> null)
                                <img src="{{ asset($product->productImage->image38) }}" alt="" style="width:70px;height:50px"></td>  
                                @endif
                            @endif
                        <!--td>{{ $product->created_at->diffForHumans() }}</td-->  
                        </tr>
                        @empty
                        No Products Added By You Yet!
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!--div class="row p-4">
            <div class="col-sm-3 ">
                <div class="VwBtn text-left">
                    <a href="#">
                      <button class="glow-on-hover btn btn-1 text-white" type="button">Previous</button>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 offset-6 ">
                <div class="VwBtn text-right">
                    <a href="#">
                      <button class="glow-on-hover btn btn-1 text-white" type="button">Next</button>
                    </a>
                </div>
            </div>
        </div-->
    </div>
</div>