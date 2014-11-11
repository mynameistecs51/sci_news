<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');

class Sci_con extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model("sci_m",'',TRUE);
	}

	public function index(){
		$data = array(
			'title' => "SCI NEWS",
			);
		$this->load->view('admin/index',$data);
	}

	//-----------------function upload picture---------------------//
	public function do_upload(){	
		$input_detail = $this->input->post('input_detail');
		$input_title = $this->input->post('input_title');
//...
		$rand = rand(1111,9999);
		$date= date("Y_m_d");
		$name_picture = "";
		$type_picture ="";

		$config['upload_path'] ='./file_upload/pict_news/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '6144';
		//$config['encrypt_name'] = TRUE;
		$config['remove_spaces'] = TRUE;
		//$file_name =$_FILES['images']['name'];
		//$config['file_name'] = $date.$rand.$file_name;



		foreach ($_FILES['images']['name'] as $key_name => $picture_name) {
			foreach ($_FILES['images']['type'] as $key_type => $picture_type){
			//ไม่มีอะไรให้มัข้างไปแสดงใน foreach$_FILES['images']['name'] เลย
			}
			$name_picture .= $picture_name.",";
			$type_picture .=$picture_type.",";
		}

	//$config['file_name'] =$name_picture;//----------------file_name

		$this->load->library('upload',$config);
		$images= $this->sci_m->_upload_files('images');

		$insert = array(
			'news_id' => "",
			'news_title' => $input_title,
			'news_detail' => $input_detail,
			'news_file_upload' => $name_picture,
			'news_date' => NOW(),
			);

		print_r($insert);
		//$this->db->insert('detail',$insert);
	//	redirect('admin_con/profile_ago/'.$page,'refresh');
	}
}
?>