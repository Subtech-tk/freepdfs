<?php include "core.php";
$ids=@$_GET['ref'];
$head=$_POST['head'];
$comment=$_POST['comment'];
$ids=htmlentities($ids);
if ((isset($ids)) && !empty($ids))
{
?>
	
	<?php
		$resultb=$connection->query("SELECT * FROM `books` WHERE `id`='$ids'");
		$count_rows=$resultb->num_rows;
		if ($count_rows!=1) 
		{
			include "header.php";
			include"error.php";
		}
		else
		{
		$rows=$resultb->fetch_array();	
			$id=$rows[0];
			$booktitle=$rows[1];
			$size=$rows[5];
			$bookbrefdesc=$rows[6];
			$bookdesc=$rows[7];
			$durl=$rows[8];
			$burl=$rows[10];
			$preview=$rows[11];
			$sdurl=$rows[12];
			$author=$rows[13];
			$publisher=$rows[14];
			$uploader=$rows[15];

			// enabled on online site
		$resultb=$connection->query("SELECT * FROM `userdetail` WHERE `uniqueid`='$uploader'");
		$rowsuser=$resultb->fetch_array();
		$uploader_name=$rowsuser[1];
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--page for individual books basic page-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo "$booktitle";?></title>
<meta name="keywords" content=<?php echo "\" $booktitle, $author, $publisher\"";?> />
<meta name="description" content=<?php echo "\" $bookbrefdesc\"";?> />
<link href="http://fonts.googleapis.com/css?family=Varela" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--active page-->

</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<?php include "header.php";?>
	</div>


	<div id="banner">
		<div class="container">
			<div class="title">
				<h2><?php echo"$booktitle";?></h2>
			</div>
			<iframe src=<?php echo"'$preview'";?> width="840" height="980">
			</iframe>
		</div>
	</div>

	<div id="featured">
		<div class="container">
			<div class="title">
				<h2><?php echo"$booktitle";?></h2>
				<span class="byline">
				<?php echo"A Book by $author";?></br>
				<?php echo"Published by $publisher";?></br></br>
				<?php echo"Size=$size MB";?></br></br>
				<?php echo"$bookdesc";?></br></span> </div>
		</div>
		<ul class="actions">
			<li><a href=<?php echo"'$durl'";?> class="button">Download</a></li>
		</ul>
		<p><?php echo"<br/>We thanks $uploader_name for the above book ";?></p>
	</div>
	<!--<div id="page" class="container">
	<?php 
	//include_once "comment.php";
	?>
	</div>-->
	<div id="banner">
		<div class="container">
			<div class="title">
				<h2>Comments</h2>
			</div>
		</div>
	</div>
	<?php
		include_once "comment.php";
	?>
</div>
	
	<?php 
			}
}
else
{
	include "header.php";
	include"error.php";
}

	include "footer.php";

	?>
</body>
</html>
