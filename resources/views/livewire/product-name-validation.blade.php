<div class="row">
    <div class="col-sm-12 p-2">
        <label for="name">Product Name</label>
        <input type="text" class="form-control" name="name" wire:model="name" value=""
        required placeholder="Enter Product Name" />
        @error('name') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
    </div>
    <div class="col-sm-12 p-2">
        <label for="model_name">Model Name</label>
        <input type="text" class="form-control" name="model_name" wire:model="model_name" placeholder="Enter Model Name">
         @error('model_name') <span class="alert alert-danger" style="padding:2px;margin:5px">{{ $message }}</span> @enderror
    </div>
</div>