<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Site extends CI_Controller {

    	function __construct() {
    	parent::__construct();
    	
    	$this->load->model('api/product/Product_model');
    	$this->load->model('api/box/Box_model');
    	$this->load->model('api/hamper/Hamper_model');
    	$this->load->model('Common_model');
    	$this->load->library('session');

    	
    	
    }

    public function index(){
    	$data=array("main_title"=>'Manage','productlist'=>$this->Product_model->getData(0,1),'title'=>'Meethi','description'=>'Meethi','keywords'=>'Meethi');
		$this->load->view('site/header',$data);
		$this->load->view('site/index',$data);
		$this->load->view('site/footer');
	}

	public function mithais(){
    	$data=array("main_title"=>'Manage','productlist'=>$this->Product_model->getData(0,1),'title'=>'Our Mithai','description'=>'Our Meethai','keywords'=>'Our Meethai');
		$this->load->view('site/header',$data);
		$this->load->view('site/products_landing',$data);
		$this->load->view('site/footer');
	}

	public function boxes(){
    	$data=array("main_title"=>'Manage', 'boxlist'=>$this->Box_model->getData(0,1),'title'=>'Meethi Boxes','description'=>'Meethi Boxes','keywords'=>'Meethi Boxes');
		$this->load->view('site/header',$data);
		$this->load->view('site/box_landing',$data);
		$this->load->view('site/footer');
	}

	public function hampers(){
    	$data=array("main_title"=>'Manage','title'=>'Meethi hampers','description'=>'Meethi hampers','keywords'=>'Meethi hampers','hamperlist'=>$this->Hamper_model->getData(0,1));
		$this->load->view('site/header',$data);
		$this->load->view('site/hamper_landing',$data);
		$this->load->view('site/footer');
	}

	public function about(){
    	$data=array("main_title"=>'Manage','title'=>'About Meethi','description'=>'About Meethi','keywords'=>'About Meethi');
		$this->load->view('site/header',$data);
		$this->load->view('site/about',$data);
		$this->load->view('site/footer');
	}

	public function terms(){
    	$data=array("main_title"=>'Manage','title'=>'Terms & Conditions','description'=>'Terms & Conditions','keywords'=>'Terms & Conditions');
		$this->load->view('site/header',$data);
		$this->load->view('site/terms',$data);
		$this->load->view('site/footer');
	}

	public function contact(){
    	$data=array("main_title"=>'Manage','title'=>'Contact Meethi','description'=>'Contact Meethi','keywords'=>'Contact Meethi');
		$this->load->view('site/header',$data);
		$this->load->view('site/contact',$data);
		$this->load->view('site/footer');
	}

	public function mithaidetails(){
		$meethaiId=base64_decode($this->uri->segment(4));
        if(!(is_numeric($meethaiId))){
        	header("Location:".base_url()."home");
        }
		$details=$this->Product_model->getData($meethaiId,'');
		if($meethaiId<>$details[0]['id']){
        	header("Location:".base_url()."home");
        }
		$canonicalurl=base_url().'our-mithai/'.formatText(trim($details[0]['product_name'])).'/details/'.base64_encode($details[0]['id']).'';

		if(strcmp($canonicalurl,getAddress())!=0){
			exit;

		}
		$metatitle=$details[0]['meta_title'];
		$metadescription=$details[0]['meta_description'];
		$metakeywords=$details[0]['meta_keywords'];



    	$data=array("main_title"=>'Manage','meethaidetail'=>$details,'title'=>$metatitle,'description'=>$metadescription,'keywords'=>$metakeywords);
		$this->load->view('site/header',$data);
		$this->load->view('site/mithai_details',$data);
		$this->load->view('site/footer');
	}

	public function boxdetails(){
		//echo $total = count($this->uri->segment_array());
		//exit;
		$boxId=base64_decode($this->uri->segment(4));
		if(!(is_numeric($boxId))){
        	header("Location:".base_url()."home");
        }
		$details=$this->Box_model->getData($boxId,'');
		if($boxId<>$details[0]['id']){
        	header("Location:".base_url()."home");
        }
		$metatitle=$details[0]['meta_title'];
		$metadescription=$details[0]['meta_description'];
		$metakeywords=$details[0]['meta_keywords'];
		$canonicalurl=base_url().'meethi-boxes/'.formatText(trim($details[0]['box_title'])).'/details/'.base64_encode($details[0]['id']).'';
    	$data=array("main_title"=>'Manage','boxdetail'=>$details,'title'=>$metatitle,'description'=>$metadescription,'keywords'=>$metakeywords);
		$this->load->view('site/header',$data);
		$this->load->view('site/box_details',$data);
		$this->load->view('site/footer');
	}

	public function hamperdetails(){
		//echo $total = count($this->uri->segment_array());
		//exit;
		$hamperId=base64_decode($this->uri->segment(4));
		if(!(is_numeric($hamperId))){
        	header("Location:".base_url()."home");
        }
		$details=$this->Hamper_model->getData($hamperId,'');
		//print_r($details);
		if($hamperId<>$details[0]['id']){
        	header("Location:".base_url()."home");
        }
		$metatitle=$details[0]['meta_title'];
		$metadescription=$details[0]['meta_description'];
		$metakeywords=$details[0]['meta_keywords'];
		$canonicalurl=base_url().'meethi-hampers/'.formatText(trim($details[0]['hamper_title'])).'/details/'.base64_encode($details[0]['id']).'';
    	$data=array("main_title"=>'Manage','hamperdetails'=>$details,'title'=>$metatitle,'description'=>$metadescription,'keywords'=>$metakeywords);
		$this->load->view('site/header',$data);
		$this->load->view('site/hamper_details',$data);
		$this->load->view('site/footer');
	}	

	public function register(){
		if($this->session->userdata('site_user')) {
			header("Location:".base_url()."home");	
		}
		$metatitle='Registration';
		$metadescription='Registration';
		$metakeywords='Registration';
		//exit;
    	$data=array('title'=>$metatitle,'description'=>$metadescription,'keywords'=>$metakeywords);
		$this->load->view('site/header',$data);
		$this->load->view('site/register',$data);
		$this->load->view('site/footer');
	}

	public function login(){
		if($this->session->userdata('site_user')) {
			header("Location:".base_url()."home");	
		}
		$metatitle='Login';
		$metadescription='Login';
		$metakeywords='Login';
		//exit;
    	$data=array('title'=>$metatitle,'description'=>$metadescription,'keywords'=>$metakeywords);
		$this->load->view('site/header',$data);
		$this->load->view('site/login',$data);
		$this->load->view('site/footer');
	}

	public function myaccount(){
		if(!$this->session->userdata('site_user')) {
			header("Location:".base_url()."home");	
		}
		$metatitle='My account';
		$metadescription='My account';
		$metakeywords='My account';
		//exit;
    	$data=array('title'=>$metatitle,'description'=>$metadescription,'keywords'=>$metakeywords);
		$this->load->view('site/header',$data);
		$this->load->view('site/my-account',$data);
		$this->load->view('site/footer');
	}

	public function editmypassword(){
		if(!$this->session->userdata('site_user')) {
			header("Location:".base_url()."home");	
		}
		$metatitle='My account - edit password';
		$metadescription='My account - edit password';
		$metakeywords='My account - edit password';
		//exit;
    	$data=array('title'=>$metatitle,'description'=>$metadescription,'keywords'=>$metakeywords);
		$this->load->view('site/header',$data);
		$this->load->view('site/edit-password',$data);
		$this->load->view('site/footer');
	}

	public function forgotpass(){
		if($this->session->userdata('site_user')) {
			header("Location:".base_url()."home");	
		}
		$metatitle='Forgot Password';
		$metadescription='Forgot Password';
		$metakeywords='Forgot Password';
		//exit;
    	$data=array('title'=>$metatitle,'description'=>$metadescription,'keywords'=>$metakeywords);
		$this->load->view('site/header',$data);
		$this->load->view('site/forgot_password',$data);
		$this->load->view('site/footer');
	}

	public function resetpassword(){

		if($this->session->userdata('site_user')) {
			header("Location:".base_url()."home");	
		}

		$metatitle='Reset Password';
		$metadescription='Reset Password';
		$metakeywords='Reset Password';
		$mailinfo=$this->uri->segment(2);
		//exit;
    	$data=array('title'=>$metatitle,'description'=>$metadescription,'keywords'=>$metakeywords,'email'=>$mailinfo);
		$this->load->view('site/header',$data);
		$this->load->view('site/reset_password',$data);
		$this->load->view('site/footer');

	}
	
	public function processLogin(){
    		$data = $this->input->post();
    		$getHash=$this->Common_model->getHashcustomer($this->input->post('email'));
    		if(password_verify($this->input->post('password'), $getHash)) {
    			$user_login=array('uemail'=>$this->input->post('email'),'upass'=>$this->input->post('password'));
    			$pdata=$this->Common_model->login_customer($user_login['uemail'],$getHash);
    	    	$this->session->set_userdata('uid',$pdata['id']);
    			$this->session->set_userdata('uname',$pdata['email']);
    			$this->session->set_userdata('fname',$pdata['first_name']);
    			$this->session->set_userdata('lname',$pdata['last_name']);
    			$this->session->set_userdata('mobile',$pdata['mobile']);
    			$this->session->set_userdata('site_user',$pdata['id']);
    			header("Location:".base_url()."home");
    			exit;
    		
    			
            }else{
                echo $msg=0;
            }
            
            //echo $msg;
	}

	public function logout(){
    	//session_destroy();
    	$this->session->unset_userdata('site_user');

    	header("Location:".base_url()."home");
    }
}