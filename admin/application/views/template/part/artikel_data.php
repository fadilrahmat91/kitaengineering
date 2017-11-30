<!-- Content Header (Page header) -->
<style>
	#example2{overflow:scroll;
	overflow:auto;}
</style>
    <section class="content-header">
      <h1>
        Artikel
        <small>Data</small>
      </h1>     
    </section>

    <!-- Main content -->
    <section class="content">
      
	  
	   <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Table data Artikel</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>            
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="t4_tbl_admin">
			 <table id="tabelku" class="table table-bordered table-hover">
                <thead>
                <tr>
                 
                  <th>id artikel</th>
                  <th>judul</th>
                 
				  <th>gambar</th>
				  <th>waktu</th>
				  <th>slug_judul</th>
				  <th> sub kategori</th>
				  <th>kategori</th>
				  <th>penulis</th>
                  <th width="120px;">action</th>
                </tr>
                </thead>
                <tbody>
					
					<?php
					foreach($artikel_data->result() as $data)
					{
						
						
												
						$btn_edit 	= '<button style="width:50%" class="btn-xs btn-primary " onclick="edit_artikel('.$data->id_artikel.')"> <span class="fa fa-edit"></span> Edit</button>';
						$btn_delete	= '<button style="width:50%" class="btn-xs btn-warning " onclick="delete_artikel('.$data->id_artikel.')"> <span class="fa fa-remove "></span> Del</button>';
						
						echo '
								<tr>
								  <td>'.$data->id_artikel.'</td>
								  <td>'.$data->judul.'</td>
								  
								  <td>'.$data->gambar.'</td>
								  <td>'.$data->waktu.'</td>
								  <td>'.$data->slug_judul.'</td>
								  <td>'.$data->sub_kategori.'</td>
								  <td>'.$data->kategori.'</td>
								  <td>'.$data->penulis.'</td>
								  
								  <td>'. $btn_edit .$btn_delete.'</td>
								 
								</tr>
						
						';
					}
					?>
				<tbody>
			</table>
		</div>
	</div>
	</section>
	
	
<script>
$('#tabelku').DataTable({
		"iDisplayLength": 50,
		'scrollX':true
	});
function edit_artikel(id_artikel)
{
	loading_cool('#t4_tbl_admin');
	$.get("<?php echo base_url()?>artikel/artikel_edit/"+id_artikel,function(e){
		$(".content-wrapper").html(e);
		loading_cool_hide('#t4_tbl_admin');
	});
	
	
}


function delete_artikel(id_artikel)
{
	if(confirm("Anda yakin?"))
	{
		if(confirm("Anda benar-benar yakin?"))
		{
			loading_cool('#t4_tbl_admin');
			$.get("<?php echo base_url()?>artikel/hapus_artikel/"+id_artikel,function(e){
				eksekusi_controller('artikel');
				loading_cool_hide('#t4_tbl_admin');
			});
			
			
		}
	}
}


</script>