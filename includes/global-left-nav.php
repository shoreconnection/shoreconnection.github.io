<?php
if(stristr($_SERVER['REQUEST_URI'], '/personal-hosting.php')){ $page = "personal"; }
if(stristr($_SERVER['REQUEST_URI'], '/small-business-hosting.php')){ $page = "business"; }
if(stristr($_SERVER['REQUEST_URI'], '/ecommerce-hosting.php')){ $page = "ecommerce"; }
?>
<div id="web-hosting">
<h4><a href="/hosting/" title="Web Hosting Solutions">Web Hosting</a></h4>
<ul id="web-host">
<li><a href="/hosting/personal-web-hosting.php" title="Personal Web Hosting" <?php  if($page=="personal"){ echo ' class="active"'; }  ?> >Personal Hosting</a></li>
<li><a href="/hosting/small-business-web-hosting.php" title="Small Business Web Hosting" <?php  if($page=="business"){ echo ' class="active"'; }  ?> >Small Business Hosting</a></li>
<li><a href="/hosting/e-commerce-web-hosting.php" title="E-Commerce Web Hosting" <?php  if($page=="ecommerce"){ echo ' class="active"'; }  ?> >E-Commerce Hosting</a></li>
</ul>
</div>

</div>
