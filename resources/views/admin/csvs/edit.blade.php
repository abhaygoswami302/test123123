@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 text-center p-4">
            <h3 class="m-0 font-weight-bold text-primary">Edit Product</h3>
        </div>
        <div class="col-xl-12 card shadow ">   
            @include('admin.partials.alert')
            <div class="card-header font-weight-bold text-primary">Edit Product</div>
                       
            <div class="card-body">
                <form action="{{ route('admin.tempUpdate', $temp->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row p-2">
                        <div class="col-sm-3">
                            <label for="name">Product Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $temp->name }}"
                            required placeholder="Enter Product Name" />
                        </div>
                        <div class="col-sm-3">
                            <label for="category_name">Category Name</label>
                            <input type="text" name="category_name" class="form-control" readonly value="{{ $temp->category_name }}">
                        </div>
                        <div class="col-sm-3">
                            <label for="subseries">Subseries Name</label>
                            <input type="text" name="subseries_name" class="form-control" readonly value="{{ $temp->subseries_name }}">
                        </div>
                        <div class="col-sm-3">
                            <label for="theme">Theme Name</label>
                            <input type="text" name="theme" class="form-control" readonly value="{{ $temp->theme }}">
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-sm-3">
                            <label for="model_name">Model Name</label>
                            <input type="text" class="form-control" name="model_name" placeholder="Enter Model Name" value="{{ $temp->model_name }}">
                        </div>
                        <div class="col-sm-3">
                            <label for="collection_name">Collection Name</label>
                            <input type="text" class="form-control" name="collection_name"  value="{{ $temp->collection_name }}"  placeholder="Collection Name" required readonly>
                        </div>
                        <div class="col-sm-3">
                            <label for="series">Series Name</label>
                            <input type="text" class="form-control" name="series"  value="{{ $temp->series }}"  placeholder="Series Name" required readonly>
                        </div>
                        <div class="col-sm-3">
                            <label for="casting_name">Casting Name</label>
                            <input type="text" class="form-control" name="casting_name" value="{{ $temp->casting_name }}" placeholder="Casting Name" required readonly>
                        </div>
                    </div>
                    <div class="row p-2">
                            <div class="col-sm-3">
                                <label for="">Year</label>
                                <input type="text" class="form-control" name="year" wire:model="year" placeholder="Enter Year" value="{{ $temp->year }}" required>
                                @error('year') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-sm-3">
                                <label for="">Colour</label>
                                <input type="text" class="form-control" name="colour" wire:model="colour" placeholder="Enter Colour" value="{{ $temp->colour }}" >
                                @error('colour') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-sm-3">
                                <label for="">Tampo</label>
                                <input type="text" class="form-control" name="tampo" wire:model="tampo" placeholder="Enter Tampo" value="{{ $temp->tampo }}" >
                                @error('tampo') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-sm-3">
                                <label for="">Country</label>
                                <input type="text" class="form-control" wire:model="country" name="country" placeholder="Enter Country" value="{{ $temp->country }}">
                                @error('country') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-sm-3">
                                <label for="">Base Colour</label>
                                <input type="text" class="form-control" name="base_colour" wire:model="base_colour" placeholder="Enter Base Colour" value="{{ $temp->base_colour }}" >
                                @error('base_colour') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-sm-3">
                                <label for="">Type</label>
                                <input type="text" class="form-control" name="type" placeholder="Enter Type" wire:model="type" value="{{ $temp->type }}" >
                                @error('type') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-sm-3">
                                <label for="">Window Color</label>
                                <input type="text" class="form-control" name="window_colour" wire:model="window_colour" placeholder="Enter Window Color" value="{{ $temp->window_colour }}" >
                                @error('window_colour') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-sm-3">
                                <label for="">Interior Colour</label>
                                <input type="text" class="form-control" name="interior_colour" wire:model="interior_colour" placeholder="Enter Interior Colour" value="{{ $temp->interior_colour }}" >
                                @error('interior_colour') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                            </div>
                        </div>
    
                        <div class="row p-2">
                            <div class="col-sm-3">
                                <label for="">Toy# </label>
                                <input type="text" class="form-control" wire:model="toy_hash" name="toy_hash" placeholder="Enter Toy#" value="{{ $temp->toy_hash }}">
                                @error('toy_hash') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-sm-3">
                                <label for="">Col#</label>
                                <input type="text" class="form-control" wire:model="col_hash" name="col_hash" placeholder="Enter Col#" value="{{ $temp->col_hash }}">
                                @error('col_hash') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-sm-3">
                                <label for="">Series# </label>
                                <input type="text" class="form-control" wire:model="series_hash" name="series_hash" placeholder="Enter Series#" value="{{ $temp->series_hash }}">
                                @error('series_hash') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-sm-3">
                                <label for="">Class</label>
                                <select name="class" wire:model="class"  id="class"  class="form-control" required>
                                    <option value="" selected>Select Class</option>
                                    <option value="Mainline" {{ $temp->class == 'Mainline' ? 'selected' : '' }}>Mainline</option>
                                    <option value="Premium" {{ $temp->class == 'Premium' ? 'selected' : '' }}>Premium</option>
                                </select>
                                @error('class') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                            </div>
                        </div>
    
                        <div class="row p-2">
                            <div class="col-sm-3">
                                <label for="">Wheel Type</label>
                                <input type="text" class="form-control" name="wheel_type" wire:model="wheel_type" placeholder="Enter Wheel Type" value="{{ $temp->wheel_type }}"  >
                                @error('wheel_type') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-sm-3">
                                <label for="">Visibility</label>
                                <!--input type="text" class="form-control" name="visibility" wire:model="visibility" placeholder="Enter Visibility" value="{{ $temp->visibility }}"  -->
                                <select name="visibility" wire:model="visibility"  id="visibility"  class="form-control" required>
                                    <option value="1" {{ $temp->visibility == '1' ? 'selected' : '' }}>Visible</option>
                                    <option value="0" {{ $temp->visibility == '0' ? 'selected' : '' }}>Hidden</option>
                                </select>
                                @error('visibility') <span class="alert alert-danger" style="padding:0px;margin:0px">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-sm-6 pt-2">
                                <textarea name="notes" placeholder="Enter Note" id="" cols="30" rows="2" class="form-control">
                                    {{ $temp->notes }} 
                                </textarea>
                            </div>
                        </div>
                
                        <div class="row p-2">
                            <div class="col-sm-3">
                                <label for="">Product Image 1</label>
                                <input type="file" name="image1" id="image1" wire:model="image1">
                                @error('image1') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-sm-3">
                                <label for="">Product Image 2</label>
                                <input type="file" name="image2" id="image2" wire:model="image2">
                                @error('image2') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-sm-3">
                                <label for="">Product Image 3</label>
                                <input type="file" name="image3" id="image3" wire:model="image3">
                                @error('image3') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-sm-3">
                                <label for="">Product Image 4</label>
                                <input type="file" name="image4" id="image4" wire:model="image4">
                                @error('image4') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                            </div>
                        </div>
                
                        <div class="row p-2">
                            <div class="col-sm-3">
                                <label for="">Product Image 5</label>
                                <input type="file" name="image5" id="image5" wire:model="image5">
                                @error('image5') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-sm-3 offset-6 pt-2">
                                <div class="VwBtn text-right">
                                    <button class="btn btn-primary text-white mb-2" 
                                    type="submit" >Edit Product</button>
                                </div>
                            </div>
                        </div>
                        <div class="row p-2"></div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection





  