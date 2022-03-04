@extends('layouts.users')

@section('content')
<div class="container">
    <div class="row bg-container">
        <div class="col-sm-12 bg-white p-4">
              <div class="ClctMnRt tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                  <div class="ClctMnRtTp ProductWtBdcrm">
                    <div class="ClctMnRtTpLft">
                        <div class="TitleMn">
                          <h2>Edit Profile</h2>
                        </div>
                    </div>
                    <div class="ClctMnRtTpRt">
                        <ul class="breadcrumb">
                            <li><a class="active" href="{{ route('users.dashboard') }}">Home</a></li>
                            <li><a href="#">Edit Profile</a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- Collections -->  
        </div>

        <div class="col-xl-12">
            @include('partials.alert')
            <form action="{{ route('user_profile.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
              
                <div class="row p-2">
                    <div class="col-sm-3">
                        @if (Auth::user()->image <> null)
                            <img src="{{ asset(Auth::user()->image) }}" alt="" id="user_profile_image_edit" style="width:250px;height:250px">    
                            <input type="file" name="image" id="image" class="p-2">                        
                        @else
                            <img src="{{ asset('images/noimage.png') }}" alt="">
                            <input type="file" name="image" id="image" class="p-2">
                        @endif
                    </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="">Name</label>
                                <input type="text" class="form-control" wire:model="name" name="name" placeholder="Enter Name" value="{{ Auth::user()->name }}">
                                @error('name') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror        
                            </div>
                            <div class="col-sm-6">
                                <label for="">Username</label>
                                <input type="text" class="form-control" wire:model="username" name="username" placeholder="Enter Username" value="{{ Auth::user()->username }}" >
                                @error('username') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror        
                            </div>
                            <div class="col-sm-6">
                                <label for="">Gender</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="female" {{ Auth::user()->gender == 'female' ? 'selected' : '' }}>Female</option>
                                    <option value="male" {{ Auth::user()->gender == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="lgbtq_female" {{ Auth::user()->gender == 'lgbtq_female' ? 'selected' : '' }}>LGBTQ+ Female</option>
                                    <option value="lgbtq_male" {{ Auth::user()->gender == 'lgbtq_male' ? 'selected' : '' }}>LBGTQ+ Male</option>
                                    <option value="do_not_mention" {{ Auth::user()->gender == 'do_not_mention' ? 'selected' : '' }}>Do not mention</option>
                                </select>
                                @error('gender') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror        
                            </div>
                            <div class="col-sm-6">
                                <label for="">Membership</label>
                                <input type="text" class="form-control" wire:model="membership" name="membership" placeholder="Enter Membership" value="{{ Auth::user()->membership }}" readonly>
                                @error('membership') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror        
                            </div>
                            <div class="col-sm-6">
                                <label for="">Location</label>
                                <input type="text" class="form-control" wire:model="location" name="location" placeholder="Enter Location" value="{{ Auth::user()->location }}">
                                @error('location') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror        
                            </div>
                            <div class="col-sm-6">
                                <label for="">Email</label>
                                <input type="text" class="form-control" wire:model="email" name="email" placeholder="Enter Email" value="{{ Auth::user()->email }}" readonly>
                                @error('email') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror        
                            </div>
                            <div class="col-sm-12 p-4">
                                <div class="VwBtn text-right">
                                    <button class="glow-on-hover btn btn-1 text-white mb-2" 
                                    type="submit" >Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>
@endsection