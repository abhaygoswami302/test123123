

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
            <!-- Content Row -->
    <div class="row">

        <div class="col-sm-6 ">
            <h3 class="m-0 font-weight-bold text-primary">Add New Hot Toys Product</h3>
        </div>
        <div class="col-sm-6 text-right pb-4 ">
           <a href="<?php echo e(route('editor_products.create')); ?>">
            <button class="btn btn-primary btn-sm">Add New Hot Wheels Product</button>
           </a>
        </div>

        <div class="col-lg-12 mb-2">
            <?php echo $__env->make('editor.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>           
        </div>

        <div class="col-xl-12 ">
            <div class="row card shadow mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Add New Hot Toys Product                    </h6>
                </div>
                <div class="card-body">
                    <div class="col-sm-12">
                        <form action="<?php echo e(route('editor_hot_toys.store')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row px-4">
                                <div class="col-sm-4 p-1">
                                    <label for="name">Toy Name</label>
                                    <input type="text" name="name" class="form-control" required placeholder="Enter Product Name">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="category_name">Category Name</label>
                                    <select name="category_name" id="category_name" class="form-control">
                                        <option value="">Select Category</option>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($category->name); ?>" ><?php echo e($category->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="subseries_name">Subseries Name</label>
                                    <select name="subseries_name" id="subseries_name" class="form-control">
                                        <option value="">Select subseries</option>
                                        <?php $__currentLoopData = $subseries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($sub->name); ?>" ><?php echo e($sub->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>                                
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="model_name">Model Name</label>
                                    <input type="text" name="model_name" class="form-control" required placeholder="Enter Model Name">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="year">Year</label>
                                    <input type="text" name="year" class="form-control" required placeholder="Enter Year">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="collection_name">Collection Name</label>
                                    <input type="text" name="collection_name" readonly value="Hot Toys" class="form-control" required placeholder="Enter Collection Name">
                                </div>
    
                                <div class="col-sm-6 p-1">
                                    <label for="toy_hash">Toy Hash</label>
                                    <input type="text" name="toy_hash" class="form-control" required placeholder="Enter Fig Num">
                                </div>
                                <div class="col-sm-6 p-1">
                                    <label for="visibility">Visibility</label>
                                    <select name="visibility" id="" class="form-control">
                                        <option value="0">Select Visibility</option>
                                        <option value="1">Visible</option>
                                        <option value="0">Hidden</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 p-1">
                                    <label for="notes">Notes</label>
                                    <textarea name="notes" id="notes" cols="30" rows="3" class="form-control">
                                    </textarea>
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 1</label>
                                    <input type="file" name="image1" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 2</label>
                                    <input type="file" name="image2" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 3</label>
                                    <input type="file" name="image3" id="">
                                </div>
    
                                <div class="col-sm-12 p-1"></div>
    
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 4</label>
                                    <input type="file" name="image4" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 5</label>
                                    <input type="file" name="image5" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 6</label>
                                    <input type="file" name="image6" id="">
                                </div>
    
                                <div class="col-sm-12 p-1"></div>
    
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 7</label>
                                    <input type="file" name="image7" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 8</label>
                                    <input type="file" name="image8" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 9</label>
                                    <input type="file" name="image9" id="">
                                </div>
    
                                <div class="col-sm-12 p-1"></div>
    
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 10</label>
                                    <input type="file" name="image10" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 11</label>
                                    <input type="file" name="image11" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 12</label>
                                    <input type="file" name="image12" id="">
                                </div>
    
                                <div class="col-sm-12 p-1"></div>
    
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 13</label>
                                    <input type="file" name="image13" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 14</label>
                                    <input type="file" name="image14" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 15</label>
                                    <input type="file" name="image15" id="">
                                </div>
    
                                <div class="col-sm-12 p-1"></div>
    
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 16</label>
                                    <input type="file" name="image16" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 17</label>
                                    <input type="file" name="image17" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 18</label>
                                    <input type="file" name="image18" id="">
                                </div>
    
                                <div class="col-sm-12 p-1"></div>
    
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 19</label>
                                    <input type="file" name="image19" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 20</label>
                                    <input type="file" name="image20" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 21</label>
                                    <input type="file" name="image21" id="">
                                </div>
    
                                <div class="col-sm-12 p-1"></div>
    
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 22</label>
                                    <input type="file" name="image22" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 23</label>
                                    <input type="file" name="image23" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 24</label>
                                    <input type="file" name="image24" id="">
                                </div>
    
                                <div class="col-sm-12 p-1"></div>
    
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 25</label>
                                    <input type="file" name="image25" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 26</label>
                                    <input type="file" name="image26" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 27</label>
                                    <input type="file" name="image27" id="">
                                </div>
    
                                <div class="col-sm-12 p-1"></div>
    
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 28</label>
                                    <input type="file" name="image28" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 29</label>
                                    <input type="file" name="image29" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 30</label>
                                    <input type="file" name="image30" id="">
                                </div>
    
                                <div class="col-sm-12 p-1"></div>
    
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 31</label>
                                    <input type="file" name="image31" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 32</label>
                                    <input type="file" name="image32" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 33</label>
                                    <input type="file" name="image33" id="">
                                </div>
    
                                <div class="col-sm-12 p-1"></div>
    
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 34</label>
                                    <input type="file" name="image34" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 35</label>
                                    <input type="file" name="image35" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 36</label>
                                    <input type="file" name="image36" id="">
                                </div>
    
                                <div class="col-sm-12 p-1"></div>
    
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 37</label>
                                    <input type="file" name="image37" id="">
                                </div>
                                <div class="col-sm-4 p-1">
                                    <label for="">Image 38</label>
                                    <input type="file" name="image38" id="">
                                </div>
    
                                <div class="col-sm-12 py-4 px-0">
                                    <div class="">
                                        <button type="submit" class="btn-block btn btn-primary text-white mb-2" >Add New Hot Toys Product</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>  
        </div>
    </div>
</div>

    </div>

    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.editor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ucc\resources\views/editor/hot_toys/create.blade.php ENDPATH**/ ?>