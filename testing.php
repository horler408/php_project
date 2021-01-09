<?php 
/*$mysqli = new mysqli("localhost", "root", "", "registration");
if ($mysqli->connect_errno)
	{
	header('Location: http://www.krc.com.ng/pmstudyblog/dbError.php');
	}
else
	{
$sql_contact = "INSERT INTO login (username, password) 
				VALUES ('horler', 'azolayu')";

	if ($mysqli->query($sql_contact))
	{
	$mysqli->close();
	}
	else
	{
		echo "DataBaseRecord Failed";
	}
	}
*/
?>

<?php 

$type = $_FILES['picture']['type'];
		$size = $_FILES['picture']['size'];
		
		if (($size <= 1024000) AND (($type == 'image/jpeg') OR $type == 'image/png'))
		{
			$valid = true;
		}
		else
		{
			$valid = false;
		}
		return $valid;
	
function uploadPhoto()
{
 	$pic=($_FILES['picture']['name']); 

	$valid = verifyFile();
	if($valid)
	{	
		$target = "images/"; 
		$id = rand(000, 999);
		$file_name = $id. basename($_FILES['picture']['name']);
		$target = $target . $file_name; 

 		if(move_uploaded_file($_FILES['picture']['tmp_name'], $target)) 
 		{ 
 		 	return $file_name;
 		} 
 		else { 
 			return false;
 		}
	}
	else{
		echo "ERROR: Invalid file type"."<br>";
	}
}

?>
<html>
<body>
<form action="email_check.php" method="post" enctype="multipart/form-data">
<input name="email" type="text" />
<input name="submit" type="submit" value="submit" />
</form>

</body>
</html>