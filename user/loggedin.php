<?php
	include_once 'core.inc.php';
	$resultuser=$connection->query("SELECT `firstname`,`surname` FROM `userdetail` WHERE `uniqueid`='$userid'");
	$rowsuser=$resultuser->fetch_array();
		$fname=$rowsuser[0];
		$sname=$rowsuser[1];
	echo "<h2>Welcome back $fname $sname</h2><br/>";
	echo "You're logged in <br/>";

	//include 'userdetail.php'; to get userdetails
	//echo '<br>'.getuserfield('firstname',$userid).'<br>';
	//echo "$current_file";		//for testing only
	//echo "<br/>$http_referer";

	header("location: userpage");

	/*if ($current_file=="book/login.php") 
	{
		echo "You're logged in <br/>";
	} 
	else  
	{
		header("location: userpage.php");
	}*/
	
	
?>