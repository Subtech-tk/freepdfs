<?php
	$url="$current_file?s=$acess&t=$tracker";
?>
<form action="<?php echo $url;?>" method="post" >
<fieldset>
<legend>submittion form part 3/3</legend>
	<?php
		if ((strcasecmp($subcate,"other")==0)) 
		{
	?>
	<fieldset>
		<legend>Define a new sub category:</legend>
		<input type="text" value="<?php echo "subcate";?>" name="subcate" size="30" maxlength="50">
	</fieldset>
	
	<?php

		}
		else
		{
	?>
		<input type="hidden" value="<?php echo "subcate";?>" name="subcate" size="30" maxlength="50">
	<?php
		}
	?>

	<fieldset>
		<legend>Now describe the book as much as you can:</legend>
			<textarea value="<?php echo "$desc";?>" name="desc" cols="30" rows="10">
				<?php echo "$desc" ?></textarea>
	</fieldset>

	<fieldset>
		<legend>What is the image Link?:</legend>
		<input type="text" value="<?php echo "$ilink";?>" name="ilink" size="30" maxlength="50">
	</fieldset>

	<fieldset>
		<legend></legend>
		<input type="submit" name="submit" value="Submit" size="20">
	</fieldset>

</fieldset>
</form>

