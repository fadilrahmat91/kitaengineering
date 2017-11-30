<?php


class Admin extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		$this->load->database();
				
		$this->load->model('m_admin');
		
		 $this->load->helper(array('form', 'url'));
		 
		 if ($this->session->userdata('id_admin')=="") 
		{
			redirect('login');
		}
		
		
	}


	function index(){
		$data['admin_data'] = $this->m_admin->view_admin();
		$this->load->view('template/part/admin_data.php',$data);
	}
	function upload(){
		$config =  array(
                  'upload_path'     => "./uploads/",
                  'allowed_types'   => "gif|jpg|png|jpeg|pdf",
                  'overwrite'       => TRUE,
                  'max_size'        => "2048000",  // Can be set to particular file size
                  'max_height'      => "7680",
                  'max_width'       => "10240"  
                );    
				$this->load->library('upload', $config);
	}
	function admin_edit($id_admin){
		$data=array(	't_by_id'	=>	$this->m_admin->tampil_by_id($id_admin)->row(), 
						
					);
		$this->load->view('template/part/admin_edit.php',$data);
	}
	function aksi_edit(){
		$this->upload();
		if($this->upload->do_upload()){
			$id_admin=$this->input->post('id_admin');
			$t_by_id	=	$this->m_admin->tampil_by_id($id_admin)->row();
						
					
			$data=array(		'nama'			=>	$this->input->post('nama'),
								'alamat'		=>	$this->input->post('alamat'),
								'email'			=>	$this->input->post('email'),
								'pekerjaan'		=>	$this->input->post('pekerjaan'),
								'gambar'		=>	$_FILES['userfile'] ['name'],
								'no_hp'			=>	$this->input->post('no_hp'),
								'username'		=>	md5($t_by_id->username),
								'password'		=>	md5($t_by_id->password)
					);
			
			$this->m_admin->edit_data($id_admin,$data);
		}
		else
				{
					echo 'gagal';
					
				} 
		
	}
	function tambah_admin(){
		
		$this->load->view('template/part/admin_tambah.php');
	}
	function add_data(){
				$this->upload();
     
				if($this->upload->do_upload())
				{
					
					$data=array('nama'			=>	$this->input->post('nama'),
								'alamat'		=>	$this->input->post('alamat'),
								'email'			=>	$this->input->post('email'),
								'pekerjaan'		=>	$this->input->post('pekerjaan'),
								'gambar'		=>	$_FILES['userfile'] ['name'],
								'no_hp'			=>	$this->input->post('no_hp'),
								'username'		=>	md5($this->input->post('username')),
								'password'		=>	md5($this->input->post('password'))
					);
					$this->m_admin->tambah_data($data);
				}
				else
				{
					$error =  $this->upload->display_errors();
					echo $error;
					
				}    
	}
	function hapus_admin($id_admin){
		$this->m_admin->hapus_data($id_admin);
	}
	
	
	
	
	
	
}
