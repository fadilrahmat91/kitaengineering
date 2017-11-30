<!-- Content Header (Page header) -->
<script type="text/javascript" src="<?php echo base_url()?>assets/plugins/ckeditor/ckeditor.js"></script>
    <section class="content-header">
      <h1>
        Kategori
        <small>Tambah</small>
      </h1>     
    </section>

    <!-- Main content -->
    <section class="content">
      
	  
	   <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah data kategori</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>            
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="t4_form_tambah">
		
		<form id="form_tambah_admin" action="<?php echo site_url('admin/add_data');?>"  enctype="multipart/form-data" >		
          <div class="row">
		  <div class="col-md-12">
            <div class="col-md-6">
			  <div class="form-group">
               
				<label>nama:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input  class="form-control" name="nama" id="nama" required/>
                </div>
				<label>alamat:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input   class="form-control" name="alamat"    required />
                </div>
                <!-- /.input group -->
				<label>email:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input  class='form-control' type='email' name='email'   required />
                </div>
				<label>pekerjaan:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input  class="form-control" name="pekerjaan" id="pekerjaan" required />
                </div>
			   </div>
			</div>
			<div class="col-md-6">
			  <div class="form-group">
				<label>no hp:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input type="number"   class="form-control" name="no_hp"    required />
                </div>
                <!-- /.input group -->
				<label>Gambar:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input  class='form-control' type='file' name='userfile'   required />
                </div>
				<label>username:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input   class="form-control" name="username" id="username" required />
                </div>
				<label>password:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input  type="password" class="form-control" name="password"    required />
                </div>
                <!-- /.input group -->
				
					</div>
				</div>
			</div>
				<div class="col-md-12">
					
					<div class="col-md-6">
						<input type="submit" class="btn btn-danger btn-block" value="Tambah data">
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


function batal_produk(){
	loading_cool('.box-body');
		eksekusi_controller('kategori');
	loading_cool('.box-body');
}
$("#form_tambah_admin").submit(function(evt){
    evt.preventDefault();
	loading_cool('.box-body');
	if(confirm("Anda yakin tambah data admin?"))
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
</script>
