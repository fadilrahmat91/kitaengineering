
<head>
  <title>Kitaenginering</title>
  <meta charset="utf-8">
   <meta property="fb:app_id" content="1277932915607627" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/styles/shCoreDefault.css');?>"/>
  <link rel="icon"type="image"href="https://kitaengineering.com/admin/uploads/title.png">
  <link 	rel="stylesheet" 	href="<?php echo base_url('assets/css/blog.css')?>">
   
  
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/scripts/shCore.js');?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/scripts/shBrushPhp.js');?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/scripts/shBrushAppleScript.js');?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/scripts/shAutoloader.js');?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/scripts/shBrushJScript.js');?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/scripts/shBrushSql.js');?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/scripts/shBrushXml.js');?>"></script>
   
   <script type="text/javascript">SyntaxHighlighter.all();</script>	 
   <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=591ea3a78280450015545258&product=inline-share-buttons"></script>
	
	
	<?php 	/**$url=$this->uri->segment(1);
			$url1=$this->uri->segment(2);
			if ($url =='view' and $url1=='' ){
			    header("location: https://kitaengineering.com");
			}elseif($url =='kategori' and $url1==''){
			     header("location: https://kitaengineering.com");
			}
			if($url==''){
				echo "<title>KitaEngineering - Website Pembelajaran,Programming dan Tutorial </title>";
			}elseif($url=='view'){
				//echo "<title>KitaEngineering - " .str_replace("-"," ",$url1)."</title>";
				$data=$this->db->query("SELECT * FROM artikel WHERE slug_judul='$url1'")->row();
				echo "<title>KitaEngineering - " .$data->judul."</title>";
			}else{
			    $url2=str_replace('-',' ',$this->uri->segment(2));
			    echo "<title> KitaEngineering - ".str_replace('n','&',$url2)." </title>";
			}**/
	?>
	
	
	
     
     
	 
	

  
</head>