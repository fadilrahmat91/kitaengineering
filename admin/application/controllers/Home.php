<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');		
		
		$this->load->helper('custom_func');
		
		
		$this->load->helper('text');
		if ($this->session->userdata('id_admin')=="") 
		{
			redirect('login');
		}
		date_default_timezone_set("Asia/jakarta");
	}


	public function index()
	{
		$id_admin=$this->session->userdata('id_admin');
		$data['admin_aktiv']=	$this->db->query("SELECT * FROM admin_online INNER JOIN admin ON admin_online.id_admin=admin.id_admin WHERE status='aktiv'");
		$data['contoh']		=	$this->db->query("SELECT * FROM admin WHERE id_admin='$id_admin'")->row();
		$this->load->view('template/index.php',$data);
	}
	function menu_awal(){
		$id_admin	=	$this->session->userdata('id_admin');
		$cek_online =	$this->db->query("SELECT * FROM admin_online WHERE id_admin='$id_admin' ")->row();
		/*$waktu1		=	date($cek_online->waktu_online);
		$waktu		=	date('h:i:s');
		$awal  		= 	strtotime($waktu1);
		$akhir 		= 	strtotime($waktu);
		$diff  		= 	$akhir - $awal;
		$jam   		= 	floor($diff / (60 * 60));
		$menit 		= 	$diff - $jam * (60 * 60);
		$h_menit	=	floor( $menit / 60 );
		
		if($h_menit	>=	3){
			$arr["status"]	=	"logout";
			$arr["waktu"]	=	$h_menit;
			$this->j($arr);
			
			
			
		}else{*/
		
				$data=array(		'total_admin'	=>	$this->db->query("SELECT * FROM admin")->num_rows(),
									'admin_aktiv'	=>	$this->db->query("SELECT * FROM admin_online WHERE status='aktiv'")->num_rows(),
									'admin_nonaktiv'=>	$this->db->query("SELECT * FROM admin_online WHERE status='non_aktif'")->num_rows()
							);
				$cek_online =	$this->db->query("SELECT * FROM admin_online WHERE id_admin='$id_admin' ");
				if($cek_online->num_rows()==0){
					$this->db->query("INSERT INTO admin_online SET id_admin='$id_admin',status='aktiv'");
				}else{
					$this->db->query("UPDATE admin_online SET status='aktiv' WHERE id_admin='$id_admin'");
				}
				
				
				$this->load->view('template/part/menu_awal.php',$data);
		//}
	}
	function j($data){
			header('Content-Type: application/json');
			echo json_encode($data);
		}
	
}