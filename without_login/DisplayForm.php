<?php

	if(isset($_POST['submit']))
	{
		
		if($_POST['Subject']=="")
		{
			echo "Subject Can't be empty \n";
			echo "<br>";
		}

		
	}
	else
	{
		echo "Please complete the form first...";
	}

	if(isset($_POST['submit']))
	{
		
		if($_POST['details']=="")
		{
			echo "details Can't be empty ";
			echo "<br>";
		}
		
	}
	else
	{
		echo "Please complete the form first...";

	}

	if(isset($_POST['submit']))
	{
		
		if($_POST['name']=="")
		{
			echo "Can't be empty \n";
			echo "<br>";
		}
		
	}
	else
	{
		echo "Please complete the form first...";
	}
	if(isset($_POST['submit']))
	{
		if($_POST['email']=="")
		{
			echo "Email can't be empty.";
			echo "<br>";
		}
		
		
		
		else if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			echo "successfully posted";
			echo "<br>";
		} 
		else 
		{
			echo "This is not a valid email address";
			echo "<br>";
		}
	}
	else
	{
		echo "Please complete the form first...";
	}
	if(isset($_POST['submit']))
	{
		
		if($_POST['contact_number']=="")
		{
			echo "contact number can't be empty";
			echo "<br>";
		}
		
	}
	else
	{
		echo "Please complete the form first...";
	}
	
	


?>