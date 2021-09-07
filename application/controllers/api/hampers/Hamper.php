<?php
   
require APPPATH . 'libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

     
class Hamper extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       //$this->load->database();
       $this->load->model('api/category/Hampercategory_model');
       $this->load->model('api/hamper/Hamper_model');

    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */

    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function add_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Hampercategory_model->insertData($input,$user);
        if($data==1)
            $this->response('Hamper Category information added.', REST_Controller::HTTP_CREATED);
        else
            $this->response('Hamper Category already present!', REST_Controller::HTTP_OK);
    } 

    public function addhamper_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Hamper_model->insertData($input,$user);
        if($data==1)
            $this->response('Hamper information added.', REST_Controller::HTTP_CREATED);
        else
            $this->response('Hamper already present!', REST_Controller::HTTP_OK);
    } 

    public function update_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Hampercategory_model->updateData($input,$user);
        $this->response('Hamper Category information updated.', REST_Controller::HTTP_OK);
       
    }

    public function updatehamper_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Hamper_model->updateData($input,$user);
        $this->response('Hamper information updated.', REST_Controller::HTTP_OK);
       
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    

    public function remove_post()
    {
        $input = $this->input->post();
        $data=$this->Hampercategory_model->deleteData($input);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }

    public function removehamper_post()
    {
        $input = $this->input->post();
        $data=$this->Hamper_model->deleteData($input);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }
    	
}
?>