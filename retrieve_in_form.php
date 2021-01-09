<?php
require 'access.php';
?>
<html>
<style type="text/css">
.container {
	margin: 0px;
	height: 1000px;
	width: 100%;
	background-color: #FC0;
}
#logout{
	font-size: 14px;
	font-weight: bold;
	colour: #fff;
	border-radius: 5px;
	font-family: Verdana, Geneva, sans-serif;
	text-decoration: blink;
}
</style>
<body>
<div class="container">
<p>Welcome to the student's profile</p>

<?php 

$email = $_SESSION['email'];
$student = $_SESSION['user'];

	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "register";
	$db_handle = mysql_connect($server, $username, $password);
	$db_found = mysql_select_db($dbname, $db_handle);
	$data = mysql_query("SELECT * FROM student") or die(mysql_error()); 
	$info = mysql_fetch_array($data);

	if($db_found)
	{

	$SQL = "SELECT * FROM contact WHERE email = '$email'";
	$result = mysql_query($SQL);
	while($db_field = mysql_fetch_assoc($result))
	{
		$id = $db_field['studentno'];
		$fname = $db_field['phoneno'];
		$lname = $db_field['email'];
		$email = $db_field['nokphoneno'];
		$phoneno = $db_field['houseaddress'];
		
		echo "<div width=500 align=center>";
		echo "<form>";
		echo "<table>";
		
		echo "Hello ".$student." !!!";
		echo "<h2>PERSONAL PROFILE</h2>";
		echo "<img src=localhost/php_project/project/images/".$info['picture'] ."> <br>";
		echo "<tr>";
	echo "<td>"."StudentNo:". "</td>";
	echo "<td>"."<input type=text value=$id />"."</td>"."<br>"."<br>"."<br>";
		echo "</tr>";
	
		echo "<tr>";
	echo "<td>Fhone Number:</td>";
	echo "<td><input type=text value=$fname /></td>"."<br>"."<br>"; 
		echo "</tr>";
	
		echo "<tr>";
	echo "<td>Email:</td>";
	echo "<td><input type=text value=$lname /></td>"."<br>";
		echo "</tr>";	
		
		echo "<tr>";
	echo "<td>NOK Phone Number:</td>";
	echo "<td><input type=text value=$email /></td>";
		echo "</tr>";

		echo "<tr>";	
	echo "<td>House address:</td>";
	echo "<td><input type=text value=$phoneno /></td>". "<br>";
		echo "</tr>";
	
		echo "</table>";
		echo "</form>";
		echo "</div>";
	}
	mysql_close($db_handle);
	
	}
else
{
	header('Location:http://www.google.com');
}

?>
<form method="post" action="logout.php">
<input type="submit" value="Logout" id="logout" />
</form>
</div>
</body>
</html>

