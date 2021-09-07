<?php


class Hamper_model extends CI_model{
 
  public function __construct() {
           parent::__construct(); 
           $this->load->model('Common_model');
           
  }
 
 public function insertData($data,$user){
        $chkVal=$this->Common_model->chkDuplicateDataOccurence(hampers,$data['hamper_title'],'hamper_title');
        if($chkVal==1){
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }

            

            if( empty($data["in_stock"]) ) {
                  $in_stock=0;
            }else{
                  $in_stock=1;
            }

            if($_FILES["listing_image"]['name']<>''){
                $fileforupload=$_FILES["listing_image"]['name'];
                $uploadedfile=uploadcustomImg($fileforupload,folder_hamper,"listing_image");          
            }else{
                $uploadedfile='';
            }

            if($_FILES["detail_image"]['name']<>''){
                $fileforupload_detail=$_FILES["detail_image"]['name'];
                $uploadedfile_detail=uploadcustomImg($fileforupload_detail,folder_hamper,"detail_image");          
            }else{
                $uploadedfile_detail='';
            }
            
            

            $finalArray=array('hamper_title'=>$data['hamper_title'],'hamper_description'=>htmlentities($data['hamper_description']),'in_stock'=>$in_stock,
              'hamper_cost'=>$data['hamper_cost'],
              'category_id'=>$data['category_id'],
              'meta_title'=>htmlentities($data['meta_title']),
              'meta_description'=>htmlentities($data['meta_description']),
              'meta_keywords'=>htmlentities($data['meta_keywords']),
              'listing_image'=>$uploadedfile,'detail_image'=>$uploadedfile_detail,
              'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>$pshow);


            $this->db->insert(hampers,$finalArray);
            $lastinsertedId = $this->db->insert_id();

            



        $msg=1;
        }else{
            $msg=0;
        }
    return $msg;
}

public function updateData($data,$user){
            $updateid=base64_decode($data['hamper_id']);
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }

            

            if( empty($data["in_stock"]) ) {
                  $in_stock=0;
            }else{
                  $in_stock=1;
            }
            //uploadcustomImg($check,"brands");
            $finalArray=array('hamper_title'=>$data['hamper_title'],'hamper_description'=>htmlentities($data['hamper_description']),'in_stock'=>$in_stock,'category_id'=>$data['category_id'],
              'hamper_cost'=>$data['hamper_cost'],
              'meta_title'=>htmlentities($data['meta_title']),
              'meta_description'=>htmlentities($data['meta_description']),
              'meta_keywords'=>htmlentities($data['meta_keywords']),
              'updated_on'=> date_stamp(),'updated_by' => $user,'is_active'=>$pshow);

            if($_FILES["listing_image"]['name']<>''){

                $fileforupload=$_FILES["listing_image"]['name'];
                $uploadedfile=uploadcustomImg($fileforupload,folder_hamper,"listing_image");
                $imgArr=array('listing_image'=>$uploadedfile);
                $finalArray=array_merge($finalArray,$imgArr);
               
            }

            if($_FILES["detail_image"]['name']<>''){

                $fileforupload1=$_FILES["detail_image"]['name'];
                $uploadedfile1=uploadcustomImg($fileforupload1,folder_hamper,"detail_image");
                $imgArr1=array('detail_image'=>$uploadedfile1);
                $finalArray=array_merge($finalArray,$imgArr1);
               
            }

            

        $this->db->where('id',$updateid);     
        $this->db->update(hampers,$finalArray);

        
        
        

        



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
            $this->db->order_by('hamper_title','ASC');
        }
        
        $this->db->from(hampers);
        
      
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
                $this->db->delete(hampers);

                
                
                
                $msg=1;
                return $msg;
    }

    
      
    



}











