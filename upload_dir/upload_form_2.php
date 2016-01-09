<?php
	$url="$current_file?s=$acess&t=$tracker";
?>
<form action="<?php echo $url;?>" method="post" >
<fieldset>
<legend>submittion form part 2/3</legend>
	<?php
		if ((strcasecmp($cate,"other")==0)) // if category is other
		{
	?>
	<fieldset>
		<legend>Define a new category:</legend>
		<input type="text" value="<?php echo "$cate";?>" name="cate" size="30" maxlength="50">
	</fieldset>

	<fieldset>
		<legend>Define a new sub category:</legend>
		<input type="text" value="<?php echo "subcate";?>" name="subcate" size="30" maxlength="50">
	</fieldset>
	<?php
		}
		else
		{
	?>
		<input type="hidden" value="<?php echo "$cate";?>" name="cate" size="30" maxlength="50">
	<fieldset>
		<legend>select one of the following sub-category which is more appropiate:</legend>
		<select name="subcate" size="1">
			<option value="">Select</option>
		<?php
		$result=$connection->query("SELECT DISTINCT `subcat` FROM `books` WHERE `cat` LIKE '$cate'");
		while ($rows=$result->fetch_array())
		{	
			$sucat=$rows[0];
		?>
			<option value="<?php echo "$sucat";?>"><?php echo "$sucat";?></option>
		<?php
		}
		?>
			<option value="other">Others</option>
		</select>
	</fieldset>
	<?php
		}
		
	?>

	<fieldset>
		<legend>Briefly describe the book:</legend>
			<textarea value="<?php echo "$bdesc"?>" name="bdesc" cols="30" rows="10">
				<?php echo "$bdesc" ?></textarea>
	</fieldset>

	<fieldset>
		<legend>What is the download Link?:</legend>
		<input type="text" value="<?php echo "$dlink"?>" name="dlink" size="30" maxlength="50">
	</fieldset>


	<fieldset>
		<legend></legend>
		<input type="submit" name="submit" value="Continue to next Part" size="20">
	</fieldset>

</fieldset>
</form>

