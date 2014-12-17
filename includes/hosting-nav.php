<?php
if(stristr($_SERVER['REQUEST_URI'], '/hosting')){ $page = "hosting"; }
if(stristr($_SERVER['REQUEST_URI'], '/hosting/index.php')){ $page = "hosting"; }
if(stristr($_SERVER['REQUEST_URI'], '/personal-web-hosting.php')){ $page = "p-hosting"; }
if(stristr($_SERVER['REQUEST_URI'], '/small-business-web-hosting.php')){ $page = "sb-hosting"; }
if(stristr($_SERVER['REQUEST_URI'], '/e-commerce-web-hosting.php')){ $page = "ec-hosting"; }
if(stristr($_SERVER['REQUEST_URI'], '/hsphere.php')){ $page = "hsphere"; }
if(stristr($_SERVER['REQUEST_URI'], '/miva.php')){ $page = "miva"; }

if(stristr($_SERVER['REQUEST_URI'], '/personal-hosting.php')){ $page = "p-hosting"; }
if(stristr($_SERVER['REQUEST_URI'], '/small-business-hosting.php')){ $page = "sb-hosting"; }
if(stristr($_SERVER['REQUEST_URI'], '/ecommerce-hosting.php')){ $page = "ec-hosting"; }

?>
<h2 class="solutions-nav">Hosting Solutions</h2>
<ul class="left-nav"><li><a href="/hosting" title="Web Hosting" <?php  if($page=="hosting"){ echo ' class="active"'; }  ?> >Hosting Overview</a></li><li><a 
href="/hosting/personal-web-hosting.php" title="Personal Website Hosting" <?php  if($page=="p-hosting"){ echo ' class="active"'; }  ?> >Personal Hosting</a></li><li><a 
href="/hosting/small-business-web-hosting.php" title="Small Business Website Hosting" <?php  if($page=="sb-hosting"){ echo ' class="active"'; }  ?> >Small Business Hosting</a></li><li><a 
href="/hosting/e-commerce-web-hosting.php" title="E-Commerce Website Hosting" <?php  if($page=="ec-hosting"){ echo ' class="active"'; }  ?> >E-Commerce Hosting</a></li><li><a 
href="/hosting/hsphere.php" title="H-Shpere Control Panel" <?php  if($page=="hsphere"){ echo ' class="active"'; }  ?> >H-Shpere Control Panel</a></li></ul>

