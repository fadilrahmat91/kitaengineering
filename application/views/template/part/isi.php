
<section id="navigasi">
	<ol class="container breadcrumb">
	  <li class="breadcrumb-item"><a href="#">Home</a></li>
	  
	</ol>
</section>

<section id="pengembang">
	<div class="container">
		
			<ul>
			 
			  
			  <li onClick="tab('tab2')" class="tab_active" id="tab2"><a href="#terbaru">Terbaru</a></li>
			</ul>

			
		
	</div>

</section>
<section id="isi">
	
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12 l_cari">
					<div class="row">
						    <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                
                                  <!-- Modal content-->
                                <center>  
                                  <div class="modal-content col-md-5 col-xs-6 loading">
                                    
                                    <div class="modal-body">
                                      <center><div class="loader"></div></center>
                                    </div>
                                    
                                  </div>
                                 </center>
                                </div>
                              </div>
							<form id="form_cari">
								<div class="col-md-4 col-xs-8">
									<input required class="form-control" placeholder="Cari Artikel" name="cari" type="text" id="cari">
								</div>
								<div class="col-md-3 col-xs-3">
									<button class="btn btn-default tombol_cari">Search</button>
								</div>
							</form>
						
					</div>
				</div>
				<div class="h_cari">
					<?php foreach($artikel_data->result_array() as $data){?>
						<div class="col-xs-12 col-sm-4 col-md-3 box">
						
							<div class="head-thumb">
								<img     src="admin/uploads/<?php echo $data['gambar'];?>"/>
							</div>
							<div class="thumb-body">
								<p class="kategori"><?php echo str_replace('n','&',$data['sub_kategori']);?></p>
								<a  class="judulkiri" href="<?php echo site_url('view/'.$data['slug_judul']);?>" ><p class="judul"><?php echo $data['judul'];?></p></a>
							</div>
							
						</div>
					<?php }?>
				
				
				<div class="col-xs-12 col-md-12">
					<center>
						<?php 
						echo $this->pagination->create_links();
						
						?>
					</center>
				</div>
			</div>
			</div>
		</div>
	
