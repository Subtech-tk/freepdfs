<!--form.html.php-->
<?php
	include_once 'core.inc.php';
	$emailid='Email id';
	if (isset($_POST['emailid']) && isset($_POST['password'])) 
	{
		$emailid=$_POST['emailid'];
		$passw=$_POST['password'];
		$password=md5($passw);
		if (!empty($emailid) && !empty($passw)) 
		{
			$query="SELECT `uniqueid` FROM `userdetail` WHERE `emailid`='$emailid' AND `password`='$password'";
			//echo "$query";
			//if ($query_run=mysqli_query($link,$query)) 	// older one
			$query_run=$connection-> query($query);	// new one
			if ($query_run)	
			{
				//$query_num_rows=mysqli_num_rows($query_run);	// older one
				$query_num_rows=$query_run->num_rows;	// new one
				if ($query_num_rows==0) {
					echo "Invalid Email id & Password combination";
				}
				else if ($query_num_rows==1) {
					//$uniqueid=mysqli_result($link,$query_run, 0,'uniqueid');	//older one
					$rows=$query_run->fetch_array();
					$uniqueid=$rows[0];
					$_SESSION['id']=$uniqueid;
					$GLOBALS[$id]=$_SESSION['id'];
					header('location: login.php');
				}
				else
				{
					echo "some problem has occure.\nPlease Report it to Admin \n(error code: 100)";
				}
			}
			//else if (!$query_run=mysqli_query($link,$query))	// older one 
			else if (!$query_run)	// new one
			{
				echo "Error fetching data from database. ".@mysqli_error();
			}
		}
		else{
			echo "Please Enter Email id or Password";
		}
	} 
?>	
	<form  action="<?php echo $current_file; ?>" method="POST" enctype="" target="" >
	<fieldset>
		<legend>Sign up form</legend>
		<fieldset>
			<legend>Email id :</legend>
			<input type="email" name="emailid" value="<?php echo $emailid; ?>" size="15">
		</fieldset>
		<fieldset>
			<legend>Password :</legend>
			<input type="password" name="password" value="password " size="15">
		</fieldset>
		<br/>
			<input type="submit" name="log in" value="log in" size="5">
	</fieldset>
	</form>

	<tb>
		<p></p>
	</tb>
	
