<?php
	//checking the data entered for invalid data
		$acess=0;
	if (isset($head) && !empty($head)) 
	{
		$acess=1;
	}
	if (isset($comment) && !empty($comment)) 
	{
		$acess=1;
	}
	//echo "$head & <br/>$comment";	//for testing only
	$mysql_query_run=$connection->query("SELECT DISTINCT `comment` FROM `comments` WHERE `bookid`='$bid'");
	while ($rows=$mysql_query_run->fetch_array()) 
	{
		$com=$rows[0];
		if($com==$comment)
		{
			$acess=0;
			echo "Please Don't copy someones comment<br/>";
		}
	}
	//neutralizing the data 
	if ($acess==1) 
	{	
		$head=htmlentities($head);
		$comment=htmlentities($comment);
		$date=date('Y-m-d H:i:s');	//to get the current system date time.
		//	php insertion code
		$sql = "INSERT INTO `comments` (`cid`, `userid`, `bookid`, `cheadding`, `comment`, `date`) VALUES (NULL, '$uid', '$bid', '$head', '$comment', '$date');";
		
		include_once "user/core.inc.php";	//to get database acess

		$mysql_query_run=$connection->query($sql);	//data adding query
		if(!$mysql_query_run)
		{
			// error occurs
			echo "<br>Error writing data".@mysqli_error($connection);
		}
		else
		{	//sucess in adding the data.
			echo "Thank you for your comment";
			//header('location: $current_file');	//to refresh current page.
		}
	}
	else
	{
		echo "<br/>Some error has occur.<br> Please check the values. Might be some field left out.";
		include 'add_comment_form.php';
	}
?>