<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
        
		$this->load->database();
		$this->load->helper('url');	
		
		
		$this->load->model('m_artikel');
		
		 $this->load->helper(array('form', 'url'));
		date_default_timezone_set("Asia/jakarta");
	}


	public function index()
	{	
		
		$nama	=	array('wb_kat','pembelajaran','tutorial','programming');
		$kat	=	array('web_programming','pembelajaran','tutorial','programming');
		 
			$data	= array(
							$nama[0] 		=> $this->m_artikel->kat($kat[0]),
							$nama[1] 		=> $this->m_artikel->kat($kat[1]),
							$nama[2] 		=> $this->m_artikel->kat($kat[2]),
							$nama[3] 	    => $this->m_artikel->kat($kat[3]),
							'popular'		=>	$this->m_artikel->popular()->result()
							
							
				 );
		
		$this->load->view('template/index.php',$data);
	}
	public function blog()
	{	
		//$data['user'] = $this->m_artikel->tampil_artikel($from,$config['per_page']);
		$jumlah_data = $this->db->query("SELECT * FROM artikel")->num_rows();
		
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/blog/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 8;
		$from = $this->uri->segment(2);
		$url1 = $this->uri->segment(1);
		$url2 = $this->uri->segment(2);
		if($from==''){
			$from=0;
		}
		 $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);	
		$nama	=	array('wb_kat','pembelajaran','tutorial','programming');
		$kat	=	array('web_programming','pembelajaran','tutorial','programming');
		 
			$data	= array('d_artikel'		=> $this->m_artikel->tampil_artikel($from,$config['per_page'])->result(),
							$nama[0] 		=> $this->m_artikel->kat($kat[0]),
							$nama[1] 		=> $this->m_artikel->kat($kat[1]),
							$nama[2] 		=> $this->m_artikel->kat($kat[2]),
							$nama[3] 	    => $this->m_artikel->kat($kat[3]),
							'popular'		=>	$this->m_artikel->popular()->result()
							
							
				 );
		
		$this->load->view('template/blog.php',$data);
	}
	
	
	function view($judul){
		$nama	=	array('wb_kat','pembelajaran','tutorial','programming');
		$kat	=	array('web_programming','pembelajaran','tutorial','programming');
			
		$data= array('header'			=>	'menu_atas',
					'fb_plugin'			=>	'tampilan',
					'popular'		=>	$this->m_artikel->popular()->result(),
					'tampil_by_judul'	=>	$this->m_artikel->tampil_by_judul($judul)->row(),
					
					$nama[0] 			=> $this->m_artikel->kat($kat[0]),
					$nama[1] 			=> $this->m_artikel->kat($kat[1]),
					$nama[2] 			=> $this->m_artikel->kat($kat[2]),
					$nama[3] 	        => $this->m_artikel->kat($kat[3])
					);
		
		$this->load->view('template/view.php',$data);
		
	}
	function kategori(){
		$kategori	 = str_replace('-',' ',$this->uri->segment(2));
		
		$jumlah_data = $this->db->query("SELECT * FROM artikel WHERE sub_kategori='$kategori'")->num_rows();
		
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/kategori/'.$this->uri->segment(2);
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 6;
		$from = $this->uri->segment(3);
		$url1 = $this->uri->segment(1);
		$url2 = $this->uri->segment(2);
		if($from==''){
			$from=0;
		}
		 $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="'.$url1.'/'.$url2.'">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);		
		
		$nama	=	array('wb_kat','pembelajaran','tutorial','programming');
		$kat	=	array('web_programming','pembelajaran','tutorial','programming');
		$data=array(
					
					'tampil_kat'=>	$this->m_artikel->artikel_by_kategori($kategori,$from,$config['per_page']),
					'popular'		=>	$this->m_artikel->popular()->result(),
					$nama[0] 	=> $this->m_artikel->kat($kat[0]),
					$nama[1] 	=> $this->m_artikel->kat($kat[1]),
					$nama[2] 	=> $this->m_artikel->kat($kat[2]),
					$nama[3] 	=> $this->m_artikel->kat($kat[3])
			);
		$this->load->view('template/v_kategori.php',$data);
		
	}
	function cari(){
		$cari=  addslashes(trim($this->input->post('cari', TRUE)));
		$data=array('hasil_cari'	=>	$this->db->query("SELECT * FROM artikel WHERE judul LIKE '%$cari%' ORDER BY id_artikel DESC LIMIT 0,8"),
					);
		$data['hasil']=$data['hasil_cari']->num_rows();
		$this->load->view('template/part/ajax_cari.php',$data);
	}
	function insert_sub(){
		$url	=	addslashes(trim($this->input->post('sub', TRUE)));
		$data	=	array('subscribe'=> $url);
		$this->db->insert('subscribe',$data);
	}
	function get(){
		 $nama	=	array('wb_kat','pembelajaran','tutorial','programming');
		 $kat	=	array('web_programming','pembelajaran','tutorial','programming');
	     $data=array(
	                $nama[0] 	=> $this->m_artikel->kat($kat[0]),
					$nama[1] 	=> $this->m_artikel->kat($kat[1]),
					$nama[2] 	=> $this->m_artikel->kat($kat[2]),
					$nama[3] 	=> $this->m_artikel->kat($kat[3]),
					'popular'		=>	$this->m_artikel->popular()->result(),
				);
		return $data;
	}
	function about(){
		
	   $data=$this->get();
	   $this->load->view('template/about.php',$data);
	   
	}
	
	function kontak(){
		
	   $data=$this->get();
	   $this->load->view('template/kontak.php',$data);
	}
	
	function paging($kategori,$offset){
		if($offset==''){
				$lewat=0;
		}else{
			$lewat=$offset*4;
		}
		$data['a_data']=$this->db->query("SELECT * FROM artikel INNER JOIN kategori ON artikel.sub_kategori=kategori.sub_kategori WHERE kategori.kategori='".$kategori."' ORDER BY artikel.id_artikel DESC  LIMIT ".$lewat.", 4")->result_array();
        if($kategori=='web_programming'){
			$this->load->view('template/part/v_wb.php',$data);      
		}else{
			$this->load->view('template/part/v_prog.php',$data); 
		}
	}
	
}