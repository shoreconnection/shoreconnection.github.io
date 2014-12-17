<!--  Outer Wrapper  -->
<div id="wrapper">

<!--  Header  -->
<div id="header">
<p><a href="http://www.shoreconnection.com" title="South Jersey Web Design - Shore Connection"><img src="/graphics/logo.gif" width="290" height="75" alt="South Jersey Web Design - Shore Connection" /></a></p>
<ul>
<li><strong>Got Questions? Call Today: 609-365-1411</strong></li>
</ul>

<!--   rel="external"  -->

<br class="clear" />
</div>

<!--  Navigation  -->
<?php
/*  ----------------------------------------------------------  CHECK DIRECTORY
*/
//  Snifs out the directory:
$directories = explode("/", $_SERVER['PHP_SELF']);
$directory = $directories[1];
// If the directory isn't found or contains a dot (as in .html) it will be set to the default:
if(!$directory OR strstr($directory, '.')){ $directory = "home"; }
/*  ----------------------------------------------------------  END CHECK DIRECTORY
*/

// Just a shortcut so you can re-use the following text in your links.
$active = ' class="active"';
?>

<div id="nav-<?=$directory; ?>">

<ul id="nav">
<li class="hosting"><a href="/hosting/" <?php  if($directory=="hosting"){ echo  $active; }  ?> title="South Jersey Web Hosting Solutions">Hosting</a></li>
<li class="design"><a href="/design/" <?php  if($directory=="design"){ echo  $active; }  ?> title="South Jersey Web Design">Design</a></li>
<li class="resources"><a href="/resources/" <?php  if($directory=="resources"){ echo  $active; }  ?> title="Industry Articles">Resources</a></li>
<li class="company"><a href="/company/" <?php  if($directory=="company"){ echo  $active; }  ?> title="About Shore Connection">Company</a></li>
<li class="support"><a href="/support/" <?php  if($directory=="support"){ echo  $active; }  ?> title="Tutorials &amp; Help">Support</a></li>
<li class="contact"><a href="/contact/" <?php  if($directory=="contact"){ echo  $active; }  ?> title="Contact Shore Connection">Contact</a></li>
</ul>
<br class="clear" />
</div>

