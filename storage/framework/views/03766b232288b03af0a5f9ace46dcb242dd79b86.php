

<?php $__env->startSection('content'); ?>
		
    <section class="InnerBanner" style="background-image: url(<?php echo e(asset('images/banner.png')); ?>);">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
                    
					<div class="InnerBannerTxt">
						<div class="TitleMn">
							<h2>Feedback</h2>
						</div>
						<!--p>Total <b>2</b> Collections | <b>2</b>  in this page</p-->
                    
                            <div class="col-xl-12 text-center">
                                <ul class="breadcrumb">
                                    <li><a class="active" href="<?php echo e(route('welcome')); ?>">Home</a></li>
                                    <li><a href="#">Feedback</a></li>
                                </ul> 
                            </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="Plain_First GuestGrid " style="background-image: url(<?php echo e(asset('images/patteren.png')); ?>);">
        <div class="container">
            <div class="row">
                <?php if(Session('message')): ?>
                    <div class="col-sm-12">
                        <div class="alert alert-success">
                            Thank You For Your Feedback.
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="row">
                    <form action="<?php echo e(route('suggestions')); ?>" method="POST" class="text-center" style="width:100%;">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                        <div class="col-sm-10 py-2">
                            <div class="search">
                                <span class="SrchHvr">
                                        <input type="email" name="email" class="SrchHdr form-control" 
                                        placeholder="Your Email" required>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-2"></div>
                        <br><br>
                        <div class="col-sm-10 py-2">
                            <div class="search">
                                <span class="SrchHvr">
                                    <textarea class="SrchHdr form-control"  name="collection" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Your Message" required style="border-radius:15px"></textarea>

                                    <div class="VwBtn">
                      
                        <button type="submit" class="glow-on-hover btn btn-1 text-white" >Send</button>

                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-2"></div>
                        </div>
                    </form>
            </div>
        
            <!--div class="row mt-4">


                    <div class="col-sm-4">
                        <div class="product">
                            <div class="imgbox"> <img src="<?php echo e(asset('images/collection_not_found.jpg')); ?>" > </div>
                            <div class="specifies">
                                <h2> Funskool <br> <span>Collection</span></h2>
                                <div class=""> 
                                <a href="#">
                                    <button class="btn btn-primary">View All Categories/Themes In Funskool</button>
                                </a>
                                </div> <label>Description</label>
                                <!--ul>
                                    <li>10MM</li>
                                    <li>20MM</li>
                                    <li>30MM</li>
                                    <li>40MM</li>
                                    <li>50MM</li>
                                </ul> <label>Colors</label>
                                <ul class="colors">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul-->
                                <!--p class="py-1">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae tenetur consequuntur, omnis illo laboriosam accusamus iusto perspiciatis.
                                     culpa ipsum ea suscipit molestias quis adipisci.
                                </p>
                               
                            </div>
                        </div>
                    </div>
            </div-->
        </div>
	</section>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/guest/feedback.blade.php ENDPATH**/ ?>