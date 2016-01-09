<?php
//echo "<br/>$passw";		//for testing only
//echo "<br/>$passw_again";	//for testing only
if (strcmp($passw,$passw_again)==0)		//case sensitive comparision
{	//if password match.
	$acess=1;
	//echo "<br/>Entered password match.";	//for testing only
}
/*if ($passw==$passw_again) 
{
	//echo "<br/>Entered password match.";	//if passwords match (case sensitive comparision)
}*/
else
{	//if password doesnot match.
	echo "<br/>Entered password doesnot match.";
	$acess=0;
}
//echo strlen("$passw");		//for testing only
if (strlen("$passw")<7) 
{	//if password is less than 8 characters.
	echo "<br/>Password too short.<br/>Please Enter a password having more than 8 characters";
}


?>