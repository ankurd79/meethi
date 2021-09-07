<!--== Start Footer Section ===-->
<footer id="footer-area" class="footer-grey">
    <!-- Start Footer Widget Area -->
    <div class="footer-widget-area pt-40 pb-28">
        <div class="container">
            <div class="footer-widget-content">
                <div class="row">
                    <!-- Start Footer Widget Item -->
                    <div class="col-md-4 col-lg-3 order-2 order-lg-1">
                        <div class="footer-widget-item-wrap">
                            <h3 class="widget-title">Contact Us</h3>
                            <div class="widget-body">
                                <div class="contact-text">                                    
                                    <p>J-2/13, Rajouri Garden <br> New Delhi</p>
                                    <p>9810622084, 9711781000, 011-45464748<br>
                                    <a href="mailto:customercare@meethi.in">customercare@meethi.in</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Footer Widget Item -->

                    <!-- Start Footer Widget Item -->
                    <div class="col-md-4 col-lg-6 order-1 text-left text-lg-center">
                        <div class="row">
                            <div class="col-lg-8 col-xl-6 m-auto">
                                <div class="footer-widget-item-wrap">
                                    <div class="widget-body">
                                        <div class="about-text">
                                            <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/img/meethi-logo-white.png" alt="Logo"/></a>
                                            <p>Made with the finest natural ingredients and our appetite for excellence makes Meethi, the most premium luxury Mithai brand in the Indian market.

</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Footer Widget Item -->

                    <!-- Start Footer Widget Item -->
                    <div class="col-md-4 col-lg-3 order-3">
                        <div class="footer-widget-item-wrap">
                            <h3 class="widget-title">Follow Us</h3>
                            <div class="widget-body">
                                
                                <div class="footer-social-icons nav mt-18">
                                    <a href="javascript:void(0)" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="javascript:void(0)" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="javascript:void(0)" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Footer Widget Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Widget Area -->

    <!-- Start Footer Bottom Area -->
    <div class="footer-bottom-wrapper">
        <div class="container">
            <div class="row">              

                <div class="col-md-6">
                    <div class="copyright-text">
                        <p>©
                            <script>document.write(new Date().getFullYear())</script>
                            , Meethi. | <a href="<?php echo base_url() ?>terms-and-conditions" style="color: #616161!important;">Terms And Conditions</a></p>
                    </div>
                </div>

                <div class="col-md-6 text-right">
                    <img src="<?php echo base_url() ?>assets/img/payments.png" alt="Payment Method"/>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom Area -->
</footer>
<!--== End Footer Section ===-->

<div class="whasapp-icon"><span><a href="https://api.whatsapp.com/send?phone=+919711781000" target='_blank'><i class="fa fa-whatsapp" aria-hidden="true"></i></a></span></div>

<!--== Start Search box Wrapper ==-->
<div class="modalSearchBox" id="search-box-popup">
    <div class="modaloverlay"></div>
    <div class="search-box-wrapper">
        <p>Start typing and press Enter to search</p>
        <div class="search-box-form">
            <form action="#" method="POST" class="search-form-area">
                <input type="search" name="search" id="search" placeholder="Search entire store"/>
                <button type="submit" class="btn-search"><i class="dl-icon-search10"></i></button>
            </form>
        </div>
    </div>
</div>
<!--== End Search box Wrapper ==-->

<!--== Start Mini Cart Wrapper ==-->
<div class="mfp-hide modal-minicart" id="miniCart-popup">
    <div class="minicart-content-wrap">
        <h2>Shopping Cart</h2>
        <?php //if(!empty($_SESSION["shopping_cart"])) {?>
        <div class="minicart-product-list" id='cart_details'>
            <!-- Start Single Product -->
            

            <!-- End Single Product -->

           

           

            
        </div>
    <?php //} ?>
        <div class="minicart-calculation-wrap d-flex justify-content-between align-items-center">
            <span class="cal-title">Subtotal:</span>
            <span class="cal-amount"></span>
        </div>
        <?php //if(!empty($_SESSION["shopping_cart"])) {?>
        <div class="minicart-btn-group mt-38">
            <a href="<?php echo base_url() ?>my-cart" class="btn btn-black viewcartblock" style='display:none;'>View Cart</a>
            <a href="javascript:void(0)" class="btn btn-black mt-10 checkoutblock" style='display:none;'>checkout</a>
        </div>
        <?php //} ?>
    </div>
</div>
<!--== End Mini Cart Wrapper ==-->

