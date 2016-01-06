<?php
echo "<p>this is test page</p>";
echo date('Y-m-d H:i:s');	//current system date and time
$string="hello";
$str2="HELLO";
echo "<br/>$string<br/>$str2";
$strlen=strlen($string);	//length of the string.
echo "<br/>$strlen";
//if (strcasecmp($string, $str2)) // case sensitive comparison
if (strcmp($string, $str2)) // case insensitive comparison
{
	echo "same";	//if strcmp is true
}
else
{
	echo "not same";	//if strcmp is false
}

$code=rand(10000000,99999999);	//to genetate random number. 8 digit
echo "<br/>$code";
$tracker=rand(100000000,9999999999);
echo "<br/>$tracker";
//$update_query="UPDATE `userdetail` SET `status` = 'active' WHERE `userdetail`.`uniqueid` = 24";
?>