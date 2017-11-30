<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Artikel
        <small>Edit</small>
      </h1>     
    </section>

    <!-- Main content -->
    <section class="content">
      
	  
	   <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Edit data admin</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>            
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="t4_form_tambah">
		
		<form id="form_edit_admin" action="<?php echo site_url('admin/aksi_edit');?>"  enctype="multipart/form-data" >		
          <div class="row">
		  <div class="col-md-12">
            <div class="col-md-6">
			  <div class="form-group">
               
				
                  <input  class="form-control" type="hidden" name="id_admin" id="id_admin" value="<?php echo $t_by_id->id_admin;?>" required/>
               
				<label>nama:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input  class="form-control" name="nama" id="nama" value="<?php echo $t_by_id->nama;?>" required/>
                </div>
				<label>alamat:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input   class="form-control" name="alamat" value="<?php echo $t_by_id->alamat;?>"   required />
                </div>
                <!-- /.input group -->
				<label>email:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input  class='form-control' type='email' name='email' value='<?php echo $t_by_id->email;?>'   required />
                </div>
				
			   </div>
			</div>
			<div class="col-md-6">
			  <div class="form-group">
				<label>pekerjaan:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input  class="form-control" name="pekerjaan" id="pekerjaan" value="<?php echo $t_by_id->pekerjaan;?>" required />
                </div>
				<label>no hp:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input type="number"   class="form-control" name="no_hp"  value="<?php echo $t_by_id->no_hp;?>"  required />
                </div>
                <!-- /.input group -->
				<label>Gambar:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input  class='form-control' type='file' name='userfile'   required />
                </div>
				
                <!-- /.input group -->
				
					</div>
				</div>
			</div>
				<div class="col-md-12">
					
					<div class="col-md-6">
						<input type="submit" class="btn btn-danger btn-block" value="Ubah data">
					</div>
					
					<div class="col-md-6">
						<input type="button" onclick="batal_produk()" class="btn btn-primary btn-block" value="Batal">
					</div>
				</div>
                <!-- /.input group -->
			</div>
		</form>
		
       
	  
	  
	  
	</section>
	
	
<script>
$("#form_edit_admin").submit(function(evt){
    evt.preventDefault();
	loading_cool('.box-body');
	if(confirm("Anda yakin edit data artikel?"))
	{

		var url = $(this).attr('action');
		var formData = new FormData($(this)[0]);
		$.ajax({
			url: url,
			type: 'POST',
			data: formData,
			processData: false,
			contentType: false,
			success: function (res) {
				loading_cool('.box-body');
			   eksekusi_controller('admin');
			},
			error: function (error) {
				console.log(error);
			}
		}); // End: $.ajax()  
	}
	loading_cool('.box-body');
	return false;

}); //


function batal_produk(){
	loading_cool('.box-body');
		eksekusi_controller('kategori');
	loading_cool('.box-body');
}

    

</script>
