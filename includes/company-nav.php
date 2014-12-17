<?php
if(stristr($_SERVER['REQUEST_URI'], 'network.php')){ $page = "network"; }
if(stristr($_SERVER['REQUEST_URI'], 'partners.php')){ $page = "partners"; }
?>
<!-- <h2 class="company-nav">About Us</h2>

<ul class="left-nav">
<li><a href="network.php" <?php  if($page=="network"){ echo ' class="active"'; }  ?> title="Hosting Network">Network</a></li>
<li><a href="partners.php" <?php  if($page=="partners"){ echo ' class="active"'; }  ?> title="Partners">Partners</a></li>
</ul>
 -->
