<div class="col-xl-9 col-lg-9 col-md-9 col-sm-6 col-12">
    <div class="row p-2">
        <div class="col-sm-4">
            <label for="category_name">Category Name</label>
            <select name="category_name"  wire:model="selectedCat"  id="category_name" class="form-control"  required>
                <option value="" selected>Select Category Name</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select> 
        </div>
        <div class="col-sm-4">
            <label for="subseries">Subseries Name</label>
            <select name="subseries_name" wire:model="selectedSeries" id="subseries_name" class="form-control" required>
                <option value="" selected>Select Subseries Name</option>
                @foreach ($subseries as $sub)
                <option value="{{ $sub->id }}">{{ $sub->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <label for="theme">Theme Name</label>
            <select name="theme" id="theme" class="form-control" >
                <option value="" selected>Select Theme Name</option>
                @foreach ($themes as $theme)
                <option value="{{ $theme->id }}">{{ $theme->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-sm-4">
            <label for="collection_name">Collection Name</label>
            <input type="text" class="form-control" name="collection_name"  value="{{ $collection_name }}"  placeholder="Collection Name" required readonly>
        </div>
        <div class="col-sm-4">
            <label for="series">Series Name</label>
            @if ($seriesFlag == 0)
            <input type="text" class="form-control" name="series"  value="{{ $myseries }}"  placeholder="Series Name" required readonly>
            @else
            <select name="series" id="series" class="form-control" wire:model="selectedMyseries">
                <option value="" selected>Select Series</option>
                @foreach ($myseries123 as $s123)
                    <option value="{{ $s123->name }}">{{ $s123->name }}</option>
                @endforeach
            </select>
            @endif
        </div>
        <div class="col-sm-4">
            <label for="casting_name">Casting Name</label>
            @if ($castingFlag == 0)
            <select name="casting_name" id="casting_name" class="form-control" >
                <option value="" selected>Select Casting Name</option>
                @foreach ($casting_name as $casting123)
                    <option value="{{ $casting123->casting_name }}">{{ $casting123->casting_name }}</option>
                @endforeach
            </select> 
            @else
            <select name="casting_name" id="casting_name" class="form-control" >
                <option value="" selected>Select Casting Name</option>
                @foreach ($casting_name123 as $casting123)
                    <option value="{{ $casting123->casting_name }}">{{ $casting123->casting_name }}</option>
                @endforeach
            </select>
            @endif
        </div>
    </div>
</div>


<!--div class="col-xl-9 col-lg-9 col-md-9 col-sm-6 col-12">
    <div class="row">
        <div class="col-sm-4 p-2">
            <label for="category_name">Category Name</label>
            <select name="category_name"  wire:model="selectedCat"  id="category_name" class="form-control"  required>
                <option value="" selected>Select Category Name</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select> 
        </div>
        <div class="col-sm-4 p-2">
            <label for="subseries">Subseries Name</label>
            <select name="subseries_name" wire:model="selectedSeries" id="subseries_name" class="form-control" required>
                <option value="" selected>Select Subseries Name</option>
                @foreach ($subseries as $s1)
                    <option value="{{ $s1->id }}">{{ $s1->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-4 p-2">
            <label for="theme">Theme Name</label>
            <select name="theme" id="theme" class="form-control">
                <option value="" selected>Select Theme Name</option>
                @foreach ($themes as $theme)
                    <option value="{{ $theme->id }}">{{ $theme->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-4 p-2">
            <label for="collection_name">Collection Name</label>
            <input type="text" class="form-control" name="collection_name"  value="{{ $collection_name }}"  placeholder="Collection Name" required readonly>
        </div>
        <div class="col-sm-4 p-2">
            <label for="series">Series Name</label>
            <input type="text" class="form-control" name="series"  value="{{ $myseries }}"  placeholder="Series Name" required readonly>
        </div>
        <div class="col-sm-4 p-2">
            <label for="casting_name">Casting Name</label>
            <select name="casting_name" id="casting_name" class="form-control" >
                <option value="" selected>Select Casting Name</option>
                @foreach ($casting_name as $casting123)
                    <option value="{{ $casting123->casting_name }}">{{ $casting123->casting_name }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div-->