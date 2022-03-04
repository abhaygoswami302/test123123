@extends('layouts.app')

@section('content')
<section class="Plain_First guest-product-show GuestGrid guest-product-show" style="background-image: url({{ asset('images/patteren.png') }});">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 py-2">
                <ul class="breadcrumb" style="background: transparent">
                    <li><a class="active" href="{{ route('welcome') }}">Home</a></li>
                    <li><a class="active" href="{{ route('product.index') }}">Products</a></li>
                     <li><a href="{{ route('product.show', $product->id) }}">{{ ucfirst($product->name) }}</a></li>
                </ul> 
            </div>
        </div>
        <div class="row guest-product-row">
          
            <div class="col-sm-12 p-2">
                @include('partials.alert')
            </div>

            <div class="col-sm-6 p-4">
                @if ($product->image1 == null)
                    <img src="{{ asset('images/car_not_found.jpg') }}" alt="" id="my_custom_single_product_image" style="width:500px">                    
                @else
                <!--img src="{{  asset($product->image1)  }}" alt="" style="width:500px;"-->       
                
            <!-- partial:index.partial.html -->
            <div id="sync1" class="owl-carousel owl-theme">
                <div class="item">
                    <img src="{{  asset($product->image1)  }}" alt="">       
                    <!--h1>1</h1-->
                </div>
                <div class="item">
                    <img src="{{  asset($product->image2)  }}" alt="">       
                    <!--h1>2</h1-->
                </div>
                <div class="item">
                    <img src="{{  asset($product->image3)  }}" alt="">       
                    <!--h1>3</h1-->
                </div>
                <div class="item">
                    <img src="{{  asset($product->image4)  }}" alt="">       
                    <!--h1>4</h1-->
                </div>
                <div class="item">
                    <img src="{{  asset($product->image5)  }}" alt="">       
                    <!--h1>5</h1-->
                </div>
                @if($product->collection_name == 'Hot Toys')
                <div class="item">
                    <img src="{{  asset($product->productImage->image6)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image7)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image8)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image9)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image10)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image11)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image12)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image13)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image14)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image15)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image16)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image17)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image18)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image19)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image20)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image21)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image22)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image23)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image24)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image25)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image26)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image27)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image28)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image29)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image30)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image31)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image32)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image33)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image34)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image35)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image36)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image37)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image38)  }}" alt="">       
                </div>

                @endif
            </div>

            <div id="sync2" class="owl-carousel owl-theme">
                <div class="item">
                    <img src="{{  asset($product->image1)  }}" alt="">       
                    <!--h1>1</h1-->
                </div>
                <div class="item">
                    <img src="{{  asset($product->image2)  }}" alt="">       
                    <!--h1>2</h1-->
                </div>
                <div class="item">
                    <img src="{{  asset($product->image3)  }}" alt="">       
                    <!--h1>3</h1-->
                </div>
                <div class="item">
                    <img src="{{  asset($product->image4)  }}" alt="">       
                    <!--h1>4</h1-->
                </div>
                <div class="item">
                    <img src="{{  asset($product->image5)  }}" alt="">       
                    <!--h1>5</h1-->
                </div>
                @if($product->collection_name == 'Hot Toys')
                <div class="item">
                    <img src="{{  asset($product->productImage->image6)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image7)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image8)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image9)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image10)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image11)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image12)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image13)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image14)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image15)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image16)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image17)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image18)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image19)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image20)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image21)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image22)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image23)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image24)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image25)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image26)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image27)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image28)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image29)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image30)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image31)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image32)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image33)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image34)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image35)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image36)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image37)  }}" alt="">       
                </div>
                <div class="item">
                    <img src="{{  asset($product->productImage->image38)  }}" alt="">       
                </div>

                @endif
            </div>
                                    

                @endif
            </div>
            <div class="col-sm-6 p-4">
                <div class="row">
                    @if ($product->collection_name == 'Hot Wheels')
                        <div class="col-sm-12">
                            <h3 class="py-2">{{ ucfirst($product->name) }}</h3>
                            <p>
                                {{ substr($product->description, 0, 600) }}
                            </p>
                        </div>
                        <div class="col-sm-12 pb-2">
                            <h5 class="py-1"><b>Year :</b>
                                @if ($product->year <> null)
                                <a href="{{ route('byyear', $product->year) }}">
                                    {{ $product->year }} 
                                </a>
                                @else
                                N/A
                                @endif
                            </h5>
                            <h5 class="py-1"><b>Series :</b> 
                                @if ($product->series <> null)
                                <a href="{{ route('byseries', $product->series) }}">
                                    {{ $product->series }}
                                </a>
                                @else
                                N/A
                                @endif
                            </h5>  
                            <h5 class="py-1"><b>Theme :</b> 
                            @if ($product->theme_id <> null)
                                <a href="{{ route('bytheme', $product->theme_id) }}">
                                    {{ $product->theme }}
                                </a>
                                @else
                                N/A
                            @endif
                            </h5>  
                            <h5 class="py-1"><b>Casting Name :</b> 
                                @if ($product->casting_name <> null)
                                <a href="{{ route('bycasting', $product->casting_name) }}">
                                    {{ $product->casting_name }}     
                                </a>    
                                @else
                                N/A
                                @endif
                            </h5>  
                            <h5 class="py-1"><b>Colour :</b> {{ $product->colour }} </h5>
                            <h5 class="py-1"><b>Tampo :</b> {{ $product->tampo }} </h5>
                            <h5 class="py-1"><b>Base Colour / Type :</b> {{ $product->base_colour }} / {{ $product->type }} </h5>
                            <h5 class="py-1"><b>Window Colour :</b> {{ $product->window_colour }} </h5>
                            <h5 class="py-1"><b>Interior Colour :</b> {{ $product->interior_colour }} </h5>
                            <h5 class="py-1"><b>Wheel Type :</b> {{ $product->wheel_type }} </h5>
                            <h5 class="py-1"><b>Country :</b> {{ $product->country }} </h5>
                            <h5 class="py-1"><b>Toy# :</b> {{ $product->toy_hash }} </h5>
                            <h5 class="py-1"><b>Col# :</b> {{ $product->col_hash }} </h5>
                            <h5 class="py-1"><b>Series# :</b> {{ $product->series_hash }} </h5>
                            <h5 class="py-1"><b>Notes : </b>{!! $product->notes  !!} </h5>
                        </div>
                    @elseif($product->collection_name == 'Hot Toys')
                    <div class="row p-2">
                        <div class="col-sm-12">
                            <h5 class="py-1"><b>Name :</b> {{ $product->name }} </h5>
                        </div>
                        <div class="col-sm-12">
                            <h5 class="py-1"><b>Category Name :</b> {{ $product->category_name }} </h5>
                        </div>
                        <div class="col-sm-12">
                            <h5 class="py-1"><b>Toy Hash :</b> {{ $product->toy_hash }} </h5>
                        </div>
                        <div class="col-sm-12">
                            <h5 class="py-1"><b>Subseries Name :</b> <a href="{{ route('byseries', $product->subseries_name) }}"> {{ $product->subseries_name }} </a></h5>
                        </div>
                        <div class="col-sm-12">
                            <h5 class="py-1"><b>Collection Name :</b> {{ $product->collection_name }} </h5>
                        </div>
                        <div class="col-sm-12">
                            <h5 class="py-1"><b>Year :</b> <a href="{{route('byyear', $product->year)  }}"> {{ $product->year }} </a></h5>
                        </div>
                        <div class="col-sm-12">
                            <h5 class="py-1"><b>Notes :</b>  {!! substr($product->notes, 0, 200) !!}  
                        <small><a href="#" data-toggle="modal" data-target="#ReadMore">Read More...</a></small --> 
                        </div>
                                               <!-- Read More Modal -->
                        <div class="modal fade" id="ReadMore" tabindex="-1" role="dialog" aria-labelledby="ReadMoreLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ReadMoreLabel">Read More | Notes</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            
                                    {!! $product->notes !!}
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    @elseif($product->collection_name == 'Lego MiniFigures')
                    <div class="row p-2">
                        <div class="col-sm-12">
                            <h5 class="py-1"><b>Name :</b> {{ $product->lego_mf_name }} </h5>
                        </div>
                        <div class="col-sm-12">
                            <h5 class="py-1"><b>Fig Num :</b> {{ $product->lego_mf_fig_num }} </h5>
                        </div>
                        <div class="col-sm-12">
                            <h5 class="py-1"><b>Num Parts :</b> {{ $product->lego_mf_num_parts }} </h5>
                        </div>
                    </div>
                    @endif


                    <livewire:liked :product="$product" />

                    <div class="col-sm-12">
                    </div>
                </div>
            </div>
        </div>

        <div class="row p-4" style="background: transparent">

        </div>
       
    <div class="row guest-product-row-products cstProHvr" >
        <div class="col-sm-12 p-4 text-center" >
            <h2>Related Products</h2>
        </div>

        @foreach ($products as $product123)
            <div class="col-sm-4">
                <div class="product">
                    <div class="imgbox">
                        @if ($product123->image1 == NULL)
                        <img src=" {{ asset('images/car_not_found.jpg')  }}" alt=""/>   
                        @else
                        <img src="{{  asset($product123->image1) }}">
                        @endif
                    </div>
                    <div class="specifies">
                        <h2> {{ $product123->name }} <br> <span>{{ $product123->category_name }} | {{ $product123->year }}</span></h2>
                        <!--div class="price">$1500</div--> <label>Series : 
                            <span  style="border: 1px solid rgb(194, 193, 193)" class="py-1 px-2">{{ $product123->series }}</span></label>
                        

                            <div class="row">
                                <div class="col-sm-12">
                                    <a href="{{ route('product.show', $product123->id) }}">
                                        <button class="btn btn-primary">View Product</button>
                                    </a>
                                </div>
                                <div class="col-sm-4">
                                    <b> Theme:</b> 
                                </div>
                                <div class="col-sm-8">
                                    {{ $product123->theme }}
                                </div>
                                @if($product123->collection_name == 'Hot Toys')
                                <div class="col-sm-4">
                                    <b> Category:</b> 
                                 </div>
                                 <div class="col-sm-8">
                                     {{ $product123->category_name }}
                                 </div>
                                 @else
                                 <div class="col-sm-4">
                                    <b> Casting:</b> 
                                 </div>
                                 <div class="col-sm-8">
                                     {{ $product123->casting_name }}
                                 </div>
                                @endif

                            </div>

                        <p></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>



    <!-- Modal Code -->


    <!-- Modal -->
    <form action="{{ route('product.feedback.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true"  data-backdrop="static" data-keyboard="false" >
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Feedback For Product Name : <b>{{ $product->name }}</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <input type="hidden" name="id" value="{{ $product->id }}">
            <input type="hidden" name="collection_id" value="{{ $product->collection_id }}">
            <input type="hidden" name="category_id" value="{{ $product->category_id }}">
                <input type="hidden" name="subseries_id" value="{{ $product->subseries_id }}">
                <input type="hidden" name="theme_id" value="{{ $product->theme_id }}">
                @if ($product->collection_name == 'Hot Wheels')
                <div class="row py-2">
                    <div class="col-sm-4">
                        <small>Name : {{ $product->name }}</small>
                        <textarea name="name" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Name Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Series : {{ $product->series }}</small>
                        <textarea name="series" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Series Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Category Name : {{ $product->category_name }}</small>
                        <textarea name="category_name" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Category Name Field"></textarea>
                    </div>
                </div>

                <div class="row py-2">
                    <div class="col-sm-4">
                        <small>Collection Name : {{ $product->collection_name }}</small>
                        <textarea name="collection_name" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Collection Name Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Subseries Name : {{ $product->subseries_name }}</small>
                        <textarea name="subseries_name" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Subseries Name Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Theme : {{ $product->theme }}</small>
                        <textarea name="theme" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Theme Field"></textarea>
                    </div>
                </div>

                <div class="row py-2">
                    <div class="col-sm-4">
                        <small>Model Name : {{ $product->model_name }}</small>
                        <textarea name="model_name" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Model Name Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Casting Name : {{ $product->casting_name }}</small>
                        <textarea name="casting_name" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Casting Name Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Year : {{ $product->year }}</small>
                        <textarea name="year" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Year Field"></textarea>
                    </div>
                </div>

                <div class="row py-2">
                    <div class="col-sm-4">
                        <small>Colour : {{ $product->colour }}</small>
                        <textarea name="colour" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Colour Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Tampo : {{ $product->tampo }}</small>
                        <textarea name="tampo" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Tampo Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Decoration : {{ $product->decoration }}</small>
                        <textarea name="decoration" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Decoration Field"></textarea>
                    </div>
                </div>
                
                <div class="row py-2">
                    <div class="col-sm-4">
                        <small>Base Colour : {{ $product->base_colour }}</small>
                        <textarea name="base_colour" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Base Colour Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Type : {{ $product->type }}</small>
                        <textarea name="type" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Type Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Window Colour : {{ $product->window_colour }}</small>
                        <textarea name="window_colour" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Window Colour Field"></textarea>
                    </div>
                </div>

                <div class="row py-2">
                    <div class="col-sm-4">
                        <small>Interior Colour : {{ $product->interior_colour }}</small>
                        <textarea name="interior_colour" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Interior Colour Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Wheel Type : {{ $product->wheel_type }}</small>
                        <textarea name="wheel_type" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Wheel Type Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Country : {{ $product->country }}</small>
                        <textarea name="country" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Country Field"></textarea>
                    </div>
                </div>
            
                <div class="row py-2">
                    <div class="col-sm-4">
                        <small>Class : {{ $product->class }}</small>
                        <textarea name="class" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Class Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Col Hash : {{ $product->col_hash }}</small>
                        <textarea name="col_hash" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Col Hash Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Series Hash : {{ $product->series_hash }}</small>
                        <textarea name="series_hash" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Series Hash Field"></textarea>
                    </div>
                </div>
 
                <div class="row py-2">
                    <div class="col-sm-12">
                        <small>Toy Hash : {{ $product->toy_hash }}</small>
                        <textarea name="toy_hash" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Toy Hash Field"></textarea>
                    </div>
                </div>

                <div class="row py-2">
                    <div class="col-sm-12">
                        <small>Notes : {!! $product->notes !!}</small>
                        <textarea name="notes" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Notes Field"></textarea>
                    </div>
                </div>
                @elseif($product->collection_name == 'Hot Toys')
                <div class="row py-2">
                    <div class="col-sm-4">
                        <small>Name : {{ $product->name }}</small>
                        <textarea name="name" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Name Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Category Name : {{ $product->category_name }}</small>
                        <textarea name="category_name" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Category Name Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Toy Hash : {{ $product->toy_hash }}</small>
                        <textarea name="toy_hash" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Toy Hash Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Category Name : {{ $product->category_name }}</small>
                        <textarea name="category_name" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Name Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Suberies Name : {{ $product->subseries_name }}</small>
                        <textarea name="subseries_name" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Category Name Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Year: {{ $product->year }}</small>
                        <textarea name="year" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Toy Hash Field"></textarea>
                    </div>
                    <div class="col-sm-12">
                        <small>Notes : {!! $product->notes !!}</small>
                        <textarea name="notes" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Notes Field"></textarea>
                    </div>
                </div>
                @else
                <div class="row py-2">
                    <div class="col-sm-4">
                        <small>Fig Num : {{ $product->lego_mf_fig_num }}</small>
                        <textarea name="lego_mf_fig_num" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Fig Num Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Name : {{ $product->lego_mf_name }}</small>
                        <textarea name="lego_mf_name" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Name Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Num Rows : {{ $product->lego_mf_num_parts }}</small>
                        <textarea name="lego_mf_num_parts" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Num Parts Field"></textarea>
                    </div>
                </div>
                @endif

                <div class="row py-2">
                    <div class="col-sm-12">
                         Image Upload <small>have better idea for product image? Upload here</small>
                        <input type="file" name="image" id="image">
                    </div>
                    <div class="col-sm-12">
                        Extra Note
                        <textarea name="important_note" id="" cols="30" rows="4" class="form-control" placeholder="Enter Extra Note"></textarea>
                    </div>
                </div>

          
          </div>
          <div class="modal-footer">
              <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                      <button type="submit" class="btn btn-primary">Send Feedback</button>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
</form>

</div>

</section>
   
@endsection
