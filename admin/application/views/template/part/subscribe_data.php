<!-- Content Header (Page header) -->

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
          <h3 class="box-title">Table Subscribe</h3>

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
                  <th>Subscribe</th>
                  <th width="120px;">action</th>
                </tr>
                </thead>
                <tbody>
					
					<?php
					foreach($subscribe_data->result() as $data)
					{
						
						
												
						
						$btn_delete	= '<button style="width:50%" class="btn-xs btn-warning " onclick="delete_sub('.$data->id_sub.')"> <span class="fa fa-remove "></span> Del</button>';
						
						echo '
								<tr>
								  <td>'.$data->id_sub.'</td>
								  <td>'.$data->subscribe.'</td>
								  <td>'. $btn_delete.'</td>
								 
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



function delete_sub(id_sub)
{
	if(confirm("Anda yakin?"))
	{
		if(confirm("Anda benar-benar yakin?"))
		{
			loading_cool('#t4_tbl_admin');
			$.get("<?php echo base_url()?>subscribe/hapus_sub/"+id_sub,function(e){
				eksekusi_controller('subscribe');
				loading_cool_hide('#t4_tbl_admin');
			});
			
			
		}
	}
}


</script>