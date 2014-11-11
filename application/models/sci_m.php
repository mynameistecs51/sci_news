<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sci_m  extends CI_model {
	public function __construct(){
		parent::__construct();
	}

//--------------------function file multi upload-----------------------//
	function _upload_files($field='userfile'){

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
}
?>