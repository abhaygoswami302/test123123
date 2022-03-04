@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row p-2" style="border: 1px solid rgb(219, 218, 218);">

            <div class="col-sm-2 text-center" style="border-right: 1px solid rgb(219, 218, 218);">
                <img src="
                    @if ($user->image == NULL)
                    {{ asset('images/admin/undraw_profile.svg') }} 
                    @else
                    {{ asset($user->image) }}
                    @endif 
                " alt="Profile Picture" 
                style="width:100px;height:100px">
            </div>
            <div class="col-sm-10">
                <div class="row py-4">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2">
                        <b>Name :</b>
                    </div>
                    <div class="col-sm-2 text-left">
                    {{ $user->name }}
                    </div>
                    <div class="col-sm-1 text-left">
                        <b>Email :</b>
                    </div>
                    <div class="col-sm-5 text-left">
                        {{ $user->email }}
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2">
                        <b>Membership :</b>
                    </div>
                    <div class="col-sm-2 text-left">
                        {{ $user->membership }}
                    </div>
                    <div class="col-sm-2 text-left">
                        <b>Total Products :</b>
                    </div>
                    <div class="col-sm-4 text-left">
                    <b>{{ $products->total() }}</b> Products | <b> {{ $products->count() }} </b>  in this page
                    </div>
                    <div class="col-sm-2 offset-1">
                        <b>User Type:</b>
                    </div>
                    <div class="col-sm-2">
                        @if ($user->flag == '2' || $user->flag == '3')
                            User
                        @elseif($user->flag == '11')
                            Editor
                        @elseif($user->flag == '21')
                            Contributor
                        @endif
                    </div>
                    <div class="col-sm-5">
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-block"  onclick="return confirm('Are you sure you want to delete this user?');">
                                Delete User
                            </button>
                        </form>
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="row p-4">
                    <div class="col-sm-2 p-2">
                        <a href="{{ $products->previousPageUrl() }}">
                            <button class="btn btn-outline-primary btn-sm">Previous</button>
                        </a>
                    </div>
                    <div class="col-sm-8 text-center">
                        <h2 class="m-0 font-weight-bold text-primary">
                            @if ($user->flag == '21')
                                All Products Modified By <b>{{ $user->name }}</b>
                            @else
                                All Products Added By <b>{{ $user->name }}</b>
                            @endif
                        </h2>
                    </div>
                    <div class="col-sm-2 text-right p-2">
                        <a href="{{ $products->nextPageUrl() }}">
                            <button class="btn btn-outline-primary btn-sm">Next</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-4">
                <!-- Illustrations -->
                @if (count($products) > 0)
                <div class="card shadow mb-4">
                    <div class="table-responsive ">
                        <table class="table card-body table-hover table-striped table-bordered">
                            <thead>
                              <tr class="text-primary">
                                <th scope="col">Action</th>
                                <th scope="col">Name</th>
                                <th scope="col">Collection Name</th>
                                <th scope="col">Series</th>
                                <th scope="col">Theme</th>
                                <th scope="col">Year</th>
                                <th scope="col">Image</th>
                                <th scope="col">Created At</th>
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
                                    <td><a href="{{ route('admin_products.show', $product->id) }}">{{ $product->name }}</a></td>
                                    <td scope="row">
                                        <a href="{{ route('admin_collections.index') }}">
                                            {{ $product->collection_name }}
                                        </a>
                                    </td>
                                    <td>{{ $product->series }}</td>
                                    <td>{{ $product->theme }}</td>
                                    <td>{{ $product->year }}</td>
                                    <td>
                                        @if ($product->image1 <> null)
                                        <img src="{{ asset($product->image1) }}" alt="" style="width: 65px;height:50px">
                                        @else
                                        N/A
                                        @endif
                                    </td>
                                    <td>{{ $product->created_at->diffForHumans() }}</td>
                                </tr>                        
                                @empty
                                <div class="col-sm-12 text-center p-2">
                                    @if ($user->flag == '21')
                                    <h3 class="">No Products Modified By <b>{{ $user->name }}</b> Yet!</h3>
                                    @else
                                    <h3 class="">No Products Added By <b>{{ $user->name }}</b> Yet!</h3>
                                    @endif
                                </div>
                                @endforelse
                            </tbody>
                          </table>
        
                          
                    </div>
                </div>
                @else
                <div class="col-sm-12 text-center p-2">
                    @if ($user->flag == '21')
                    <h3 class="alert alert-info">No Products Modified By <b>{{ $user->name }}</b> Yet!</h3>
                    @else
                    <h3 class="alert alert-info">No Products Added By <b>{{ $user->name }}</b> Yet!</h3>
                    @endif
                </div>
                @endif
        
            </div>
        </div>
    </div>
@endsection