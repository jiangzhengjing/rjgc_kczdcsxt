<?php 
    include("conn.php");

    $sql=mysql_query(" INSERT INTO tiku (tiku_name,tiku_zhuangtai,tiku_shuoming) 
                        VALUES ('$_POST[tiku_name]','$_POST[tiku_zhuangtai]','$_POST[tiku_shuoming]')");
//    $tiku_name = $_POST['tiku_name'];
//	$tiku_zhuangtai = $_POST['tiku_zhuangtai'];
//	$tiku_shuoming = $_POST['tiku_shuoming'];
//	
//	$sql = mysql_query("INSERT INTO tiku (tiku_name,tiku_zhuangtai,tiku_shuoming) VALUES ('$nic','$tiku_zhuangtai','$tiku_shuoming'");

    if($sql == true)
    {
        //echo "cg";
        // echo "<script>alert('abc');</script>";
        header ( "Location: tkgl_add_tiku.php" );
    }
    else
        echo "sb";
    mysql_close();
?>