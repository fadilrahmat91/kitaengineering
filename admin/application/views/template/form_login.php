
<head>
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>"  rel="stylesheet">
	<style>
		.form{position:relative;
					top:25%;
					left:40%;
					right:50%;
					border:1px solid lightgray;
					padding:10px;
					width:300px;
					background:white;
					}
		body{background:#f2f2f2;}
	</style>
</head>
	
<body>
	
	
	<div class="col-md-4 form">
		<div class=" alert alert-success"></i><h1 class="text-center"> Silahkan Login</h1></div>
		<form action="<?php echo site_url('login/cek_login');?>" method="POST">
			<div class="form-group">
				 <label> Username</label>
				 <input placeholder="Masukkan username" type="text" class="form-control" name="username"  required /> 
				 <label>Password</label>
				 <input placeholder="Masukkan password" type="password" class="form-control" name="password"   required /> <br>
				<button type="submit"  class="btn btn-primary">  Masuk</button>
			</div>
		</form>
	</div>
</body>
