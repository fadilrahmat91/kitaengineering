<?php
	class M_artikel extends CI_Model{
		
		function tampil_artikel($offset,$limit){
			
			$row =$this->db->query("SELECT  * FROM artikel INNER JOIN kategori ON artikel.sub_kategori=kategori.sub_kategori ORDER BY id_artikel DESC LIMIT $offset,$limit ");
			return $row;
		}
		function t_artikel(){
			$row=$this->db->query("SELECT * FROM artikel");
			return $row;
		}
		function tampil_by_id($id_artikel){
			$row=$this->db->query("SELECT * FROM artikel WHERE id_artikel='$id_artikel'");
			return $row;
			
		}
		function tampil_by_judul($slug_judul){
			$row=$this->db->query("SELECT * FROM artikel WHERE slug_judul='$slug_judul'");
			return $row;
			
		}
		function terbaru(){
			$row =$this->db->query("SELECT * FROM artikel ORDER BY id_artikel DESC LIMIT 0,15");
			return $row;
		}
		function popular(){
			$row =$this->db->query("SELECT * FROM artikel ORDER BY view DESC LIMIT 0,4");
			return $row;
		}
		
		function kat($kategori){
			$data=$this->db->query("SELECT kategori.*,(SELECT COUNT(artikel.sub_kategori) FROM artikel WHERE artikel.sub_kategori=kategori.sub_kategori) AS jumlah  FROM kategori WHERE kategori='$kategori'");
			return $data;
			
		}
		function terkait($id_kat){
			$row	=$this->db->query("SELECT * FROM artikel WHERE sub_kategori='$id_kat' ORDER BY id_artikel DESC LIMIT 0,3");
			return $row;
		}
		function artikel_by_kategori($kategori,$offset,$limit){
			$row=$this->db->query("SELECT * FROM artikel INNER JOIN kategori ON artikel.sub_kategori=kategori.sub_kategori WHERE artikel.sub_kategori='$kategori' ORDER BY id_artikel DESC LIMIT $offset,$limit");
			return $row;
		}
		
		
		
	}
?>