<!-- Start Must Have Products Area -->
<section id="mustHave-products-area">
    <div class="container-fluid">
        <div class="row">
            <!-- Start Section title -->
            <div class="col-lg-8 m-auto text-center">
                <div class="section-title-wrap style-three">
                    <h2>Our Mithai</h2>
                </div>
            </div>
            <!-- End Section title -->
        </div>

        <div class="row"> 
                        
                        <?php foreach($productlist as $p) {?> 
                            <!-- Start Single Product -->
                            <div class="col-md-3">                        
                            <div class="single-product-wrap single-special-banner">                            
                                <!-- Product Thumbnail -->
                                <figure class="product-thumbnail banner-thumbnail">
                                    <a href="<?php echo base_url() ?>our-mithai/<?php echo formatText($p['product_name']) ?>/details/<?php echo base64_encode($p['id']) ?>" class="d-block">
                                        <img class="banner-thumb" src="images/products/<?php echo $p['listing_image'] ?>" alt="<?php echo $p['product_name'] ?>"/>
                                    </a>
                                    <figcaption class="product-hvr-content">
                                        <!-- <a href="javascript:void(0)" class="btn btn-black btn-addToCart">Add To Cart</a> -->
                                        <div class="prod-btn-group">
                                            <!--<span data-toggle="tooltip" data-placement="top" title="Quick Shop"><button
                                                    data-toggle="modal" data-target="#quickViewModal"><i
                                                    class="dl-icon-view"></i></button></span>-->                                        
                                        </div>
                                        
                                    </figcaption>
                                </figure>

                                <!-- Product Details -->
                                <div class="product-details">
                                    <h2 class="product-name"><a href="javascript:void(0)"><?php echo $p['product_name'] ?></a></h2>
                                    <div class="product-prices">                                    
                                        <span class="price">&#8377; <?php echo $p['product_cost'] ?>.00</span>
                                    </div>
                                </div>
                            </div>                        
                            </div>
                            <!-- End Single Product -->
                        <?php } ?>



                        
                        
                        
                        
                                 
        </div>
          
    </div>
</section>
<!-- End Must Have Products Area -->