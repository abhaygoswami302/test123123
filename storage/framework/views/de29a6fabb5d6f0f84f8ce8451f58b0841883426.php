

<?php $__env->startSection('content'); ?>
		
    <section class="InnerBanner" style="background-image: url(<?php echo e(asset('images/banner.png')); ?>);">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
                    
					<div class="InnerBannerTxt">
						<div class="TitleMn">
							<h2>Policies</h2>
						</div>
						<!--p>Total <b>2</b> Collections | <b>2</b>  in this page</p-->
                    
                            <div class="col-xl-12 text-center">
                                <ul class="breadcrumb">
                                    <li><a class="active" href="<?php echo e(route('welcome')); ?>">Home</a></li>
                                    <li><a href="#">Policies</a></li>
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
                  <h5 class="text-center pb-3">Please find below links to all our policies. Should you have any further questions, please contact us using our feedback form or email to support@ultimatecollectionscompany.com</h5>
          
              
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 text-center p-0">
                            <a href="<?php echo e(route('general_disclaimer')); ?>" target="_blank" style="color: #4400bc">
                                General Disclaimer <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 text-center p-0">
                            <a href="<?php echo e(route('privacy_policy')); ?>"  target="_blank" style="color: #4400bc">
                                Privacy Policy <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 text-center p-0">
                            <a href="<?php echo e(route('terms_and_conditions')); ?>"  target="_blank" style="color: #4400bc">
                                Terms&Conditions <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
          <div class="col-sm-12 pt-3">
<h5>The images, photos, characters, figures, trademarks, and logos that appear on this site are owned by their respective owners. No copyright infringement is intended. We want to ensure that creators rights to a trademark are considered fully. If you believe that your trademark or copyright has been infringed upon, please contact us using our feedback form or email to support@ultimatecollectionscompany.com and we will take the necessary action. Our full copyright policy can be found in our Terms & Conditions linked above.</h5>
            </div>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/guest/policies.blade.php ENDPATH**/ ?>