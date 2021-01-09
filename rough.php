<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Email settings</title>
</head>

<body>

</body>
</html>
<?php 
$email = $_POST['email'];
		$username = "root";
		$server = "localhost";
		$password = "";
		$database = "register";
	
		$db_handle = mysql_connect($server, $username, $password) or die(mysql_error());
		$db_found = mysql_select_db($database, $db_handle) or die(mysql_error());
		if($db_found)
		{
			$SQL = "SELECT * FROM login WHERE email = '$email'";
			$result = mysql_query($SQL);
			$num_rows = mysql_num_rows($result);
		
			if ($num_rows > 0) 
			{
				$valid = false;
				header('Location:email_error.php');
			}
			else
			{
				$valid = true;
			}
			return $valid;
		}
	}

?>