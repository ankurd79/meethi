
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

              			<form id='frmbox_add' name='frmbox_add' method='post' enctype="multipart/form-data" autocomplete="off">
			                <div class="card-body">
			                	
			                	
			                	<div class="form-row">
			                  

			                  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Box Title</label>
			                    <input type="text" class="form-control" name="box_title" id="box_title" placeholder="box title">	
			                  </div>

			                  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Box Cost</label>
			                    <input type="text" class="form-control" name="box_cost" id="box_cost" placeholder="Cost">	
			                  </div>

			                  
			              	<div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Width</label>
			                     <input type="text" class="form-control" name="box_dimension_width" id="box_dimension_width" placeholder="Box Width">
			                  </div>

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Unit</label>
			                     <select class="form-control" id="width_unit" name="width_unit">
				                    <option value='0'>Select</option>
				                    	<option value='Cm'>Cm</option>
				                    	<option value='Inches'>Inches</option>
                  				</select>	
			                  </div>

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Height</label>
			                     <input type="text" class="form-control" name="box_dimension_height" id="box_dimension_height" placeholder="Height">	
			                  </div>

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Unit</label>
			                     <select class="form-control" id="height_unit" name='height_unit'>
				                    <option value='0'>Select</option>
				                    	<option value='Cm'>Cm</option>
				                    	<option value='Inches'>Inches</option> 
                  				</select>	
			                  </div>

			                  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Weight</label>
			                    <input type="text" class="form-control" name="box_weight" id="box_weight" placeholder="box Weight">	
			                  </div>

			                  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Unit</label>
			                    
			                     <select class="form-control" id="weight_unit" name='weight_unit'>
				                    <option value='0'>Select</option>
				                    	<option value='Grams'>Grams</option>
				                    	<option value='Kg'>Kg</option> 
                  				</select>	
			                  </div>

			             	  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Box Detailed Image</label>
			                    <div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" name="detail_image" id="detail_image">
			                        <label class="custom-file-label" >Choose file</label>
			                      </div>
			                     
			                    </div>	
			                  </div>

			                  

			                  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Box Listing Image</label>
			                    <div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" name="listing_image" id="listing_image">
			                        <label class="custom-file-label" >Choose file</label>
			                      </div>
			                     
			                    </div>	
			                  </div>



			                  <div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Description</label>
			                    <textarea class="form-control" rows="15" name="box_description" id="summernote" placeholder="Enter ..."></textarea>
			                  </div>
			              </div>


			                  
			              </div>

			              <div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Meta Information</label>
			                    <div class="row mt-2">
			              			<div class="col-md-4">
			              				<label for="exampleInputPassword1">Title</label>
			              				<textarea class="form-control" rows="4" name="meta_title" id="meta_title" placeholder="Meta Title"></textarea>
			              			</div>
			              			<div class="col-md-4">
			              				<label for="exampleInputPassword1">Description</label>
			              				<textarea class="form-control" rows="4" name="meta_description" id="meta_description" placeholder="Meta Description"></textarea>
			              			</div>
			              			<div class="col-md-4">
			              				<label for="exampleInputPassword1">Keywords</label>
			              				<textarea class="form-control" rows="4" name="meta_keywords" id="meta_keywords" placeholder="Meta keywords"></textarea>
			              			</div>
			              		</div>
			                  </div>
			              </div>
			              
			              



			              

			              

			              
			                 <div class="form-check">
		                          <input class="form-check-input" type="checkbox" id="is_active" name="is_active" checked>
		                          <label class="form-check-label">Activate</label>
                        	</div>
                        	<div class="form-check">
		                          <input class="form-check-input" type="checkbox" id="is_signature" name="is_signature" >
		                          <label class="form-check-label">Is Signature ?</label>
                        	</div>
                        	<div class="form-check">
		                          <input class="form-check-input" type="checkbox" id="in_stock" name="in_stock" checked>
		                          <label class="form-check-label">In Stock</label>
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
              			</form>	




					</div>


				</div>


				<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Boxes </h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0" id="shwdatatable">
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>


			</div>
		</div>
	</section>


</div>


<script src="<?php echo base_url() ?><?php echo adm_assets ?>/modules/<?php echo $jsfile ?>.js"></script>