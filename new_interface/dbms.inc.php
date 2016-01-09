<?php
	//dbms acess
	

	function connect_to_db()
	{
		$mysql_host="localhost";
		$mysql_username="root";
		$mysql_password="";
		$mysql_database="book";

		$con=0; 	// let suppose connection is establised

		$connect=mysqli_connect($host,$username,$password);
		if (!$connect) 
		{
			echo "Unable to connect to database server";
			
			$con=1;	// $con=1 means connection is not established					
		}

		$mysql_database_connection=mysqli_select_db($connect,$mysql_database);
		if (!$mysql_database_connection) 
		{
			echo "Unable to locate database";

			$create_database_query="CREATE DATABASE $mysql_database";
			
			$create_database=mysqli_query($connect, $create_database_query);
			if (!$create_database) 
			{
				echo "Unable to create database = $mysql_database <br> error = ".mysqli_error($connect);

				$con=2;
			}
		}

		$mysql_charset=mysql_set_charset($connect,'utf8')
		if (!$mysql_charset) 
		{
			echo "Unable to set charset";

			$con=3;
		}

	}
?>