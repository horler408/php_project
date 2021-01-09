<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Main Page</title>
<style type="text/css">
#container {
	background-color: #FFF;
	height: 500px;
	width: 600px;
	border: 1px solid #CCC;
}
#menu {
	background-color: #FFF;
	height: 40px;
	width: 600px;
}
</style>
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<?php
require 'access.php';
?>

<body>
<center><div id="container"><h1>USER HOMEPAGE </h1>
<div id="menu">
  <ul id="MenuBar1" class="MenuBarHorizontal">
    <li><a href="#">Home</a>      </li>
    <li><a href="#">Student Profile</a></li>
    <li><a class="MenuBarItemSubmenu" href="#">About Us</a>
      <ul>
        <li><a class="MenuBarItemSubmenu" href="#">Our Aims</a>
          <ul>
            <li><a href="#">Item 3.1.1</a></li>
            <li><a href="#">Item 3.1.2</a></li>
          </ul>
        </li>
        <li><a href="#">Item 3.2</a></li>
        <li><a href="#">Item 3.3</a></li>
      </ul>
    </li>
    <li><a href="#">Downloads</a></li>
  </ul>
</div>

<?php echo "Wassup ".$_SESSION['user']." !!!"; ?>
<p>Welcome to the student's homepage</p>
<form method="post" action="logout.php">
<input type="submit" value="Logout" />
</form>
</div></center>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>