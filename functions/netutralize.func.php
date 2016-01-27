<?php
	//netutralize.func.php

	/*
		a function to netutralize the data type submited by form or the urls
	*/

	function netutralize($data)
	{
		$data = trim($data);
  		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		$data = htmlentities($data);
		$data = mysqli_real_escape_string($data);
	}
?>

