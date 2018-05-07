<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("tiku", $con);

$sql=mysql_query(" INSERT INTO tiku (tiku_name,tiku_zhuangtai,tiku_shuoming) 
 VALUES ('$_POST[tiku_name]','$_POST[tiku_zhuangtai]','$_POST[tiku_shuoming]')");
mysql_close($con);
?>