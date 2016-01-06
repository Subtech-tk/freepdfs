<?php
	//ini_set('display_errors','0');	//to be set active when site goes live
	include '/dbms/dbms_imp.php';
	ob_start();
	@session_start();
	$current_file=$_SERVER['SCRIPT_NAME'];
	$http_referer=@$_SERVER['HTTP_REFERER'];

	function loggedin(){
		if (isset($_SESSION['id']) && !empty($_SESSION['id']))
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	$userid=$_SESSION['id'];
	//echo "$userid";
	
	/*	not in use
	function getuserfield($field, $uid)
	{
		$query="SELECT `$field` FROM `userdetail` WHERE `uniqueid`='$uid'";
		//if ($query_run=mysqli_query($link,$query)) 	// older one
		//include_once './dbms/dbms_imp.php';
		$query_run=$connection->query($query);	//new one
		if ($query_run) 	
		{
			//if ($query_result=mysql_result($query_run, 0, $field))	// older one
			if ($query_result=$query_run->fetch_array())	//new one
			{
				return $query_result;
			}
		} 
		else 
		{
			echo "error in doing querry ".mysqli_error($connection);
		}
		
	}
	*/
?>