<?php
include_once 'core.php';
$bid=$ids; 	//bookid
//$bid=1;	//only for testing
$uid=$userid;	//userid
//$uid=1;	//only for testing
	//echo "in comment.php";
		$resultc=$connection->query("SELECT * FROM `comments` WHERE `bookid`='$bid'");
		$countc=$resultc->num_rows;
		//echo "count is $countc";
		if ($countc==0) 
		{	
			//include "add_comment.php";
			?>
				<div id="featured">
					<div class="container">
						<?php include "add_comment.php"; ?>
					</div>
				</div>
			<?php
		}
		else
	{		
		$i=1;
		while ($rows=$resultc->fetch_array())
		{	
			$cid=$rows[0];
			$user=$rows[1];
			//$book=$rows[2];
			$comh=$rows[3];
			$com=$rows[4];
			$date=$rows[5];

			$resultcu=$connection->query("SELECT * FROM `userdetail` WHERE `uniqueid`='$user'");
			$rowsuser=$resultcu->fetch_array();
			$uploader_name=$rowsuser[1];
			/*<span class="byline"><?php echo "$comh";?></span><br/>
			<!--<span class="byline" aling="left"><?php //echo "$date";?></span>-->
			<span class="byline"><br/><?php echo "by - $uploader_name";?></span> 
			</div>
			<p><?php echo "$com";?></p>*/
			if ($i%2!=0 && $i-1<$countc)
			{
	?>
		<div id="featured">
			<div class="container">
				<div class="title">
					<span class="byline"><?php echo "$comh";?></span> 
					<span class="byline"><br/><?php echo "by - $uploader_name";?></span>
				</div>
				<p><?php echo "$com";?></p>
			</div>
		</div>

	<?php
			}
		elseif ($i%2==0 && $i-1<$countc) 
		{
	?>

		<div id="page" class="container">
			<div class="title">
				<div class="title">
					<span class="byline"><?php echo "$comh";?></span> 
					<span class="byline"><br/><?php echo "by - $uploader_name";?></span>
				</div>
				<p><?php echo "$com";?></p>
			</div>
		</div>
		<?php
			}
			$i++;
		}
		
		if ($i%2!=0) 
		{
			?>
				<div id="featured">
					<div class="container">
						<span class="byline">Add new comment</span>
						<?php include "add_comment.php"; ?>
					</div>
				</div>
			<?php
		} 
		else 
		{
			?>
				<div id="page" class="container">
					<div class="title">
						<span class="byline">Add new comment</span>
						<?php include "add_comment.php"; ?>
					</div>
				</div>
			<?php
		}
			
		//include "add_comment.php";
	}
?>
