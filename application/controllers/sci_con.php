<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');

class Sci_con extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	public function index(){
		$data = array(
			'title' => "SCI NEWS",
			);
		$this->load->view('index',$data);
	}
}
?>