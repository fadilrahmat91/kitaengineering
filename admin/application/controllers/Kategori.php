<?php


class Kategori extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		$this->load->database();
				
		$this->load->model('m_kategori');
		
		 $this->load->helper(array('form', 'url'));
		
		
	}


	function index(){
		$data['kategori_data'] = $this->m_kategori->view_kategori();
		$this->load->view('template/part/kategori_data.php',$data);
	}
	function upload(){
		$config =  array(
                  'upload_path'     => "./gam_kat/",
                  'allowed_types'   => "gif|jpg|png|jpeg|pdf",
                  'overwrite'       => TRUE,
                  'max_size'        => "2048000",  // Can be set to particular file size
                  'max_height'      => "7680",
                  'max_width'       => "10240"  
                );    
				$this->load->library('upload', $config);
	}
	function kategori_edit($id_kategori){
		$data=array(	't_by_id'	=>	$this->m_kategori->tampil_by_id(addslashes(trim($id_kategori)))->row()
						
					);
		$this->load->view('template/part/kategori_edit.php',$data);
	}
	function aksi_edit(){
		$this->upload();
		if($this->upload->do_upload()){
			$data=array('sub_kategori'		=>	addslashes(trim($this->input->post('sub_kategori'))),
						'kategori'			=>	addslashes(trim($this->input->post('kategori'))),
						'gambar_kat'		=>	addslashes(trim($_FILES['userfile'] ['name']))
						);
			$id_kategori=addslashes(trim($this->input->post('id_kategori')));
			$this->m_kategori->edit_data($id_kategori,$data);
		}
		else
				{
					echo 'gagal';
					
				} 
		
	}
	function tambah_data(){
		
		$this->load->view('template/part/kategori_tambah.php');
	}
	function add_data(){
				$this->upload();
     
				if($this->upload->do_upload())
				{
					
					$data=array('sub_kategori'		=>	addslashes(trim($this->input->post('sub_kat'))),
								'kategori'			=>	addslashes(trim($this->input->post('kategori'))),
								'gambar_kat'		=>	addslashes(trim($_FILES['userfile'] ['name']))
					);
					$this->m_kategori->tambah_data($data);
				}
				else
				{
					$error =  $this->upload->display_errors();
					echo $error;
					
				}    
	}
	function hapus_kategori($id_kategori){
		$this->m_kategori->hapus_data(addslashes(trim($id_kategori)));
	}
	
	
	
	
	
	
}
