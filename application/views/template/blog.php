<!DOCTYPE html>
<html lang="en">
	<head>
		 
		<?php require_once 'part/head.php';?>
	</head>
	<body>

		<?php 
			require_once 'part/menu_atas.php';
			require_once 'part/artikel.php';
			require_once 'part/menu_bawah.php';
			require_once 'chat.php';
		?>
		  
		

	</body>
	<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();   
		});
	</script>
</html>
