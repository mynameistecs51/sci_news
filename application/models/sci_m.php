<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sci_m  extends CI_model {
	public function __construct(){
		parent::__construct();
	}

	//------------get news -----------------//
	public function get_news(){
		$get_news = $this->db->get('news');
		return $get_news->result();
	}
}
?>