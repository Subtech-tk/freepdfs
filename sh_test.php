<?php include "core.php";
$cat=$_GET['cat'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--Shelf inside shelf basic page-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bookshelf<?php echo "$cat";?></title>
<meta name="keywords" content=<?php echo "$cat";?> />
<meta name="description" content=<?php echo "Contains Books related to $cat";?> />
<link href="http://fonts.googleapis.com/css?family=Varela" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--inactive page only for testing-->

</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<?php include "header.php";?>
	</div>
	<?php
		$result=$connection->query("SELECT DISTINCT `subcat` FROM `books` WHERE `cat` LIKE '%$cat%'");
		$count=$result->num_rows;
			$i=1;
		$count=$count++;
		while ($rows=$result->fetch_array())
		{	
			$subcat=$rows[0];
		if ($i%2!=0 && $i-1<$count)
		{
	?>
	<div id="featured">
		<div class="container">
			<div class="title">
				<h2>Sub Bookshelf <?php echo "$i";?></h2>
				<span class="byline"><?php echo "$subcat";?></span> </div>
			<p>Contains Books related to <?php echo "$subcat";?> topics. 
			</p>
		</div>
		<ul class="actions">
			<li><a href="<?php echo"blist.php?tag=$subcat"?>" class="button">Browes</a></li>
		</ul>
	</div>

	<?php
		}
		elseif ($i%2==0 && $i-1<$count) 
		{
	?>

	<div id="page" class="container">
		<div class="title">
			<h2>Sub Bookshelf <?php echo "$i";?></h2>
			<span class="byline"><?php echo "$subcat";?></span> </div>
		<p>Contains Books related to <?php echo "$subcat";?> topics.</p>
		<ul class="actions">
			<li><a href="#" class="button">Browse</a></li>
		</ul>
	</div>
	<?php
		}
		$i++;
	}
	?>
</div>
<div id="copyright" class="container">
	<?php include "footer.php";?>
</div>
</body>
</html>
