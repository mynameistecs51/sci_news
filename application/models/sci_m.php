<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sci_m  extends CI_model {
	public function __construct(){
		parent::__construct();
	}

	//------------get news -----------------//
	public function get_news(){
		// $this->db->order_by('news_id','desc');
		// $get_news = $this->db->get('news');
		$get_news = $this->db->query('SELECT
			`users`.`user_first_name`,
			`users`.`user_facebook_id`,
			`users`.`user_last_name`,
			`news`.`news_id`,
			`news`.`news_title`,
			`news`.`news_detail`,
			`news`.`news_file_upload`,
			`news`.`news_date`,
			`news`.`news_post`
			FROM
			`news`
			INNER JOIN `users` ON `news`.`news_post` = `users`.`user_facebook_id` ORDER BY `news`.`news_id` DESC ');
		return $get_news->result();
	}

	public function get_news_id($news_id){
		$sql_get_news_id = "SELECT * FROM  news WHERE news_id = ".$news_id." ";
		$get_news_id = $this->db->query($sql_get_news_id)->result();
		return $get_news_id;
	}
}
?>