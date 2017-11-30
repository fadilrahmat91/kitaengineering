<?php
	class M_admin extends CI_Model{
		
		function view_admin(){
			
			$row =$this->db->query("SELECT  * FROM admin ");
			return $row;
		}
		function tampil_by_id($id_admin){
			$row=$this->db->query("SELECT * FROM admin WHERE id_admin='$id_admin'");
			return $row;
			
		}
		function edit_data($id_admin,$data) 
		{			
			$this->db->where('id_admin',$id_admin)->update('admin',$data);
			
		}
		function tambah_data($data){
			$this->db->insert('admin',$data);
		}
		function hapus_data($id_admin){
			$this->db->query("DELETE FROM admin WHERE id_admin='$id_admin'");
		}
		
		
	}
?>