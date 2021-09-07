<!-- Start Must Have Products Area -->
<section id="mustHave-products-area" style="background:#ededed;">
    <div class="container-fluid">        
           <!--== Start Wishlist Page Wrapper ==-->
<div id="wishlist-page-wrapper" class="">
    <div class="container">
        <div class="row">
            <!-- Start Section title -->
            <div class="col-lg-8 m-auto text-center">
                <div class="section-title-wrap style-three">
                    <h2>Edit Password</h2>
                </div>
            </div>
            <!-- End Section title -->
        </div>

        <div class="row">

            <div class="col-lg-12">
                
                <div class="d-flex justify-content-center">
            <div class="col-md-6 login-container p-0">
                               
               <div class="my-account-container">
                   <!-- Start Login Area Wrapper -->
                <div class="my-account-item-wrapper">  

                        <div class="alert alert-success text-center alert-dismissible" id="msgdiv" style="display:none;font-size: 11px;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>You have updated the account password!</strong>
                        </div>                 

                    <div class="my-account-form-wrap">
                        <form id='mypass' name='mypass' method="post">
                            <!--<div class="single-form-input">
                                <label for="login_username">Current Password <sup>*</sup></label>
                                <input type="password" id="login_username" required/>
                            </div>-->
                            <div class="single-form-input">
                                <label for="login_username">New Password <sup>*</sup></label>
                                <input type="password" id="password" name='password' required/>
                            </div>
                            <div class="single-form-input">
                                <label for="login_username">Confirm Password <sup>*</sup></label>
                                <input type="password" id="cpassword" name='cpassword' required/>
                            </div>                           

                            <div class="single-form-input  mb-14 text-center">
                                <!--<button class="btn btn-black" type="button">Change</button>-->
                                <input type="submit" id="submit" name="submit" value="Submit" class="btn btn-black">                                
                            </div>
                            
                            
                                <div class="lds-facebook" style="display:none;"><div></div><div></div><div></div></div>
                        </form>
                    </div>
                </div>
                <!-- End Login Area Wrapper -->
               </div> 
           
               </div>          
        </div>
            </div>
        </div>
    </div>
</div>
<!--== End Wishlist Page Wrapper ==-->

       

    </div>
</section>
<!-- End Must Have Products Area -->
<script src="<?php echo base_url() ?><?php echo site_assets ?>/editpassword.js"></script>