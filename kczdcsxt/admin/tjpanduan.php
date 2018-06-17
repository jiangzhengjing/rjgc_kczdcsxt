<?php 
    include("conn.php");

    $sql=mysql_query(" INSERT INTO panduan  (shiti_tiku,shiti_nandu,shiti_tigan,shiti_jiexi,panduan_daan) 
                        VALUES ('$_POST[shiti_tiku]','$_POST[shiti_nandu]','$_POST[shiti_tigan]','$_POST[shiti_jiexi]','$_POST[panduan_daan]')");
//    $tiku_name = $_POST['tiku_name'];
//	$tiku_zhuangtai = $_POST['tiku_zhuangtai'];
//	$tiku_shuoming = $_POST['tiku_shuoming'];
//	
//	$sql = mysql_query("INSERT INTO tiku (tiku_name,tiku_zhuangtai,tiku_shuoming) VALUES ('$nic','$tiku_zhuangtai','$tiku_shuoming'");

    if($sql == true)
    {
       // echo "cg";
        // echo "<script>alert('abc');</script>";
        header ( "Location: tkgl_add_panduan.php" );
    }
    else
        echo "shibai";
    mysql_close();
?>