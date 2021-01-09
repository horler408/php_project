<?php 
session_start();
$email = $_POST['email'];
$username = $_POST['u_name'];
$password = md5($_POST['pass1']);

$con = mysql_connect("localhost","root","");
if(!$con) 
  {
  die('Error connecting to server :'.mysql_error());
  }
mysql_select_db("register",$con);
$result = mysql_query("SELECT username,password FROM login WHERE username='$username' && password='$password' && email='$email'");
if(!mysql_fetch_array($result,MYSQL_ASSOC))
  {
	  header('Location:login_error.php');
  /*echo "Wrong Login. Go back and try again.";
  echo "<br /><a href='homepage.php'> Go back to login page </a>";*/
  }
else
  {
 $_SESSION['access']=1;
 $_SESSION['email']=$_POST[email];
 $_SESSION['user']=$_POST[u_name];
 header('Location: retrieve_in_form.php');
  
  
  }
 mysql_close($con);

?>