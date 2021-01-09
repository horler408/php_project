<?php 

function checkPhoneNo($phoneno)
{
	$length = strlen($phoneno);
	$firstletter = substr($phoneno, 0, -11);
	
	if ($length == 9 OR $length == 11)
	{
		if (ctype_digit($phoneno) AND ($firstletter == 0) AND (!empty($phoneno)))
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
	else 
	{
		return false;
	}
}



function checkEmail($email)
{
	if (filter_var($email, FILTER_VALIDATE_EMAIL) AND (!empty($email)))
	{
		return true;
	}
	else
	{
		return false;
	}	
}


function contact ($data)
{
	if((ctype_alnum($data)) AND (!empty($data)))
	{
		return true;
	}
	else
	{
		return false;
	}
	
} 


function username ($name)
{
	$length = strlen($name);
	if(ctype_alpha($name) AND ($length <= 8) AND (!empty($name)))
	{
		return true;
	}
	else 
	{
		return false;
	}
}


function dataSubmited()
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


function password ($pass)
{
	$length = strlen($pass);
	if ((ctype_alnum($pass)) AND (!empty($pass)) AND ($length <=8))
	{
		return true;
	}
	else
	{
		return false;
	}
}


function options ($option)
{
	
	if ($option == 'none')
	{
		return false;
	}
	else
	{
		return true;
	}
}


function checkAge ($ageYears)
{
	$dateArr = explode('/', $_POST['dob']);

$dateTs = strtotime($_POST['dob']);

$now = strtotime('today');

if (sizeof($dateArr) != 3) {
die('ERROR: Please enter a valid date of birth');
}

if (!checkdate($dateArr[0], $dateArr[1], $dateArr[2])) {
die('ERROR: Please enter a valid date of birth');
}

if ($dateTs >= $now) {
die('ERROR: Please enter a date of birth earlier than today');
}

$ageDays = floor(($now - $dateTs) / 86400);
$ageYears = floor($ageDays / 365);
#$ageMonths = floor(($ageDays - ($ageYears * 365)) / 30);
if($ageYears <= 50 AND (!empty($ageYears)))
{
	return true;
}
else
{
	return false;
}
}


function screenEntry($userentry){
	$entry = trim($userentry); 
	$entry = strip_tags($entry);
	$entry = addslashes($entry); 
	$entry = htmlentities($entry);
	return $entry;
}


function getDataSubmitted()
{
	$student = array(); 
	
	$_SESSION['username'] = screenEntry($_POST['username']);	
	$student['username'] = $_SESSION['username'];
	
	$_SESSION['password'] = screenEntry($_POST['password']);
	$student['password'] = $_SESSION['password'];
			
	$_SESSION['tutorsname'] = screenEntry($_POST['tutorsname']);
	$student['tutorsname'] = $_SESSION['tutorsname'];
	
	$_SESSION['duration'] = screenEntry($_POST['duration']);
	$student['duration'] = $_SESSION['duration'];

	$_SESSION['gender'] = screenEntry($_POST['gender']);			
	$student['gender'] = $_SESSION['gender'];
	
	$_SESSION['picture'] = screenEntry($_POST['picture']);					
	$student['picture'] = $_SESSION['picture'];
		
	$_SESSION['nokphoneno'] = screenEntry($_POST['nokphoneno']);
	$student['nokphoneno'] = $_SESSION['nokphoneno'];				
	
	$_SESSION['houseaddress'] = screenEntry($_POST['houseaddress']);
	$student['houseaddress'] = $_SESSION['houseaddress'];						
		
	$_SESSION['coursename'] = screenEntry($_POST['coursename']);
	$student['coursename'] = $_SESSION['coursename'];						
	
	$_SESSION['dob'] = screenEntry($_POST['dob']);				
	$student['dob'] = $_SESSION['dob'];
	
	$_SESSION['dop'] = screenEntry($_POST['dop']);	
	$student['dop'] = $_SESSION['dop'];
	
	$_SESSION['amount'] = screenEntry($_POST['amount']); 			
	$student['amount'] = $_SESSION['amount'];

	$_SESSION['email'] = screenEntry($_POST['email']);			
	$student['email'] = $_SESSION['email'];	
		
	$_SESSION['phoneno'] = screenEntry($_POST['phoneno']);				
	$student['phoneno'] = $_SESSION['phoneno'];	
	
	return $student;
}



function hiddenDate()
{
	if (isset($_POST['dop']))
	{
		return date('Y m d', strtotime('now'));
	}
}
/*
function uploadPhoto()
	{
		// Determine location on server and filename
		$uploads_dir = 'C:/wamp/www/php_project/images/';
		$name = $_FILES['picture']['name'];

		// Perform File Verification
		$isValid = verifyFile();
		if ($isValid)
		{
			move_uploaded_file($_FILES['picture']['tmp_name'], "$uploads_dir/$name");
			
			$path = $uploads_dir.$name;
			$path = pathinfo($path);
			
			$dirname = $path['dirname'];
			$basename = $path['basename'];
			
			$filepath = $dirname."/".$basename;
			return $filepath;
		}
	}
	
	function verifyFile()
	{
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
	}
	
	$filepath = uploadPhoto();
	echo $filepath;*/
	
function verifyFile()
	{
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
	}

 
function uploadPhoto()
{
 	$pic=($_FILES['picture']['name']); 

	$valid = verifyFile();
	if($valid)
	{	
		$target = "images/"; 
		$id = rand(000, 1000);
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

		
function addRecordsToDatabase($student = array())
{
	$username = $student['username'];				$password = $student['password'];
	$email = $student['email'];						$phoneno = $student['phoneno'];
	$nokphoneno = $student['nokphoneno'];			$houseaddress = $student['houseaddress'];
	$coursename = $student['coursename'];			$duration = $student['duration'];	
	$tutorsname = $student['tutorsname'];			$dop = $student['dop'];
	$dob = $student['dob'];							$amount = $student['amount'];
	$gender = $student['gender'];					$picture = $student['picture'];
	
$mysqli = new mysqli("localhost", "root", "", "registration");
if ($mysqli->connect_errno) {

	header('Location: http://www.krc.com.ng/pmstudyblog/dbError.php');
}

$sql_contact = 
"INSERT INTO contact (phoneno, email, nokphoneno, houseaddress) 
VALUES ('$phoneno', '$email', '$nokphoneno', '$houseaddress')";

$sql_course = 
"INSERT INTO course (coursename, duration, tutorsname)
VALUES ('$coursename', '$duration', '$tutorsname')";

$sql_coursestudent = 
"INSERT INTO coursestudent (studentno, coursecode) 
VALUES ('$studentno', '$coursecode')";

$sql_login = 
"INSERT INTO login (username, password) 
VALUES ('$username', '$password')";

$sql_payment = 
"INSERT INTO payment (dop, amount, coursecode, description) 
VALUES ('$dop', '$amount', 'coursecode', 'description')";

$sql_students = 
"INSERT INTO students (dob, gender, picture) 
VALUES ('$dob', '$gender', '$picture')";

	if (
	(($mysqli->query($sql_contact)) AND ($mysqli->query($sql_course)))
	AND 
	(($mysqli->query($sql_coursestudent)) AND ($mysqli->query($sql_login)))
	AND
	(($mysqli->query($sql_payment)) AND ($mysqli->query($sql_students)))
	)
	{
		$mysqli->close();
		displayThankyouPage();
	} 
	else 
	{
		header('Location: http://www.krc.com.ng/pmstudyblog/duplicateEntry.php');
	}	
	$mysqli->close();

}


function validateData($student_data = array())
{
	$result = array();
	$result['email'] = checkEmail($student_data['email']);
	$result['username'] = username($student_data['username']);
	$result['password'] = password($student_data['password']);
	$result['phoneno'] = checkPhoneNo($student_data['phoneno']);
	$result['nokphoneno'] = checkPhoneNo($student_data['nokphoneno']);
	$result['coursename'] = options($student_data['coursename']);
	$result['houseaddress'] = contact($student_data['houseaddress']);
	$result['duration'] = options($student_data['duration']);
	$result['tutorsname'] = options($student_data['tutorsname']);
	$result['dop'] = hiddenDate($student_data['dop']);
	$result['amount'] = options($student_data['amount']);
	$result['dob'] = checkAge($student_data['dob']);
	$result['gender'] = ($student_data['gender']);
	$result['picture'] = uploadPhoto($student_data['picture']);			//($_FILES['picture']['name']));           
	
	$validate = in_array(false, $result);
	return $validate;
}


function getUpdatePage(){
	header('Location:C://wamp//www//php_project//updateform.php');
}

function displayThankyouPage(){
	header('Location: C://wamp//www//php_project//newludo.html');
}
?>