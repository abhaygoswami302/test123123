@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">

        <div class="col-sm-12 p-2 text-center">
            <h3 class="m-0 font-weight-bold text-primary">All Product Feedbacks</h3>
        </div>

        <div class="col-lg-12 p-2">
            @include('admin.partials.alert')
            <div class="card shadow mb-4">
                <div class="table-responsive">
                    <table class="table card-body table-hover table-striped table-bordered">
                        <thead>
                            <tr class="text-primary">
                                <th>Action</th>
                                <th>User_Name</th>
                                <th>Product_Name</th>
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
                                <th>Base_Colour</th>  
                                <th>Type</th>  
                                <th>Window_Colour</th>  
                                <th>Interior_Colour</th>  
                                <th>Wheel_Type</th>  
                                <th>Country</th>  
                                <th>Class</th>  
                                <th>Notes</th>  
                                <th>Toy#</th>
                                <th>Col#</th>
                                <th>Series#</th>
                                <th>Image</th>
                                <th>Created_At</th>  
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($feedbacks as $feedback)
                            <tr>
                                <td class="text-center"> 
                                <div class="row">
                                    <div class="col-sm-6">
                                        <form action="{{ route('product.feedback.destroy',[$feedback->id, 1]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="fa fa-trash" style="color:red;background:none;border:none" ></button>
                                        </form>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                    <a href="{{ route('product.feedback.show', $feedback->id) }}">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a> 
                                    </div>
                                </div>
                                </td>
                                <td> 
                                    <a href="{{ route('admin.user.show', $feedback->user_id) }}">
                                        {{ $feedback->username }}
                                    </a> 
                                </td>
                                <td> 
                                    <a href="{{ route('admin_products.show', $feedback->product_id) }}">
                                        {{ $feedback->product_name }} 
                                    </a>
                                </td>
                                <td> {{ $feedback->name }} </td>
                                <td>{{ $feedback->series }} </td>
                                <td> {{ $feedback->category_name }}</td>
                                <td> {{ $feedback->collection_name }} </td>
                                <td> {{ $feedback->subseries_name }} </td>
                                <td> {{ $feedback->theme }}  </td>
                                <td>{{ $feedback->model_name }}</td>
                                <td>{{ $feedback->casting_name }}</td>  
                                <td>{{ $feedback->year }}</td>  
                                <td>{{ $feedback->colour }}</td>  
                                <td>{{ $feedback->tampo }}</td>  
                                <td>{{ $feedback->base_colour }}</td>  
                                <td>{{ $feedback->type }}</td>  
                                <td>{{ $feedback->window_colour }}</td>  
                                <td>{{ $feedback->interior_colour }}</td>  
                                <td>{{ $feedback->wheel_type }}</td>  
                                <td>{{ $feedback->country }}</td>  
                                <td>{{ $feedback->class }}</td>  
                                <td>{{ substr($feedback->notes , 0, 20)}}</td>  
                                <td>{{ $feedback->toy_hash }}</td>
                                <td>{{ $feedback->col_hash }}</td>
                                <td>{{ $feedback->series_hash }}</td> 
                                <td>
                                @if($feedback->image == null)
                                    N/A
                                @else 
                                    <img src="{{ asset($feedback->image) }}" style="width:150px;height:100px">
                                @endif
                                </td>
                                <td>{{ $feedback->created_at->diffForHumans() }}</td>  
                            </tr>
                            @empty
                                <h3 class="m-0 font-weight-bold text-center">No Products Added Yet!</h3>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>     




          <div class="col-sm-12 p-2 text-center">
            <h3 class="m-0 font-weight-bold text-primary">General Feedback / Collection Suggestions</h3>
        </div>

        <div class="col-lg-12 p-2">
            @include('admin.partials.alert')
            <div class="card shadow mb-4">
                <div class="table-responsive">
                    <table class="table card-body table-hover table-striped table-bordered">
                        <thead>
                            <tr class="text-primary">
                                <th>Action</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Created_At</th>  
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($suggestions as $ss)
                            <tr>
                                <td class="text-center">
                                    <form action="{{ route('product.feedback.destroy',[$ss->id, 2]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="fa fa-trash" style="color:red;background:none;border:none" ></button>
                                    </form>
                                </td>
                                <td> {{ $ss->email }} </td>
                                <td> {{ $ss->collection }} </td>
                               <td>{{ $ss->created_at->diffForHumans() }}</td>  
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