<!--== Start Left Offside Menu Wrapper ==-->
<!--<div class="mfp-hide modalLeftOffside" id="left-offside-popup">
    <div class="leftoffside-content-wrap">
        <nav class="offside-menu">
            <ul class="left-offsidemenu">
                <li><a href="javascript:void(0)">About Veera Shop</a></li>
                <li><a href="javascript:void(0)">Help Center</a></li>
                <li><a href="javascript:void(0)">Portfolio</a></li>
                <li><a href="javascript:void(0)">Blog</a></li>
                <li><a href="javascript:void(0)">New Look</a></li>
            </ul>
        </nav>
        <div class="offside-text">
            <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/img/payments.png" alt="Payment Method"></a>
            <p>Pellentesque mollis nec orci id tincidunt. Sed mollis risus eu nisi aliquet, sit amet fermentum justo
                dapibus.</p>
            <a href="javascript:void(0)">(+612) 2531 5600</a>
            <a href="javascript:void(0)">info@la-studioweb.com</a>
            <p>PO Box 1622 Colins Street West</p>

            <div class="offset-menu-footer">
                <a href="javascript:void(0)" target="_blank"><u>Google Maps</u></a>
                <div class="social-icons nav">
                    <a href="javascript:void(0)" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="javascript:void(0)" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="javascript:void(0)" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                </div>
                <p class="copyright">&copy; 2018 Veera All rights reserved.</p>
            </div>
        </div>
    </div>
</div>-->
<!--== End Left Offside Wrapper ==-->

<!--== Start Quick View Modal Wrapper ==-->

<div class="modal" id="quickViewModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="dl-icon-close"></i></span>
            </button>
            <div class="modal-body">
                <div class="row">
                    <!-- Start Single Product Thumbnail -->
                    <div class="col-lg-5 col-md-6">
                        <div class="single-product-thumb-wrap p-0 pb-sm-30 pb-md-30">
                            <!-- Product Thumbnail Large View -->
                            <div class="quciview-product-thumb-carousel">
                                <figure class="product-thumb-item">
                                    <img src="<?php echo base_url() ?>assets/img/products/product-8.jpg" alt="Single Product"/>
                                </figure>
                                
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product Thumbnail -->

                    <!-- Start Single Product Content -->
                    <div class="col-lg-7 col-md-6 m-auto">
                        <div class="single-product-content-wrapper">
                            <div class="single-product-details">
                                <h2 class="product-name">Honey Dryfruit Ladoo</h2>
                                <div class="prices-stock-status d-flex align-items-center justify-content-between">
                                    <div class="prices-group">                                        
                                        <span class="price">&#8377; 1900.00</span>
                                    </div>
                                    <span class="stock-status"><i class="dl-icon-check-circle1"></i> Available</span>
                                </div>
                                <p class="product-desc">Incredibly delicious, htese ladoos are an ode to the goodness of best quality desi ghee, honey and dry fruits. Tantalising the taste buds with intoxicating flavours, these guilt-free traets are perfect for all occasions.</p>

                                <div class="quantity-btn-group d-flex">
                                    <div class="pro-qty">
                                        <input type="text" id="quantityy" value="1"/>
                                    </div>
                                    <div class="list-btn-group">
                                        <a href="javascript:void(0)" class="btn btn-black">Add to Cart</a>
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top"
                                         
                                    </div>
                                </div>

                                
                            </div>

                            
                        </div>
                    </div>
                    <!-- End Single Product Content -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Quick View Modal Wrapper ==-->

<!--=======================Javascript============================-->
<!--=== Jquery Min Js ===-->

<!--=== Jquery Migrate Min Js ===-->
<script src="<?php echo base_url() ?>assets/js/vendor/jquery-migrate-1.4.1.min.js"></script>
<!--=== Popper Min Js ===-->
<script src="<?php echo base_url() ?>assets/js/vendor/popper.min.js"></script>
<!--=== Bootstrap Min Js ===-->
<script src="<?php echo base_url() ?>assets/js/vendor/bootstrap.min.js"></script>
<!--=== Plugins Js ===-->
<script src="<?php echo base_url() ?>assets/js/plugins.js"></script>
<!--=== Ajax Mail Js ===-->
<script src="<?php echo base_url() ?>assets/js/ajax-mail.js"></script>

<!--=== Active Js ===-->
<script src="<?php echo base_url() ?>assets/js/active.min.js"></script>

<!--=== Revolution Slider Js ===-->
<script src="<?php echo base_url() ?>assets/js/revslider/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/revslider/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="<?php echo base_url() ?>assets/js/revslider/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/revslider/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/revslider/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/revslider/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/revslider/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/revslider/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/revslider/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/revslider/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/revslider/extensions/revolution.extension.video.min.js"></script>


<script src="<?php echo base_url() ?>assets/js/revslider/revslider-active.js"></script>

<script>
    $('#quickViewModal').on('show.bs.modal', function(e) {
    var id = $(e.relatedTarget).data('id');
    //$(e.currentTarget).find('input[name="user_id"]').val(userid);
    alert(id);
    var splitid = id.split("-");                         
    var value = splitid[0];
    var type = splitid[1];

    alert(type);

    if(type==1){
        var fetchurl='admin/admin/fetchmitahidata';    
    }


    $.ajax({
          url: base_url+fetchurl,
          type: 'POST',
          data: {id:value},
          dataType: 'application/json',
            success: function(data){
            var data = $.parseJSON(data);
            //json = JSON.parse(data);
            alert(data);
            

                                                                  
         }
    });    











});
</script>
<script src="<?php echo base_url() ?>site_assets/addtocart.js"></script>

</body>


</html>