<?php 
function dataSubmitted()
{
	if (isset ($_POST['submit']))
	{
		return true;
	}
	else
	{
		return false;
	}
}

function resendToForm()
{
	return "<br /><a href='login_home.php'> Go back to login page </a>";
}

function getRegNo(){
	$a = mktime(); 
	$formno = abs($a - 99990000); 
	$formno = strrev($formno);
	$formno = substr($formno, 0, 6);
	$formno = 'PM'.$formno;	
	return $formno;
}


function screenEntry($userentry){
	$entry = trim($userentry); 
	$entry = strip_tags($entry);
	$entry = addslashes($entry); 
	$entry = htmlentities($entry);
	return $entry;
}

function getDatasubmitted()
{
	$data = array();
	
	$data = screenEntry($_POST['snumber']);
	
	$data = screenEntry($_POST['u_name']);
	
	$data = screenEntry($_POST['pass1']);
	return $data;
}

function confirmDatabaseRecord()
{
$con = mysql_connect("localhost","root","");
if(!$con) 
{
  	die('Error connecting to server :'.mysql_error());
}
	$db_found = mysql_select_db("user_login",$con);
	$sql = ("SELECT username,password FROM user_info WHERE username='$_POST[u_name]' && password='$_POST[pass1]'");
	$result = mysql_query($sql, $con);
	if(mysql_fetch_array($result,MYSQL_ASSOC))
  	{
  		return true;
	$_SESSION['access']=1;
 	$_SESSION['user']=$_POST[u_name];

	}
	else
	{
		return false;
		resendToForm();
	}
	mysql_close($con);	
}

function loginConfirm()
{
	$_SESSION['access']=1;
 	$_SESSION['user']=$_POST[u_name];
	 
}

function access()
{
	if($_SESSION['access']!=1)
	{ 
		return false;
		
	}
	else
	{
		return true;
	}
}

function logout()
{
	session_destroy();
	echo "Are you sure you want to leave this page";
	header('Location: login_home.php');
}

function emailExists()
{
	$sql = "SELECT COUNT(email) FROM tbl_users WHERE email = '" . $_SESSION['email']. "'";
	$db_found = mysql_select_db("db_name") or die("Unable to select database");
	$result = mysql_query($sql) or die("Invalid query"). mysql_error();
	$row = mysql_fetch_row($result);
	
	if($row[0] > 0)
	{	echo "The email already exist";
		resendToForm();
	}
}

function retrieveData()
{
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	$db_handle = mysql_connect($server, $username, $password);
	$db_found = mysql_select_db($dbname, $db_handle);

	if($db_found)
	{

	$SQL = "SELECT * FROM search WHERE email='nlo2horler@gmail.com'";
	$result = mysql_query($SQL);
	while($db_field = mysql_fetch_assoc($result))
	{
		$id = $db_field['id'];
		$fname = $db_field['FirstName'];
		$lname = $db_field['LastName'];
		$email = $db_field['email'];
		$phoneno = $db_field['phoneNumber'];
		
		echo "<div width=500 align=center>";
		echo "<form>";
		echo "<table>";
		
		echo "<tr>";
	echo "<td>"."ID:". "</td>";
	echo "<td>"."<input type=text value=$id />"."</td>"."<br>"."<br>"."<br>";
		echo "</tr>";
	
		echo "<tr>";
	echo "<td>FirstName:</td>";
	echo "<td><input type=text value=$fname /></td>"."<br>"."<br>"; 
		echo "</tr>";
	
		echo "<tr>";
	echo "<td>LastName:</td>";
	echo "<td><input type=text value=$lname /></td>"."<br>";
		echo "</tr>";	
		
		echo "<tr>";
	echo "<td>Email:</td>";
	echo "<td><input type=text value=$email /></td>";
		echo "</tr>";

		echo "<tr>";	
	echo "<td>Phone Number:</td>";
	echo "<td><input type=text value=$phoneno /></td>". "<br>";
		echo "</tr>";
	
		echo "</table>";
		echo "</form>";
		echo "</div>";
	}
	mysql_close($db_handle);
	
	}
}
?>