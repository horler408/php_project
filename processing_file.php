<?php 
session_start();
include ('C://wamp//www//php_project//project//functions_file1.php');

if(dataSubmitted())
{	
	$student_data = array();
	$student_data = getDataSubmitted();
	$result = validateData($student_data);
	if($result)
		
	{
		addRecordsToDatabase($student_data);
		displayThankyouPage();
	}
	else
	{
		//redirect to update page
		getUpdatePage();
	}
}
else
	{
		header('Location:http://www.yahoo.com');
	}

?>