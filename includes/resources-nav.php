<?php
if(stristr($_SERVER['REQUEST_URI'], '/web-design-links.php')){ $page = "design"; }
if(stristr($_SERVER['REQUEST_URI'], '/css-layouts-links.php')){ $page = "layouts"; }
if(stristr($_SERVER['REQUEST_URI'], '/css-links.php')){ $page = "css"; }
if(stristr($_SERVER['REQUEST_URI'], '/accessibility-links.php')){ $page = "access"; }
if(stristr($_SERVER['REQUEST_URI'], '/blog-links.php')){ $page = "blogs"; }
if(stristr($_SERVER['REQUEST_URI'], '/photography.php')){ $page = "photography"; }
if(stristr($_SERVER['REQUEST_URI'], '/useful-links.php')){ $page = "useful"; }
?>
<h2 class="resources-nav">Resources</h2>
<ul class="left-nav">
<li><a href="web-design-links.php" <?php  if($page=="design"){ echo ' class="active"'; }  ?> title="Web Design, CSS & Standards">Web Design</a></li>
<li><a href="css-layouts-links.php" title="CSS Layouts Made Easy"<?php  if($page=="layouts"){ echo ' class="active"'; }  ?> >CSS Layouts</a></li>
<li><a href="css-links.php" title="Cascading Style Sheets (CSS)"<?php  if($page=="css"){ echo ' class="active"'; }  ?> >Style Sheets</a></li>
<li><a href="accessibility-links.php" title="Accessibility"<?php  if($page=="access"){ echo ' class="active"'; }  ?> >Accessibility</a></li>
<li><a href="blog-links.php" title="Blogs"<?php  if($page=="blogs"){ echo ' class="active"'; }  ?> >Blogs</a></li>
<li><a href="photography.php" title="Photography"<?php  if($page=="photography"){ echo ' class="active"'; }  ?> >Photography</a></li>
<li><a href="useful-links.php" title="Useful Links"<?php  if($page=="useful"){ echo ' class="active"'; }  ?> >Useful Links</a></li>
</ul>

