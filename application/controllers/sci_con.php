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

		$rand = rand(1111,9999);
		$date= date("Y_m_d_H_i");
		$name_picture = "";
		$type_picture ="";

		$config['upload_path'] ='./file_upload/pict_news/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '70000';
		//$config['encrypt_name'] = TRUE;
		//$config['remove_spaces'] = TRUE;
		//$file_name =$_FILES['images']['name'];

		$this->load->library('upload');
		$this->upload->initialize($config);
		// foreach ($_FILES['images']['name'] as $key_name => $picture_name) {
		// 	foreach ($_FILES['images']['type'] as $key_type => $picture_type){
		// 	//ไม่มีอะไรให้มัข้างไปแสดงใน foreach$_FILES['images']['name'] เลย
		// 	}
		// 	$name_picture .= $picture_name .",";
		// 	$type_picture .=$picture_type.",";
		// }

		
	//$config['file_name'] =$name_picture;//----------------file_name
		if($_FILES['images']){			
			$images= $this->_upload_files('images');
			foreach ($images as $key => $value) {
			# code...
				$name_picture .=$value['file_name'].",";		//------------./ show list name picture./---------//
			}

			$insert = array(
				'news_id' => "",
				'news_title' => $input_title,
				'news_detail' => $input_detail,
				'news_file_upload' => substr($name_picture,0,-1),
				'news_date' => $date,
				);
			$this->db->insert('news',$insert);
			redirect('sci_con','refresh');
		}		

		var_dump($this->upload->data());
		
	}

	private function _upload_files($field='userfile'){
		$files = array();
		foreach( $_FILES[$field] as $key => $all )
			foreach( $all as $i => $val )
				$files[$i][$key] = $val;

		$files_uploaded = array();
		for ($i=0; $i < count($files); $i++) { 
			$_FILES[$field] = $files[$i];
			if ($this->upload->do_upload($field))
				$files_uploaded[$i] = $this->upload->data($files);
			else
				$files_uploaded[$i] = null;
		}
		return $files_uploaded;
	}

		//-----------------show list news-------------------//
	public function list_news(){
		$data = array(
			'title' => "รายการข่าวทั้งหมด",
			'show_news' => $this->sci_m->get_news(),
			);

		$this->load->view('list_news',$data);
	}

		// public function index_html(){
		// 	$data = array(
		// 		'title' => "รายการข่าวทั้งหมด",
		// 		'show_news' => $this->sci_m->get_news(),
		// 		);
		// 	$this->load->view('picture',$data);
		// }
	public function show_index(){
		$this->load->view('index');
	}

	public function show_news($news_id){
		$data = array(
			'title' => "news detail",
			'get_news_id' => $this->sci_m->get_news_id($news_id),
			);
		$this->load->view('picture',$data);
	}
}
?>