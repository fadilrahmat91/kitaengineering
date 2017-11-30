<link 	rel="stylesheet" 	href="<?php echo base_url('assets/css/blog.css')?>">
<?php
	$this->db->query("UPDATE artikel SET judul='$tampil_by_judul->judul',deskripsi='$tampil_by_judul->deskripsi',gambar='$tampil_by_judul->gambar',waktu='$tampil_by_judul->waktu',slug_judul='$tampil_by_judul->slug_judul',sub_kategori='$tampil_by_judul->sub_kategori',penulis='$tampil_by_judul->penulis',view=$tampil_by_judul->view+1 WHERE judul='$tampil_by_judul->judul'");
?>
			
		
<div  class="container">
		
		<div class="col-md-2"></div>
		<div class="col-md-8 col-xs-12">
			<?php
				require_once 'navigasi.php';
			?>
		</div>
		
		<div class="col-md-2"></div>
		<div class="col-md-12"></div>
		
		<div class="col-md-2"></div>
		<div   class="col-md-8 col-xs-12 viewisi">
			
			<h3 itemprop="name"><?php echo $tampil_by_judul->judul;?></h3>
			<img class="d_img" itemprop="image"  class="img-responsive" style="width:100%;" src="<?php echo base_url('admin/uploads/'.$tampil_by_judul->gambar);?>"><br><br>
			<div class="row">
				<div class="col-md-4 col-xs-4">
					<p class="waktu"><i class="fa fa-calendar" aria-hidden="true"></i> <i itemprop="datePublished" content="<?php echo $tampil_by_judul->waktu;?>"><?php echo $tampil_by_judul->waktu;?></i></p>
				</div>
				<div class="col-md-4 col-xs-4">
					<p class="viewp"><i class="fa fa-eye" aria-hidden="true"></i> <i><?php echo $tampil_by_judul->view;?> Kali</i></p>
				</div>
				<div class="col-md-4 col-xs-4">
					<p class="viewp"><i class="fa fa-user" aria-hidden="true"></i><span itemprop="author" itemscope itemtype="http://schema.org/Person"> <i itemprop="name"><?php echo $tampil_by_judul->penulis;?> </i></span></p>
				</div>
				
			</div>
			
			<div class="sharethis-inline-share-buttons"></div>
			<div style="font-size:19px;color:#727779;font-family: 'Ubuntu',serif;line-height: 2;"><?php echo  str_replace("<p>","",base64_decode($tampil_by_judul->deskripsi));?></div><br>
			
			<div class="fb">
				<div class="row">
					<?php	
						$this->load->view('template/part/'.$fb_plugin);
						
					?>
				</div>
			</div>
		 </div>
		 <div class="col-md-2"></div>
		 
		 <div class="col-md-12"></div>
		 
		 <div class="col-md-2"></div>
		 <div class="col-md-8 col-xs-12">				
			<h4 class="terkait"> TERKAIT</h4>
			
			<?php
				
				$data=$this->m_artikel->terkait($tampil_by_judul->sub_kategori)->result_array();				
				foreach ($data as $row){?>
					<div style="margin-bottom:20px;" class="col-xs-12 col-md-4">
						<div class="row">
							<a href="<?php echo site_url('view/'.$row['slug_judul']);?>" ><p>   <?php echo $row['judul'];?></p></a>						
							<img  class="img-responsive" style="height:100px"   src="<?php echo base_url('admin/uploads/'.$row['gambar']);?>"/>
						</div>
					</div>
					

								
						
					
			<?php }?>
				
		</div>
</div>


					
	