<?php
if(stristr($_SERVER['REQUEST_URI'], '/web-hosting.php')){ $page = "hosting"; }
if(stristr($_SERVER['REQUEST_URI'], '/small-business-web-hosting.php')){ $page = "hosting"; }
if(stristr($_SERVER['REQUEST_URI'], '/personal-web-hosting.php')){ $page = "hosting"; }
if(stristr($_SERVER['REQUEST_URI'], '/e-commerce-web-hosting.php')){ $page = "hosting"; }

if(stristr($_SERVER['REQUEST_URI'], '/web-design.php')){ $page = "design"; }
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
<h2 class="solutions-nav">Solutions</h2>
<ul class="left-nav">
<li><a href="/solutions/web-hosting.php" title="Web Hosting" <?php  if($page=="hosting"){ echo ' class="active"'; }  ?> >Website Hosting</a></li>
<li><a href="/solutions/web-design.php" title="Custom Website Design" <?php  if($page=="design"){ echo ' class="active"'; }  ?> >Website Design</a></li>
<li><a href="/solutions/search-engines.php" title="Search Engine Optimization" <?php  if($page=="seo"){ echo ' class="active"'; }  ?> >Search Engines</a></li>
<li><a href="/solutions/content-management.php" title="Content Management Systems" <?php  if($page=="cms"){ echo ' class="active"'; }  ?> >Content Management</a></li>
<li><a href="/solutions/electronic-publishing.php" title="Electronic Publishing" <?php  if($page=="publishing"){ echo ' class="active"'; }  ?> >Electronic Publishing</a></li>
<li><a href="/solutions/e-commerce.php" title="E-Commerce" <?php  if($page=="commerce"){ echo ' class="active"'; }  ?> >E-Commerce</a></li>
<li><a href="/solutions/web-applications.php" title="Web Application Development" <?php  if($page=="applications"){ echo ' class="active"'; }  ?> >Web Applications</a></li>
</ul>

