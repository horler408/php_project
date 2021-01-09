<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Students Portal</title>
<link href="form.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<style>
body {
	background-color:#CCC;
}
#reg {
	margin: auto;
	width: 650px;
	height: 1000px;
	padding: 10px;
	border: 2px solid #fff;
}
#reg h2 {
	color:#66F;
}
#reg h3{
	color:#F00;
}
.label {
	width:150px;
	font-size: 14px;
	font-style: italic;
	line-height: normal;
	font-weight: bold;
	font-variant: normal;
	color:#000;
	text-decoration: blink;
}
#btn {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	height:30px;
	font-size: 14px;
	font-weight: bold;
	color: gold;
	float: right;
	border-radius:7px;
}
#btn1 {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 14px;
	font-weight: bold;
	color: gold;
	border-radius:7px;
	height:30px;
}
.spry {
	height:25px;
	width: 250px ;
	border-radius:5px;
}
#houseaddress {
	border-radius:10px;
}
p {
	font-size: 24px;
	font-weight: bold;
	color: #66F;
	text-align: center;
}

</style>
</head>

<body>
<p>Current Time is: &nbsp 
<script type="text/javascript">
var d = new Date()
document.write(d.getHours() )
document.write(".")
if (d.getMinutes() < 10 )
{
document.write("0")
}
document.write(d.getMinutes() )
document.write(".")
if (d.getSeconds() < 10 )
{
document.write("0")
}
document.write(d.getSeconds() )
</script>

<?php session_start(); ?>
<div id="reg">
<h3>Registration failed! Please try again</h3>
<marquee><h2>Registration Portal</h2></marquee>
<form action="processing_file.php" method="post" >
<table width="650" border="0" cellspacing="20">
  <tr>
    <td class="label">Username*</td>
    <td><span id="sprytextfield1">
      <label for="username"></label>
      <input type="text" name="username" value="<?php echo $_SESSION['username'];?>"  class="spry" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td class="label">Password*</td>
    <td><span id="sprypassword1">
    <label for="password"></label>
    <input type="password" name="password" class="spry" />
    <span class="passwordRequiredMsg">A value is required.</span><span class="passwordMaxCharsMsg">Exceeded maximum number of characters.</span><span class="passwordMinCharsMsg">Minimum number of characters not met.</span></span></td>
  </tr>
  <tr>
    <td class="label">Confirm Password*</td>
    <td><span id="spryconfirm1">
      <label for="password"></label>
      <input type="password" name="password2" id="password" class="spry" />
      <span class="confirmRequiredMsg">A value is required.</span><span class="confirmInvalidMsg">The values don't match.</span></span></td>
  </tr>
  <tr>
    <td class="label">Phone Number*</td>
    <td><span id="sprytextfield2">
    <label for="phoneno"></label>
    <input type="text" name="phoneno" id="phoneno" value="<?php echo $_SESSION['phoneno'];?>" class="spry" />
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
  </tr>
  <tr>
    <td class="label">Email*</td>
    <td><span id="sprytextfield3">
    <label for="email"></label>
    <input type="text" name="email" id="email" value="<?php echo $_SESSION['email'];?>" class="spry"/>
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
  </tr>
  <tr>
    <td class="label">Gender*</td>
    <td><table width="200">
      <tr>
        <td><label>
          <input type="radio" name="gender" value="Male" id="Gender_0" />
          Male</label></td>
      </tr>
      <tr>
        <td><label>
          <input type="radio" name="gender" value="Female" id="Gender_1" />
          Female</label></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td class="label">Next of kin Phone*</td>
    <td><span id="sprytextfield4">
    <label for="nokphone"></label>
    <input type="text" name="nokphoneno" value="<?php echo $_SESSION['nokphoneno'];?>" class="spry" />
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
  </tr>
  <tr>
    <td class="label">Date of birth*</td>
    <td><span id="sprytextfield5">
    <label for="dob"></label>
    <input type="text" name="dob" id="dob" value="<?php echo $_SESSION['dob'];?>" class="spry"/>
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
  </tr>
  <tr>
    <td class="label">Course Name*</td>
    <td><span id="spryselect1">
      <label for="coursename"></label>
      <select name="coursename" size="1" id="coursename" class="spry">
        <option value="none"><?php echo $_SESSION['coursename'];?></option>
        <option value="PHP">PHP</option>
        <option value="JAVA">JAVA</option>
        <option value="PHOTOSHOPS">PHOTOSHOPS</option>
        <option value="CCNA">CCNA</option>
        <option value="PEACHTREE">PEACHTREE</option>
      </select>
      <span class="selectRequiredMsg">Please select an item.</span></span></td>
  </tr>
  <tr>
    <td class="label">Duration*</td>
    <td><span id="spryselect2">
      <label for="duration"></label>
      <select name="duration" class="spry" >
        <option value="none"><?php echo $_SESSION['duration'];?></option>
        <option value="4-Weeks">4-Weeks</option>
        <option value="5-Weeks">5-Weeks</option>
        <option value="6-Weeks">6-Weeks</option>
        <option value="8-Weeks">8-Weeks</option>
      </select>
      <span class="selectRequiredMsg">Please select an item.</span></span></td>
  </tr>
  <tr>
    <td class="label">Tutors Name*</td>
    <td><span id="spryselect3">
      <label for="tutorsname"></label>
      <select name="tutorsname" class="spry" >
        <option value="none"><?php echo $_SESSION['tutorsname'];?></option>
        <option value="Mr.Ola">Mr. Ola</option>
        <option value="Mr.Mike">Mr. Michael</option>
        <option value="Mr.Yusuf">Mr. Yusuf</option>
        <option value="Mr.Ibrahim">Mr. Ibrahim</option>
        <option value="Mr.Nas">Mr. Nasir</option>
      </select>
      <span class="selectRequiredMsg">Please select an item.</span></span></td>
  </tr>
  <tr>
    <td class="label">Amount*</td>
    <td><span id="spryselect4">
      <label for="amount"></label>
      <select name="amount" class="spry">
        <option value="none"><?php echo $_SESSION['amount'];?></option>
        <option>#25,000</option>
        <option>#50,000</option>
        <option>#75,000</option>
        <option>#100,000</option>
        <option>#125,000</option>
        <option>#150,000</option>
        <option>#175,000</option>
      </select>
</span></td>
  </tr>
  <tr>
    <td class="label">Date of Payment*</td>
    <td><input type="hidden" name="dop" class="spry" /></td>
  </tr>
  <tr>
    <td class="label">Picture*</td>
    <td><label for="picture"></label>
      <input type="file" name="picture" class="spry"/></td>
  </tr>
  <tr>
    <td class="label">House Address*</td>
    <td><span id="sprytextarea1">
      <label for="houseaddress" value="<?php echo $_SESSION['houseaddress'];?>"></label>
      <textarea name="houseaddress" id="houseaddress" cols="35" rows="5" ></textarea>
      <span class="textareaRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
  <td><input name="submit" type="submit" id="btn1" /></td>
  <td><input name="Reset" type="reset" id="btn"/></td>
  </tr>
</table> 

</form>
<p><code>copyright &copy;HorlerWeb 2014 </code>
</div>

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {maxChars:20, minChars:5});
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "password", {validateOn:["change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "real");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email", {validateOn:["change"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "real");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "date", {format:"mm/dd/yyyy"});
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {validateOn:["change"]});
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2", {validateOn:["change"]});
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3", {validateOn:["change"]});
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4", {validateOn:["change"], isRequired:false});

var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
</script>

</body>
</html>
