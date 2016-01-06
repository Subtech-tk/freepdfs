<?php
if (!isset($name) && empty($name)) 
	{
		echo "Please Enter a Name <br>";
		$acess=0;
	}	//name check up scriptSurname
elseif(isset($name) && !empty($name))
	{
		switch ($name) 
		{
			case (strcasecmp($name, "first name") ==0):
				$acess=0;
				break;
			case (strcasecmp($name, "firstname") ==0):
				$acess=0;
				break;
			case (strcasecmp($name, "last name") ==0):
				$acess=0;
				break;
			case (strcasecmp($name, "lastname") ==0):
				$acess=0;
				break;
			case (strcasecmp($name, "name") ==0):
				$acess=0;
				break;
			case (strcasecmp($name, "none") ==0):
				$acess=0;
				break;
			case (strcasecmp($name, "admin") ==0):
				$acess=0;
				break;
			case (strcasecmp($name, "Surname") ==0):
				$acess=0;
				break;
			case (strcasecmp($name, "Sur name") ==0):
				$acess=0;
				break;
			default:
				$acess=1;
				break;
		}
		if ($acess==0) 
		{
			echo "<br>Please Enter a valid Name";
		}
		elseif ($acess==1) 
		{

		}
		else
		{
			echo "some internal problem has occured please report it to admin.<br>Thanks for your corporation.";
		}
	}
else
{
	echo "some internal problem has occured please report it to admin.<br>Thanks for your corporation.";
		
}
?>

