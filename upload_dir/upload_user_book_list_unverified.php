<?php
// showas the books uploaded by user.
include_once 'core.php';
include_once 'user/core.inc.php';
if (loggedin()==1) 
{	//to display only if user is loggind

//$bid=$ids; 	//bookid
//$bid=1;	//only for testing
$uid=$userid;	//userid
//$uid=1;	//only for testing
	//echo "in comment_ins.php";

		$result=$connection->query("SELECT `upload_id`,`book name`,`bref` FROM `upload_books` WHERE `uploader id`='$uid'");	//query to get 
		//book uploades by user from the upload table i.e unverified books
		$count=$result->num_rows;
		//echo "count is $countc";
		if ($count==0) 	//if no book is uploaded
		{	
			?>
				<div id="featured">
					<div class="container">
						<span class="byline">Sorry You dont have any book in this list</span><br/>
						<span class="byline">OR <br/> You Havent Uploaded any books</span> <!--no verifed books-->
					</div>
					<ul class="actions">
						<li><a href="upload.php" class="button">Upload a Book</a></li>
					</ul>
				</div>
			<?php
		}
		else
	{		
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
							<span class="byline"></span> 
						</div>
						<p><?php echo"$bookbrefdesc";?></p>
					</div>
					<ul class="actions">
						<li><a href="<?php echo"book.php?ref=$id"?>" class="button">Description</a></li>
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
					<p> <?php echo"$bookbrefdesc";?></p>
					<ul class="actions">
						<li><a href="<?php echo"book.php?ref=$id"?>" class="button">Description</a></li>
					</ul>
				</div>
			<?php
				}
				$i++;
			}
	}
}
else
{
	include "userpage_error_login.php";
}
?>
