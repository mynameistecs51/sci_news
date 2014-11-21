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

	public function get_news_id($news_id){
		$sql_get_news_id = "SELECT * FROM news WHERE news_id = ".$news_id." ";
		$get_news_id = $this->db->query($sql_get_news_id)->result();
		return $get_news_id;
	}
}
?>