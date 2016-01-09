<?php
	include 'core.inc.php';
	session_destroy();
	//header('location: '.$http_referer); 	//to redirect to current page
	//echo "logout sucess";		//for testing only
	//echo "<br/> $current_file";		//for testing only
	//echo "<br/> $http_referer";		//for testing only
	/*if ( ($http_referer=="http://localhost/book/userpage.php") || 
		 ($http_referer=="http://localhost/book/verify_mail.php") )
	{
		header('location: ../index.php');
	} 
	else 
	{
		header('location: '.$http_referer);
	}*/
		//	http://localhost/book/userpage

 	if (strcmp($http_referer,"http://localhost/book/userpage")==0)
 	{
 		header('location: ../index');
 	}
 	elseif (strcmp($http_referer,"http://localhost/book/verify_mail")==0)
 	{
 		header('location: ../index');
 	}
 	else
 	{
 		header('location: '.$http_referer);
 	}
 ?>