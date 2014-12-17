<?php
if(stristr($_SERVER['REQUEST_URI'], '/solutions/')){ $page = "solutions"; }
if(stristr($_SERVER['REQUEST_URI'], '/resources/')){ $page = "resources"; }
if(stristr($_SERVER['REQUEST_URI'], '/articles/')){ $page = "articles"; }
if(stristr($_SERVER['REQUEST_URI'], '/company/')){ $page = "company"; }
if(stristr($_SERVER['REQUEST_URI'], '/support/')){ $page = "support"; }
if(stristr($_SERVER['REQUEST_URI'], '/contact/')){ $page = "contact"; }
?>
<!-- <h2 class="home-nav">Navigate</h2> -->
<ul class="left-nav">
<li><a href="/hosting/" <?php  if($page=="solutions"){ echo ' class="active"'; }  ?> title="Website Hosting Solutions">Web Hosting</a></li>
<li><a href="/design/" <?php  if($page=="articles"){ echo ' class="active"'; }  ?> title="Website Design">Web Design</a></li>
<li><a href="/resources/" <?php  if($page=="resources"){ echo ' class="active"'; }  ?> title="Internet Resources">Web Resources</a></li>
<li><a href="/company/" <?php  if($page=="company"){ echo ' class="active"'; }  ?> title="About Shore Connection">Company Info</a></li>
<li><a href="/support/" <?php  if($page=="support"){ echo ' class="active"'; }  ?> title="Help &amp; Support">Help &amp; Support</a></li>
<li><a href="/contact/" <?php  if($page=="contact"){ echo ' class="active"'; }  ?> title="Contact Shore Connection">Contact Us</a></li>
</ul>

