<div class="row">
    <div class="col-xl-12 p-2">
        <form action="">
            <input type="text" name="search" class="SrchHdr form-control" 
            placeholder="Search Your Products, Categories And Series Here" wire:model="searchTerm">
        </form>
    </div>

    <div class="col-xl-12">
        <?php echo $__env->make('partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card">
            <div class="table-responsive">
                <table class="card-body table table-hover table-striped table-bordered ">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Name</th>
                            <th>Series</th>
                            <th>Category_Name</th>
                            <th>Collection_Name</th>
                            <th>Subseries_Name</th>
                            <th>Theme</th>
                            <th>Model_Name</th>
                            <th>Casting_Name</th>  
                            <th>Year</th>  
                            <th>Colour</th>  
                            <th>Tampo</th>  
                            <!--th>Decoration</th-->  
                            <th>Base_Colour</th>  
                            <th>Type</th>  
                            <th>Window_Colour</th>  
                            <th>Interior_Colour</th>  
                            <th>Wheel_Type</th>  
                            <th>Visibility</th>  
                            <th>Country</th>
                            <th>Class</th>  
                            <th>Notes</th>  
                            <th>Toy#</th>  
                            <th>Col#</th>  
                            <th>Series#</th>  
                            <th>Image1</th>  
                            <th>Image2</th>  
                            <th>Image3</th>  
                            <th>Image4</th>  
                            <th>Image5</th>  
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($key == 0 && $product->collection_name == 'Hot Toys'): ?>
                            <th>Image6</th>  
                            <th>Image7</th>  
                            <th>Image8</th>  
                            <th>Image9</th>  
                            <th>Image10</th>  
                            <th>Image11</th>  
                            <th>Image12</th>  
                            <th>Image13</th>  
                            <th>Image14</th>  
                            <th>Image15</th>  
                            <th>Image16</th>  
                            <th>Image17</th>  
                            <th>Image18</th>  
                            <th>Image19</th>  
                            <th>Image20</th>  
                            <th>Image21</th>  
                            <th>Image22</th>  
                            <th>Image23</th>  
                            <th>Image24</th>  
                            <th>Image25</th>  
                            <th>Image26</th>  
                            <th>Image27</th>  
                            <th>Image28</th>  
                            <th>Image29</th>  
                            <th>Image30</th>  
                            <th>Image31</th>  
                            <th>Image32</th>  
                            <th>Image33</th>  
                            <th>Image34</th>  
                            <th>Image35</th>  
                            <th>Image36</th>  
                            <th>Image37</th>  
                            <th>Image38</th>    
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <!--th>Created_At</th-->  
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td>
                                <button  wire:click="bookmark(<?php echo e($product); ?>)" class="btn btn-danger">
                                    Remove From My Collection
                                </button>
                            </td>
                            <td>
                                <a href="<?php echo e(route('product.show', $product->id)); ?>">
                                    <?php echo e($product->name); ?>

                                </a>
                            </td>
                            <td><?php echo e($product->series); ?></td>
                            <td><?php echo e($product->category_name); ?></td>
                            <td><?php echo e($product->collection_name); ?></td>
                            <td><?php echo e($product->subseries_name); ?></td>
                            <td><?php echo e($product->theme); ?></td>
                            <td><?php echo e($product->model_name); ?></td>
                            <td><?php echo e($product->casting_name); ?></td>  
                            <td><?php echo e($product->year); ?></td>  
                            <td><?php echo e($product->colour); ?></td>  
                            <td><?php echo e($product->tampo); ?></td>  
                            <!--td><?php echo e($product->decoration); ?></td-->  
                            <td><?php echo e($product->base_colour); ?></td>  
                            <td><?php echo e($product->type); ?></td>  
                            <td><?php echo e($product->window_colour); ?></td>  
                            <td><?php echo e($product->interior_colour); ?></td>  
                            <td><?php echo e($product->wheel_type); ?></td>  
                            <td>
                                <?php if($product->visibility == '0'): ?>
                                    Hidden
                                <?php else: ?>
                                    Visible
                                <?php endif; ?>    
                            </td>  
                            <td><?php echo e($product->country); ?></td>  
                            <td><?php echo e($product->class); ?></td>  
                            <td><?php echo e(substr($product->notes , 0, 20)); ?></td>
                            <td><?php echo e($product->toy_hash); ?></td>
                            <td><?php echo e($product->col_hash); ?></td>  
                            <td><?php echo e($product->series_hash); ?></td>  
                            <td>
                                <?php if($product->image1 <> null): ?>
                                <img src="<?php echo e(asset($product->image1)); ?>" alt="" style="width:70px;height:50px">
                                <?php endif; ?>
                            </td>  
                            <td>
                                <?php if($product->image2 <> null): ?>
                                <img src="<?php echo e(asset($product->image2)); ?>" alt="" style="width:70px;height:50px">
                                <?php endif; ?>
                            </td>  
                            <td>
                                <?php if($product->image3 <> null): ?>
                                <img src="<?php echo e(asset($product->image3)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>
                            <td>
                                <?php if($product->image4 <> null): ?>
                                <img src="<?php echo e(asset($product->image4)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>
                            <td>
                                <?php if($product->image5 <> null): ?>
                                <img src="<?php echo e(asset($product->image5)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>

                            <?php if($product->collection_name == 'Hot Toys'): ?>
                                
                           
                            <td>
                                <?php if($product->productImage->image6 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image6)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>
                            <td>
                                <?php if($product->productImage->image7 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image7)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>
                            <td>
                                <?php if($product->productImage->image8 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image8)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>                           
                            <td>
                                <?php if($product->productImage->image9 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image9)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>                            
                            <td>
                                <?php if($product->productImage->image10 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image10)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>                            
                            <td>
                                <?php if($product->productImage->image11 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image11)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>                         
                            <td>
                                <?php if($product->productImage->image12 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image12)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>                            
                            <td>
                                <?php if($product->productImage->image13 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image13)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>     
                            <td>
                                <?php if($product->productImage->image14 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image14)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>                           
                            <td>
                                <?php if($product->productImage->image15 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image15)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>                            
                            <td>
                                <?php if($product->productImage->image16 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image16)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>                            
                            <td>
                                <?php if($product->productImage->image17 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image17)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>                            
                            <td>
                                <?php if($product->productImage->image18 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image18)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>                            
                            <td>
                                <?php if($product->productImage->image19 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image19)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>                            
                            <td>
                                <?php if($product->productImage->image20 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image20)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>                            
                            <td>
                                <?php if($product->productImage->image21 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image21)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>                            
                            <td>
                                <?php if($product->productImage->image22 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image22)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>      
                            <td>
                                <?php if($product->productImage->image23 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image23)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>      
                            <td>
                                <?php if($product->productImage->image24 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image24)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>                            
                            <td>
                                <?php if($product->productImage->image25 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image25)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>                            
                            <td>
                                <?php if($product->productImage->image26 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image26)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>                            
                            <td>
                                <?php if($product->productImage->image27 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image27)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>                            
                            <td>
                                <?php if($product->productImage->image28 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image28)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>                            
                            <td>
                                <?php if($product->productImage->image29 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image29)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>
                            <td>
                                <?php if($product->productImage->image30 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image30)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>                            
                            <td>
                                <?php if($product->productImage->image31 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image31)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>         
                            <td>
                                <?php if($product->productImage->image32 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image32)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>             
                            <td>
                                <?php if($product->productImage->image33 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image33)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?> 
                            <td>
                                <?php if($product->productImage->image34 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image34)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>                            
                            <td>
                                <?php if($product->productImage->image35 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image35)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>              
                            <td>
                                <?php if($product->productImage->image36 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image36)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>                            
                            <td>
                                <?php if($product->productImage->image37 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image37)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>                            
                            <td>
                                <?php if($product->productImage->image38 <> null): ?>
                                <img src="<?php echo e(asset($product->productImage->image38)); ?>" alt="" style="width:70px;height:50px"></td>  
                                <?php endif; ?>
                            <?php endif; ?>
                        <!--td><?php echo e($product->created_at->diffForHumans()); ?></td-->  
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        No Products Added By You Yet!
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!--div class="row p-4">
            <div class="col-sm-3 ">
                <div class="VwBtn text-left">
                    <a href="#">
                      <button class="glow-on-hover btn btn-1 text-white" type="button">Previous</button>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 offset-6 ">
                <div class="VwBtn text-right">
                    <a href="#">
                      <button class="glow-on-hover btn btn-1 text-white" type="button">Next</button>
                    </a>
                </div>
            </div>
        </div-->
    </div>
</div><?php /**PATH C:\xampp\htdocs\ucc\resources\views/livewire/user-products-search.blade.php ENDPATH**/ ?>