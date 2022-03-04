<div class="row">
    <div class="form-group col-lg-6">
        <label for="">Subseries Name</label>
        <input type="text" name="name" class="form-control" wire:model="name" placeholder="Enter Subseries" required>
    </div>
    <div class="form-group col-lg-6">
        <label for="">Category</label>
        <select name="category_id" id="category_id" required class="form-control" wire:model="selectedState">
            <option value="">Select Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-lg-6">
        <label for="">Series</label>
        <input type="text" name="series_name" value="{{ $series <> null ? $series : '' }}" class="form-control" required placeholder="Enter Series">
    </div>
    <div class="form-group col-lg-6">
        <label for="">Collection Name</label>
        <input type="text" name="collection_name" value="{{ $collections <> null ? $collections : '' }}" class="form-control" readonly required placeholder="Enter Collection">
    </div>
</div>