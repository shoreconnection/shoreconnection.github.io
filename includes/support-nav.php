<?php
if(stristr($_SERVER['REQUEST_URI'], 'faq.php')){ $page = "faq"; }
if(stristr($_SERVER['REQUEST_URI'], 'control-panel.php')){ $page = "control-panel"; }
if(stristr($_SERVER['REQUEST_URI'], 'email.php')){ $page = "email"; }
if(stristr($_SERVER['REQUEST_URI'], 'front-page.php')){ $page = "front-page"; }
if(stristr($_SERVER['REQUEST_URI'], 'dreamweaver.php')){ $page = "dreamweaver"; }
if(stristr($_SERVER['REQUEST_URI'], 'miva.php')){ $page = "miva"; }
if(stristr($_SERVER['REQUEST_URI'], 'dns.php"')){ $page = "dns"; }
?>
<h2 class="support-nav">Support</h2>
<ul class="left-nav">
<!--  <li><a href="faq.php" <?php  if($page=="faq"){ echo ' class="active"'; }  ?> title="FAQ's">FAQ's</a></li> -->
<li><a href="control-panel.php" <?php  if($page=="control-panel"){ echo ' class="active"'; }  ?> title="Control Panel">Control Panel</a></li>
<li><a href="email.php" <?php  if($page=="email"){ echo ' class="active"'; }  ?> title="Email Setup">Email</a></li>
<li><a href="front-page.php" <?php  if($page=="front-page"){ echo ' class="active"'; }  ?> title="FrontPage">FrontPage</a></li>
<li><a href="dreamweaver.php" <?php  if($page=="dreamweaver"){ echo ' class="active"'; }  ?> title="Dreamweaver">Dreamweaver</a></li>
<li><a href="miva.php" <?php  if($page=="miva"){ echo ' class="active"'; }  ?> title="Miva Merchant">Miva Merchant</a></li>
<li><a href="dns.php" <?php  if($page=="dns"){ echo ' class="active"'; }  ?> title="DNS Management">DNS Management</a></li>
</ul>

