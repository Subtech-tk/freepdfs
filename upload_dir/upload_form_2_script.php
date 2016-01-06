<?php

	$cate1=$_POST['cate'];
	$subcate=$_POST['subcate'];
	$bdesc=$_POST['bdesc'];
	$dlink=$_POST['dlink'];
			
	$acess=1;
	if (isset($cate1) && isset($subcate) && isset($bdesc) && isset($dlink))
	{
		$acess=1;
		if (!empty($cate1) && !empty($subcate) && !empty($bdesc) && !empty($dlink))
		{
			$acess=2;
			$sql = "UPDATE `upload_books` SET `bref` = '$bdesc', `durl` = '$dlink', `cat`='$cate1', 
			`subcat`='$subcate' WHERE `tracker` = '$tracker'";
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
			$acess=1;
			include "upload_form_2.php";
		}
	} 
	else 
	{	
		$default=2;
		include 'upload_default.php';
		include "upload_form_2.php";
	}
?>

