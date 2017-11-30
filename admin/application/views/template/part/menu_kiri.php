
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>uploads/<?php echo $contoh->gambar;?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
	  
	  
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
       
	   
		
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Admin</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#admin_data" onclick="eksekusi_controller('admin')"><i class="fa fa-circle-o"></i> Data</a></li>           
            <li><a href="#admin_tambah" onclick="eksekusi_controller('admin/tambah_admin')"><i class="fa fa-circle-o"></i> Tambah</a></li>           
            
             
			         
                     
			
			<!--
			<li><a href="#log_admin" onclick="eksekusi_controller('log_admin')"><i class="fa fa-circle-o"></i> Log Admin</a></li>           
			<li><a class="fancyboxnya fancybox.iframe" href="http://localhost:8080/admin_inm/log_admin/index/">Iframe</a></li>
			-->
			
          </ul>
        </li> 
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Artikel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#artikel_data" onclick="eksekusi_controller('artikel')"><i class="fa fa-circle-o"></i> Data</a></li>           
            <li><a href="#artikel_tambah" onclick="eksekusi_controller('artikel/tambah_data')"><i class="fa fa-circle-o"></i> Tambah</a></li>           
            
                     
                     
			
			<!--
			<li><a href="#log_admin" onclick="eksekusi_controller('log_admin')"><i class="fa fa-circle-o"></i> Log Admin</a></li>           
			<li><a class="fancyboxnya fancybox.iframe" href="http://localhost:8080/admin_inm/log_admin/index/">Iframe</a></li>
			-->
			
          </ul>
		  <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Kategori</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#kategori_data" onclick="eksekusi_controller('kategori')"><i class="fa fa-circle-o"></i> Data</a></li>           
            <li><a href="#kategori_tambah" onclick="eksekusi_controller('kategori/tambah_data')"><i class="fa fa-circle-o"></i> Tambah</a></li>           
            
                     
                     
			
			<!--
			<li><a href="#log_admin" onclick="eksekusi_controller('log_admin')"><i class="fa fa-circle-o"></i> Log Admin</a></li>           
			<li><a class="fancyboxnya fancybox.iframe" href="http://localhost:8080/admin_inm/log_admin/index/">Iframe</a></li>
			-->
			
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Subscribe</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#subscribe_data" onclick="eksekusi_controller('subscribe')"><i class="fa fa-circle-o"></i> Data</a></li>           
         
			
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Upload file</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#subscribe_data" onclick="eksekusi_controller('artikel/form_upload')"><i class="fa fa-circle-o"></i> Upload file</a></li>   
          </ul>
        </li>
		
      </ul>
    </section>
   
  </aside>