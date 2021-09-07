<!-- Start Must Have Products Area -->
<section id="mustHave-products-area">
    <div class="container-fluid">
        <div class="row">
            <!-- Start Section title -->
            <div class="col-lg-8 m-auto text-center">
                <div class="section-title-wrap style-three">
                    <h2>Our Hampers</h2>
                </div>
            </div>
            <!-- End Section title -->
        </div>

                                 
                 
                 
                 <div class="col-md-12">
                     <div class="row"> 
                        <!-- Start Single Product -->
                        <?php foreach($hamperlist as $hamper) {?>
                        <div class="col-md-4">                        
                        <div class="single-product-wrap single-special-banner">                            
                            <!-- Product Thumbnail -->
                            <figure class="product-thumbnail banner-thumbnail">
                                <a href="<?php echo base_url() ?>meethi-hampers/<?php echo formatText(trim($hamper['hamper_title'])) ?>/details/<?php echo base64_encode($hamper['id']) ?>" class="d-block">
                                    <img class="banner-thumb" loading="lazy" src="<?php echo base_url() ?>images/<?php echo folder_hamper ?>/<?php echo $hamper['listing_image'] ?>" alt="<?php echo $hamper['hamper_title'] ?>"/>
                                </a>
                                <figcaption class="product-hvr-content">
                                    <!-- <a href="javascript:void(0)" class="btn btn-black btn-addToCart">Add To Cart</a> -->
                                    <div class="prod-btn-group">
                                        <!--<span data-toggle="tooltip" data-placement="top" title="Quick Shop"><button
                                                data-toggle="modal" data-target="#quickViewModal1234"><i
                                                class="dl-icon-view"></i></button></span>-->                                        
                                    </div>
                                    
                                </figcaption>
                            </figure>

                            <!-- Product Details -->
                            <div class="product-details">
                                <h2 class="product-name"><a href="<?php echo base_url() ?>meethi-hampers/<?php echo formatText(trim($hamper['hamper_title'])) ?>/details/<?php echo base64_encode($hamper['id']) ?>"><?php echo $hamper['hamper_title'] ?></a></h2>                                
                                <div class="product-prices mt-3">
                                    <span class="price">&#8377; <?php echo $hamper['hamper_cost'] ?>.00</span>
                                </div>
                            </div>
                        </div>                        
                        </div>
                        <!-- End Single Product --> 
                    <?php } ?>

                        
                        

                     </div>
                 </div>
                 


                                               
       
          
    </div>
</section>
<!-- End Must Have Products Area -->