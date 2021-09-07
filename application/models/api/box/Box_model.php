<?php


class Box_model extends CI_model{
 
  public function __construct() {
           parent::__construct(); 
           $this->load->model('Common_model');
           
  }
 
 public function insertData($data,$user){
        $chkVal=$this->Common_model->chkDuplicateDataOccurence(boxes,$data['box_title'],'box_title');
        if($chkVal==1){
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }

            if( empty($data["is_signature"]) ) {
                  $is_signature=0;
            }else{
                  $is_signature=1;
            }

            if( empty($data["in_stock"]) ) {
                  $in_stock=0;
            }else{
                  $in_stock=1;
            }

            if($_FILES["listing_image"]['name']<>''){
                $fileforupload=$_FILES["listing_image"]['name'];
                $uploadedfile=uploadcustomImg($fileforupload,folder_box,"listing_image");          
            }else{
                $uploadedfile='';
            }

            if($_FILES["detail_image"]['name']<>''){
                $fileforupload_detail=$_FILES["detail_image"]['name'];
                $uploadedfile_detail=uploadcustomImg($fileforupload_detail,folder_box,"detail_image");          
            }else{
                $uploadedfile_detail='';
            }
            
            

            $finalArray=array('box_title'=>$data['box_title'],'box_description'=>htmlentities($data['box_description']),'in_stock'=>$in_stock,
              'box_cost'=>$data['box_cost'],'box_dimension_width'=>$data['box_dimension_width'],
              'width_unit'=>$data['width_unit'],'box_dimension_height'=>$data['box_dimension_height'],
              'height_unit'=>$data['height_unit'],'is_signature'=>$is_signature,
              'box_weight'=>$data['box_weight'],'weight_unit'=>$data['weight_unit'],
              'meta_title'=>htmlentities($data['meta_title']),
              'meta_description'=>htmlentities($data['meta_description']),
              'meta_keywords'=>htmlentities($data['meta_keywords']),
              'listing_image'=>$uploadedfile,'detail_image'=>$uploadedfile_detail,
              'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>$pshow);


            $this->db->insert(boxes,$finalArray);
            $lastinsertedId = $this->db->insert_id();

            if($is_signature==1){
              $arr=array('is_signature'=>'0');
              $this->db->where('id <>',$lastinsertedId);
              $this->db->update(boxes,$arr);
            }



        $msg=1;
        }else{
            $msg=0;
        }
    return $msg;
}

public function updateData($data,$user){
            $updateid=base64_decode($data['box_id']);
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }

            if( empty($data["is_signature"]) ) {
                  $is_signature=0;
            }else{
                  $is_signature=1;
            }

            if( empty($data["in_stock"]) ) {
                  $in_stock=0;
            }else{
                  $in_stock=1;
            }
            //uploadcustomImg($check,"brands");
            $finalArray=array('box_title'=>$data['box_title'],'box_description'=>htmlentities($data['box_description']),'in_stock'=>$in_stock,
              'box_cost'=>$data['box_cost'],'box_dimension_width'=>$data['box_dimension_width'],
              'width_unit'=>$data['width_unit'],'box_dimension_height'=>$data['box_dimension_height'],
              'height_unit'=>$data['height_unit'],'is_signature'=>$is_signature,
              'box_weight'=>$data['box_weight'],'weight_unit'=>$data['weight_unit'],
              'meta_title'=>htmlentities($data['meta_title']),
              'meta_description'=>htmlentities($data['meta_description']),
              'meta_keywords'=>htmlentities($data['meta_keywords']),
              'updated_on'=> date_stamp(),'updated_by' => $user,'is_active'=>$pshow);

            if($_FILES["listing_image"]['name']<>''){

                $fileforupload=$_FILES["listing_image"]['name'];
                $uploadedfile=uploadcustomImg($fileforupload,folder_box,"listing_image");
                $imgArr=array('listing_image'=>$uploadedfile);
                $finalArray=array_merge($finalArray,$imgArr);
               
            }

            if($_FILES["detail_image"]['name']<>''){

                $fileforupload1=$_FILES["detail_image"]['name'];
                $uploadedfile1=uploadcustomImg($fileforupload1,folder_box,"detail_image");
                $imgArr1=array('detail_image'=>$uploadedfile1);
                $finalArray=array_merge($finalArray,$imgArr1);
               
            }

            

        $this->db->where('id',$updateid);     
        $this->db->update(boxes,$finalArray);

        if($is_signature==1){
          $arr=array('is_signature'=>'0');
          $this->db->where('id <>',$updateid);
          $this->db->update(boxes,$arr);
        }
        
        

        



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
            $this->db->order_by('box_title','ASC');
        }
        
        $this->db->from(boxes);
        
      
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
                $this->db->delete(boxes);

                
                
                
                $msg=1;
                return $msg;
    }

    
      
    



}











