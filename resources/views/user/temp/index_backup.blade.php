@extends('layouts.users')

@section('content')
<div class="container">
    <div class="row bg-container">
        <div class="col-lg-12">
            <div class="TProMn">
                    <ul>
                        <li>
                            <div class="TProMnRpt">
                                <div class="VwBtn">
                                    <a href="{{ route('tempLoadProducts') }}">
                                         <button class="glow-on-hover btn btn-1 text-white mb-2" 
                                        type="submit">Upload Products</button>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <form action="{{ route('tempImport') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="TProMnRpt">
                                <label for="photos"> Upload Product Images</label>
                                <input type="file" name="photos[]" id="" required multiple  class="my-2 text-center" required>
                            </div>
                        </li>
                        <li>
                            <div class="TProMnRpt">
                                <label for="file"> Upload Product CSV File</label>
                                <input type="file" name="file" id="" class="my-2 text-center" required>
                            </div>
                        </li>
                        <li>
                            <div class="TProMnRpt">
                                <div class="VwBtn">
                                    <button class="glow-on-hover btn btn-1 text-white mb-2" 
                                    type="submit" >Upload CSV</button>
                                </div>
                            </div>
                        </form>

                        </li>
                        <li>
                            <div class="TProMnRpt">
                                @if (count($temporaries) == 0)
                                <div class="VwBtn">
                                    <button class="glow-on-hover btn btn-1 text-white mb-2"  data-toggle="modal" data-target="#exampleModal">Help</button>
                                </div>
                                @endif
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">CSV Upload Guide</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ asset('images/screenshot.png') }}" alt="" style="width: 100%; float:left;">
                                        <br>
                                        <br>
                                            Suppose you have hundreds of records for products. Uploading CSV file is good option here. We`ve divided csv upload in 2 parts. First you upload images for your products. Then add these coresponding product image names in IMAGE field of csv file. It`ll automatically fetch those images and map those images with corresponding  names.  
                                        <br>
                                        <p><h5 class="text-center"><b>Step 1</b></h5></p>
                                        <p>
                                            It is multiple image selection field. Click on it youll have option to select multiple images. Select images of your choice click ok.You can only upload JPG, JPEG and PNG format images.
                                        </p>
                                        <p><h5 class="text-center"><b>Step 2</b></h5></p>
                                        <p>
                                            Here you can upload Your CSV file. CSV File Format is: <br>
                                            <b>
                                            name category_name subseries_name theme model_name year colour tampo decoration base_colour type window_colour interior_colour wheel_type visibility country notes image
                                            </b>
                                            <br></p>
                                            Required Fields:<br>
                                            <b>name category_name subseries_name theme  year colour wheel_type visibility country</b>
                                            <br></p>
                                            <h6>
                                            <b>All Other Fields Are optional</b>
                                            </h6>
                                        </p>
                                        <p><h5 class="text-center"><b>Step 3</b></h5></p>
                                        <p>
                                            Click on "Upload CSV" , if everything went you`ll see your uploaded product listing in the temporary table below. you`ll have 2 options here : Edit and delete.
                                            This listing is exact replica of how you`ll see your product listing in actual website. If you`re happy with your list , go to step 4

                                            <br><br>
                                            <h6><b>Note : The Listing in temporary table will not be visibile in Actual Products listing on website.</b></h6>
                                        </p>
                                        <p><h5 class="text-center"><b>Step 4</b></h5></p>
                                        <p>
                                            Here you can click on Upload Products , your temporary products listing will be added to your actual product listing on website.    
                                        </p>
                                        <p><h5 class="text-center"><b>Step 5</b></h5></p>
                                        <p>You`re always welcome here if you need any help with CSV Upload. <!-- ` --></p>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </li>
                    </ul>
            </div>
        </div>

        <div class="col-sm-12">
            @include('partials.tempalerts')
