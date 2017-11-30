

   <nav class="navbar navbar-fixed-top main-nav">
		  <div class="container-fluid">
			<div class="navbar-header">
				<button style="border:2px solid white; " type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
			  <a class="navbar-brand" href="<?php echo site_url(); ?>">{ / } Kitaenginering</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
				  <li class="active"><a href="<?php echo site_url(); ?>"><b>Home</b></a></li>
				  
			<li class="dropdown">
				<a data-toggle="dropdown"><b>WEB PROGRAMMING</b>
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<?php foreach ($wb_kat->result() as $data){?>
						<li><a href="<?php echo site_url('kategori/'.str_replace(' ','-',$data->sub_kategori));?>"><?php echo strtoupper(str_replace('n','&',$data->sub_kategori));?></a></li>
					<?php }?>
				 
				</ul>
			 </li>
			 <li class="dropdown">
				<a data-toggle="dropdown"><b>PROGRAMMING</b>
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<?php foreach ($programming->result() as $data){?>
						<li><a href="<?php echo site_url('kategori/'.$data->sub_kategori);?>"><?php echo strtoupper($data->sub_kategori);?></a></li>
					<?php }?>
				 
				</ul>
			 </li>
			
			<li class="dropdown">
				<a data-toggle="dropdown"><b>TUTORIAL</b>
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
				  <?php foreach ($tutorial->result() as $data){?>
						<li><a href="<?php echo site_url('kategori/'.$data->sub_kategori);?>"><?php echo strtoupper($data->sub_kategori);?></a></li>
					<?php }?>
				</ul>
			 </li>
			 <li class="dropdown">
				<a data-toggle="dropdown"><b>LAIN-LAIN</b>
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
				  <?php foreach ($pembelajaran->result() as $data){?>
						<li><a href="<?php echo site_url('kategori/'.$data->sub_kategori);?>"><?php echo strtoupper($data->sub_kategori);?></a></li>
				  <?php }?>
				  
				</ul>
			 </li>
				  
				
			</div>
		  </div>
</nav>
	
	

