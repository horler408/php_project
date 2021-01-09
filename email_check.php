<?php 
if(isset($_POST['submit']))
{
	function emailExist()
	{
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
   $data = emailExist();
	echo $data;
}
?>