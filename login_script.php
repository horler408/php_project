<?php 
session_start();
$con=mysql_connect("localhost","root","");
if(!$con) 
  {
  die('Error connecting to server :'.mysql_error());
  }
mysql_select_db("user_login",$con);
$result=mysql_query("SELECT username,password FROM user_info WHERE username='$_POST[u_name]' && password='$_POST[pass1]'");
if(!mysql_fetch_array($result,MYSQL_ASSOC))
  {
  echo "Wrong Login. Go back and try again.";
  echo "<br /><a href='homepage.php'> Go back to login page </a>";
  }
else
  {
 $_SESSION['access']=1;
 $_SESSION['user']=$_POST[u_name];
 header('Location: retrieve_in_form.php');
  
  
  }
 mysql_close($con);

?>