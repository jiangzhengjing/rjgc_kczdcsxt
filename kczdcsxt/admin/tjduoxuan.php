<?php 
    include("conn.php");
    //$duoxuan_daan = implode(',',$duoxuan_daan);
    $sql=mysql_query(" INSERT INTO duoxuan (shiti_tiku,shiti_nandu,shiti_tigan,shiti_xuanxiangA,shiti_xuanxiangB,shiti_xuanxiangC,shiti_xuanxiangD,shiti_jiexi,duoxuan_daan) 
                        VALUES ('$_POST[shiti_tiku]','$_POST[shiti_nandu]','$_POST[shiti_tigan]','$_POST[shiti_xuanxiangA]','$_POST[shiti_xuanxiangB]','$_POST[shiti_xuanxiangC]','$_POST[shiti_xuanxiangD]','$_POST[shiti_jiexi]','$_POST[duoxuan_daan]')");
var_dump($_POST);
//    $tiku_name = $_POST['tiku_name'];
//	$tiku_zhuangtai = $_POST['tiku_zhuangtai'];
//	$tiku_shuoming = $_POST['tiku_shuoming'];
//	
//	$sql = mysql_query("INSERT INTO tiku (tiku_name,tiku_zhuangtai,tiku_shuoming) VALUES ('$nic','$tiku_zhuangtai','$tiku_shuoming'");

    if($sql == true)
    {
       // echo "cg";
        // echo "<script>alert('abc');</script>";
        //header ( "Location: tkgl_add_duoxuan.php" );
		echo $_POST[duoxuan_daan];
    }
    else
        echo $_POST[duoxuan_daan];
    mysql_close();
?>