<div class="row">
    <div class="form-group col-lg-12">
        <select name="category_id" id="category_id" class="form-control" wire:model="selectedState">
            <option value="">Select Category</option>
            @foreach ($categories as $s1)
                <option value="{{ $s1->id }}">{{ $s1->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-lg-12">
        <select name="subseries_id" id="subseries_id" class="form-control" wire:model="selectedMainline">
            <option value="" selected>Select Subseries</option>
            @foreach ($subseries as $s1)
                <option value="{{ $s1->id }}">{{ $s1->name }}</option>
            @endforeach
        </select>
    </div>
    @if ($mainlineFlag == 1)
    <div class="form-group col-lg-12">
        <select name="series_id" id="series_id" class="form-control">
            <option value="" selected>Select Series</option>
            @foreach ($series123 as $s1)
                <option value="{{ $s1->id }}">{{ $s1->name }}</option>
            @endforeach
        </select>
    </div>
    @endif
</div>