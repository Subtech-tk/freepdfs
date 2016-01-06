<?php
if ($mail_sent) 
{
	$insert_query="INSERT INTO `verify_user_mail` (`verfication_id`, `userid`, `code`) 
		VALUES ('','$userid','$code')";

	$mysql_query_run=$connection->query($insert_query);		// excuting query
	if(!$mysql_query_run)
	{
		// error occurs
		echo "<br>Error writing data".@mysqli_error($connection);
	}
	else
	{
		echo "A mail contaning the verification code is sent to your mailid : $emailid \n
		Please check your mail.";
	}

}
else 
{
	echo "Problem with mail verification. \n Please wait for our admin to reply to you.";
}

?>