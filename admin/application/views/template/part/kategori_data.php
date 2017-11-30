<!-- Content Header (Page header) -->

    <section class="content-header">
      <h1>
        Kategori
        <small>Data</small>
      </h1>     
    </section>

    <!-- Main content -->
    <section class="content">
      
	  
	   <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Table data kategori</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>            
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="t4_tbl_admin">
			 <table id="tabelku" class="table table-bordered table-hover">
                <thead>
                <tr>
                 
                  <th>id kategori</th>
                  <th>sub kategori</th>
                  <th>kategori</th>
				  <th>gambar</th>
				 
                  <th width="120px;">action</th>
                </tr>
                </thead>
                <tbody>
					
					<?php
					foreach($kategori_data->result() as $data)
					{
						
						
												
						$btn_edit 	= '<button style="width:50%" class="btn-xs btn-primary " onclick="edit_kategori('.$data->id_kategori.')"> <span class="fa fa-edit"></span> Edit</button>';
						$btn_delete	= '<button style="width:50%" class="btn-xs btn-warning " onclick="delete_kategori('.$data->id_kategori.')"> <span class="fa fa-remove "></span> Del</button>';
						
						echo '
								<tr>
								  <td>'.$data->id_kategori.'</td>
								  <td>'.$data->sub_kategori.'</td>
								  <td>'.$data->kategori.'</td>
								  <td>'.$data->gambar_kat.'</td>
								  
								  
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
function edit_kategori(id_kategori)
{
	loading_cool('#t4_tbl_admin');
	$.get("<?php echo base_url()?>kategori/kategori_edit/"+id_kategori,function(e){
		$(".content-wrapper").html(e);
		loading_cool_hide('#t4_tbl_admin');
	});
	
	
}


function delete_kategori(id_kat)
{
	if(confirm("Anda yakin?"))
	{
		if(confirm("Anda benar-benar yakin?"))
		{
			loading_cool('#t4_tbl_admin');
			$.get("<?php echo base_url()?>kategori/hapus_kategori/"+id_kat,function(e){
				eksekusi_controller('kategori');
				loading_cool_hide('#t4_tbl_admin');
			});
			
			
		}
	}
}


</script>