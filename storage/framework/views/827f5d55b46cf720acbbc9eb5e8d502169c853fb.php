<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UCC - User Panel</title>
    <!--link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>"-->
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/layout.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/menu.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/fonts.css')); ?>">
   
    <style>
      #all_products_create_button .ClctMnRtTpLft {
        width: 80%;
     }
      #all_products_create_button .ClctMnRtTpRt {
        width: 20%;
     }
     .Price1 {
        width: 98%;
        position: relative;
     }
     header , footer{
       position: relative;
       z-index: 100;
     }
     #AfterSubFrm.RegistrationMn .LoginMnRt{
       width: 100%;
     }
     @media (min-width: 100px) and (max-width: 575.99px){
        #all_products_create_button .ClctMnRtTpLft {
          width: 100%!important;
      }
        #all_products_create_button .ClctMnRtTpRt {
          width: 100%!important;
      }
      #all_products_create_button .ClctMnRtTpRt .VwBtn{
        text-align: center!important;
      }
     }
        .Nav_Menu_Rt ul.mycustomdropdown li:first-child{
            border-right: 0px!important;
        }
        .Nav_Menu_Rt ul.mycustomdropdown li:first-child{
          border-right: 0px!important;
      }
        a.list-group-item:hover {
            background: linear-gradient(to right,rgba(238,2,17,1) , rgba(58,0,198,1) );
            border: 1px solid white;
            color: white;
        }
          .list-group-item.active {
            background: linear-gradient(to right,rgba(238,2,17,1) , rgba(58,0,198,1) );
            border: 1px solid white;
        }
        .box-shadows-products{
            box-shadow: pink 0px 25px 20px -20px;                
        }

        #list-group-divider{
          background: rgb(153, 149, 149);
          color:white;
        }


        /******************* Breadcrumb CSS ******************/
        /* Style the list */
 .InnerBanner ul.breadcrumb {
    padding: 10px 16px;
    list-style: none;
    background-color: #eee;
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

.cstUsrDashboard .ClctMnRtTpRt{
  margin-bottom: 20px;
}
.cstUsrDashboard .ClctMnRtTpRt , .cstUsrDashboard .SrchHvr ,
.cstUsrDashboard .ClctMnRtTpLft{
    width: 100%;
}
.cstUsrDashboard .VwBtn{
  text-align: right;
}
.noimage_border{
  border: 1px solid gray;
}


/*** Breadcrumbs ***/


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
.GridNwAkr{
  float: left;
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
}


.TProMn{
  float: left;
  width: 100%;
}
.TProMn ul{
  float: left;
  width: 100%;
  margin: 30px 0 0 0;
  padding: 0px;
}
.TProMn ul li{
  float: left;
  width: 16%;
  list-style: none;
}
.TProMn ul li:nth-child(2) ,
.TProMn ul li:nth-child(3){
  padding: 0 10px;
  width: 34%;
  padding-left: 10%;
}
.TProMn ul li:last-child{
  width: 100%;
}
.TProMn ul li:last-child .VwBtn{
  text-align: left;
} 
@media (min-width: 100px) and (max-width: 575.99px) {
  .TProMn ul li{
    width: 100%!important;
    margin: 5px 0px;
  }
  .TProMn ul li:last-child .VwBtn{
    text-align: center!important;
  }
  .TProMnRpt{
    float: left;
    width: 100%;
    text-align:center;
  }
  .TProMnRpt label{
    float: left;
    width: 100%;
  }
}
</style>

</head>
<?php echo \Livewire\Livewire::styles(); ?>

<body>

    <?php echo $__env->make('partials.users.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
    <section class="ClctMn" style="background-image: url(<?php echo e(asset('images/patteren.png')); ?>);">
      
      <?php echo $__env->yieldContent('content'); ?>
     
	  </section>
	
  <?php echo $__env->make('partials.users.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html>

























<?php /**PATH C:\xampp\htdocs\ucc\resources\views/layouts/users.blade.php ENDPATH**/ ?>