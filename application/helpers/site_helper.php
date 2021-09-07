<?php //if (!defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('date_stamp')){
	function date_stamp(){
	$t=date('Y-m-d H:i:s');
	return $t;
	}
}


if(!function_exists('current_time')){
	function current_time(){
    $t=date('H:i:s');
	return $t;
	}
}

if(!function_exists('currentDay')){
	function currentDay(){
	    $t=date('m/d/Y');
		return $t;
	}
}


if(!function_exists('userGreetings')){
	function userGreetings(){
	    $Hour = date('G');
	    if ( $Hour >= 5 && $Hour <= 11 ) {
	        $msg="Good Morning";
	    } else if ( $Hour >= 12 && $Hour <= 16 ) {
	        $msg="Good Afternoon";
	    } else if ( $Hour >= 17 || $Hour <= 4 ) {
	        $msg="Good Evening";
	    }
	    
	    return $msg;
	}
}

if(!function_exists('formatDateTime')){
	function formatDateTime($date,$od=''){
		if($od==1)
		    $formattedDate=date("d-M,Y", strtotime($date));
		 else
		    $formattedDate=date("d-M,Y h:i:s A", strtotime($date));
		   
		return $formattedDate;
	}
}

if(!function_exists('findTimeDiff')){
	function findTimeDiff($date1,$currDateTime){
	    $seconds = strtotime($currDateTime) - strtotime($date1);
	    $days    = floor($seconds / 86400);
	    return $hours   = floor(($seconds - ($days * 86400)) / 3600);
	}
}

if(!function_exists('formatText')){
	function formatText($data){
	    $data=strtolower($data);
	    $data=str_replace(" ","-",$data);
	    $data=str_replace("/","-",$data);
	    $data=str_replace("*","-",$data);
	    $data=str_replace("#","-",$data);
	    $data=str_replace("!","-",$data);
	    $data=str_replace("~","-",$data);
	    $data=str_replace("'","-",$data);
	    $data=str_replace("&","-",$data);
	    $data=str_replace("(","-",$data);
	    $data=str_replace(")","-",$data);
	    $data=str_replace("%","-",$data);
	    return strtolower($data);
	}
}

if(!function_exists('generateRandomString')){
	function generateRandomString(){
		 $string = "";
		 $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
		 $len=8;
		 for($i=0;$i<$len;$i++)
		  $string.=substr($chars,rand(0,strlen($chars)),1);
		return $string;
	 }
}

if(!function_exists('generateOtp')){
	function generateOtp(){
	    return rand (1000 , 9999);
	}
}

if(!function_exists('encrypt')){
	function encrypt($data){
		 //$data=md5($data);
		 $data=password_hash($data, PASSWORD_DEFAULT);
		 return $data;
	 }
}
 
 if(!function_exists('siteConfig')){
	 function siteConfig(){
	     $siteArr=array("site_name"=>'Meethi By Wok in the Cloud',"phone"=>'011-45464748',"email"=>'customercare@meethi.in', "url"=>'https://www.meethidelhi.com',"address"=>'J-2/13, Rajouri Garden',"city"=>'New Delhi','Pin'=>'','mobile1'=>'98106 22084','mobile2'=>'97117 81000');
	     return $siteArr; 
	 }
}

if(!function_exists('uploadcustomImg')){
	function uploadcustomImg($uploadedfile,$folder,$inputname){
	    $srvAddr=$_SERVER['SERVER_ADDR'];
	    $uploadedfile=time()."_".$uploadedfile;
	    if($srvAddr=='::1'){
	        $path=$_SERVER['DOCUMENT_ROOT'] . '/meethi/images/'.$folder.'/'.$uploadedfile;
	    }else{
	        $path=$_SERVER['DOCUMENT_ROOT'] . '/images/'.$folder.'/'.$uploadedfile;
	    }
	    move_uploaded_file($_FILES["$inputname"]['tmp_name'],$path);
	    return $uploadedfile;
	}
}

if(!function_exists('contentFormat')){
	function contentFormat($content){
        $content=str_replace(" ","-",$content);
        $content=str_replace("!","-",$content);
        $content=str_replace("@","-",$content);
        $content=str_replace("^","-",$content);
        $content=str_replace("(","-",$content);
        $content=str_replace(")","-",$content);
        $content=str_replace("%","-",$content);
        $content=str_replace("#","-",$content);
        $content=str_replace("*","-",$content);
        $content=strtolower($content);
        return $content;
    }
 }
 
 if(!function_exists('getAddress')){
	    function getAddress() {
	            $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http';
				$full_url = $protocol."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
				return $full_url;
	    }
 }  


 if(!function_exists('getSalutation')){
	    function getSalutation() {
	            $parray=array("Mr."=>'Mr.',"Mrs."=>'Mrs.',"Ms."=>'Ms.',"Dr."=>'Dr.');
	            return $parray;
	    }
 }

 

 if(!function_exists('sendmail')){
 	function sendmail($data,$template,$subject){
 		$ci = &get_instance();
 		$pdata=array("alldata"=>$data);
    	$message = $ci->load->view('mailer/'.$template.'', $pdata);
    	$mailArr = (array)$message->output;
    	$message=($mailArr['final_output']);
    	$to=$data['email'];
    	$from="admin@meethidelhi.com";
		$name="Meethi by WOK in the clouds";
		$headers = "From: \"" . $name . "\" <" . $from . ">\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n"; //This line sets the email type to html

 		if(mail($to,$subject,$message,$headers)){
			//echo 'mail sent';

		}else{
			//echo 'mail couldn\'t be sent';	
		}
 	}
 }


?>