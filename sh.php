<?php include "core.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--main shelf basic page-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bookshelf</title>
<meta name="keywords" content="PDFs Books" />
<meta name="description" content="Free Pdfs to download" />
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

	<?php
		$result=$connection->query("SELECT DISTINCT `cat` FROM `books` ");
		$count=$result->num_rows;
		if ($count==0) 
		{
			include "error.php";
			include "footer.php";
			die();
		}
			$i=1;
		while ($rows=$result->fetch_array())
		{	
			$cat=$rows[0];
			
		if ($i%2!=0 && $i-1<$count)
		{
	?>

	<div id="featured">
		<div class="container">
			<div class="title">
				<h2><?php echo"$cat"?></h2>
				<span class="byline">Bookshelf <?php echo"$i"?></span> </div>
			<p>This Book shelf contains PDFs Books related to <?php echo"$cat"?></p>
		</div>
		<ul class="actions">
			<li><a href="<?php echo"sh_sub?cat=$cat"?>" class="button">Browse</a></li>
		</ul>
	</div>
	
	<?php 
		}
		elseif ($i%2==0 && $i-1<$count)
		{ 
	?>

	<div id="page" class="container">
		<div class="title">
			<h2><?php echo"$cat"?></h2>
			<span class="byline">Bookshelf <?php echo"$i"?></span> </div>
		<p>This Book shelf contains PDFs Bokks related to <?php echo"$cat"?></p>
		<ul class="actions">
			<li><a href="<?php echo"sh_sub?cat=$cat"?>" class="button">Browse</a></li>
		</ul>
	</div>
	
	<?php
		}
		$i++;
	}
	?>
	
</div>

	<?php include "footer.php";?>

</body>
</html>
