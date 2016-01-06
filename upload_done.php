<?php 
	include "core.php";
	include_once "user/core.inc.php";

$tracker=$_GET['t'];
if (loggedin()!=1) 
{
	header('location: index');
}
else
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--upload page-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PDF Books</title>
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
				<h2>Thank You</h2>
				<span class="byline">We have got your submition of book.</span> 
			</div>
		</div>
	</div>
	<div id="featured">
		<div class="container">
			<div class="title">
				<span class="byline">We review it soon.</span> 
				<span class="byline">untill then u can track the staus via your upload list.</span>
			</div>
		</div>
	</div>
	<div id="page" class="container">
		<div class="title">
			<span class="byline">view your list</span> </div>
		<p> </p>
		<ul class="actions">
			<li><a href="upload_user_book_list" class="button">list</a></li>
		</ul>
	</div>
</div>
<div id="copyright" class="container">
	<?php include "footer.php";?>
</div>
</body>
</html>
<?php
}
?>