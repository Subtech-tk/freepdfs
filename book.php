<?php 
include "core.php";
include_once "user/core.inc.php";
$ids=@$_GET['ref'];
$ids=htmlentities($ids);
if (loggedin()!=1) 
{
	header('location: index');
}
else
{ 
	if ((isset($ids)) && !empty($ids))
	{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--page for individual unverified books basic page-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="PDFs Books" />
<meta name="description" content="Free Pdfs to download" />
<link href="http://fonts.googleapis.com/css?family=Varela" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--out of main stream by admin / 12:55 PM 03-Jul-15 ist
	in main stream by admin / 20:05 PM 22-Jul-15 ist
-->

</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<?php include "header.php";?>
	</div>
	
	<?php
		$resultb=$connection->query("SELECT * FROM `upload_books` WHERE `upload_id`='$ids'");
		$rows=$resultb->fetch_array();	
			$id=$rows[0];
			$booktitle=$rows[1];
			$author=$rows[2];
			$publisher=$rows[3];
			$size=$rows[4];
			$bookbrefdesc=$rows[5];
			$bookdesc=$rows[6];
			$durl=$rows[7];
			$ilink=$rows[8];
			$uploader=$rows[11];
	?>

	<div id="featured">
		<div class="container">
			<div class="title">
				<h2><?php echo"$booktitle";?></h2>
				<span class="byline">
				<?php echo"A Book by $author";?></br>
				<?php echo"Published by $publisher";?></br></br>
				<?php echo"Size=$size MB";?></br></br>
				<?php echo"$bookdesc";?></br></span> 
			</div>
			<p><?php echo"$bookdesc";?></p>
		</div>
		<ul class="actions">
			<li><a href=<?php echo"#";?> class="button">Download Not Available</a></li>
		</ul>
	</div>
	<div id="page" class="container">
		<div class="title">
			<h2></h2>
			<span class="byline">this book is under verification process.</span> 
		</div>
	</div>
</div>

	<?php 
}
else
{
	include "header.php";
	include"error.php";
}

	include "footer.php";?>
</body>
</html>
<?php
}
?>