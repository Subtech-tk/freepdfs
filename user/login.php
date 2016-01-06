<?php
	include 'core.inc.php';
	include 'dbms/dbms_imp.php';
	if (loggedin()==1) 
	{
		include 'loggedin.php';
	} 
	else 
	{
		include 'form.html.php';
	}
	
	
?>