<?php
	// login.class.php
	
	include_once 'traits/password.trait.php';
	/*
		login class extends user # hop to extends
	*/
	class login 
	{
		
		// including password trait methods
		use password;

		function __construct($email,$password)
		{
			if ($this->password_hash_comp($email,$password)) 
			{
				include 'dbms/dbms_imp.php';
				$query_run=$connection-> query("SELECT `uniqueid` FROM `userdetail` WHERE `emailid`='$email'");	
				mysqli_close($connection);
				$row=$query_run->fetch_array();

				$user= new user;
				$user->get_user($row[0]);
				$_SESSION['current_user']=$user;
				$GLOBALS[$user]=$_SESSION['current_user'];

				// redirect to userpage

				echo "Logged in";
			} 
			else 
			{
				echo "Email and password combination is not correct";
			}
			
		}
	}
?>
