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
		public $comment_heading;	// comment heading
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
				$this->comment_heading=$rows[3];
				$this->comment=$rows[4];
				$this->dated=$rows[5];

			 //close the database connection 
            mysqli_close($connection);

            // to get user details 
        	$this->get_user($this->userid);
		}
	}
?>