<!-- Content Header (Page header) -->

    <section class="content-header">
      <h1>
        Admin
        <small>Data</small>
      </h1>     
    </section>

    <!-- Main content -->
    <section class="content">
      
	  
	   <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Table data Admin</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>            
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="t4_tbl_admin">
			 <table id="tabelku" class="table table-bordered table-hover">
                <thead>
                <tr>
                 
                  <th>id admin</th>
                  <th>nama</th>
                  <th>alamat</th>
                  <th>email</th>
                 
                  <th>pekerjaan</th>
				  <th>no hp</th>
				  <th>gambar</th>
				 
                  <th width="120px;">action</th>
                </tr>
                </thead>
                <tbody>
					
					<?php
					foreach($admin_data->result() as $data)
					{
						
						
												
						$btn_edit 	= '<button style="width:50%" class="btn-xs btn-primary " onclick="edit_admin('.$data->id_admin.')"> <span class="fa fa-edit"></span> Edit</button>';
						$btn_delete	= '<button style="width:50%" class="btn-xs btn-warning " onclick="delete_admin('.$data->id_admin.')"> <span class="fa fa-remove "></span> Del</button>';
						
						echo '
								<tr>
								  <td>'.$data->id_admin.'</td>
								  <td>'.$data->nama.'</td>
								  <td>'.$data->alamat.'</td>
								  <td>'.$data->email.'</td>
								 
								  <td>'.$data->pekerjaan.'</td>
								  <td>'.$data->no_hp.'</td>
								  <td>'.$data->gambar.'</td>
								  
								  
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
function edit_admin(id_admin)
{
	loading_cool('#t4_tbl_admin');
	$.get("<?php echo base_url()?>admin/admin_edit/"+id_admin,function(e){
		$(".content-wrapper").html(e);
		loading_cool_hide('#t4_tbl_admin');
	});
	
	
}


function delete_admin(id_admin)
{
	if(confirm("Anda yakin?"))
	{
		if(confirm("Anda benar-benar yakin?"))
		{
			loading_cool('#t4_tbl_admin');
			$.get("<?php echo base_url()?>admin/hapus_admin/"+id_admin,function(e){
				eksekusi_controller('admin');
				loading_cool_hide('#t4_tbl_admin');
			});
			
			
		}
	}
}


</script>