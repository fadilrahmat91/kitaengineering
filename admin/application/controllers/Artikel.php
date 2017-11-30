<?php


class Artikel extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		$this->load->database();
				
		$this->load->model('m_artikel');
		
		 $this->load->helper(array('form', 'url'));
		if ($this->session->userdata('id_admin')=="") 
		{
			redirect('login');
		}
		
	}


	function index(){
		$data['artikel_data'] = $this->m_artikel->tampil_artikel();
		$this->load->view('template/part/artikel_data.php',$data);
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
	function artikel_edit($id_artikel){
		$data=array(	't_by_id'	=>	$this->m_artikel->tampil_by_id(addslashes($id_artikel))->row(), 
						'data_kat'	=>	$this->m_artikel->v_kategori()
					);
		$this->load->view('template/part/artikel_edit.php',$data);
	}
	function aksi_edit(){
		$this->upload();
		if($this->upload->do_upload()){
			$data=array(	    'judul'			=>	addslashes(trim($this->input->post('judul'))),
								'deskripsi'		=>	base64_encode($this->input->post('deskripsi')),
								'gambar'		=>	addslashes(trim($_FILES['userfile'] ['name'])),
								'waktu'			=>	addslashes(trim($this->input->post('waktu'))),
								'sub_kategori'	=>	addslashes(trim($this->input->post('id_kat'))),
								'slug_judul'	=>	addslashes(trim($this->input->post('slug'))),
								'penulis'		=>	$this->session->userdata('nama'),
								'view'			=>  1
						);
			$id_artikel=$this->input->post('id_artikel');
			$this->m_artikel->edit_data($id_artikel,$data);
		}
		else
				{
					echo 'gagal';
					
				} 
		
	}
	function tambah_data(){
		$data['data_add']=$this->m_artikel->v_kategori();
		$this->load->view('template/part/artikel_tambah.php',$data);
	}
	function add_data(){
				$this->upload();
     
				if($this->upload->do_upload())
				{
					
					$data=array('judul'			=>	addslashes(trim($this->input->post('judul'))),
								'deskripsi'		=>	base64_encode($this->input->post('deskripsi')),
								'gambar'		=>	addslashes(trim($_FILES['userfile'] ['name'])),
								'waktu'			=>	addslashes(trim($this->input->post('waktu'))),
								'sub_kategori'	=>	addslashes(trim($this->input->post('id_kat'))),
								'slug_judul'	=>	addslashes(trim($this->input->post('slug'))),
								'penulis'		=>	$this->session->userdata('nama'),
								'view'			=>	1
					);
					$this->m_artikel->tambah_data($data);
				}
				else
				{
					$error =  $this->upload->display_errors();
					echo $error;
					
				}    
	}
	function hapus_artikel($id_artikel){
		$this->db->query("DELETE FROM artikel WHERE id_artikel='$id_artikel'");
	}
	function form_upload(){
		$this->load->view('template/part/upload.php');
	}
	function upload_gam(){
		$this->upload();
		$this->upload->do_upload();
	}
	
	
	
	
	
	
}
