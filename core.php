<?php
//ini_set('display_errors','0');	//to be set active when site goes live
// core file must be include in all pages
include "dbms/dbms_imp.php";
//@ob_start();
@session_start();
$current_file=$_SERVER['SCRIPT_NAME'];
$http_referer=@$_SERVER['HTTP_REFERER'];
	//default values
	$booktitle="book title";
	$bookbrefdesc="here goes the brief description of the book";
	$bookdesc="here goes the description of the book";
	$link="testlink";
	$note="inactive";
	$tag="tag";
	$blink="book";
	$note="inactive";
	
//echo $current_file;

	$basicshelfs="sh";
	$userid=$_SESSION['id'];
	$head="Title of comment";
	$comment="Comment goes here";
?>