</section>
 <section id="web_prog">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 lar_wb">
                <h4 class="j_wb">
                    <span>Web Programming</span></h4>
                <div class="ar_wb">
                <div class="row">
                    <?php
						
                        $a_data=$this->db->query("SELECT * FROM `artikel` INNER JOIN kategori ON artikel.sub_kategori=kategori.sub_kategori WHERE kategori.kategori='web_programming' ORDER BY artikel.id_artikel DESC LIMIT 4")->result_array();
                        foreach($a_data as $data){?>
                            <div class="col-xs-12 col-md-4 kot">
                                        
                                    <span>    
        								
        								<span class="wb_kategori"><?php //echo str_replace('n','&',$data['sub_kategori']);?></span>
        								<a class="wb_judula" href="<?php echo site_url('view/'.$data['slug_judul']);?>" ><p class="wb_judul">
        								    <img class="img-responsive"   id="wb_img" src="admin/uploads/<?php echo $data['gambar'];?>"/>
        								    <?php echo $data['judul'];?></p>
        								    
        								    </a>
        							</span>
        													
										<div  data="<?php echo base64_decode(substr($data['deskripsi'],0,150)).'...';?>" class="wb_deskripsi"><?php echo base64_decode(substr($data['deskripsi'],0,50)).'...';?></div>
										
										<div   class="wb_waktu"><p><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $data['waktu'];?>     <i class="fa fa-user" aria-hidden="true"></i> <?php echo $data['penulis'];?></p></div>
									
        					</div>
                        <?php }
                    ?>
                </div>
				<?php
					$jum_wb	=	$this->db->query("SELECT * FROM `artikel` INNER JOIN kategori ON artikel.sub_kategori=kategori.sub_kategori WHERE kategori.kategori='web_programming'")->num_rows();
					$tot_hal	=	ceil($jum_wb/4);
				?>
                </div>
				
				  <button type="button" onClick="paging_p('.wbprev','.wbnext','web_programming','<?php echo $tot_hal;?>','.ar_wb')" class="btn btn-default btn-md wbprev"><</button>
				  <button type="button" onClick="paging_n('.wbnext','.wbprev','web_programming','<?php echo $tot_hal;?>','.ar_wb')" class="btn btn-default btn-md wbnext">></button>
				 
				
            </div>
			<div class="col-md-4 col-xs-12 col-sm-4 lar_prog">
				<h4 class="j_prog">
                    <span>Programming</span>
				</h4>
				<div class="ar_prog">
					<div class="row">
						<?php
							
							$p_data=$this->db->query("SELECT * FROM `artikel` INNER JOIN kategori ON artikel.sub_kategori=kategori.sub_kategori WHERE kategori.kategori='programming' ORDER BY artikel.id_artikel DESC LIMIT 4")->result_array();
							foreach($p_data as $prog){?>
								<div class="col-xs-12 col-md-12 kot">
											
										<div>    
											
											<span class="wb_kategori"><?php //echo str_replace('n','&',$data['sub_kategori']);?></span>
											<a class="wb_judula" href="<?php echo site_url('view/'.$prog['slug_judul']);?>" ><p class="prog_judul">
												<img class="img-responsive"    id="prog_img" src="admin/uploads/<?php echo $prog['gambar'];?>"/>
												<?php echo $prog['judul'];?></p>
												
												</a>
										</div>
										
										<div   class="prog_waktu"><p><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $prog['waktu'];?>     <i class="fa fa-user" aria-hidden="true"></i> <?php echo $prog['penulis'];?></p></div>
									
								</div>
							<?php }
						?>
					</div>
				</div>
				<?php
						$jum_p	=	$this->db->query("SELECT * FROM `artikel` INNER JOIN kategori ON artikel.sub_kategori=kategori.sub_kategori WHERE kategori.kategori='programming'")->num_rows();
						$tot_halp	=	ceil($jum_p/4);
						
				?>
				<button type="button" onClick="paging_p('.pprev','.pnext','programming','<?php echo $tot_halp;?>','.ar_prog')"  class="btn btn-default btn-md pprev"><</button>
				<button type="button" onClick="paging_n('.pnext','.pprev','programming','<?php echo $tot_halp;?>','.ar_prog')" class="btn btn-default btn-md pnext" >></button>
			</div>
        </div>
    </div>
</section>    
<section id="kategori">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-xs-12 ">
			    
			    <div class="panel panel-default head_a">
                  <div class="panel-heading "><h4><b>WEB PROGRAMMING</b></h4></div>
                  <div class="panel-body">
                    	<?php foreach ($wb_kat->result() as $kat){
        					 echo '<a class="judulkat" href="'.site_url('kategori/'.str_replace(' ','-',$kat->sub_kategori)).'">'.strtoupper (str_replace('n','&',$kat->sub_kategori)).' <span class="badge">'.$kat->jumlah.'</span></a><hr><br>';
        				 }?>
                  </div>
                </div>
				
			
			</div>
			<div class="col-md-3 col-xs-12 ">
			    <div class="panel panel-default head_b">
                  <div class="panel-heading"><h4><b>PROGRAMMING</b></h4></div>
                  <div class="panel-body">
                     
                          
                         
                        
                    	<?php foreach ($programming->result() as $kat){
        					 echo '<a class="judulkat " href="'.site_url('kategori/'.$kat->sub_kategori).'">'.strtoupper ($kat->sub_kategori).' <span class="badge">'.$kat->jumlah.' </span></a><hr><br>';
        				 }?>
        			
                  </div>
                </div>
			</div>
			<div class="col-md-3 col-xs-12 ">
			    <div class="panel panel-default head_c">
                  <div class="panel-heading "><h4><b>TUTORIAL</b></h4></div>
                  <div class="panel-body">
                    	<?php foreach ($tutorial->result() as $kat){
        					 echo '<a class="judulkat" href="'.site_url('kategori/'.$kat->sub_kategori).'">'.strtoupper ($kat->sub_kategori).' <span class="badge">'.$kat->jumlah.'</span></a><hr><br>';
        				 }?>
                  </div>
                </div>
			</div>
			<div class="col-md-3 col-xs-12 ">
			    <div class="panel panel-default head_d">
                  <div class="panel-heading "><h4><b>LAIN-LAIN</b></h4></div>
                  <div class="panel-body">
                    	<?php foreach ($pembelajaran->result() as $kat){
        					 echo '<a class="judulkat" href="'.site_url('kategori/'.$kat->sub_kategori).'">'.strtoupper ($kat->sub_kategori).' <span class="badge">'.$kat->jumlah.'</span></a><hr><br>';
        				 }?>
                  </div>
                </div>
			</div>
			
		</div>
	
	</div>




