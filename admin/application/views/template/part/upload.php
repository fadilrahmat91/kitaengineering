<!-- Content Header (Page header) -->
<script type="text/javascript" src="<?php echo base_url()?>assets/plugins/ckeditor/ckeditor.js"></script>
    <section class="content-header">
      <h1>
        upload
        <small>Tambah</small>
      </h1>     
    </section>

    <!-- Main content -->
    <section class="content">
      
	  
	   <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Upload file</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>            
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="t4_form_tambah">
		
		<form id="form_tambah_kategori" action="<?php echo site_url('artikel/upload_gam');?>"  enctype="multipart/form-data" >		
          <div class="row">
		  <div class="col-md-3"></div>
            <div class="col-md-6">
			  <div class="form-group">
               
				
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
		eksekusi_controller('artikel/form_upload');
	loading_cool('.box-body');
}
$("#form_tambah_kategori").submit(function(evt){
    evt.preventDefault();
	loading_cool('.box-body');
	if(confirm("Anda yakin upload gambar?"))
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
           eksekusi_controller('artikel/form_upload');
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
