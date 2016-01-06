<?php
include_once 'core.inc.php';
	//neutralizing the data
	/*
	$insert_query=" INSERT INTO `userdetail` (`uniqueid`, `username`, `password`, `emailid`, `firstname`, `surname`, `gender`, `dob`, `status`) 
		VALUES ('NULL','".mysqli_real_escape_string($username1)."','".mysqli_real_escape_string($password)."','".mysqli_real_escape_string($emailid)."',
		'".mysqli_real_escape_string($fname1)."','".mysqli_real_escape_string($sname1)."','".mysqli_real_escape_string($gender)."',
		'".mysqli_real_escape_string($dob)."','active')";
	*/
	$insert_query="INSERT INTO `userdetail` (`uniqueid`, `username`, `password`, `emailid`, `firstname`, `surname`, `gender`, `dob`, `status`) 
		VALUES ('','$username1','$password','$emailid','$fname1','$sname1','$gender','$dob','unverified')";
	//$mysql_query_run=mysqli_query($insert_query);	//older one
	$mysql_query_run=$connection->query($insert_query);	// new one
	if(!$mysql_query_run)
	{
		// error occurs
		echo "<br>Error writing data".@mysqli_error($connection);
	}
	else
	{
		echo "Thank You for joining us</br></br> To Continue Please login.</br></br>";
		//sucess in adding the data. 
		header('location: sucess.php');	//Redirecting to sucess.php
	}

?>