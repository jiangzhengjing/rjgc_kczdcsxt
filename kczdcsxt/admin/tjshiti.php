<?php 
    include("conn.php");

    $sql=mysql_query(" INSERT INTO shiti (shiti_leixing,shiti_zhuangtai,shiti_tiku,shiti_nandu,shiti_tigan,shiti_xuanxiangA,shiti_xuanxiangB,shiti_xuanxiangC,shiti_xuanxiangD,shiti_jiexi) 
                        VALUES ('$_POST[shiti_leixing]','$_POST[shiti_zhuangtai]','$_POST[shiti_tiku]','$_POST[shiti_nandu]','$_POST[shiti_tigan]','$_POST[shiti_xuanxiangA]','$_POST[shiti_xuanxiangB]','$_POST[shiti_xuanxiangC]','$_POST[shiti_xuanxiangD]','$_POST[shiti_jiexi]')");
//    $tiku_name = $_POST['tiku_name'];
//	$tiku_zhuangtai = $_POST['tiku_zhuangtai'];
//	$tiku_shuoming = $_POST['tiku_shuoming'];
//	
//	$sql = mysql_query("INSERT INTO tiku (tiku_name,tiku_zhuangtai,tiku_shuoming) VALUES ('$nic','$tiku_zhuangtai','$tiku_shuoming'");

    if($sql == true)
    {
       // echo "cg";
        // echo "<script>alert('abc');</script>";
        header ( "Location: tkgl_add_shiti.php" );
    }
    else
        echo "sb";
    mysql_close();
?>