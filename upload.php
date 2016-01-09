<?php 	
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
				<h2>Upload</h2> 
				<span class="byline"></span>
			</div>
			<ul class="actions">
				<li><a href="<?php echo"upload_ins";?>" class="button">Upload here</a></li>
			</ul>
		</div>
	</div>
	<div id="extra" class="container">
		<div class="title">
			<h2>Uploaded Books</h2>
			<span class="byline">Below you found the books uploaded by you</span> 
		</div>
		<ul class="actions">
			<li><a href="upload_user_book_list" class="button">Books</a></li>
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
else 
{
	// if not loggedin 
	header('location: index');
	//include_once 'userpage_error_login.php';
}

?>