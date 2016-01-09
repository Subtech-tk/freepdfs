<?php
	$fname="Firstname";
	$sname="Surname";
	$username="Username";
	$emailid="Email id";
	include 'core.inc.php';
	if (loggedin()==0) 
	{
		if (isset($_POST['firstname']) && isset($_POST['surname']) && isset($_POST['gender']) && isset($_POST['day']) && 
			isset($_POST['month']) && isset($_POST['year']) && isset($_POST['username']) && isset($_POST['password']) &&
			isset($_POST['password_again']) && isset($_POST['emailid']) )
		{

				$fname=$_POST['firstname'];
				$sname=$_POST['surname'];
				$gender=$_POST['gender'];
				$day=$_POST['day'];
				$month=$_POST['month'];
				$year=$_POST['year'];
				$dob=$year.'-'.$month.'-'.$day;
				$username=$_POST['username'];
				$passw=$_POST['password'];
				$passw_again=$_POST['password_again'];
				$password=md5($passw);
				$emailid=$_POST['emailid'];
				$acess=0;
				if (!empty($fname) && !empty($sname) && !empty($gender) && !empty($day) && !empty($month) && !empty($year) && !empty($username)
					&& !empty($passw) && !empty($passw_again) && !empty($emailid)) 
				{
					include 'signupscript.php';
				} 
				else 
				{
					echo "Some error has occur.<br/> Please check the Information provided by you.<br/>
						Might be you have left out something<br/>";
					include 'signupform.php';
				}
				
			
		} 
		else 
		{
			echo "All fields are necessary <br/><br/>";
			include 'signupform.php';
		}
	
		
	} 
	else if (loggedin()==1)
	{
		echo "<br/> You'r already registered and loggedin";
	}
	
?>