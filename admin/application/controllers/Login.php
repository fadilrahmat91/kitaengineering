<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');		
		$this->load->helper('form');		
		
		date_default_timezone_set("Asia/jakarta");
		$this->session->sess_expire_on_close = TRUE;

	}

	public function index() {
		
		$this->load->view('template/form_login.php');
	}

	public function cek_login() {
		
		$username 	= addslashes(trim(md5($this->input->post('username', TRUE))));
		$password 	= addslashes(trim(md5($this->input->post('password', TRUE))));
		
		
		
		
		
		
		
		
		$hasil = $this->db->query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
		
		
		
		if ($hasil->num_rows() == 1) 
		{
			
					
					$data=$hasil->row();
					$sess_data['nama'] = $data->nama;
					$sess_data['id_admin'] = $data->id_admin;					
					$this->session->set_userdata($sess_data);
					
				
					redirect('home');
			
			
			
		}
		else {
			
			echo 'gagal';
		}
		
		
		
	}
	
	public function logout() {
		
			$id_admin	=	$this->session->userdata('id_admin');
			$waktu		=	date('h:i:s');
			$this->db->query("UPDATE admin_online SET status='non_aktif',waktu_online='$waktu' WHERE id_admin='$id_admin'");
			$this->session->unset_userdata('id_admin');	
			session_destroy();
			redirect('login');
		
	}
	
	
	
	
	
	
}