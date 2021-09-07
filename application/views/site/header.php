
<?php
//print_r($this->session->userdata);



?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $description ?>">
    <meta name="keywords" content="<?php echo $keywords ?>">

    <title><?php echo $title ?></title>

    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/favicon.png" type="image/x-icon"/>

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">


    <!--=== Revolution Slider CSS ===-->
    <link href="<?php echo base_url() ?>assets/css/revslider/settings.css" rel="stylesheet">

    <!--=== Bootstrap CSS ===-->
    <link href="<?php echo base_url() ?>assets/css/vendor/bootstrap.min.css" rel="stylesheet">
    <!--=== Font-Awesome CSS ===-->
    <link href="<?php echo base_url() ?>assets/css/vendor/font-awesome.css" rel="stylesheet">
    <!--=== Dl Icon CSS ===-->
    <link href="<?php echo base_url() ?>assets/css/vendor/dl-icon.css" rel="stylesheet">
    <!--=== Plugins CSS ===-->
    <link href="<?php echo base_url() ?>assets/css/plugins.css" rel="stylesheet">
    <!--=== Helper CSS ===-->
    <link href="<?php echo base_url() ?>assets/css/helper.min.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="<?php echo base_url() ?>assets/css/style.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/custom.css" rel="stylesheet">

    <!-- Modernizer JS -->
    <script src="<?php echo base_url() ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="<?php echo base_url() ?>js/common_validate.js"></script>

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<script>

var base_url='<?php echo base_url()?>';
//alert (base_url);
</script>
<script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}    
</script>
<body class="preloader-active">


<!-- Start Header Sale Discount Bar -->
<div class="header-discount-bar alert fade show">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-right">
                <div class="discount-bar-content">
                    <p>
                        <?php if(!$this->session->userdata('site_user')) {?>
                        <a href="<?php echo base_url() ?>login">Login</a> | <a href="<?php echo base_url() ?>registration">Register</a>
                    <?php } else { ?>
                            Welcome, <?php echo $this->session->userdata['fname'] ?> | <a href="<?php echo base_url() ?>signout">Logout</a>
                     <?php } ?>   
                    </p>
                </div>

                <!--<div class="close-button-wrap">
                    <button type="button" class="close" data-dismiss="alert"> &times;</button>
                </div>-->
            </div>
        </div>
    </div>
</div>
<!-- End Header Sale Discount Bar -->

<!--== Start Header Area Two ===-->
<header id="header-area" class="header-two">
    
    <!-- Header Bottom Area Start -->
    <div class="header-bottom-area sticky-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-content-wrapper d-flex align-items-center">
                        <div class="header-left-area d-flex align-items-center">
                            <!-- Start Logo Area -->
                            <div class="logo-area">
                                <a href="<?php echo base_url() ?>home"><img src="<?php echo base_url() ?>assets/img/meethi-logo.png" alt="meethi"/></a>
                            </div>
                            <!-- End Logo Area -->
                        </div>

                        <div class="header-mainmenu-area d-none d-lg-block">
                            <!-- Start Main Menu -->
                            <nav id="mainmenu-wrap">
                                <ul class="nav mainmenu justify-content-center">
                                    <li><a href="<?php echo base_url() ?>home">Home</a></li>
                                    <li><a href="<?php echo base_url() ?>about-meethi">About Us</a></li>
                                    <li><a href="<?php echo base_url() ?>our-mithais">Our Mithai</a></li> 
                                    <li><a href="<?php echo base_url() ?>meethi-boxes">Boxes</a></li>
                                    <li><a href="<?php echo base_url() ?>meethi-hampers">Hampers</a></li>                                   
                                    <li><a href="<?php echo base_url() ?>contact-meethi">Contact</a></li>
                                    
                                </ul>
                            </nav>
                            <!-- End Main Menu -->
                        </div>

                        <div class="header-right-area d-flex justify-content-end align-items-center">
                            <!-- <button class="search-icon animate-modal-popup" data-mfp-src="#search-box-popup"><i
                                    class="dl-icon-search1"></i></button> -->
                            <ul class="user-area">
                                <li class="dropdown-show">
                                    <button><i class="fa fa-user"></i></button>
                                    <?php if($this->session->userdata('site_user')) {?>
                                    <ul class="dropdown-nav">
                                        <li><a href="<?php echo base_url() ?>my-account">My Account</a></li>
                                        <li><a href="<?php echo base_url() ?>my-cart">My Cart</a></li>  
                                        <li><a href="purchase-history.html">Order History</a></li>                                       
                                        <li><a href="<?php echo base_url() ?>my-account/edit-password">Edit Password</a></li>
                                        <li><a href="<?php echo base_url() ?>signout">Logout</a></li>
                                    </ul>
                                <?php } ?>
                                </li>
                            </ul>
                            <?php
                            $info=$this->router->fetch_method();
                            if($info!='mycart'){
                            ?>
                            <button class="mini-cart-icon modalActive" data-mfp-src="#miniCart-popup">
                                <i class="dl-icon-cart1"></i>
                                <span class="cart-count"></span>
                            </button>
                            <?php }  ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Bottom Area End -->
</header>
<!--== End Header Area Two ===-->
