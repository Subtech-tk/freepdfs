<?php
	//checking the data entered for invalid data
	$name=$fname ; include 'namecheckupscript.php';
	$name=$sname ; include 'namecheckupscript.php';
	if (isset($gender) && !empty($gender)) 
	{
		if (strcasecmp($gender, 'select')==0) 
		{
			echo "<br>Please select a Gender";
			$acess=0;
		}
	}
	include 'datetimecheckupscript.php';
	include 'usernamecheckupscript.php';
	include 'passwordcheckupscript.php';
	//echo $fname.'.<br/>'.$sname.'.<br/>'.$gender.'.<br/>'.$dob.'.<br/>'.$username.'.<br/>'.$passw.'
	//.<br/>'.$emailid.'.<br/>'.$acess;

	//neutralizing the data 
	
	//$acess=0; // terminating the script for testing only
	if ($acess==1) 
	{
		$fname1=htmlentities($fname);
		$sname1=htmlentities($sname);
		$username1=htmlentities($username);
		$emailid1=$emailid;
		$add_acess=0;
		include_once "core.inc.php";
		//include_once 'dbms/dbms_imp.php'; //connecting to database
		//checking for username 
		$check_query="SELECT * FROM `userdetail` WHERE `username`='$username1'";
		//$query_run=mysqli_query($link,$check_query); 	//older one
		//$query_run=$connection->query("SELECT * FROM `userdetail` WHERE `usename`='$username1'");	//test query
		$query_run=$connection->query($check_query); 	// new 
		if ($query_run) 
		{
				//$query_num_rows=mysqli_num_rows($query_run); 	//older one
				$query_num_rows=$query_run->num_rows;
				//echo "<br/>$query_num_rows";	//testing only
				if ($query_num_rows==1) 
				{
					echo "<br/>Username '".$username1."' already exist please choose another username<br/>";
					$add_acess=0;
				}
				else
				{
					$add_acess=1;
				}
		}
		else if (!$query_run)
		{
			echo "Error fetching data from database. ".@mysqli_error();
		}
		//checking for email id 
		$check_query="SELECT * FROM `userdetail` WHERE `emailid`='$emailid1'";
		//if ($query_run=mysqli_query($link,$check_query)) { 	//older one 
		$query_run=$connection->query($check_query);	// new one
		if ($query_run)	
		{
				//$query_num_rows=mysqli_num_rows($query_run);	// older one
				$query_num_rows=$query_run->num_rows;	// new one
				//echo "<br/>$query_num_rows";	//testing only
				if ($query_num_rows==1) 
				{
					echo "<br/>Email id '".$emailid1."' already exist please use another Email id<br/>";
					$add_acess=0;
				}
				else 
				{
					$add_acess=1;
				}
			}
			//else if (!$query_run=mysqli_query($link,$check_query))	//older one 
			else if (!$query_run)	//new one
			{
				echo "Error fetching data from database. ".@mysqli_error();
			}
		//writting data to database
		if ($add_acess==1) 
		{
			include 'addnewuser.php';
			//die(); //to kill rest of page
		}
		elseif ($add_acess==0)
		{
			include 'signupform.php';
		}
		else
		{
			echo "<br>Some internal problem has occured please report it.<br/>
			you found reporting under contact us page<br>Thanks for your corporation.";
		}	
	}
	else
	{
		include 'signupform.php';
	}
?>