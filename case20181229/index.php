<?php
$con  = mysql_connect('127.0.0.1', 'root', 'root');
mysql_query("set names 'gb2312'",$con);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("xxy_test", $con);
$result = mysql_query("SELECT * FROM `zv_notice_info`;");
while($row = mysql_fetch_array($result))
{
	echo $row['notice_content'];
	echo "<br />";
}
// var_dump($result);