<?php
class Facebook_login extends CI_Controller
{
	public function __construct(){
		parent::__construct();
	 $this->load->library('facebook/fb');
    }
	
	function index()
	{
		$data = array(	
		'login_url' => $this->fb->createLoginLink(),
		'user_profile' => $this->fb->initialize(),
		'title' => "test",
		);
		//$this->load->view("loginfacebook",$data);
		print_r($data);
	}
	
	function facebook_logout()
	{
		$this->fb->facebookLogout();
		redirect('facebook_login');
	}
}
?>