<?php header('Content-type: application/xml; charset="ISO-8859-1"',true);  ?>
 
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
     <loc><?php echo base_url();?></loc>
     <priority>1.0</priority>
  </url>

  <?php foreach($data_artikel->result() as $data) { ?>
  <url>
     <loc><?php echo base_url('view/').$data->slug_judul;?></loc>
     <priority>0.5</priority>
    
  </url>
  <?php } ?>
 
</urlset>