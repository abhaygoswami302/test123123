@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-8 p-4">
            <h3 class="m-0 font-weight-bold text-primary">Lego MiniFigures CSV Upload </h3>
        </div>
        <div class="col-xl-4 text-right p-4">
            <a href="{{ route('admin.csv.create') }}">
                <button class="btn btn-primary">Upload Hot Wheels CSV</button>
            </a>
        </div>

        <div class="col-xl-12">
            <div class="card shadow mb-4">
                <div class="card-header text-primary font-weight-bold">Lego MiniFigures CSV UPLOAD</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3 pt-3">
                            @if (count($temporaries) > 0)
                                <a href="{{ route('lego_minifigures.index') }}">
                                    <button class="btn btn-primary">Upload Products</button>
                                </a>
                            @endif
                        </div>
                        <div class="col-sm-9">
                            <form action="{{ route('lego_minifigures.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-5 offset-1">
                                        <label for="file"> Upload Lego Minifigures CSV File</label>
                                        <input type="file" name="file" id="" class="my-2 text-center" required>
                                    </div>
                                    <div class="col-sm-6 pt-2">
                                        <div class="VwBtn">
                                            <button class="btn btn-primary text-white mb-2" 
                                            type="submit" >Upload Lego MiniFigures CSV</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.partials.alert')


        </div>
        <div class="col-xl-12 py-4">     
            @if (count($temporaries) > 0)
           
            <div class="col-sm-12">
                <div class="row p-2">
                    <div class="col-sm-2">
                        <a href="{{ $temporaries->PreviousPageUrl() }}">
                            <button class="btn btn-primary btn-sm">Previous</button>
                        </a>
                    </div>
                    <div class="col-sm-8 text-center">
                        <h3 class="m-0 font-weight-bold text-primary">Temporary Lego MiniFigures Products</h3>
                        <p>Total <b>{{ $temporaries->total() }}</b> | <b>{{ $temporaries->count() }}</b> In This Page | Current Page <b> {{ $temporaries->currentPage() }} </b> </p>        
                    </div>
                    <div class="col-sm-2 text-right">
                        <a href="{{ $temporaries->NextPageUrl() }}">
                            <button class="btn btn-primary btn-sm">Next</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card shadow table-responsive">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-8">Temporary Products Uploaded By ADMIN</div>
                        <div class="col-sm-4 text-right">
                            <form action="{{ route('admin.destroy_temp_products') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"  class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete all temporary products?');">
                                    <i class="fas fa-trash" style="color:white"></i> Delete All Temporary Products
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <table class="card-body table table-hover table-striped table-bordered ">
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
                        @forelse ($temporaries as $temp)
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <a href="{{ route('lego_minifigures.edit', $temp->id) }}"><i class="fas fa-edit"></i></a>
                                    </div>
                                    <div class="col-sm-6 text-center p-0 m-0">
                                       <form action="{{ route('lego_minifigures.destroy', $temp->id) }}" method="POST">
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
                                <a href="{{ route('admin_products.show', $temp->id) }}">
                                    {{ $temp->name }}
                                </a>
                            </td>
                            <td>{{ $temp->lego_mf_fig_num }}</td>
                            <td>{{ $temp->lego_mf_num_parts }}</td>
                            <td>
                                @if ($temp->visibility == '0')
                                    Hidden
                                @else
                                    Visible
                                @endif    
                            </td> 
                            <td>
                                @if ($temp->image1 <> null)
                                <img src="{{ asset($temp->image1) }}" alt="" style="width:70px;height:50px">                                        
                                @else
                                    N/A
                                @endif
                            </td> 
                            <td>
                                @if ($temp->image2 <> null)
                                <img src="{{ asset($temp->image2) }}" alt="" style="width:70px;height:50px">                                        
                                @else
                                    N/A
                                @endif
                            </td> 
                            <td>
                                @if ($temp->image3 <> null)
                                <img src="{{ asset($temp->image3) }}" alt="" style="width:70px;height:50px">                                        
                                @else
                                    N/A
                                @endif
                            </td> 
                            <td>
                                @if ($temp->image4 <> null)
                                <img src="{{ asset($temp->image4) }}" alt="" style="width:70px;height:50px">                                        
                                @else
                                    N/A
                                @endif
                            </td> 
                            <td>
                                @if ($temp->image5 <> null)
                                <img src="{{ asset($temp->image5) }}" alt="" style="width:70px;height:50px">                                        
                                @else
                                    N/A
                                @endif
                            </td>  
                            <td>{{ $temp->created_at->diffForHumans() }}</td>  
                        </tr>
                        @empty
                        <div class="row">
                            <div class="col-sm-12">
                                <p>
                                    <h4 class="alert alert-info text-center">No Products Added By You Yet!</h4>
                                </p>
                            </div>
                        </div>                       
                        @endforelse

                        
                    </tbody>
                </table>
            </div>
            
            @else
            <div class="row">
                <div class="col-sm-12">
                    <p>
                        <h4 class="alert alert-info text-center">No Temporary Product Here</h4>
                    </p>
                </div>
            </div>
            @endif
           
            </div>
    </div>
</div>
@endsection