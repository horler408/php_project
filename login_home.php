<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>students Login Page</title>
<style type="text/css">
#home {
	margin: auto;
	height: 300px;
	width: 100%;
	background-color: #F93;
}
</style>
</head>

<body>
<div id="home">
<center><a href = "form3.php"><h3>Register?</h3></a></center>

<center><h2>Login Page</h2></center>
<form method="post" action="login_code.php">
<table border="1" align="center">
	<tr>
    <td> Email : </td>
    <td> <input type="text" name="email" /> </td>
  </tr>
	  <tr>
    <td> Username : </td>
    <td> <input type="text" name="u_name" /> </td>
  </tr>
  <tr>
    <td> Password : </td>
    <td> <input type="password" name="pass1" /> </td>
  <tr>
  <tr>
    <td> &nbsp </td>
    <td> <input type="submit" value="login" name="submit" /> </td>
  </tr>
</table>
</form>  

</div>
</body>
</html>