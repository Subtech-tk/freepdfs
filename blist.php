<?php include "core.php";
$subcat=@$_GET['tag'];
$subcat=htmlentities($subcat);
if ((isset($subcat)) && !empty($subcat))
{

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--list of books basic page-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sub shelf <?php echo " -$subcat";?></title>
<meta name="keywords" content=<?php echo "\"$subcat\"";?> />
<meta name="description" content=<?php echo "\"Contains Books related to $subcat\"";?> />
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
		$result=$connection->query("SELECT `id`,`name`,`bref` FROM `books` WHERE `subcat`='$subcat' ORDER BY `name` ASC");
		$count=$result->num_rows;
		if ($count==0) 
		{
			include "error.php";
		}
			$i=1;
		while ($rows=$result->fetch_array())
		{	
			$id=$rows[0];
			$booktitle=$rows[1];
			$bookbrefdesc=$rows[2];
		if ($i%2!=0 && $i-1<$count)
		{
	?>
	<div id="featured">
		<div class="container">
			<div class="title">
				<h2><?php echo"$booktitle"?></h2>
				<span class="byline"></span> </div>
			<p><?php echo"$bookbrefdesc";?> </br> Have fun :) </p>
		
		</div>
		<ul class="actions">
			<li><a href="<?php echo"bookembed?ref=$id"?>" class="button">Download</a></li>
		</ul>
	</div>
	<?php 
		}
		elseif ($i%2==0 && $i-1<$count)
		{ 
		?>
	<div id="page" class="container">
		<div class="title">
			<h2><?php echo"$booktitle"?></h2>
			<span class="byline"></span></div>
		<p> <?php echo"$bookbrefdesc";?> </br> Have fun :) </p>
		<ul class="actions">
			<li><a href="<?php echo"bookembed?ref=$id"?>" class="button">Download</a></li>
		</ul>
	</div>
	<?php
		}
		$i++;
	}
}
else
{
	include "header.php";
	include"error.php";
}

	?>
</div>
	<?php include "footer.php";?>
</body>
</html>