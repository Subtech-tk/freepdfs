<?php
	include_once 'core.php';
	//echo "$current_file";
	$resultuser=$connection->query("SELECT `firstname` FROM `userdetail` WHERE `uniqueid`='$userid'");
	$rowsuser=$resultuser->fetch_array();
		$fname=$rowsuser[0];

if(isset($_SESSION['id']))
{
	$logintab="Log out";
	$loginpage="user/logout";
	$usertab="$fname";
	$userpage="userpage";
}
else
{
	$logintab="Login";
	$loginpage="login";
	$usertab="Contact Us";
	$userpage="contactus";
}
?>
<?php //echo "$logintab";?>
<?php //echo "$loginpage";?>
<?php //echo "$usertab";?>
<?php //echo "$userpage";?>
<link href="http://fonts.googleapis.com/css?family=Varela" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

	<div id="header" class="container">
		<div id="logo">
			<h1><a href="index"><em><big>freepdf's</big></em><sub><small>beta</small></sub></a></h1>
		</div>
		<div id="menu">
			<ul>
				<?php 
					if (strcmp($current_file,"/book/index.php")==0) 
						{
				?>
				<li <?php echo 'class="current_page_item"'?>><a href="index" accesskey="1" title="Home">Home</a></li>
				<li ><a href="<?php echo"$basicshelfs";?>" accesskey="2" title="BookShelfs">BookShelfs</a></li>
				<li ><a href="instruction" accesskey="3" title="Instructions">Instructions</a></li>
				<li ><a href="<?php echo "$userpage";?>" accesskey="4" title="<?php echo "$usertab";?>"><?php echo "$usertab";?></a></li>
				<li ><a href="<?php echo "$loginpage";?>" accesskey="5" title="<?php echo "$logintab";?>"><?php echo "$logintab";?></a></li>
				<?php
						}
					elseif (strcmp($current_file,"/book/sh.php")==0) 
					{
				?>
				<li ><a href="index" accesskey="1" title="Home">Home</a></li>
				<li <?php echo 'class="current_page_item"'?>><a href="sh" accesskey="2" title="BookShelfs">BookShelfs</a></li>
				<li ><a href="instruction" accesskey="3" title="Instructions">Instructions</a></li>
				<li ><a href="<?php echo "$userpage";?>" accesskey="4" title="<?php echo "$usertab";?>"><?php echo "$usertab";?></a></li>
				<li ><a href="<?php echo "$loginpage";?>" accesskey="5" title="<?php echo "$logintab";?>"><?php echo "$logintab";?></a></li>
				<?php
						}
					elseif ($current_file=="/book/instruction.php") 
					{
				?>
				<li ><a href="index" accesskey="1" title="Home">Home</a></li>
				<li ><a href="sh" accesskey="2" title="BookShelfs">BookShelfs</a></li>
				<li <?php echo 'class="current_page_item"'?>><a href="instruction" accesskey="3" title="Instructions">Instructions</a></li>
				<li ><a href="<?php echo "$userpage";?>" accesskey="4" title="<?php echo "$usertab";?>"><?php echo "$usertab";?></a></li>
				<li ><a href="<?php echo "$loginpage";?>" accesskey="5" title="<?php echo "$logintab";?>"><?php echo "$logintab";?></a></li>
				<?php
						}
					elseif ($current_file=="/book/$userpage.php") 
					{
				?>
				<li ><a href="index" accesskey="1" title="Home">Home</a></li>
				<li ><a href="sh" accesskey="2" title="BookShelfs">BookShelfs</a></li>
				<li ><a href="instruction" accesskey="3" title="Instructions">Instructions</a></li>
				<li <?php echo 'class="current_page_item"'?>><a href="<?php echo "$userpage";?>" accesskey="4" title="<?php echo "$usertab";?>"><?php echo "$usertab";?></a></li>
				<li ><a href="<?php echo "$loginpage";?>" accesskey="5" title="<?php echo "$logintab";?>"><?php echo "$logintab";?></a></li>
				<?php
						}
					elseif ($current_file=="/book/login.php") 
					{
				?>
				<li ><a href="index" accesskey="1" title="Home">Home</a></li>
				<li ><a href="sh" accesskey="2" title="BookShelfs">BookShelfs</a></li>
				<li ><a href="instruction" accesskey="3" title="Instructions">Instructions</a></li>
				<li ><a href="<?php echo "$userpage";?>" accesskey="4" title="<?php echo "$usertab";?>"><?php echo "$usertab";?></a></li>
				<li <?php echo 'class="current_page_item"'?>><a href="<?php echo "$loginpage";?>" accesskey="5" title="<?php echo "$logintab";?>"><?php echo "$logintab";?></a></li>
				<?php
						}
					else
						{
				?>
				<li ><a href="index" accesskey="1" title="Home">Home</a></li>
				<li ><a href="sh" accesskey="2" title="BookShelfs">BookShelfs</a></li>
				<li ><a href="instruction" accesskey="3" title="Instructions">Instructions</a></li>
				<li ><a href="<?php echo "$userpage";?>" accesskey="4" title="<?php echo "$usertab";?>"><?php echo "$usertab";?></a></li>
				<li ><a href="<?php echo "$loginpage";?>" accesskey="5" title="<?php echo "$logintab";?>"><?php echo "$logintab";?></a></li>
				<?php
						}
				?>
			</ul>
		</div>
	</div>