<!-- 
            <form action="{{ route('tempImport') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-3 offset-2">
                        <label for="photos"> Upload Product Images</label>
                        <input type="file" name="photos[]" id="" required multiple  class="my-2 text-center" required>
                    </div>
                    <div class="col-sm-3">
                        <label for="file"> Upload Product CSV File</label>
                        <input type="file" name="file" id="" class="my-2 text-center" required>
                    </div>
                    <div class="col-sm-2">
                        <div class="VwBtn">
                            <button class="glow-on-hover btn btn-1 text-white mb-2" 
                            type="submit" >Upload CSV</button>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </form>
        -->
        </div>

        <div class="col-xl-12 py-4">     
        @if (count($temporaries) > 0)
       
        <div class="card table-responsive">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-8">Temporary Products Uploaded By CSV</div>
                    <div class="col-sm-4 text-right">
                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">Help</button>
                    </div>
                </div>
            </div>
            <table class="card-body table table-hover table-striped table-bordered ">
                <thead>
                    <tr>
                        <!--th>user_id</th>
                        <th>collection_id</th>
                        <th>category_id</th>
                        <th>subseries_id</th>
                        <th>theme_id</th--> 
                        <th>Action</th>
                        <th>Name</th>
                        <th>Series</th>
                        <th>Category_name</th>
                        <th>Collection_name</th>
                        <th>Subseries_name</th>
                        <th>Theme</th>
                        <th>Casting_name</th>  
                        <th>Model_name</th>
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
                        <th>Notes</th>  
                        <th>Toy#</th>  
                        <th>Col#</th>  
                        <th>Series#</th>  
                        <th>Class</th>  
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
                        <!--td>{{ $temp->user_id }}</td>
                        <td>{{ $temp->collection_id }}</td>
                        <td>{{  $temp->category_id }}</td>
                        <td>{{ $temp->subseries_id }}</td>
                        <td>{{ $temp->theme_id }}</td--> 
                        <td>
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="{{ route('tempShow', $temp->id) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <form action="{{ route('tempDelete', $temp->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-1" style="border:none;background:transparent" onclick="return confirm('Are you sure you want to delete this product?')"><i class="fas fa-trash" style="color:rgb(253, 129, 129)"></i></button>
                                    </form>
                                    </div>
                            </div>
                        </td>
                        <td>{{ $temp->name }}</td>
                        <td>{{ $temp->series }}</td>
                        <td>{{ $temp->category_name }}</td>
                        <td>{{ $temp->collection_name }}</td>
                        <td>{{ $temp->subseries_name }}</td>
                        <td>{{ $temp->theme }}</td>
                        <td>{{ $temp->casting_name }}</td>  
                        <td>{{ $temp->model_name }}</td>
                        <td>{{ $temp->year }}</td>  
                        <td>{{ $temp->colour }}</td>  
                        <td>{{ $temp->tampo }}</td>  
                        <!--td>{{ $temp->decoration }}</td-->  
                        <td>{{ $temp->base_colour }}</td>  
                        <td>{{ $temp->type }}</td>  
                        <td>{{ $temp->window_colour }}</td>  
                        <td>{{ $temp->interior_colour }}</td>  
                        <td>{{ $temp->wheel_type }}</td>  
                        <td>
                            @if ($temp->visibility == '0')
                                Hidden
                            @else
                                Visible
                            @endif    
                        </td>  
                        <td>{{ $temp->country }}</td>  
                        <td>{{ substr($temp->notes , 0, 20)}}</td>  
                        <td>{{ $temp->toy_hash }}</td>
                        <td>{{ $temp->col_hash }}</td>
                        <th>{{ $temp->series_hash }}</th>  
                        <th>{{ $temp->class }}</th>  
                        <th>
                            @if ($temp->image1 <> null)
                            <img src="{{ asset($temp->image1) }}" alt="" style="width:70px;height:50px">
                            @endif
                        </th>  
                        <th>
                            @if ($temp->image2 <> null)
                            <img src="{{ asset($temp->image2) }}" alt="" style="width:70px;height:50px">
                            @endif
                        </th>  
                        <th>
                            @if ($temp->image3 <> null)
                            <img src="{{ asset($temp->image3) }}" alt="" style="width:70px;height:50px">
                            @endif
                        </th>  
                        <th>
                            @if ($temp->image4 <> null)
                            <img src="{{ asset($temp->image4) }}" alt="" style="width:70px;height:50px">
                            @endif    
                        </th>  
                        <th>
                            @if ($temp->image5 <> null)
                            <img src="{{ asset($temp->image5) }}" alt="" style="width:70px;height:50px">
                            @endif
                        </th>  
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
                    <h4 class="alert alert-danger text-center">No Temporary Product Here</h4>
                </p>
            </div>
        </div>
        @endif
       
        </div>

        </div>

    </div>
</div>
@endsection