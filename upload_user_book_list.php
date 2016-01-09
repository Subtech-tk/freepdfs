<?php 	//list
include "core.php";
include_once 'user/core.inc.php';
if (loggedin()==1) 
{	//to display only if user is loggind
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--upload page-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PDF Books upload section</title>
<meta name="keywords" content="PDFs Books" />
<meta name="description" content="Free Pdfs to download" />
<link href="http://fonts.googleapis.com/css?family=Varela" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<?php include "header.php";?>
	</div>
	<div id="banner">
		<div class="container">
			<div class="title">
				<h2>Verified Books</h2> 
				<span class="byline">These are the PDF's uploaded by you and got verified.</span>
			</div>
		</div>
	</div>
	<?php
		include_once 'upload_dir/upload_user_book_list_verified.php';
	?>
	<div id="banner">
		<div class="container">
			<div class="title">
				<h2>non-verified Books</h2> 
				<span class="byline">These are the PDF's uploaded by you and under verification proces.</span>
			</div>
		</div>
	</div>
	<?php
		include_once 'upload_dir/upload_user_book_list_unverified.php';
	?>
</div>
<div id="copyright" class="container">
	<?php include "footer.php";?>
</div>
</body>
</html>
<?php
} 
else 
{
	include_once 'userpage_error_login.php';
}

?>