<?php
	include_once 'core.php';
	include_once 'user/core.inc.php';
	if (loggedin()==1) 
	{	$head=$_POST['head'];
		$comment=$_POST['comment'];
		$acess=1;
		if (isset($head) && isset($comment) )
		{
				if (!empty($head) && !empty($comment) ) 
				{
					include 'add_comment_script.php';
					//die(); //to kill rest of page
					//echo "some problem occurs<br/>";
				} 
				else 
				{
					echo "<br/>Some error has occur.<br> Please check the values. Might be some field left out. ";
					include 'add_comment_form.php';
				}
				
			
		} 
		else 
		{
			include 'add_comment_form.php';
		}
	
		
	} 
	else 
	{
		if ($countc==0) 
		{
			echo "<p>Be the first one to comment </p>";
		}
		echo "<hr></hr><br/>Please <a href=\"login.php\">login</a> to post comments";
	}
	
?>