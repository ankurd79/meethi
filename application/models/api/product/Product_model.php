<?php


class Product_model extends CI_model{
 
  public function __construct() {
           parent::__construct(); 
           $this->load->model('Common_model');
           
  }
 
 public function insertData($data,$user){
        $chkVal=$this->Common_model->chkDuplicateDataOccurence(products,$data['product_name'],'product_name');
        if($chkVal==1){
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }

            if( empty($data["in_stock"]) ) {
                  $instock=0;
            }else{
                  $instock=1;
            }
            

            if($_FILES["listing_image"]['name']<>''){
                $fileforupload=$_FILES["listing_image"]['name'];
                $uploadedfile=uploadcustomImg($fileforupload,folder_product,"listing_image");          
            }else{
                $uploadedfile='';
            }

            if($_FILES["detail_image"]['name']<>''){
                $fileforupload_detail=$_FILES["detail_image"]['name'];
                $uploadedfile_detail=uploadcustomImg($fileforupload_detail,folder_product,"detail_image");          
            }else{
                $uploadedfile_detail='';
            }
            
            

            $finalArray=array('product_name'=>$data['product_name'],'product_description'=>htmlentities($data['product_description']),'in_stock'=>$instock,
              'product_cost'=>$data['product_cost'],'category_id'=>$data['category_id'],
              'meta_title'=>htmlentities($data['meta_title']),
              'meta_description'=>htmlentities($data['meta_description']),
              'meta_keywords'=>htmlentities($data['meta_keywords']),
              'listing_image'=>$uploadedfile,'detail_image'=>$uploadedfile_detail,
              'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>$pshow);


            $this->db->insert(products,$finalArray);
            $lastinsertedId = $this->db->insert_id();

        



        $msg=1;
        }else{
            $msg=0;
        }
    return $msg;
}

public function updateData($data,$user){
            $updateid=base64_decode($data['prod_id']);
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }

            if( empty($data["in_stock"]) ) {
                  $instock=0;
            }else{
                  $instock=1;
            }
            //uploadcustomImg($check,"brands");
            $finalArray=array('product_name'=>$data['product_name'],'product_description'=>htmlentities($data['product_description']),'in_stock'=>$instock,
              'product_cost'=>$data['product_cost'],'category_id'=>$data['category_id'],
              'meta_title'=>htmlentities($data['meta_title']),
              'meta_description'=>htmlentities($data['meta_description']),
              'meta_keywords'=>htmlentities($data['meta_keywords']),
              'updated_on'=> date_stamp(),'updated_by' => $user,'is_active'=>$pshow);

            if($_FILES["listing_image"]['name']<>''){

                $fileforupload=$_FILES["listing_image"]['name'];
                $uploadedfile=uploadcustomImg($fileforupload,folder_product,"listing_image");
                $imgArr=array('listing_image'=>$uploadedfile);
                $finalArray=array_merge($finalArray,$imgArr);
               
            }

            if($_FILES["detail_image"]['name']<>''){

                $fileforupload1=$_FILES["detail_image"]['name'];
                $uploadedfile1=uploadcustomImg($fileforupload1,folder_product,"detail_image");
                $imgArr1=array('detail_image'=>$uploadedfile1);
                $finalArray=array_merge($finalArray,$imgArr1);
               
            }

            

        $this->db->where('id',$updateid);     
        $this->db->update(products,$finalArray);
        
        

        



        $msg=1;
        
    return $msg;
}


 
 public function getData($id='',$site=''){
        $this->db->select('*');
        
        if($id>0){
          $this->db->where('id', $id); 
        }
        if($site=='1'){
            $this->db->where('is_active',1);
            $this->db->order_by('product_name','ASC');
        }
        
        $this->db->from(products);
        
      
      if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 

    }
 
 
    
    public function deleteData($data){

                $this->db->where('id', $data['id']);
                $this->db->delete(products);

                
                
                
                $msg=1;
                return $msg;
    }

    
      
    



}











