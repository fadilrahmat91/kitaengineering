<link 	rel="stylesheet" 	href="<?php echo base_url('assets/css/blog.css')?>">
<div  class="container">
	
	<div style="padding-bottom:100px;" class="col-md-8 col-xs-12">
	    <?php require_once 'navigasi.php';?>
		<?php foreach($d_artikel as $artikel){?>
			<h2><?php echo $artikel->judul;?></h2>
			<h4 class="info"><i><?php echo str_replace("n","&",ucfirst($artikel->sub_kategori))." By ".$artikel->penulis." On ".$artikel->waktu;?> </i></h4>
			<p id="deskripsi" style="font-size:19px;color:#727779;font-family: 'Ubuntu',serif;line-height: 2;">
				<?php echo substr(strip_tags(base64_decode($artikel->deskripsi),'<a><pre>'),0,310);?>
				.<a href="<?php echo site_url('view/'.$artikel->slug_judul);?>"> More-></a>
			 </p>
			 <hr>
		<?php }?>
			<center>
		<div  class="col-md-12 col-xs-12 pagination">
	
			<?php 
				echo $this->pagination->create_links();
					
			?>
		
		</div>
		</center>			
		 
	</div>
	
		
	
	<div class="col-md-4 col-xs-12 m_kategori">
		<h1 class="kategori">Kategori</h1>
		<ul>
			<li><a><i>Php & mysqli <span class="badge">3 </span></i></a></li>
			<li><a><i>Html & css <span class="badge">3 </span></i></a></li>
			<li><a><i>C <span class="badge">3 </span></i></a></li>
			<li><a><i>Komputer <span class="badge">3 </span></i></a></li>
			<li><a><i>Lain-Lain <span class="badge">3 </span></i></a></li>
			
		</ul>
	</div>
</div>
