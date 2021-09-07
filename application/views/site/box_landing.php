<!-- Start Must Have Products Area -->
<section id="mustHave-products-area">
    <div class="container-fluid">
        <div class="row">
            <!-- Start Section title -->
            <div class="col-lg-8 m-auto text-center">
                <div class="section-title-wrap style-three">
                    <h2>Our Boxes</h2>
                </div>
            </div>
            <!-- End Section title -->
        </div>

                                 
                 
                 <div class="col-md-12">
                   <?php foreach($boxlist as $blist){ 
                        if($blist['is_signature']==1){

                    ?>

                   <div class="single-product-wrap single-special-banner  spl-box">                            
                            <!-- Product Thumbnail -->                            
                            <div class="row">
                                <div class="col-md-5 text-left">
                                    <figure class="product-thumbnail banner-thumbnail">
                                <a href="<?php echo base_url() ?>meethi-boxes/<?php echo formatText(trim($blist['box_title'])) ?>/details/<?php echo base64_encode($blist['id']) ?>" class="d-block">
                                    <img class="banner-thumb" loading="lazy" src="<?php echo base_url() ?>images/<?php echo folder_box ?>/<?php echo $blist['listing_image'] ?>" alt="<?php echo $blist['box_title'] ?>"/>
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
                                </div>
                                <div class="col-md-7 text-left">
                                    <!-- Product Details -->
                            <div class="product-details">
                                <h2 class="product-name" style="font-family:'Playfair Display',serif; font-size:30px; font-weight:500;"><a href="javascript:void(0)"><?php echo (rtrim($blist['box_title'])) ?></a></h2>
                                <?php echo htmlspecialchars_decode($blist['box_description']) ?>
                                <div class="box-info">
                                    <span class="price">Width: <?php echo $blist['box_dimension_width'] ?> <?php echo $blist['width_unit'] ?></span> / <span class="price">Height: <?php echo $blist['box_dimension_height'] ?> <?php echo $blist['height_unit'] ?></span> / <span class="price">Weight: <?php echo $blist['box_weight'] ?> <?php echo $blist['weight_unit'] ?></span>
                                </div>
                                <div class="product-prices mt-3">
                                    <span class="price">&#8377; <?php echo $blist['box_cost'] ?>.00</span>
                                </div>
                                <div class="list-btn-group mt-3">
                                <a href="<?php echo base_url() ?>meethi-boxes/<?php echo formatText($blist['box_title']) ?>/details/<?php echo base64_encode($blist['id']) ?>" class="btn btn-black" style="padding:10px 25px;">View Details</a>
                                
                            </div>
                            </div>
                                </div>
                            </div>                           
                   </div> 
                   <?php }} ?> 



                 </div>  
                 <div class="col-md-12">
                     <div class="row"> 
                        <!-- Start Single Product -->
                        <?php foreach($boxlist as $bnonsign){ 
                                if($bnonsign['is_signature']==0){

                        ?>
                        <div class="col-md-4">                        
                        <div class="single-product-wrap single-special-banner">                            
                            <!-- Product Thumbnail -->
                            <figure class="product-thumbnail banner-thumbnail">
                                <a href="<?php echo base_url() ?>meethi-boxes/<?php echo formatText($bnonsign['box_title']) ?>/details/<?php echo base64_encode($bnonsign['id']) ?>" class="d-block">
                                    <img class="banner-thumb" src="<?php echo base_url() ?>images/<?php echo folder_box ?>/<?php echo $bnonsign['listing_image'] ?>" alt="<?php echo $bnonsign['box_title'] ?>"/>
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
                                <h2 class="product-name"><a href="javascript:void(0)"><?php echo $bnonsign['box_title'] ?></a></h2>
                                <div class="box-info">
                                    <span class="price">Width: <?php echo $bnonsign['box_dimension_width'] ?> <?php echo $bnonsign['width_unit'] ?></span> / <span class="price">Height: <?php echo $bnonsign['box_dimension_height'] ?> <?php echo $bnonsign['height_unit'] ?></span> / <span class="price">Weight: <?php echo $bnonsign['box_weight'] ?> <?php echo $bnonsign['weight_unit'] ?></span>
                                </div>
                                <div class="product-prices mt-3">
                                    <span class="price">&#8377; <?php echo $bnonsign['box_cost'] ?>.00</span>
                                </div>
                            </div>
                        </div>                        
                        </div>
                    <?php }} ?>
                        <!-- End Single Product --> 

                        
                        

                     </div>
                 </div>
                 


                                               
       
          
    </div>
</section>
<!-- End Must Have Products Area -->