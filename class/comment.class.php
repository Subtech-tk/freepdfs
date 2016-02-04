<?php
	// comment.class.php

	/*
		this is comment class  
	*/
	class comment extends user
	{
		public $cid;				// comment id
		public $userid;				// user who commented
		public $bookid;				// book on which comment is done
		public $comment;			// comment text
		public $dated;				// commnet dated

		public function __construct($ids)
		{
			// opening the database connection 
			include 'dbms/dbms_imp.php';
			
			$this->cid=$ids;
			
			$resultc=$connection->query("SELECT * FROM `comments` WHERE `cid`='$ids'");
			
			$rows=$resultc->fetch_array();

				$this->userid=$rows[1];
				$this->bookid=$rows[2];
				$this->comment=$rows[3];
				$this->dated=$rows[4];

			 //close the database connection 
            mysqli_close($connection);

            // to get user details 
        	$this->get_user($this->userid);
		}

		public function get_comment($bid,$com)
		{
			$this->userid=$_SESSION['user'];
			$this->bookid=$bid;
			$this->comment=$com;
			$this->dated=date('Y-m-d H:i:s');	//to get the current system date time r will give day date time and timezone.
		}

		public function check_exist()
		{
			# code...
			// add the code to check wether the comment exist or not
		}

		public function add_comment()
		{
			$sql = "INSERT INTO `comments` (`cid`, `userid`, `bookid`, `comment`, `date`) 
				VALUES ('', '$this->userid', '$this->bookid', '$this->comment', '$this->dated');";

			include 'dbms/dbms_imp.php';
			$mysql_query_run=$connection->query($sql);	//data adding query
			if (!$mysql_query_run) 
			{
				echo "Error adding the comment".mysqli_error($connection);
			}
			mysqli_close($connection);

			$current_file=$_SERVER['SCRIPT_NAME'];
			header('location:'.$current_file.'?ref='.$this->bookid); 	//to redirect to current page
		}
	}
?>