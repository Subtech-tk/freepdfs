<?php 
include_once "core.php";
include_once 'user/core.inc.php';
if (loggedin()!=1)
{
	header('location: index');
}
else
{
	//echo "$userid";	//for testing only
	$resultuser=$connection->query("SELECT `username`,`firstname`,`surname`,`status`,`level`,`emailid` 
		FROM `userdetail` WHERE `uniqueid`='$userid'");
	$rowsuser=$resultuser->fetch_array();
		$username=$rowsuser[0];
		$firstname=$rowsuser[1];
		$lastname=$rowsuser[2];
		$status=$rowsuser[3];
		$level=$rowsuser[4];
		$emailid=$rowsuser[5];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--userpage for users-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo "$username";?></title>
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
				<span class="byline"><?php echo "Welcome back <br/> <h2>$firstname $lastname</h2>";?></span>
			</div>
			<p>Plesae Verify your Email Id</p>
		</div>
	</div>
	<div id="featured">
		<div class="container">
			<?php
				if ($status=="active") 
				{
					echo "Crongrast you are a verified member <br/> No need for Verification.";
				}
				else 
				{
					include_once 'verify/verify_mail_form.php';
				}
			?>
		</div>
	</div>
	<!--<div id="page" class="container">
		<div class="title">
			<h2>About Us</h2>
			<span class="byline">We are the group of students.</span> </div>
		<p> </p>
		<ul class="actions">
			<li><a href="about.php" class="button">Know more</a></li>
		</ul>
	</div>-->
</div>
<div id="copyright" class="container">
	<?php include "footer.php";?>
</div>
</body>
</html>
<?php
}
?>