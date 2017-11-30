<div class="col-md-12 col-xs-12 jum_cari">
	<center> <?php echo '<b>Result : <i class="tot">'.$hasil.'</i></b>';?></center>
</div>

<?php foreach($hasil_cari->result_array() as $data){?>
						<div class="col-xs-12 col-md-3 box">
						
							<div class="head-thumb">
								<img   height="100"   src="admin/uploads/<?php echo $data['gambar'];?>"/>
							</div>
							<div class="thumb-body">
								<p class="kategori"><?php echo $data['sub_kategori'];?></p>
								<a class="judulkiri" href="<?php echo site_url('view/'.$data['slug_judul']);?>" ><p class="judul"><?php echo $data['judul'];?></p></a>
							</div>
							
						</div>
						
	<?php }?>
						