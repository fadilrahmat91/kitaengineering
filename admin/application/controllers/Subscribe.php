<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');	
		 $this->load->helper(array('form', 'url'));
		date_default_timezone_set("Asia/jakarta");
	}


	function index(){
		$data['subscribe_data']=$this->db->query("SELECT * FROM subscribe ORDER BY id_sub DESC");
		$this->load->view('template/part/subscribe_data.php',$data);
	}
	function hapus_sub($id_sub){
		$this->db->query("DELETE FROM subscribe WHERE id_sub='$id_sub'");
	}
}