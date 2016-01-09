<?php
	include_once "core.php";
	include_once "user/core.inc.php";
	//echo "$userid";	//for testing only
if (loggedin()==1) 
{
	$resultuser=$connection->query("SELECT `username`,`firstname`,`surname`,`status`,`level`,`emailid`,`gender` 
		FROM `userdetail` WHERE `uniqueid`='$userid'");
	$rowsuser=$resultuser->fetch_array();
		$username=$rowsuser[0];
		$firstname=$rowsuser[1];
		$lastname=$rowsuser[2];
		$status=$rowsuser[3];
		$level=$rowsuser[4];
		$emailid=$rowsuser[5];
		$gender=$rowsuser[6];

	if ((strcasecmp($gender,"m")==0)) 
	{
		$sat="Sir";
	}
	else
	{
		$sat="Mam";
	}
	
	if ($status=="unverified") 
	{
		$sql ="SELECT `code` FROM `verify_user_mail` WHERE `userid`='$userid'";
		$resultverify=$connection->query($sql);
		$count=$resultverify->num_rows;
		if ($count==1) 
		{
			$rowsverify=$resultverify->fetch_array();
			$code=$rowsverify[0];
			//include_once 'verify_mail_sent.php';	
		} 
		elseif ($count==0) 
		{
			$code=rand(1000000000,9999999999); 	//to generate a 10digit random number.
			include_once 'verify/verify_mail_sent.php';
			include_once 'verify/verify_mail_add.php';
		}
		else
		{
			echo "some problem occur";
		}
		header("location: verify_mail");
	} 
	elseif ($status=="deactive") 
	{
		include 'account_deactive.php';
	}
	elseif ($status=="active") 
	{
		if ($level=="admin") 
		{
			include 'userpage_admin.php';
		} 
		elseif ($level=="user")
		{
			include 'userpage_user.php';
		}
		else
		{
			include 'userpage_error.php';
		}
	}
}
else
{
	// if not loggedin 
	header('location: index');
	//include_once 'userpage_error_login.php';
}
?>