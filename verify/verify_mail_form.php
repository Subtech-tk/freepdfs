<?php
include_once './core.php';

$vcode=$_POST['vcode'];
$sql = "SELECT `code` FROM `verify_user_mail` WHERE `userid`='$userid'";
	$resultuser=$connection->query($sql);
	$rowsuser=$resultuser->fetch_array();
	$code=$rowsuser[0];
if ($vcode==$code) 
{
	$sql = "UPDATE `userdetail` SET `status` = 'active' WHERE `uniqueid` = '$userid'";
	$resultuser=$connection->query($sql);
	if(!$resultuser)
	{
		// error occurs
		echo "<br>Error writing data".@mysqli_error($connection);
	}
	else
	{
		//sucess in adding the data. 
		echo "<br/><br/>Thank You for Verification</br></br>Please Continue to Home.</br></br>";
	}
} 
else
{
	if ($vcode==00000000) 
	{
		echo "Please Enter the verification code";
	}
	else 
	{
		echo "Ploblem with verification code.\n Please Enter the correct code.
		\n If Problem Remains please contactus.";
	}
	
	include 'verify_mail.form.php';
}




?>