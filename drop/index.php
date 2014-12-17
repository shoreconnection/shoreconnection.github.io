<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<title>Dropdown Menu</title>

<style type="text/css">
<!--
@import url("styles.css");
-->
</style>

<script type="text/javascript"><!--//--><![CDATA[//><!--

sfHover = function() {
	var sfEls = document.getElementById("nav").getElementsByTagName("LI");
	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);

//--><!]]></script>

<body>

<h2>Dropdown Menu</h2>

<ul id="nav">
  <li><a href="/index.php">Level One A</a></li>
  <li><a href="/index.php" class="daddy">Level One B - With a long title that wraps</a>
    <ul>
    <li><a href="#">Level Two A</a></li>
    <li><a href="#" class="daddy">Level Two B</a>
	  	<ul>
		<li><a href="#">Level Three A</a></li>
		<li><a href="#" class="daddy">Level Three B</a>
			<ul>

			<li><a href="#">Level Four A</a></li>
			<li><a href="#">Level Four B</a></li>
			</ul>
		</li>
		</ul>
	</li>
    </ul>
  </li>
  <li><a href="/index.php" class="daddy">Level One C</a>
    <ul>
    <li><a href="#">Level Two A</a></li>
    <li><a href="#" class="daddy">Level Two B</a>
	  	<ul>
		<li><a href="#">Level Three A</a></li>
		<li><a href="#" class="daddy">Level Three B</a>
			<ul>

			<li><a href="#">Level Four A</a></li>
			<li><a href="#">Level Four B</a></li>
			</ul>
		</li>
		</ul>
	</li>
    </ul>
  </li>
</ul>

</body>
</html>
