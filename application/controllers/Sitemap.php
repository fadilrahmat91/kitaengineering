<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');	
		 $this->load->helper(array('form', 'url'));
		date_default_timezone_set("Asia/jakarta");
	}


	function index(){
		$data['data_artikel']=$this->db->query("SELECT * FROM artikel ORDER BY id_artikel DESC"); 
		$this->load->view('template/part/v_sitemap.php',$data);
	}
	
}