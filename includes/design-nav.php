<?php

if(stristr($_SERVER['REQUEST_URI'], '/design/index.php')){ $page = "design"; }
if(stristr($_SERVER['REQUEST_URI'], '/design')){ $page = "design"; }
if(stristr($_SERVER['REQUEST_URI'], '/byfoot.php')){ $page = "design"; }
if(stristr($_SERVER['REQUEST_URI'], '/acdining.php')){ $page = "design"; }
if(stristr($_SERVER['REQUEST_URI'], '/acreservations.php')){ $page = "design"; }
if(stristr($_SERVER['REQUEST_URI'], '/acresorts.php')){ $page = "design"; }
if(stristr($_SERVER['REQUEST_URI'], '/acresorts.php')){ $page = "design"; }
if(stristr($_SERVER['REQUEST_URI'], '/iloveoc.php')){ $page = "design"; }
if(stristr($_SERVER['REQUEST_URI'], '/ilovemargate.php')){ $page = "design"; }

if(stristr($_SERVER['REQUEST_URI'], '/nubian.php')){ $page = "design"; }
if(stristr($_SERVER['REQUEST_URI'], '/church.php')){ $page = "design"; }
if(stristr($_SERVER['REQUEST_URI'], '/crn.php')){ $page = "design"; }
if(stristr($_SERVER['REQUEST_URI'], '/casino.php')){ $page = "design"; }
if(stristr($_SERVER['REQUEST_URI'], '/period.php')){ $page = "design"; }
if(stristr($_SERVER['REQUEST_URI'], '/period-demo.php')){ $page = "design"; }

if(stristr($_SERVER['REQUEST_URI'], '/achlc.php')){ $page = "design"; }
if(stristr($_SERVER['REQUEST_URI'], '/cic.php')){ $page = "design"; }
if(stristr($_SERVER['REQUEST_URI'], '/cranberry.php')){ $page = "design"; }
if(stristr($_SERVER['REQUEST_URI'], '/holly.php')){ $page = "design"; }
if(stristr($_SERVER['REQUEST_URI'], '/winery.php')){ $page = "design"; }
if(stristr($_SERVER['REQUEST_URI'], '/signs.php')){ $page = "design"; }

if(stristr($_SERVER['REQUEST_URI'], '/press.php')){ $page = "design"; }
if(stristr($_SERVER['REQUEST_URI'], '/ssesco.php')){ $page = "design"; }
if(stristr($_SERVER['REQUEST_URI'], '/handkerchiefs.php')){ $page = "design"; }
if(stristr($_SERVER['REQUEST_URI'], '/circled.php')){ $page = "design"; }
if(stristr($_SERVER['REQUEST_URI'], '/ppsc.php')){ $page = "design"; }
if(stristr($_SERVER['REQUEST_URI'], '/idtags.php')){ $page = "design"; }

if(stristr($_SERVER['REQUEST_URI'], '/search-engines.php')){ $page = "seo"; }
if(stristr($_SERVER['REQUEST_URI'], '/content-management.php')){ $page = "cms"; }
if(stristr($_SERVER['REQUEST_URI'], '/electronic-publishing.php')){ $page = "publishing"; }
if(stristr($_SERVER['REQUEST_URI'], '/e-commerce.php')){ $page = "commerce"; }
if(stristr($_SERVER['REQUEST_URI'], '/web-applications.php')){ $page = "applications"; }
?>
<h2 class="articles-nav">Web Design</h2>
<ul class="left-nav">
<li><a href="/design/" title="Web Design Portfolio" <?php  if($page=="design"){ echo ' class="active"'; }  ?> >Web Design Portfolio</a></li>
<!-- <li><a href="/design/content-management.php" title="Content Management Systems" <?php  if($page=="cms"){ echo ' class="active"'; }  ?> >Content Management</a></li> -->
<li><a href="/hosting/e-commerce-web-hosting.php" title="E-Commerce" <?php  if($page=="commerce"){ echo ' class="active"'; }  ?> >E-Commerce</a></li>
<li><a href="/design/electronic-publishing.php" title="Electronic Publishing" <?php  if($page=="publishing"){ echo ' class="active"'; }  ?> >Electronic Publishing</a></li>
<li><a href="/design/search-engines.php" title="Search Engine Optimization" <?php  if($page=="seo"){ echo ' class="active"'; }  ?> >Search Engines</a></li>
</ul>

