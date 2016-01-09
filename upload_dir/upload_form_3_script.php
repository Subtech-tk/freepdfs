<?php

	$subcate1=$_POST['subcate'];
	$desc=$_POST['desc'];
	$ilink=$_POST['ilink'];
			
	$acess=2;
	if (isset($subcate1) && isset($desc)  && isset($ilink))
	{
		$acess=2;
		if (!empty($subcate1) && !empty($desc)  && !empty($ilink))
		{
			$acess=3;
			$sql = "UPDATE `upload_books` SET `description` = '$desc', `image` = '$ilink', 
			`subcat`='$subcate1' WHERE `tracker` = '$tracker'";
			$mysql_query_run=$connection->query($sql);		//inserting into database
			if(!$mysql_query_run)		// if error occurs
			{
				echo "<br>Error writing data".@mysqli_error($connection);
			}
			else 	// if no error
			{
				header("location: upload_form?s=$acess&t=$tracker");
			}
		}
		else
		{
			echo "Please Check some field might be Left out.";
			$acess=2;
			include "upload_form_3.php";
		}
	} 
	else 
	{	
		$default=3;
		include 'upload_default.php';
		include "upload_form_3.php";
	}
?>

