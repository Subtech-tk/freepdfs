<?php
	$btitle=$_POST['btitle'];
	$author=$_POST['author'];
	$publ=$_POST['publ'];
	$size=$_POST['size'];
	$cate=$_POST['category'];
	$acess=0;
	if (isset($btitle) && isset($author) && isset($publ) && isset($size) && isset($cate))
	{
		$acess=0;
		if (!empty($btitle) && !empty($author) && !empty($publ) && !empty($size) && !empty($cate))
		{
			$acess=1;
			$add_acess=1;
			if ((strcasecmp($cate,"other")!=0)) 
			{	//search based on category only.
				// to check in upload table
				$check_query="SELECT * FROM `upload_books` WHERE `cat`='$cate'";
				$mysql_query_check=$connection->query($check_query);
				
				while ($rows_check_query=$mysql_query_check->fetch_array()) 
				{
					$btilte_dbms=$rows_check_query[1];
					$author_dbms=$rows_check_query[2];
					$publ_dbms=$rows_check_query[3];
					$size_dbms=$rows_check_query[4];

					if ((strcasecmp($btitle,$btilte_dbms)==0) && (strcasecmp($author,$author_dbms)==0) 
						&& (strcasecmp($publ,$publ_dbms)==0) && (strcasecmp($size,$size_dbms)==0)) 
					{
						$add_acess=0;
						$acess=0;
						echo "Book already uploaded by some one and in the process of verification.";
						break;
					}
				}
				// to check in main table
				$check_query="SELECT * FROM `books` WHERE `cat`='$cate'";
				$mysql_query_check=$connection->query($check_query);

				while ($rows_check_query=$mysql_query_check->fetch_array()) 
				{
					$btilte_dbms=$rows_check_query[1];
					$author_dbms=$rows_check_query[2];
					$publ_dbms=$rows_check_query[3];
					$size_dbms=$rows_check_query[4];

					if ((strcasecmp($btitle,$btilte_dbms)==0) && (strcasecmp($author,$author_dbms)==0) 
						&& (strcasecmp($publ,$publ_dbms)==0) && (strcasecmp($size,$size_dbms)==0)) 
					{
						$add_acess=0;
						$acess=0;
						echo "Book already exist in our database.<br/> Thankyou for your concern";
						break;
					}
				}
			}
			else
			{	//that means category is other
				$add_acess=1; 	//can be added in database.
			}
			if ($add_acess==1) 
			{
				// adding partial data in database.
				$tracker=rand(100000000,9999999999);
				// checking wether tracker exist or not.
				check:
				$check_query="SELECT `tracker` FROM `upload_books`";
				$mysql_query_check=$connection->query($check_query);
				while ($rows_check_query=$mysql_query_check->fetch_array())
				{
					$tracker_dbms=$rows_check_query[0];
					if ($tracker==$tracker_dbms) 
					{
						$tracker=rand(100000000,9999999999);
						goto check;
					}
				}

				$insert_query="INSERT INTO `upload_books`(`upload_id`, `book name`, `author`, `publisher`, 
					`size`, `bref`, `description`, `durl`, `image`, `cat`, `subcat`, `uploader id`, 
					`verifier id`, `comment`,`final id`, `verification status`,`tracker`) 
				VALUES ('','$btitle','$author','$publ','$size','','','','','$cate','','$userid',
					'','','','unverified','$tracker')";
				
				$mysql_query_run=$connection->query($insert_query);		//inserting into database
				if(!$mysql_query_run)		// if error occurs
				{
					echo "<br>Error writing data".@mysqli_error($connection);
				}
				else 	// if no error
				{
					header("location: upload_form?s=$acess&t=$tracker");
				}
			}

		}
		else
		{
			echo "Please Check some field might be Left out.";
			$acess=0;
			include "upload_form_1.php";
		}
	} 
	else 
	{	
		$default=1;
		include 'upload_default.php';
		include "upload_form_1.php";
	}
?>
