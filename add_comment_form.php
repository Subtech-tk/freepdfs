<?php 
include_once "user/core.inc.php";
include_once 'core.php';
	if ($countc==0) 
	{
		echo "<p>Be the first one to comment </p>";
	}
	?>	
					<br/>
				<form action="<?php echo "$current_file?ref=$bid";?>" method="post" >
				<fieldset>
					<input type="hidden" value="<?php echo "$uid" ?>" name="uid" size="3" maxlength="20">
					<input type="hidden" value="<?php echo "$bid" ?>" name="bid" size="3" maxlength="20">
				<fieldset>
					<legend>Heading:</legend>
					<input type="text" value="<?php echo "$head" ?>" name="head" size="70" maxlength="100">
				</fieldset>
				<fieldset>
					<legend>Comment:</legend>
					<textarea value="<?php echo "$comment" ?>" name="comment" cols="50" rows="10"><?php echo "$comment" ?></textarea>
				</fieldset>
					<br/>
					<input type="submit" name="Post" value="Post" size="7">
				</fieldset>
				</form>
<?php

?>