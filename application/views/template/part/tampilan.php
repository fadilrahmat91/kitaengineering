<?php 
	include 'komen_fb.php';
	$id=$this->uri->segment(2);
	
	
?>

<div class="fb-comments" data-href="<?php echo site_url('view/'.$id);?>" data-mobile="true" data-numposts="5">

</div>