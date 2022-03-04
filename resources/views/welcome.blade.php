@extends('layouts.app')

@section('content') 
<section class="HomeSec1">
  <div class="container">
      <div class="row">
          <div class="HomeSec1Data">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="TitleMn" align="center">
                          <h2>Categories</h2>
                      </div>
                  </div>
                  <div class="col-xl-12">
                      <div class="CollectionGrd">
                          <div class="row">
                              @foreach ($categories as $category)
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    @guest
                                    <a href="{{ route('pricing') }}">
                                    @endguest
                                    <div class="CollectionGrdMN">
                                        <div class="CollectionGrdMNImg">
                                            <div class="CollectionGrdMNImg_1">
                                                <img src="{{ asset('images/r1.png') }}" alt="" />
                                            </div>
                                            <div class="CollectionGrdMNImg_2">
                                                <h3>{{ $category->name }}</h3>
                                                <p>{{ substr($category->description, 0, 20) }}...</p>
                                            </div>
                                        </div>
                                        <div class="CollectionGrdMNTxt">
                                            <h3 class="text-black">{{ $category->name }}</h3>
                                        </div>
                                    </div>
                                @guest
                                    </a>
                                @endguest
                                </div>
                              @endforeach
                              <!--div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                  @guest
                                  <a href="{{ route('pricing') }}">
                                  @endguest
                                    <div class="CollectionGrdMN">
                                        <div class="CollectionGrdMNImg">
                                            <div class="CollectionGrdMNImg_1">
                                                <img src="{{ asset('images/r1.png') }}" alt="" />
                                            </div>
                                            <div class="CollectionGrdMNImg_2">
                                                <h3>Flying Colors</h3>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae ipsa...</p>
                                            </div>
                                        </div>
                                        <div class="CollectionGrdMNTxt">
                                            <h3 class="text-black">Flying Colors</h3>
                                        </div>
                                    </div>
                                @guest
                                    </a>
                                @endguest
                              </div>

                              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                @guest
                                    <a href="{{ route('pricing') }}" class="">
                                @endguest  
                                    <div class="CollectionGrdMN">
                                        <div class="CollectionGrdMNImg">
                                            <div class="CollectionGrdMNImg_1">
                                                <img src="{{ asset('images/r2.png') }}" alt="" />
                                            </div>
                                            <div class="CollectionGrdMNImg_2">
                                                <h3>Flying Colors</h3>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae ipsa...</p>
                                            </div>
                                        </div>
                                        <div class="CollectionGrdMNTxt">
                                            <h3 class="text-black">Flying Colors</h3>
                                        </div>
                                    </div>
                                @guest
                                    </a>
                                @endguest
                              </div>
                              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    @guest
                                        <a href="{{ route('pricing') }}">
                                    @endguest
                                    <div class="CollectionGrdMN">
                                        <div class="CollectionGrdMNImg">
                                            <div class="CollectionGrdMNImg_1">
                                                <img src="{{ asset('images/r3.png') }}" alt="" />
                                            </div>
                                            <div class="CollectionGrdMNImg_2">
                                                <h3>Flying Colors</h3>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae ipsa...</p>
                                            </div>
                                        </div>
                                        <div class="CollectionGrdMNTxt">
                                            <h3 class="text-black">Flying Colors</h3>
                                        </div>
                                    </div>
                                  @guest
                                    </a>
                                  @endguest
                              </div>
                              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                @guest
                                <a href="{{ route('pricing') }}">
                                @endguest 
                                    <div class="CollectionGrdMN">
                                        <div class="CollectionGrdMNImg">
                                            <div class="CollectionGrdMNImg_1">
                                                <img src="{{ asset('images/r4.png') }}" alt="" />
                                            </div>
                                            <div class="CollectionGrdMNImg_2">
                                                <h3>Flying Colors</h3>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae ipsa...</p>
                                            </div>
                                        </div>
                                        <div class="CollectionGrdMNTxt">
                                            <h3 class="text-black">Flying Colors</h3>
                                        </div>
                                    </div>
                                @guest
                                    </a>
                                @endguest
                              </div>
                              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    @guest
                                        <a href="{{ route('pricing') }}">
                                    @endguest
                                    <div class="CollectionGrdMN">
                                        <div class="CollectionGrdMNImg">
                                            <div class="CollectionGrdMNImg_1">
                                                <img src="{{ asset('images/r5.png') }}" alt="" />
                                            </div>
                                            <div class="CollectionGrdMNImg_2">
                                                <h3>Flying Colors</h3>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae ipsa...</p>
                                            </div>
                                        </div>
                                        <div class="CollectionGrdMNTxt">
                                            <h3 class="text-black">Flying Colors</h3>
                                        </div>
                                    </div>
                                @guest
                                    </a>
                                @endguest    
                              </div>
                              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                @guest
                                    <a href="{{ route('pricing') }}">
                                @endguest
                                    <div class="CollectionGrdMN">
                                        <div class="CollectionGrdMNImg">
                                            <div class="CollectionGrdMNImg_1">
                                                <img src="{{ asset('images/r6.png') }}" alt="" />
                                            </div>
                                            <div class="CollectionGrdMNImg_2">
                                                <h3>Flying Colors</h3>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae ipsa...</p>
                                            </div>
                                        </div>
                                        <div class="CollectionGrdMNTxt">
                                            <h3 class="text-black">Flying Colors</h3>
                                        </div>
                                    </div>
                                @guest
                                    </a>
                                @endguest    
                              </div>
                              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    @guest
                                        <a href="{{ route('pricing') }}">
                                    @endguest
                                    <div class="CollectionGrdMN">
                                        <div class="CollectionGrdMNImg">
                                            <div class="CollectionGrdMNImg_1">
                                                <img src="{{ asset('images/r7.png') }}" alt="" />
                                            </div>
                                            <div class="CollectionGrdMNImg_2">
                                                <h3>Flying Colors</h3>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae ipsa...</p>
                                            </div>
                                        </div>
                                        <div class="CollectionGrdMNTxt">
                                            <h3 class="text-black">Flying Colors</h3>
                                        </div>
                                    </div>
                                    @guest
                                        </a>
                                    @endguest
                              </div>
                              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    @guest
                                        <a href="{{ route('pricing') }}">
                                    @endguest  
                                    <div class="CollectionGrdMN">
                                        <div class="CollectionGrdMNImg">
                                            <div class="CollectionGrdMNImg_1">
                                                <img src="{{ asset('images/r8.png') }}" alt="" />
                                            </div>
                                            <div class="CollectionGrdMNImg_2">
                                                <h3>Flying Colors</h3>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae ipsa...</p>
                                            </div>
                                        </div>
                                        <div class="CollectionGrdMNTxt">
                                            <h3 class="text-black">Flying Colors</h3>
                                        </div>
                                    </div>
                                @guest
                                    </a>
                                @endguest
                              </div-->
                          </div>
                      </div>
                  </div>
                    <div class="col-xl-12">
                    <div class="VwBtn">
                        @guest
                        <a href="{{ route('pricing') }}">
                        <button class="glow-on-hover btn btn-1 text-white" type="button">View More</button>
                        </a>
                        @else
                            <a href="{{ route('category.index') }}">
                            <button class="glow-on-hover btn btn-1 text-white" type="button">View More</button>
                            </a>
                        @endguest
                    </div>
                    </div>
              </div>
          </div>
      </div>
      <div class="row">
            <div class="col-sm-12 p-4">

            </div>

          <div class="HomeSec1Data HomeSec1Data2">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="TitleMn" align="center">
                          <h2>Products</h2>
        <!--p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p -->
                      </div>
                  </div>
                  <div class="col-xl-12">
                      <div class="CollectionGrd">
                           <div class="table-responsive">
            <table class="table table-hover  table-striped table-bordered">
              <thead>
                  <tr>
                  <th>S. No.</th>
                  <th>Collection Name</th>
                  <th>Category Name</th>
                  <th>Model Name</th>
                  <th>Photo</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($hot_toy_products as $key => $hwt)
                  <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $hwt->collection_name }}</td>
                    <td>{{ $hwt->category_name }}</td>
                    <td>{{ $hwt->model_name }}</td>
                     @if ($hwt->image1 <> null)
                     <td class="text-center"> <img src="{{ asset($hwt->image1) }}"> </td>      
                     @else
                     <td class="text-center"> <img src="{{ asset('images/car_not_found.jpg') }}"> </td>      
                     @endif
                    </tr>
                  @endforeach
              </tbody>
            </table>
        </div> 
        </div>
    </div>
    <div class="col-xl-12">
      <div class="VwBtn">
        @guest
            <a href="{{ route('pricing') }}">
            <button class="glow-on-hover btn btn-1 text-white" type="button">View More</button>
            </a>
        @else
            <a href="{{ route('product.index') }}">
            <button class="glow-on-hover btn btn-1 text-white" type="button">View More</button>
            </a>
        @endguest
      </div>
    </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection