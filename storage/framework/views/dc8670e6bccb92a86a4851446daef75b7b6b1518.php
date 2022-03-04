<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultimate Collections Company</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/layout.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/menu.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/fonts.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/owl_carousel.css')); ?>">
    <script>
      /*jQuery(document).ready(function(){
        jQuery("#exampleModal").click(function(){
          console.log("Success");
         
        });
      });*/
    </script>    
    <style>

      #count_exceeded{
        position: relative;
        left: -255px;
        width: 320px;
        display: block;
        text-align: left;
      }


      #cssmenu ul.mycustomdropdownapp ul li:hover > a, 
      #cssmenu ul.mycustomdropdownapp ul li a:hover {
        color: #cb0234;
        background: #fff!important;
    }

      .my_show_product_filter_button:hover{
        background: #3C00C4;
        color: white!important;
      }
        .text-black{
            color: black;
        } 
        .Nav_Menu_Rt ul.mycustomdropdownapp li:first-child{
            border-right: 0px!important;
        }
        .YearLst{
          float: left;
          width: 100%;
        }
        .YearLst h4 a{
          float: left;
          font-weight: bold;
          background: linear-gradient(to right, #F5020A , #F5020A , #3C00C4 , #3C00C4 );
          -webkit-background-clip: text;
          background-clip: text;
          -webkit-text-fill-color: transparent;
        } 
        .YrLstAll{
          float: left;
          width: 100%;
        }
        .YrLstAll h6{
          float: left;
          width: 100%;
          margin: 0 0 10px 0;
        }
        .YrLstAll h6 a{
          float: left;
          color: #000;
        }
        .YrLstAll h6 a:hover{
          color: rgba(58,0,198,1);
        }
                /******************* Breadcrumb CSS ******************/
        /* Style the list */

  .InnerBanner ul.breadcrumb {
    display: inline-block;
    width: 100%;
    padding: 10px 16px;
    list-style: none;
    background-color: transparent;
  }
  
  /* Display list items side by side */
  .InnerBanner ul.breadcrumb li {
    display: inline;
    font-size: 18px;
  }
  
  /* Add a slash symbol (/) before/behind each list item */
  .InnerBanner ul.breadcrumb li+li:before {
    padding: 8px;
    color: black;
    content: "/\00a0";
  }
  
  /* Add a color to all links inside the list */
  .InnerBanner ul.breadcrumb li a {
    color: rgba(238,2,17,1);
    text-decoration: none;
  }

  .InnerBanner ul.breadcrumb li a.active {
    color: black;
    text-decoration: none;
  }
  
  /* Add a color on mouse-over */
  .InnerBanner ul.breadcrumb li a:hover {
    color: rgba(58,0,198,1);
    text-decoration: underline;
  }



.guest-product-show ul.breadcrumb {
    display: inline-block;
   padding: 10px 16px;
   list-style: none;
   background-color: transparent;
 }
 
 /* Display list items side by side */
 .guest-product-show ul.breadcrumb li {
   display: inline;
   font-size: 18px;
 }
 
 /* Add a slash symbol (/) before/behind each list item */
 .guest-product-show ul.breadcrumb li+li:before {
   padding: 8px;
   color: black;
   content: "/\00a0";
 }
 
 /* Add a color to all links inside the list */
  .guest-product-show ul.breadcrumb li a {
   color: rgba(238,2,17,1);
   text-decoration: none;
 }

  .guest-product-show ul.breadcrumb li a.active {
   color: black;
   text-decoration: none;
 }
 
 /* Add a color on mouse-over */
 .guest-product-show ul.breadcrumb li a:hover {
   color: rgba(58,0,198,1);
   text-decoration: underline;
 }

  /**************************** Guest List Group ******************************/

 .guest-tablist ul.list-group:after {
    clear: both;
    display: block;
    content: "";
  }
  
 .guest-tablist .list-group-item {
      float: left;
  }


  /**************************** Image Overlay Effect ******************************/

.GuestGrid .product {
    float: left;
    width: 100%;
    height: 300px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, .2);
    border-radius: 5px;
    background: transparent;
    overflow: hidden;
    position: relative;
    margin-bottom:30px;
}

.GuestGrid .product .imgbox {
    height: 100%;
    box-sizing: border-box
}

.GuestGrid .product .imgbox img {
    display: block;
    width: 100%;
}
.Plain_First.GuestGrid {
    padding: 40px 0;
}

.GuestGrid .specifies {
    position: absolute;
    width: 100%;
    bottom: -172px;
    background: #fff;
    padding: 10px;
    box-sizing: border-box;
    transition: .5s
}

.GuestGrid .product:hover .specifies {
    bottom: 0
}

.GuestGrid .specifies h2 {
    margin: 0;
    padding: 0;
    font-size: 20px;
    width: 100%
}

.GuestGrid .specifies h2 span {
    font-size: 15px;
    color: #ccc;
    font-weight: normal
}

.GuestGrid .specifies .price {
    position: absolute;
    top: 12px;
    right: 25px;
    font-weight: bold;
    color: #000;
    font-size: 30px
}

.GuestGrid label {
    display: block;
    margin-top: 5px;
    font-weight: bold;
    font-size: 15px
}

.GuestGrid ul {
    display: flex;
    margin: 0;
    padding: 0
}

.GuestGrid ul li {
    list-style: none;
    margin: 5px 5px 0;
    font-size: 15px;
    font-style: normal;
    color: #ccc
}

.GuestGrid ul li:first-child {
    margin-left: 0
}

.GuestGrid ul.colors li {
    width: 15px;
    height: 15px
}

.GuestGrid ul.colors li:nth-child(1) {
    background: #4A148C
}

.GuestGrid ul.colors li:nth-child(2) {
    background: #F50057
}

.GuestGrid ul.colors li:nth-child(3) {
    background: #536DFE
}

.GuestGrid ul.colors li:nth-child(4) {
    background: #388E3C
}

.GuestGrid ul.colors li:nth-child(5) {
    background: #FF6D00
}

.GuestGrid .btn {
    display: block;
    padding: 5px;
    color: #fff;
    margin: 10px 0 0;
    width: 100%;
    font-size: 13px;
    border-radius: 2px
}

/**********************  **********************/
.guest-product-show .guest-product-row{
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;


}
 .guest-product-row-products{
   /* box-shadow: rgb(198, 180, 240) 90px -90px 40px -28px inset;*/

    box-shadow: rgba(56, 56, 56, 0.17) 0px -15px 70px 0px inset,
                rgba(80, 79, 79, 0.15) 0px -16px 50px 0px inset,
                rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, 
                rgba(83, 83, 83, 0.06) 0px 2px 1px,
                rgba(126, 124, 124, 0.09) 0px 4px 2px,
                rgba(156, 156, 156, 0.09) 0px 8px 4px,
                rgba(0, 0, 0, 0.09) 0px 16px 8px,
                rgba(138, 136, 136, 0.09) 0px 32px 16px;
                
} 
.GuestGrid .cstProHvr .specifies{
    bottom: -22px;
}
.GuestGrid .cstProHvr .product:hover .specifies{
    bottom: 0px;
}

.Header_Bottom_Rt .search .SrchHvr ul{
  margin-top: 10%;
  margin-left: 4%;
  position: absolute;
  z-index: 999;
  width: 400px;
  list-style-type: none;
  background: white;
  box-shadow: #8ca5f0 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 5px 5px;
  height: 400px;
  overflow-x: hidden;
}

</style>




<style>
  #sync1 .item {
    /*background: #0c83e7;
    padding: 80px 0px;
    margin: 5px;*/
    color: #fff;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    text-align: center;
  }
  
  #sync2 .item {
    background: #fff;
    padding: 10px 0px;
    margin: 5px;
    color: #FFF;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    text-align: center;
    cursor: pointer;
  }
  #sync2 .item h1 {
    font-size: 18px;
  }
  #sync2 .current .item {
    background: #fff;
  }
  
  .owl-theme .owl-nav {
    /*default owl-theme theme reset .disabled:hover links */
  }
  .owl-theme .owl-nav [class*=owl-] {
    transition: all 0.3s ease;
  }
  .owl-theme .owl-nav [class*=owl-].disabled:hover {
    background-color: #fff;
  }
  
  #sync1.owl-theme {
    position: relative;
  }
  #sync1.owl-theme .owl-next, #sync1.owl-theme .owl-prev {
    width: 22px;
    height: 40px;
    margin-top: -20px;
    position: absolute;
    top: 50%;
  }
  #sync1.owl-theme .owl-prev {
    left: 10px;
  }
  #sync1.owl-theme .owl-next {
    right: 10px;
  }
  #sync2 .owl-nav{
    display: none!important;
  }
</style>

<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>

<?php echo \Livewire\Livewire::styles(); ?>

</head>
<body>

    <?php echo $__env->make('partials.guest.productindexnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if(Request::path() == '/'): ?>
    <!--section class="Banner" style="background-image: url(<?php echo e(asset('images/banner.png')); ?>);"></section-->
    <section class="HomeBanner">
		<div id="demo" class="carousel slide" data-ride="carousel">
		  <ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
		  </ul>
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img src="<?php echo e(asset('images/banner.png')); ?>" alt="Hot Wheels">
			  <div class="carousel-caption">
				<!--h3><a href="#">Coming Soon</a></h3-->
			  </div>   
			</div>
			<div class="carousel-item">
			  <img src="<?php echo e(asset('images/hot_toys.jpg')); ?>" alt="Hot Toys">
			  <div class="carousel-caption">
				<!--h3><a href="#">Coming Soon</a></h3-->
			  </div>   
			</div>
			<div class="carousel-item">
			  <img src="<?php echo e(asset('images/lego.jpg')); ?>" alt="Lego">
			  <div class="carousel-caption">
				<!--h3><a href="#">Coming Soon</a></h3-->
			  </div>   
			</div>
		  </div>
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		  </a>
		</div>
	</section>
    <main class="cstMain" style="background-image: url(<?php echo e(asset('images/container_background.svg')); ?>);">
       <?php echo $__env->yieldContent('content'); ?>
    </main>
    <?php else: ?>
    
    <?php echo $__env->yieldContent('content'); ?>
    <?php endif; ?> 

    <?php echo $__env->make('partials.guest.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/layouts/productindexapp.blade.php ENDPATH**/ ?>