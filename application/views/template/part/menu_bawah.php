<section style="background:#0d0d0d;" class="footer">
			<div  class="container">
				<div  class="col-md-4 col-sm-4">
					<h3>Info</h3>
					<p><i class="fa fa-map-marker" aria-hidden="true"></i> Jl.Setia Budi Simp Selayang No 5A ,Medan</p>
					<a style="color:white" href="<?php echo site_url('kontak')?>">Contact</a><br>	
					<a style="color:white" href="<?php echo site_url('about')?>">About</a>	
				</div>
				<div  class="col-md-4 col-sm-4">
					<h3>Share This</h3>
					<div class="row">
						<left></left><div class="sharethis-inline-share-buttons tombol"></div></left>
					</div>
				</div>
				<div  class="col-md-4 col-sm-4">
					<h3>Popular Post</h3>
					<?php foreach ($popular as $data){?>
    					<a style="color:white;text-decoration:none;"  href="<?php echo site_url('view/'.$data->slug_judul);?>"> <?php echo $data->judul;?></a><br><br>
    				<?php }?>
				</div><br>
				<div class="col-md-12 col-sm-12">
					<p class="text-center">Copyright &copy Kitaenginering.com</p> 
				</div>
			</div>
</section>