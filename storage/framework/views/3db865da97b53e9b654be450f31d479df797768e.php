<footer class="FtrMn" id="NewFtr">
    <div class="FooterTp">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                    <div class="FooterTp_1">
                        <div class="FtrLogo">
                            <a href="<?php echo e(route('welcome')); ?>"><img src="<?php echo e(asset('images/footer_logo.png')); ?>" alt="" title="Ultimate Collections Company" /></a>
                        </div>
                        <div class="FtrScl">
                            <ul>
                                <li><a target="_blank" href=" https://www.facebook.com/ultimatecollectionscompany"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a target="_blank" href="https://twitter.com/ultimatecollco"><i class="fab fa-twitter"></i></a></li>
                                <!--li><a target="_blank" href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li-->
                                <li><a target="_blank" href="https://www.instagram.com/ultimate_collections_company/?hl=en"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                    <div class="FooterTp_1 ">
                        <div class="FtrTtl">
                            <h3>Useful links</h3>
                        </div>
                        <div class="FtrDsc">
                            <?php if(auth()->guard()->guest()): ?>
                            <ul>
                                <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i> Browse</a></li>
                                <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i> My Collection</a></li>
                                <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i> Forum</a></li>
                                <li><a href="<?php echo e(route('about.index')); ?>"><i class="fas fa-chevron-right"></i> About</a></li>
                            </ul>
                            <?php else: ?>
                            <ul>
                                <li><a href="<?php echo e(route('product.index')); ?>"><i class="fas fa-chevron-right"></i> Browse</a></li>
                                <li><a href="<?php echo e(route('userproduct.index')); ?>"><i class="fas fa-chevron-right"></i> My Collection</a></li>
                                <li><a href="<?php echo e(route('forum.index')); ?>"><i class="fas fa-chevron-right"></i> Forum</a></li>
                                <li><a href="<?php echo e(route('about.index')); ?>"><i class="fas fa-chevron-right"></i> About</a></li>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!--div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="FooterTp_1">
                        <div class="FtrTtl">
                            <h3>Categories</h3>
                        </div>
                        <div class="FtrDsc">
                            <ul>
                                <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i> Toys</a></li>
                                <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i> Records</a></li>
                                <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i> Stamps</a></li>
                                <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i> Lego</a></li>
                            </ul>
                        </div>
                    </div>
                </div-->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="FooterTp_1">
                        <div class="FtrTtl">
                            <h3>Download apps </h3>
                        </div>
                        <div class="FtrGoogleBtns">
                            <ul>
                                <li><a target="_blank" href="<?php echo e(route('guest.apps.coming.soon')); ?>"><img src="<?php echo e(asset('images/gp.png')); ?>" alt="" /></a></li>
                                <li><a target="_blank" href="<?php echo e(route('guest.apps.coming.soon')); ?>"><img src="<?php echo e(asset('images/app.png')); ?>" alt="" /></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="FooterBtm">
        <p>Copyright <?php echo e(date('Y')); ?>, Ultimate Collections Company . All Rights Reserved.</p>
    </div>
</footer>
<!-- Click To Top -->
<div class="Click_Top">
    <a id="button"><i class="fas fa-chevron-up"></i></a>
</div>

<!--script src="<?php echo e(asset('js/jquery.js')); ?>"></script-->
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script-->

    <script defer src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script defer src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js'></script>



<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<script src="<?php echo e(asset('js/menu.js')); ?>"></script>
<script src="<?php echo e(asset('js/all.js')); ?>"></script>
     
<script>
    jQuery(function($){ 
   // jQuery(document).ready(function() {
  
      var sync1 = jQuery("#sync1");
      var sync2 = jQuery("#sync2");
      var slidesPerPage = 4; //globaly define number of elements per page
      var syncedSecondary = true;
  
      sync1.owlCarousel({
    
          items: 1,
          slideSpeed: 2000,
          nav: true,
          autoplay: false, 
          dots: true,
          loop: true,
          responsiveRefreshRate: 200,
          navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
      }).on('changed.owl.carousel', syncPosition);
  
      sync2
          .on('initialized.owl.carousel', function() {
              sync2.find(".owl-item").eq(0).addClass("current");
          })
          .owlCarousel({
              items: slidesPerPage,
              dots: true,
              nav: true,
              smartSpeed: 200,
              slideSpeed: 500,
              slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
              responsiveRefreshRate: 100
          }).on('changed.owl.carousel', syncPosition2);
  
      function syncPosition(el) {
          //if you set loop to false, you have to restore this next line
          //var current = el.item.index;
  
          //if you disable loop you have to comment this block
          var count = el.item.count - 1;
          var current = Math.round(el.item.index - (el.item.count / 2) - .5);
  
          if (current < 0) {
              current = count;
          }
          if (current > count) {
              current = 0;
          }
  
          //end block
  
          sync2
              .find(".owl-item")
              .removeClass("current")
              .eq(current)
              .addClass("current");
          var onscreen = sync2.find('.owl-item.active').length - 1;
          var start = sync2.find('.owl-item.active').first().index();
          var end = sync2.find('.owl-item.active').last().index();
  
          if (current > end) {
              sync2.data('owl.carousel').to(current, 100, true);
          }
          if (current < start) {
              sync2.data('owl.carousel').to(current - onscreen, 100, true);
          }
      }
  
      function syncPosition2(el) {
          if (syncedSecondary) {
              var number = el.item.index;
              sync1.data('owl.carousel').to(number, 100, true);
          }
      }
  
      sync2.on("click", ".owl-item", function(e) {
          e.preventDefault();
          var number = jQuery(this).index();
          sync1.data('owl.carousel').to(number, 300, true);
      });
  });
  </script>

<?php /**PATH C:\xampp\htdocs\ucc\resources\views/partials/guest/footer.blade.php ENDPATH**/ ?>