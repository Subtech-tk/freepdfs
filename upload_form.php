<?php //this is the upload form page
include_once "core.php";
include_once "user/core.inc.php";

$acess=$_GET['s'];
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
<title>PDF Books Form Submition</title>
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
				<h2></h2> 
				<span class="byline">Please fill the following form Carefully</span>
			</div>
		</div>
	</div>
<?php

	if ($acess==1) 
	{
?>
	<div id="featured">
		<div class="container">
		<?php 
			$check_query="SELECT * FROM `upload_books` WHERE `tracker`='$tracker'";
			$mysql_query_check=$connection->query($check_query);
			$rows_check_query=$mysql_query_check->fetch_array();
			$btitle=$rows_check_query[1];
			$author=$rows_check_query[2];
			$publ=$rows_check_query[3];
			$size=$rows_check_query[4];
			$cate=$rows_check_query[9];
			echo "Book Title : $btitle <br/> Author : $author <br/> Publication : $publ <br/>
				size : $size MB";
			if ((strcasecmp($cate,"other")!=0)) 
			{
				echo "<br/>Category : $cate";
			}
		?>
		</div>
	</div>
	<div id="page" class="container">
		<?php include 'upload_dir/upload_form_2_script.php';?>
	</div>
<?php
	} 
	elseif ($acess==2)
	{
?>
	<div id="featured">
		<div class="container">
	<?php 
		$check_query="SELECT * FROM `upload_books` WHERE `tracker`='$tracker'";
		$mysql_query_check=$connection->query($check_query);
		$rows_check_query=$mysql_query_check->fetch_array();
			$btitle=$rows_check_query[1];
			$author=$rows_check_query[2];
			$publ=$rows_check_query[3];
			$size=$rows_check_query[4];
			$cate=$rows_check_query[9];
			$subcate=$rows_check_query[10];
			$dlink=$rows_check_query[7];
			$bdesc=$rows_check_query[5];
		echo "Book Title : $btitle <br/> Author : $author <br/> Publication : $publ <br/>
				size : $size MB";
	?>
		</div>
	</div>

	<div id="page" class="container">
	<?php 
		echo "Category : $cate <br/> Sub-Category : $subcate <br/> Download link : $dlink <br/> $bdesc";
	?>
	</div>

	<div id="featured">
		<div class="container">
	<?php 
		include 'upload_dir/upload_form_3_script.php';
	?>
		</div>
	</div>

<?php
	}
	elseif ($acess==0)
	{
?>
	<div id="featured">
		<div class="container">
		<?php include 'upload_dir/upload_form_1_script.php';?>
		</div>
	</div>
<?php
	}
	elseif ($acess==3)
	{
?>
	<div id="featured">
		<div class="container">
	<?php 
		$check_query="SELECT * FROM `upload_books` WHERE `tracker`='$tracker'";
		$mysql_query_check=$connection->query($check_query);
		$rows_check_query=$mysql_query_check->fetch_array();
			$btitle=$rows_check_query[1];
			$author=$rows_check_query[2];
			$publ=$rows_check_query[3];
			$size=$rows_check_query[4];
			$cate=$rows_check_query[9];
			$subcate=$rows_check_query[10];
			$dlink=$rows_check_query[7];
			$bdesc=$rows_check_query[5];
			$desc=$rows_check_query[6];
			$ilink=$rows_check_query[8];
		echo "Book Title : $btitle <br/> Author : $author <br/> Publication : $publ <br/>
				size : $size MB";
	?>
		</div>
	</div>

	<div id="page" class="container">
	<?php 
		echo "Category : $cate <br/> Sub-Category : $subcate <br/> Download link : $dlink <br/> $bdesc";
	?>
	</div>

	<div id="featured">
		<div class="container">
	<?php 
		echo "$desc <br/> image link : $ilink";
		$url="$current_file?s=$acess&t=$tracker";
	?>
		</div>
		<ul class="actions">
			<li><a href="upload_done.php" class="button">Submit & Continue</a></li>
		</ul>
	</div>

<?php
	}
?>
</div>
<div id="copyright" class="container">
	<?php include "footer.php";?>
</div>
</body>
</html>
<?php
}
?>