</section>
<section id="part">
	<div class="container">
		<div class="row">
			<div class=" col-md-8 col-xs-12 info">
				<h2>Selamat datang di KitaEngineering</h4>
				<p class="alert alert-success">KitaEngineering merupakan sebuah website yg berisi informasi,pembelajaran,tutorial dan lain-lain
				    yg bertujuan sebagai media baik itu untuk pelajar,mahasiswa bahkan kalangan umum.Untuk info lebih lanjut silahkan klik about website dibawah ini,Enjoy
				    </p>
			</div>
			<div class="col-xs-12 col-md-4 alamat">
				<h4>Peta perusahaan kami</h4>
				<?php include_once 'peta.php';?>
			</div>
		</div>
	</div>
</section>
 <script>
$("#form_cari").submit(function(e){
	e.preventDefault();
	 $("#myModal").modal("show");
	$.post("<?php echo site_url()?>home/cari/",$(this).serialize(),function(hasil){
		$(".h_cari").html(hasil);
		 $("#myModal").modal("show").modal("hide");
	});
	
})
</script>
<script>
    
   function ar_pertama(){
   var img=$("#wb_img:first").attr("src");
   var waktu=$(".wb_waktu:first").html();
    var link=$(".wb_judula:first").attr("href");
    var judul=$(".wb_judul:first").text();
    var des =$(".wb_deskripsi:first").attr("data");
    var ar_first="<div class='col-md-12 first_ar'><a class='first_wbjudul' href='"+link+"'><p class='first_wbjudul'>"+judul+"</p><img class='img-responsive' id='first_wbimg' src='"+img+"'></a><div class='first_wbdes'>"+des+"</div><div class='wb_waktu'>"+waktu+"</div></div>";
    $(".ar_wb .row").prepend(ar_first);
    $(".kot:first").remove();
   }
   ar_pertama();
</script>
<script>
	$(".wbprev").hide();
	var tot_h	=	"<?php echo $tot_hal?>";	
	var tot_p	=	"<?php echo $tot_halp?>";	
	var id		=	0;
	
	
	if(tot_h==1){
		$(".wbprev").hide();
		$(".wbnext").hide();
	}
	if(tot_p==1){
		$(".pprev").hide();
		$(".pnext").hide();
	}
	function paging_n(clas,s_clas,kat,tot,letak){
		
			var di;
				di = ++id;
				
			
			$.get("<?php echo site_url('paging/');?>"+kat+"/"+di,function(hasil){
						$(letak).html("").hide().html(hasil).show("slow");
					if(kat=='web_programming'){
						ar_pertama();
					}
					if(di==tot-1){
    					$(clas).hide();
    					$(s_clas).show();
    				}
    				$(s_clas).show();
			});	
			
				
			
		
		
	}
	function paging_p(clas,s_clas,kat,tot,letak){
				var di;
				di = --id;
				
				$.get("<?php echo site_url('paging/');?>"+kat+"/"+di,function(hasil){
					$(letak).html("").hide().html(hasil).show("slow");
					if(kat=='web_programming'){
						ar_pertama();
					}
					if(di==0){
    					$(clas).hide();
    					$(s_clas).show();
    				}
			});	
			
	}
</script>

