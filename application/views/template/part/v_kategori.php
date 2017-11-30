 <link 	rel="stylesheet" 	href="<?php echo base_url('assets/css/blog.css')?>">
		<div class="container">
				<div class="col-md-2"></div>
				<div class="col-md-8 col-xs-12">
					<?php require_once 'navigasi.php';?>
				</div>
				<div class="col-md-2"></div>
				
				
				
				<?php foreach($tampil_kat->result() as $artikel){?>
					<div class="col-md-12"></div>
					<div class="col-md-2"></div>
					<div class="col-xs-12 col-md-8">
					
						<h2><?php echo $artikel->judul;?></h2>
						<h4 class="info"><i>PHP by Abdil ON agust</i></h4>
						<p id="deskripsi" style="font-size:19px;color:#727779;font-family: 'Ubuntu',serif;line-height: 2;">
							<?php echo substr(strip_tags(base64_decode($artikel->deskripsi),'<a><pre>'),0,310);?>
							.<a href="<?php echo site_url('view/'.$artikel->slug_judul);?>"> More-></a>
						 </p>
						 <hr>
						
					</div>
				<?php }?>
				
				<center>
		<div  class="col-md-12 col-xs-12 pagination">
	
			<?php 
				echo $this->pagination->create_links();
					
			?>
		
		</div>
		</center>
			</div>
		</div>
	
