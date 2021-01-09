<?php 
session_start();
include('login_functions.php');
if(dataSubmitted())
{
	$login_details = array();
	$login_details = getDataSubmitted();
	if($login_details)
	{
	confirmDatabaseRecord($login_details);
	header('Location: login_page.php');
	}
	else
	{
		header('Location: login_home.php');
	}
}



?>