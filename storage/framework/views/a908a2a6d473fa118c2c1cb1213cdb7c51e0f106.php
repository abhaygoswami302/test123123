

<?php $__env->startSection('content'); ?>
<section class="Plain_First guest-product-show GuestGrid guest-product-show" style="background-image: url(<?php echo e(asset('images/patteren.png')); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 py-2">
                <ul class="breadcrumb" style="background: transparent">
                    <li><a class="active" href="<?php echo e(route('welcome')); ?>">Home</a></li>
                    <li><a class="active" href="<?php echo e(route('product.index')); ?>">Products</a></li>
                     <li><a href="<?php echo e(route('product.show', $product->id)); ?>"><?php echo e(ucfirst($product->name)); ?></a></li>
                </ul> 
            </div>
        </div>
        <div class="row guest-product-row">
          
            <div class="col-sm-12 p-2">
                <?php echo $__env->make('partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <div class="col-sm-6 p-4">
                <?php if($product->image1 == null): ?>
                    <img src="<?php echo e(asset('images/car_not_found.jpg')); ?>" alt="" id="my_custom_single_product_image" style="width:500px">                    
                <?php else: ?>
                <!--img src="<?php echo e(asset($product->image1)); ?>" alt="" style="width:500px;"-->       
                
            <!-- partial:index.partial.html -->
            <div id="sync1" class="owl-carousel owl-theme">
                <div class="item">
                    <img src="<?php echo e(asset($product->image1)); ?>" alt="">       
                    <!--h1>1</h1-->
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->image2)); ?>" alt="">       
                    <!--h1>2</h1-->
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->image3)); ?>" alt="">       
                    <!--h1>3</h1-->
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->image4)); ?>" alt="">       
                    <!--h1>4</h1-->
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->image5)); ?>" alt="">       
                    <!--h1>5</h1-->
                </div>
                <?php if($product->collection_name == 'Hot Toys'): ?>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image6)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image7)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image8)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image9)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image10)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image11)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image12)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image13)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image14)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image15)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image16)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image17)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image18)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image19)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image20)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image21)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image22)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image23)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image24)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image25)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image26)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image27)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image28)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image29)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image30)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image31)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image32)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image33)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image34)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image35)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image36)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image37)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image38)); ?>" alt="">       
                </div>

                <?php endif; ?>
            </div>

            <div id="sync2" class="owl-carousel owl-theme">
                <div class="item">
                    <img src="<?php echo e(asset($product->image1)); ?>" alt="">       
                    <!--h1>1</h1-->
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->image2)); ?>" alt="">       
                    <!--h1>2</h1-->
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->image3)); ?>" alt="">       
                    <!--h1>3</h1-->
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->image4)); ?>" alt="">       
                    <!--h1>4</h1-->
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->image5)); ?>" alt="">       
                    <!--h1>5</h1-->
                </div>
                <?php if($product->collection_name == 'Hot Toys'): ?>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image6)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image7)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image8)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image9)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image10)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image11)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image12)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image13)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image14)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image15)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image16)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image17)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image18)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image19)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image20)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image21)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image22)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image23)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image24)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image25)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image26)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image27)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image28)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image29)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image30)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image31)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image32)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image33)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image34)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image35)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image36)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image37)); ?>" alt="">       
                </div>
                <div class="item">
                    <img src="<?php echo e(asset($product->productImage->image38)); ?>" alt="">       
                </div>

                <?php endif; ?>
            </div>
                                    

                <?php endif; ?>
            </div>
            <div class="col-sm-6 p-4">
                <div class="row">
                    <?php if($product->collection_name == 'Hot Wheels'): ?>
                        <div class="col-sm-12">
                            <h3 class="py-2"><?php echo e(ucfirst($product->name)); ?></h3>
                            <p>
                                <?php echo e(substr($product->description, 0, 600)); ?>

                            </p>
                        </div>
                        <div class="col-sm-12 pb-2">
                            <h5 class="py-1"><b>Year :</b>
                                <?php if($product->year <> null): ?>
                                <a href="<?php echo e(route('byyear', $product->year)); ?>">
                                    <?php echo e($product->year); ?> 
                                </a>
                                <?php else: ?>
                                N/A
                                <?php endif; ?>
                            </h5>
                            <h5 class="py-1"><b>Series :</b> 
                                <?php if($product->series <> null): ?>
                                <a href="<?php echo e(route('byseries', $product->series)); ?>">
                                    <?php echo e($product->series); ?>

                                </a>
                                <?php else: ?>
                                N/A
                                <?php endif; ?>
                            </h5>  
                            <h5 class="py-1"><b>Theme :</b> 
                            <?php if($product->theme_id <> null): ?>
                                <a href="<?php echo e(route('bytheme', $product->theme_id)); ?>">
                                    <?php echo e($product->theme); ?>

                                </a>
                                <?php else: ?>
                                N/A
                            <?php endif; ?>
                            </h5>  
                            <h5 class="py-1"><b>Casting Name :</b> 
                                <?php if($product->casting_name <> null): ?>
                                <a href="<?php echo e(route('bycasting', $product->casting_name)); ?>">
                                    <?php echo e($product->casting_name); ?>     
                                </a>    
                                <?php else: ?>
                                N/A
                                <?php endif; ?>
                            </h5>  
                            <h5 class="py-1"><b>Colour :</b> <?php echo e($product->colour); ?> </h5>
                            <h5 class="py-1"><b>Tampo :</b> <?php echo e($product->tampo); ?> </h5>
                            <h5 class="py-1"><b>Base Colour / Type :</b> <?php echo e($product->base_colour); ?> / <?php echo e($product->type); ?> </h5>
                            <h5 class="py-1"><b>Window Colour :</b> <?php echo e($product->window_colour); ?> </h5>
                            <h5 class="py-1"><b>Interior Colour :</b> <?php echo e($product->interior_colour); ?> </h5>
                            <h5 class="py-1"><b>Wheel Type :</b> <?php echo e($product->wheel_type); ?> </h5>
                            <h5 class="py-1"><b>Country :</b> <?php echo e($product->country); ?> </h5>
                            <h5 class="py-1"><b>Toy# :</b> <?php echo e($product->toy_hash); ?> </h5>
                            <h5 class="py-1"><b>Col# :</b> <?php echo e($product->col_hash); ?> </h5>
                            <h5 class="py-1"><b>Series# :</b> <?php echo e($product->series_hash); ?> </h5>
                       
                        </div>
                    <?php elseif($product->collection_name == 'Hot Toys'): ?>
                    <div class="row p-2">
                        <div class="col-sm-12">
                            <h5 class="py-1"><b>Name :</b> <?php echo e($product->name); ?> </h5>
                        </div>
                        <div class="col-sm-12">
                            <h5 class="py-1"><b>Category Name :</b> <?php echo e($product->category_name); ?> </h5>
                        </div>
                        <div class="col-sm-12">
                            <h5 class="py-1"><b>Toy Hash :</b> <?php echo e($product->toy_hash); ?> </h5>
                        </div>
                        <div class="col-sm-12">
                            <h5 class="py-1"><b>Subseries Name :</b> <?php echo e($product->subseries_name); ?> </h5>
                        </div>
                        <div class="col-sm-12">
                            <h5 class="py-1"><b>Collection Name :</b> <?php echo e($product->collection_name); ?> </h5>
                        </div>
                        <div class="col-sm-12">
                            <h5 class="py-1"><b>Year :</b> <?php echo e($product->year); ?> </h5>
                        </div>
                        <div class="col-sm-12">
                            <h5 class="py-1"><b>Notes :</b> <?php echo substr(trim($product->notes), 0, 300); ?> <small><a href="#" data-toggle="modal" data-target="#ReadMore">Read More...</a></small> </h5>
                        </div>
                        <!-- Read More Modal -->
                        <div class="modal fade" id="ReadMore" tabindex="-1" role="dialog" aria-labelledby="ReadMoreLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ReadMoreLabel">Read More | Notes</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    <?php echo $product->notes; ?>

                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <?php elseif($product->collection_name == 'Lego MiniFigures'): ?>
                    <div class="row p-2">
                        <div class="col-sm-12">
                            <h5 class="py-1"><b>Name :</b> <?php echo e($product->lego_mf_name); ?> </h5>
                        </div>
                        <div class="col-sm-12">
                            <h5 class="py-1"><b>Fig Num :</b> <?php echo e($product->lego_mf_fig_num); ?> </h5>
                        </div>
                        <div class="col-sm-12">
                            <h5 class="py-1"><b>Num Parts :</b> <?php echo e($product->lego_mf_num_parts); ?> </h5>
                        </div>
                    </div>
                    <?php endif; ?>


                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('liked', ['product' => $product])->html();
} elseif ($_instance->childHasBeenRendered('KLapaFN')) {
    $componentId = $_instance->getRenderedChildComponentId('KLapaFN');
    $componentTag = $_instance->getRenderedChildComponentTagName('KLapaFN');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('KLapaFN');
} else {
    $response = \Livewire\Livewire::mount('liked', ['product' => $product]);
    $html = $response->html();
    $_instance->logRenderedChild('KLapaFN', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                    <div class="col-sm-12">
                    </div>
                </div>
            </div>
        </div>

        <div class="row p-4" style="background: transparent">

        </div>
       
    <div class="row guest-product-row-products cstProHvr" >
        <div class="col-sm-12 p-4 text-center" >
            <h2>Related Products</h2>
        </div>

        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product123): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-4">
                <div class="product">
                    <div class="imgbox">
                        <?php if($product123->image1 == NULL): ?>
                        <img src=" <?php echo e(asset('images/car_not_found.jpg')); ?>" alt=""/>   
                        <?php else: ?>
                        <img src="<?php echo e(asset($product123->image1)); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="specifies">
                        <h2> <?php echo e($product123->name); ?> <br> <span><?php echo e($product123->category_name); ?> | <?php echo e($product123->year); ?></span></h2>
                        <!--div class="price">$1500</div--> <label>Series : 
                            <span  style="border: 1px solid rgb(194, 193, 193)" class="py-1 px-2"><?php echo e($product123->series); ?></span></label>
                        

                            <div class="row">
                                <div class="col-sm-12">
                                    <a href="<?php echo e(route('product.show', $product123->id)); ?>">
                                        <button class="btn btn-primary">View Product</button>
                                    </a>
                                </div>
                                <div class="col-sm-4">
                                    <b> Theme:</b> 
                                </div>
                                <div class="col-sm-8">
                                    <?php echo e($product123->theme); ?>

                                </div>
                                <?php if($product123->collection_name == 'Hot Toys'): ?>
                                <div class="col-sm-4">
                                    <b> Category:</b> 
                                 </div>
                                 <div class="col-sm-8">
                                     <?php echo e($product123->category_name); ?>

                                 </div>
                                 <?php else: ?>
                                 <div class="col-sm-4">
                                    <b> Casting:</b> 
                                 </div>
                                 <div class="col-sm-8">
                                     <?php echo e($product123->casting_name); ?>

                                 </div>
                                <?php endif; ?>

                            </div>

                        <p></p>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>



    <!-- Modal Code -->


    <!-- Modal -->
    <form action="<?php echo e(route('product.feedback.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true"  data-backdrop="static" data-keyboard="false" >
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Feedback For Product Name : <b><?php echo e($product->name); ?></b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
            <input type="hidden" name="collection_id" value="<?php echo e($product->collection_id); ?>">
            <input type="hidden" name="category_id" value="<?php echo e($product->category_id); ?>">
                <input type="hidden" name="subseries_id" value="<?php echo e($product->subseries_id); ?>">
                <input type="hidden" name="theme_id" value="<?php echo e($product->theme_id); ?>">
                <?php if($product->collection_name == 'Hot Wheels'): ?>
                <div class="row py-2">
                    <div class="col-sm-4">
                        <small>Name : <?php echo e($product->name); ?></small>
                        <textarea name="name" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Name Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Series : <?php echo e($product->series); ?></small>
                        <textarea name="series" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Series Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Category Name : <?php echo e($product->category_name); ?></small>
                        <textarea name="category_name" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Category Name Field"></textarea>
                    </div>
                </div>

                <div class="row py-2">
                    <div class="col-sm-4">
                        <small>Collection Name : <?php echo e($product->collection_name); ?></small>
                        <textarea name="collection_name" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Collection Name Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Subseries Name : <?php echo e($product->subseries_name); ?></small>
                        <textarea name="subseries_name" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Subseries Name Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Theme : <?php echo e($product->theme); ?></small>
                        <textarea name="theme" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Theme Field"></textarea>
                    </div>
                </div>

                <div class="row py-2">
                    <div class="col-sm-4">
                        <small>Model Name : <?php echo e($product->model_name); ?></small>
                        <textarea name="model_name" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Model Name Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Casting Name : <?php echo e($product->casting_name); ?></small>
                        <textarea name="casting_name" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Casting Name Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Year : <?php echo e($product->year); ?></small>
                        <textarea name="year" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Year Field"></textarea>
                    </div>
                </div>

                <div class="row py-2">
                    <div class="col-sm-4">
                        <small>Colour : <?php echo e($product->colour); ?></small>
                        <textarea name="colour" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Colour Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Tampo : <?php echo e($product->tampo); ?></small>
                        <textarea name="tampo" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Tampo Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Decoration : <?php echo e($product->decoration); ?></small>
                        <textarea name="decoration" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Decoration Field"></textarea>
                    </div>
                </div>
                
                <div class="row py-2">
                    <div class="col-sm-4">
                        <small>Base Colour : <?php echo e($product->base_colour); ?></small>
                        <textarea name="base_colour" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Base Colour Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Type : <?php echo e($product->type); ?></small>
                        <textarea name="type" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Type Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Window Colour : <?php echo e($product->window_colour); ?></small>
                        <textarea name="window_colour" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Window Colour Field"></textarea>
                    </div>
                </div>

                <div class="row py-2">
                    <div class="col-sm-4">
                        <small>Interior Colour : <?php echo e($product->interior_colour); ?></small>
                        <textarea name="interior_colour" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Interior Colour Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Wheel Type : <?php echo e($product->wheel_type); ?></small>
                        <textarea name="wheel_type" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Wheel Type Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Country : <?php echo e($product->country); ?></small>
                        <textarea name="country" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Country Field"></textarea>
                    </div>
                </div>
            
                <div class="row py-2">
                    <div class="col-sm-4">
                        <small>Class : <?php echo e($product->class); ?></small>
                        <textarea name="class" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Class Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Col Hash : <?php echo e($product->col_hash); ?></small>
                        <textarea name="col_hash" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Col Hash Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Series Hash : <?php echo e($product->series_hash); ?></small>
                        <textarea name="series_hash" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Series Hash Field"></textarea>
                    </div>
                </div>
 
                <div class="row py-2">
                    <div class="col-sm-12">
                        <small>Toy Hash : <?php echo e($product->toy_hash); ?></small>
                        <textarea name="toy_hash" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Toy Hash Field"></textarea>
                    </div>
                </div>

                <div class="row py-2">
                    <div class="col-sm-12">
                        <small>Notes : <?php echo e($product->notes); ?></small>
                        <textarea name="notes" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Notes Field"></textarea>
                    </div>
                </div>
                <?php elseif($product->collection_name == 'Hot Toys'): ?>
                <div class="row py-2">
                    <div class="col-sm-4">
                        <small>Name : <?php echo e($product->name); ?></small>
                        <textarea name="name" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Name Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Category Name : <?php echo e($product->category_name); ?></small>
                        <textarea name="category_name" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Category Name Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Toy Hash : <?php echo e($product->toy_hash); ?></small>
                        <textarea name="toy_hash" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Toy Hash Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Category Name : <?php echo e($product->category_name); ?></small>
                        <textarea name="category_name" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Name Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Suberies Name : <?php echo e($product->subseries_name); ?></small>
                        <textarea name="subseries_name" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Category Name Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Year: <?php echo e($product->year); ?></small>
                        <textarea name="year" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Toy Hash Field"></textarea>
                    </div>
                    <div class="col-sm-12">
                        <small>Notes : <?php echo e($product->notes); ?></small>
                        <textarea name="notes" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Notes Field"></textarea>
                    </div>
                </div>
                <?php else: ?>
                <div class="row py-2">
                    <div class="col-sm-4">
                        <small>Fig Num : <?php echo e($product->lego_mf_fig_num); ?></small>
                        <textarea name="lego_mf_fig_num" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Fig Num Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Name : <?php echo e($product->lego_mf_name); ?></small>
                        <textarea name="lego_mf_name" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Name Field"></textarea>
                    </div>
                    <div class="col-sm-4">
                        <small>Num Rows : <?php echo e($product->lego_mf_num_parts); ?></small>
                        <textarea name="lego_mf_num_parts" id="" cols="30" rows="2" class="form-control" placeholder="Enter Feedback For Num Parts Field"></textarea>
                    </div>
                </div>
                <?php endif; ?>

                <div class="row py-2">
                    <div class="col-sm-12">
                        Extra Note
                        <textarea name="important_note" id="" cols="30" rows="4" class="form-control" placeholder="Enter Extra Note"></textarea>
                    </div>
                </div>

          
          </div>
          <div class="modal-footer">
              <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                      <button type="submit" class="btn btn-primary">Send Feedback</button>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
</form>

</div>

</section>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ucc\resources\views/guest/products/show.blade.php ENDPATH**/ ?>