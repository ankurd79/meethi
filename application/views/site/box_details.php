
<?php if($boxdetail[0]['is_active']==0) {
header("Location:".base_url()."home");
}
?>
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

        <!--== Start Single Product Page Wrapper ==-->
<div id="single-product-page">
    <div class="container-fluid">
        <div class="row">
            <!-- Start Single Product Thumbnail -->
            <div class="col-xl-7 col-lg-6">
                <div class="single-product-thumb-wrap p-0 pb-sm-30 pb-md-30">
                    <!-- Product Thumbnail Large View -->
                    <div class="product-thumb-large-view">
                        <div class="product-thumb-carousel">
                            <figure class="product-thumb-item">
                                <img src="<?php echo base_url() ?>images/<?php echo folder_box ?>/<?php echo $boxdetail[0]['detail_image'] ?>" alt="<?php echo $boxdetail[0]['box_title'] ?>"/>
                            </figure>                            
                        </div>

                        <!-- Product Thumb Button  -->
                        <div class="product-thumb-btns">
                            <button class="btn-zoom-popup"><i class="dl-icon-zoom-in"></i></button>
                            
                        </div>
                    </div>

                    <!-- Product Thumbnail Nav -->
                    
                </div>
            </div>
            <!-- End Single Product Thumbnail -->

            <!-- Start Single Product Content -->
            <div class="col-xl-5 col-lg-6">
                <div class="single-product-content-wrapper">
                    <div class="single-product-details">
                        <h2 class="product-name" id='prodname'><?php echo $boxdetail[0]['box_title'] ?></h2>
                        <div class="prices-stock-status d-flex align-items-center justify-content-between">
                            <div class="prices-group">                                
                                <span class="price">&#8377; <?php echo $boxdetail[0]['box_cost'] ?>.00</span>
                            </div>
                            <?php if($boxdetail[0]['in_stock']==1) {?><span class="stock-status"><i class="dl-icon-check-circle1"></i> Available</span><?php } ?>
                        </div>
                        <p class="product-desc"><?php echo htmlspecialchars_decode($boxdetail[0]['box_description']) ?></p>
                        <p>
                            <span class="price">Width: <?php echo $boxdetail[0]['box_dimension_width'] ?> <?php echo $boxdetail[0]['width_unit'] ?></span><br>
                                    <span class="price">Height: <?php echo $boxdetail[0]['box_dimension_height'] ?> <?php echo $boxdetail[0]['height_unit'] ?></span><br>
                                    <span class="price">Weight: <?php echo $boxdetail[0]['box_weight'] ?> <?php echo $boxdetail[0]['weight_unit'] ?></span>
                        </p>
                        <?php if($boxdetail[0]['in_stock']==1) {?>
                            <form id='frmprd'>
                            <div class="quantity-btn-group d-flex">
                                <div class="pro-qty">
                                    <input type="text" id="quantity" value="1" readonly='readonly' onkeypress="return isNumberKey(event)"/>
                                </div>
                                <div class="list-btn-group">
                                    <a href="javascript:void(0)" class="btn btn-black" id='ad2cart'>Add to Cart</a>
                                    
                                </div>
                            </div>
                            <input type='hidden' name='code' id='code' value='2_<?php echo $boxdetail[0]['id'] ?>'>
                            <input type='hidden' name='cost' id='cost' value='<?php echo $boxdetail[0]['box_cost'] ?>'>
                            <input type='hidden' name='ptype' id='ptype' value='2'>
                            <input type='hidden' name='pimage' id='pimage' value='<?php echo $boxdetail[0]['listing_image'] ?>'>
                        </form>
                    <?php } ?>
                        
                    </div>

                   
                   
                </div>
            </div>
            <!-- End Single Product Content -->
        </div>
    </div>
</div>
<!--== End Single Product Page Wrapper ==-->

    </div>
</section>
<!-- End Must Have Products Area -->