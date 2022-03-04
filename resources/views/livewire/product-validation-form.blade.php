<div class="col-xl-12">
    <div class="row">
    <div class="col-sm-12">
        @if (Session::get('productform'))
            <div class="alert alert-success animate__animated animate__slideInRight">
                {{ Session::get('productform') }}
            </div>
        @endif 
        @if (Session::get('csvmessage'))
        <div class="alert alert-success animate__animated animate__slideInRight">
            <div class="row">
                <div class="col-sm-6">{{ Session::get('csvmessage') }}</div>
                <div class="col-sm-6 text-right"><a href="{{ route('tempIndex') }}" class="btn btn-sm btn-danger">View CSV Products</a></div>
            </div>
        </div>
        @endif 
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif  
    </div>    
    </div> 
    <form action="{{ route('userproduct.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
     

        <div class="row p-2">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
               <livewire:product-name-validation />
            </div>
           <livewire:product-form />
        </div>

        <div class="row p-2">
            <div class="col-sm-3">
                <label for="">Year</label>
                <input type="text" class="form-control" name="year" wire:model="year" placeholder="Enter Year" required>
                @error('year') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
            </div>
            <div class="col-sm-3">
                <label for="">Colour</label>
                <input type="text" class="form-control" name="colour" wire:model="colour" placeholder="Enter Colour">
                @error('colour') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
            </div>
            <div class="col-sm-3">
                <label for="">Tampo</label>
                <input type="text" class="form-control" name="tampo" wire:model="tampo" placeholder="Enter Tampo" >
                @error('tampo') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
            </div>
            <div class="col-sm-3">
                <label for="">Country</label>
                <input type="text" class="form-control" wire:model="country" name="country" placeholder="Enter Country" >
                @error('country') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="row p-2">
            <div class="col-sm-3">
                <label for="">Base Colour</label>
                <input type="text" class="form-control" name="base_colour" wire:model="base_colour" placeholder="Enter Base Colour" >
                @error('base_colour') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
            </div>
            <div class="col-sm-3">
                <label for="">Type</label>
                <input type="text" class="form-control" name="type" placeholder="Enter Type" wire:model="type">
                @error('type') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
            </div>
            <div class="col-sm-3">
                <label for="">Window Color</label>
                <input type="text" class="form-control" name="window_colour" wire:model="window_colour" placeholder="Enter Window Color" >
                @error('window_colour') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
            </div>
            <div class="col-sm-3">
                <label for="">Interior Colour</label>
                <input type="text" class="form-control" name="interior_colour" wire:model="interior_colour" placeholder="Enter Interior Colour" >
                @error('interior_colour') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="row p-2">
            <div class="col-sm-3">
                <label for="">Toy# </label>
                <input type="text" class="form-control" wire:model="toy_hash" name="toy_hash" placeholder="Enter Toy#" >
                @error('toy_hash') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
            </div>
            <div class="col-sm-3">
                <label for="">Col#</label>
                <input type="text" class="form-control" wire:model="col_hash" name="col_hash" placeholder="Enter Col#" >
                @error('col_hash') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
            </div>
            <div class="col-sm-3">
                <label for="">Series# </label>
                <input type="text" class="form-control" wire:model="series_hash" name="series_hash" placeholder="Enter Series#" >
                @error('series_hash') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
            </div>
            <div class="col-sm-3">
                <label for="">Class</label>
                <select name="class" wire:model="class"  id="class"  class="form-control" required>
                    <option value="" selected>Select Class</option>
                    <option value="Mainline">Mainline</option>
                    <option value="Premium">Premium</option>
                </select>
                @error('class') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="row p-2">
            <div class="col-sm-3">
                <label for="">Wheel Type</label>
                <input type="text" class="form-control" name="wheel_type" wire:model="wheel_type" placeholder="Enter Wheel Type" >
                @error('wheel_type') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
            </div>
            <div class="col-sm-3">
                <label for="">Visibility</label>
                <select name="visibility" wire:model="visibility"  id="visibility"  class="form-control" required>
                    <option value="" selected>Select Visibility</option>
                    <option value="1">Visible</option>
                    <option value="0">Hidden</option>
                </select>
                @error('visibility') <span class="alert alert-danger" style="padding:0px;margin:0px">{{ $message }}</span> @enderror
            </div>
            <div class="col-sm-6 pt-2">
                <textarea name="notes" placeholder="Enter Note" id="" cols="30" rows="2" class="form-control"></textarea>
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
                    <button class="glow-on-hover btn btn-1 text-white mb-2" 
                    type="submit" >Add Product</button>
                </div>
            </div>
        </div>

        <div class="row p-2">
            <!--div class="col-sm-3">
                <a href="{{ route('userproduct.index') }}">
                    <div class="VwBtn text-left">  
                        <button class="glow-on-hover btn btn-1 text-white mb-2">My Products</button>
                    </div>
                </a>
            </div-->
          
        </div>
        <div class="row p-2"></div>
    </form>
</div>
