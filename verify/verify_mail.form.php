<?php
	echo "A mail contaning the verification code is sent to your mailid : $emailid \n
		<br/>Please check your mail.<br/>It might take Few Minutes to Recieve.";
?>
<br/>

<p>Please Enter the Verification Code below.</p>
<form action="<?php echo $current_file;?>" method="post" >
	<fieldset>
		<legend>Verification Code</legend>
		<input type="text" value="00000000" name="vcode" size="10" maxlength="10"><br/><br/>
		<legend></legend>
		   <input type="submit" name="Verify" value="verify" size="12">
	</fieldset>
</form>