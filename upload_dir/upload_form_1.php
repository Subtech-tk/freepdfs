<?php
?>
<form action="<?php echo $current_file;?>" method="post" >
<fieldset>
<legend>submittion form part 1/3</legend>

	<fieldset>
		<legend>what is the Book Title?</legend>
		<input type="text" value="<?php echo "$btitle";?>" name="btitle" size="30" maxlength="50">
	</fieldset>

	<fieldset>
		<legend>Who is the Author(or Authors)?</legend>
		<input type="text" value="<?php echo "$author";?>" name="author" size="30" maxlength="50">
	</fieldset>

	<fieldset>
		<legend>Publisher of the book?</legend>
		<input type="text" value="<?php echo "$publ";?>" name="publ" size="30" maxlength="50">
	</fieldset>

	<fieldset>
		<legend>what is the Size (in MB)?</legend>
		<input type="text" value="<?php echo "$size";?>" name="size" size="10" maxlength="10">
	</fieldset>

	<fieldset>
		<legend>select one of the following category which is more appropiate:</legend>
		<select name="category" size="1">
			<option value="">Select</option>
		<?php
		$result=$connection->query("SELECT DISTINCT `cat` FROM `books`");
		while ($rows=$result->fetch_array())
		{	
			$cat=$rows[0];
		?>
			<option value="<?php echo "$cat";?>"><?php echo "$cat";?></option>
		<?php
		}
		?>
			<option value="other">Others</option>
		</select>
	</fieldset>

	<fieldset>
		<legend></legend>
		<input type="submit" name="submit" value="Continue to next Part" size="20">
	</fieldset>

</fieldset>
</form>

