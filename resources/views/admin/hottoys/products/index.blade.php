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
                    <h3 class="m-0 font-weight-bold text-primary">All Hot Toys Products</h3>
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
                                <th>Category_Name</th>
                                <th>Collection</th>
                                <th>Subseries</th>
                                <th>Year</th>
                                <th>Model_Name</th>
                                <th>Toy_Hash</th>
                                <th>Notes</th>
                                <th>Visibility</th>
                                <th>Image1</th>
                                <th>Image2</th>
                                <th>Image3</th>
                                <th>Image4</th>
                                <th>Image5</th>
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
                                <th>Created_At</th>  
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-6 text-center">
                                            <a href="{{ route('hotToys.edit', $product->id) }}"><i class="fas fa-edit"></i></a>
                                        </div>
                                        <div class="col-sm-6 text-center p-0 m-0">
                                           <form action="{{ route('hotToys.destroy', $product->id) }}" method="POST">
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
                                <td>
                                    <a href="{{ route('admin_categories.show', $product->category_id) }}">
                                        {{ $product->category_name }}
                                    </a>
                                </td>
                                <td>
                                        {{ $product->collection_name }}
                                </td>
                                <td>
                                    <a href="{{ route('admin_series.show', $product->subseries_id) }}">
                                        {{ $product->subseries_name }}
                                    </a>
                                </td>
                                <td>{{ $product->year }}</td>
                                <td>{{ $product->model_name }}</td>
                                <td>{{ $product->toy_hash }}</td>
                                <td>{{ substr($product->notes, 0, 180) }}...</td>
                                <td>
                                    @if ($product->visibility == '0')
                                        Hidden
                                    @else
                                        Visible
                                    @endif    
                                </td>  

                                <td> @if($product->image1 <> null) <img src="{{ asset($product->image1) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->image2 <> null) <img src="{{ asset($product->image2) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->image3 <> null) <img src="{{ asset($product->image3) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->image4 <> null) <img src="{{ asset($product->image4) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->image5 <> null) <img src="{{ asset($product->image5) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image6 <> null) <img src="{{ asset($product->productImage->image6) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image7 <> null) <img src="{{ asset($product->productImage->image7) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image8 <> null) <img src="{{ asset($product->productImage->image8) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image9 <> null) <img src="{{ asset($product->productImage->image9) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image10 <> null) <img src="{{ asset($product->productImage->image10) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image11 <> null) <img src="{{ asset($product->productImage->image11) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image12 <> null) <img src="{{ asset($product->productImage->image12) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image13 <> null) <img src="{{ asset($product->productImage->image13) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image14 <> null) <img src="{{ asset($product->productImage->image14) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image15 <> null) <img src="{{ asset($product->productImage->image15) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image16 <> null) <img src="{{ asset($product->productImage->image16) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image17 <> null) <img src="{{ asset($product->productImage->image17) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image18 <> null) <img src="{{ asset($product->productImage->image18) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image19 <> null) <img src="{{ asset($product->productImage->image19) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image20 <> null) <img src="{{ asset($product->productImage->image20) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image21 <> null) <img src="{{ asset($product->productImage->image21) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image22 <> null) <img src="{{ asset($product->productImage->image22) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image23 <> null) <img src="{{ asset($product->productImage->image23) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image24 <> null) <img src="{{ asset($product->productImage->image24) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image25 <> null) <img src="{{ asset($product->productImage->image25) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image26 <> null) <img src="{{ asset($product->productImage->image26) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image27 <> null) <img src="{{ asset($product->productImage->image27) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image28 <> null) <img src="{{ asset($product->productImage->image28) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image29 <> null) <img src="{{ asset($product->productImage->image29) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image30 <> null) <img src="{{ asset($product->productImage->image30) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image31 <> null) <img src="{{ asset($product->productImage->image31) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image32 <> null) <img src="{{ asset($product->productImage->image32) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image33 <> null) <img src="{{ asset($product->productImage->image33) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image34 <> null) <img src="{{ asset($product->productImage->image34) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image35 <> null) <img src="{{ asset($product->productImage->image35) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image36 <> null) <img src="{{ asset($product->productImage->image36) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image37 <> null) <img src="{{ asset($product->productImage->image37) }}" style="width:70px;height50px;"> @else N/A @endif </td>
                                <td> @if($product->productImage->image38 <> null) <img src="{{ asset($product->productImage->image38) }}" style="width:70px;height50px;"> @else N/A @endif </td>
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