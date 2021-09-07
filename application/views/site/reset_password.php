<section id="mustHave-products-area" class="login-bg">
    <div class="container-fluid">        
           <div class="d-flex justify-content-center">
            <div class="col-md-8 login-container p-0">
                <div class="row">
               <div class="col-md-6"><img src="assetss/img/forgot-pwd-img.jpg"></div>
               <div class="col-md-6 login-form-container">
                   <!-- Start Login Area Wrapper -->
                <div class="my-account-item-wrapper">
                    <h3>Reset Your Password</h3>
                    
                        <div class="alert alert-success text-center alert-dismissible" id="msgdiv" style="display:none;font-size: 11px;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>You have successfully reset your account password!</strong>
                        </div>

                        <div class="alert alert-danger text-center alert-dismissible" id="errordiv" style="display:none;font-size: 11px;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Password couldn't be reset!</strong>
                        </div>

                    <div class="my-account-form-wrap">
                        <form id='resetpwd' name='resetpwd' action="#" method="post">
                            <div class="single-form-input">
                                <label for="login_username">Password <sup>*</sup></label>
                                <input type="password" id="password" name='password' required/>
                            </div>
                            <div class="single-form-input d-flex align-items-center mb-14">
                                <!--<button class="btn btn-black" type="button">Submit</button>-->
                                <input type="submit" id="submit" name="submit" value="Submit" class="btn btn-black">
                            </div>
                            <div class="lost-pswd">
                                <a href="<?php echo base_url() ?>login">Login</a>
                            </div>
                            <input type='hidden' id='email' name='email' value='<?php echo $email ?>'>
                            
                            

                        </form>
                    </div>
                </div>
                <!-- End Login Area Wrapper -->
               </div> 
           </div>
               </div>          
        </div>

       

    </div>
</section>
<!-- End Must Have Products Area -->
<script src="<?php echo base_url() ?><?php echo site_assets ?>/reset-password.js"></script>