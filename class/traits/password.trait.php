<?php
	// password.trait.php
	
	/*
		password hashing function to be used with the classes only
		note-it is not recommended to used without class
		
		it have two functions one to generate hash and other to compare it
	
	*/
	trait Password
	{
		public function password_hash_gen_old($password)
		{
			return md5($password);
		}

		public function password_hash_gen($email,$password,$uid)
		{
			$password_hash="$email.$password";
			for ($i=0; $i < $uid%10 ; $i++) 
			{ 
				$password_hash=md5($password_hash);
			}
			unset($password);
			return $password_hash;
		}

		public function password_hash_comp($email,$password)
		{
			include 'dbms/dbms_imp.php';
			$query_run=$connection-> query("SELECT `uniqueid`,`password` FROM `userdetail` WHERE `emailid`='$email'");	
			mysqli_close($connection);
			$row=$query_run->fetch_array();
			//echo $row[0]."<br/>".$row[1]."<br/>".$email."</br>".$password."<br/>".$this->password_hash_gen_old($password)."<br/>".md5($password);
			if ($row[1]==$this->password_hash_gen($email,$password,$row[0])) 
			{
				return true;
			} 
			else if ($row[1]==$this->password_hash_gen_old($password))	// to preserve backward compactibility 
			{
				return true;
			} 
			else 
			{
				return false;
			}
			
		}
	}

?>

