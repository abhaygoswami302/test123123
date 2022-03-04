<div class="col-sm-8">
    @if ($count_exceeded <> 0)
        <div class="alert alert-danger">
            Limit Exceeded, Switch To Premium
        </div>
    @else
    <form action="{{ route('user.lego.minifigures.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row px-4">
            <div class="col-sm-4 p-1">
                <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name">
            </div>
            <div class="col-sm-4 p-1">
                <input type="text" name="fig_num" class="form-control" placeholder="Enter Fig Num">
            </div>
            <div class="col-sm-4 p-1">
                <input type="text" name="num_parts" class="form-control" placeholder="Enter Num Parts">
            </div>
            <div class="col-sm-12 py-2"></div>
            <div class="col-sm-4 p-0">
                <select name="visibility" id="" class="form-control">
                    <option value="">Select Visibility</option>
                    <option value="1">Visible</option>
                    <option value="0">Hidden</option>
                </select><br>
            </div>  <div class="col-sm-4">
                <input type="file" name="image1" id="">
            </div>
            <div class="col-sm-4">
                <input type="file" name="image2" id="">
            </div>
            <div class="col-sm-4">
                <input type="file" name="image3" id="">
            </div>
            <div class="col-sm-4">
                <input type="file" name="image4" id="">
            </div>
            <div class="col-sm-4">
                <input type="file" name="image5" id="">
            </div>
            <div class="col-sm-12 py-2"></div>
            <div class="col-sm-12">
                <div class="VwBtn">
                    <button type="submit" class="glow-on-hover btn btn-1 text-white mb-2" >Add Product</button>
                </div>
            </div>
        </div>
    </form>
    @endif
</div>
