<?php
	class M_kategori extends CI_Model{
		
		function view_kategori(){
			
			$row =$this->db->query("SELECT  * FROM kategori ");
			return $row;
		}
		function tampil_by_id($id_kat){
			$row=$this->db->query("SELECT * FROM kategori WHERE id_kategori='$id_kat'");
			return $row;
			
		}
		function edit_data($id_kat,$data) 
		{			
			$this->db->where('id_kategori',$id_kat)->update('kategori',$data);
			
		}
		function tambah_data($data){
			$this->db->insert('kategori',$data);
		}
		function hapus_data($id_kat){
			$this->db->query("DELETE FROM kategori WHERE id_kategori='$id_kat'");
		}
		
		
	}
?>