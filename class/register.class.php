<?php
	//register.class.php

	include_once 'traits/password.trait.php';
	/*
		it is class used for the registration of user
	*/
	class ClassName extends user
	{
		
		// including password trait methods
		use password;

		function __construct(argument)
		{
			# code...
		}

		public function neutralize()	// function to neutralize the data
		{
			# code...
		}

		public function add()			// function to add data to database without password
		{
			# code...
		}

		public function get_userid()	// function to get userid back
		{
			# code...
		}

		public function add_password()	// function to add the password to corresponding userid
		{
			# code...
		}
	}
?>