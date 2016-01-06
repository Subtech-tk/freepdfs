<?php
 //bate of birth checkup script
 // checks wether date field is empty or not.
if(isset($day) && !empty($day))
{
	if (strcasecmp($day, 'select')==0) 
	{
		echo "<br>Please Select your day of birth";
		$acess=0;
	}	
}
else
{
	echo "<br>Some internal problem has occured please report it to admin.<br>Thanks for your corporation.";
}

if(isset($month) && !empty($month))
{
	if (strcasecmp($month, 'select')==0) 
	{
		echo "<br>Please Select your month of birth";
		$acess=0;
	}	
}
else
{
	echo "<br>Some internal problem has occured please report it to admin.<br>Thanks for your corporation.";
}

if(isset($year) && !empty($year))
{
	if (strcasecmp($year, 'select')==0) 
	{
		echo "<br>Please Select your year of birth";
		$acess=0;
	}	
}
else
{
	echo "<br>Some internal problem has occured please report it to admin.<br>Thanks for your corporation.";
}

?>

