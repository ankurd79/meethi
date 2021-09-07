
<?php
#print_r($this->session->userdata);

?>

<section id="mustHave-products-area" style="background:#ededed;">
    <div class="container-fluid">        
           <!--== Start Wishlist Page Wrapper ==-->
<div id="wishlist-page-wrapper" class="">
    <div class="container">
        <div class="row">
            <!-- Start Section title -->
            <div class="col-lg-8 m-auto text-center">
                <div class="section-title-wrap style-three">
                    <h2>My Account</h2>
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
                            <strong>You have successfully updated your details!</strong>
                        </div>                 

                    <div class="my-account-form-wrap">
                        <form id='myacct' name='myacct' method="post">
                            <div class="single-form-input">
                                <label for="login_username">First Name <sup>*</sup></label>
                                <input type="text" id="first_name" name='first_name' value='<?php echo $this->session->userdata['fname'] ?>' required/>
                            </div>
                            <div class="single-form-input">
                                <label for="login_username">Last Name <sup>*</sup></label>
                                <input type="text" id="last_name" name='last_name' value='<?php echo $this->session->userdata['lname'] ?>' required/>
                            </div>
                            <div class="single-form-input">
                                <label for="login_username">Email <sup>*</sup></label>
                                <?php echo $this->session->userdata['uname'] ?>
                                
                            </div>

                            <div class="single-form-input">
                                <label for="login_pwsd">Mobile <sup>*</sup></label>
                                <input type="text" id="mobile" name='mobile' value='<?php echo $this->session->userdata['mobile'] ?>' required/>
                            </div>

                            <div class="single-form-input  mb-14 text-center">
                                <!--<button class="btn btn-black" type="button">Submit</button>-->   
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
<script src="<?php echo base_url() ?><?php echo site_assets ?>/myaccount.js"></script>