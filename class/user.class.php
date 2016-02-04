<?php
	//user class
	/*
		user base class

		contains the details of the user specified by the id

		Table structure for table userdetail

		|-------------------------------------------|
		|Column		|Type		|Null	|Default 	|
		|-------------------------------------------|
		|uniqueid	|int(11)	|No		|			|
		|username	|varchar(40)|No		|			|
		|password	|varchar(33)|No		|			|
		|emailid	|varchar(50)|No		|			|
		|firstname	|varchar(40)|No		|			|
		|surname	|varchar(40)|No		|			|
		|gender		|varchar(2)	|No		|			|
		|dob		|date 		|No		|			|
		|status		|varchar(20)|No		|			|
		|level		|varchar(10)|No		|user 		|
		|-------------------------------------------|


	*/
	class user 
	{
		public $uid;		// user id
		public $username;	// user username
		public $email;		// user email
		public $fname;		// user first name
		public $lname;		// user last name
		public $gender;		// user gender
		public $dob;		// user data-of-birth
		public $status;		// user status
		public $level; 		// user level

		public function get_user($id)
		{
			
			// opening the database connection 
			include 'dbms/dbms_imp.php';

			$uid=$id;
			$resultb=$connection->query("SELECT * FROM `userdetail` WHERE `uniqueid`='$id'");
            $rowsuser=$resultb->fetch_array();
            $this->username=$rowsuser[1];
            $this->email=$rowsuser[3];
            $this->fname=$rowsuser[4];
            $this->lname=$rowsuser[5];
            $this->gender=$rowsuser[6];
            $this->dob=$rowsuser[7];
            $this->status=$rowsuser[8];
            $this->level=$rowsuser[9];

            //close the database connection 
            mysqli_close($connection);
		}
	}
?>