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
          <h3 class="box-title">Edit data artikel</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>            
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="t4_form_tambah">
		
		<form id="form_edit_kategori" action="<?php echo site_url('kategori/aksi_edit');?>"  enctype="multipart/form-data" >		
          <div class="row">
		  <div class="col-md-3"></div>
            <div class="col-md-6">
			  <div class="form-group">
                <label>id kategori:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input  type="hidden" class="form-control" name="id_kategori" id="id_kategori" value="<?php echo $t_by_id->id_kategori;?>" required>
                </div>
				<label>sub_kategori:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input  class="form-control" name="sub_kategori" id="sub_kategori" value="<?php echo $t_by_id->sub_kategori;?>" required>
                </div>
				<label>kategori:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <select   class="form-control" name="kategori"    required >
                      <option value="web_programming" >Web_programming</option>
                      <option value="pembelajaran" >Lain-lain</option>
                      <option value="tutorial" >Tutorial</option>
                      <option value="programming" >programming</option>
                  </select>
                </div>
                <!-- /.input group -->
				<label>Gambar:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input  class='form-control' type='file' name='userfile'   required />
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
$("#form_edit_kategori").submit(function(evt){
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
			   eksekusi_controller('kategori');
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
