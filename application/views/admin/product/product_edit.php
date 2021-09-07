
<?php
//print_r($categorylist);
?>

<div class="content-wrapper">
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $main_title ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>dashboard">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $sub_title ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
	
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card card-primary">
						<div class="card-header">
                			<h3 class="card-title"><?php echo $sub_title ?></h3>
              			</div>

              			<form id='frmprd_edit' name='frmprd_edit' method='post' enctype="multipart/form-data" autocomplete="off">
			                <div class="card-body">
			                	
			                	
			                	<div class="form-row">
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Product Category</label>
			                    <select class="form-control" id="category_id" name='category_id'>
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($categorylist as $catg) {?>
				                    	<option value='<?php echo $catg['id'] ?>' <?php if($results[0]['category_id']==$catg['id']) {?>selected='selected'<?php } ?>><?php echo $catg['category_name'] ?></option>
				                    <?php } ?>
                  				</select>
			                  </div>

			                  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Product</label>
			                    <input type="text" class="form-control" value='<?php echo $results[0]['product_name'] ?>' name="product_name" id="product_name" placeholder="Product Name">	
			                  </div>

			                  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Product Listing Image</label>
			                    <div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" name="listing_image" id="listing_image">
			                        <label class="custom-file-label" >Choose file</label>
			                      </div>
			                     
			                    </div>	
			                  </div>

			                  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Product Detailed Image</label>
			                    <div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" name="detail_image" id="detail_image">
			                        <label class="custom-file-label" >Choose file</label>
			                      </div>
			                     
			                    </div>	
			                  </div>

			                  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Product Cost</label>
			                    <input type="text" class="form-control" value='<?php echo $results[0]['product_cost'] ?>' name="product_cost" id="product_cost" placeholder="Product Cost">	
			                  </div>

			                  <div class="form-group col-md-6">
			                    <div class="custom-control custom-switch <?php if($results[0]['in_stock']==0) {?>custom-switch-off-danger<?php } ?> <?php if($results[0]['in_stock']==1) {?>custom-switch-on-success<?php } ?>">
                      <input type="checkbox" class="custom-control-input" name='in_stock' id="customSwitch3">
                      <label class="custom-control-label" for="customSwitch3">In Stock</label>
                    </div>
			                  </div>

			                  <div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Description</label>
			                    <textarea class="form-control" rows="15" name="product_description" id="summernote" placeholder="Enter ..."><?php echo $results[0]['product_description'] ?></textarea>
			                  </div>
			              </div>


			                  
			              </div>

			              <div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Meta Information</label>
			                    <div class="row mt-2">
			              			<div class="col-md-4">
			              				<label for="exampleInputPassword1">Title</label>
			              				<textarea class="form-control" rows="4" name="meta_title" id="meta_title" placeholder="Meta Title"><?php echo $results[0]['meta_title'] ?></textarea>
			              			</div>
			              			<div class="col-md-4">
			              				<label for="exampleInputPassword1">Description</label>
			              				<textarea class="form-control" rows="4" name="meta_description" id="meta_description" placeholder="Meta Description"><?php echo $results[0]['meta_description'] ?></textarea>
			              			</div>
			              			<div class="col-md-4">
			              				<label for="exampleInputPassword1">Keywords</label>
			              				<textarea class="form-control" rows="4" name="meta_keywords" id="meta_keywords" placeholder="Meta keywords"><?php echo $results[0]['meta_keywords'] ?></textarea>
			              			</div>
			              		</div>
			                  </div>
			              </div>
			              
			              



			              

			              

			              
			                  <div class="form-check">
		                          <input class="form-check-input" type="checkbox" id="is_active" name="is_active" <?php if($results[0]['is_active']==1) {?>checked <?php } ?>>
		                          <label class="form-check-label">Activate</label>
                        	</div>
			                </div>
			                <!-- /.card-body -->

			                <div class="card-footer">
			                	<div class="container">
			                		<div class="row">
			                  <div class="col-md-2"><input type="submit" id="submit" name="submit" value="Submit" class="btn btn-primary"></div>
			                  <!--<div class="col-md-10">
			                  	<p class="badge badge-success p-2 mt-2">Data added Successfully</p>
			                  	<div class="alert alert-success alert-dismissible" >
                  				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <p class="mb-0"><i class="icon fas fa-ban"></i></p>
                   
                				</div>
			                  </div>-->
			              </div>
			              </div>
			                </div>
			                <div class="lds-facebook" style="display:none;"><div></div><div></div><div></div></div>
			                <input type='hidden' id='prod_id' name='prod_id' value='<?php echo base64_encode($results[0]['id']) ?>'>
              			</form>	




					</div>


				</div>


				


			</div>
		</div>
	</section>


</div>


<script src="<?php echo base_url() ?><?php echo adm_assets ?>/modules/<?php echo $jsfile ?>.js"></script>