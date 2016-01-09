<?php
// username check up script
//echo "$username";		//for testing only
if(isset($username) && !empty($username))
{
	if (strcasecmp($username,"username")==0)
	{	// if $usernmae is same as "username"
		echo "<br>Please Enter a username.";
		$acess=0;
	}
	else
	{
		$acess=1;
	}	
}
else
{
	echo "<br>Some internal problem has occured please report it to admin.<br>Thanks for your corporation.";
}

?>
