<?php 
    include("conn.php");

    $sql=mysql_query(" INSERT INTO shijuanshuoming (sjmc,sjfl,kksj,cjgbsj,sjzt,jssj,kssc,sjsm) 
                        VALUES ('$_POST[sjmc]','$_POST[sjfl]','$_POST[kksj]','$_POST[cjgbsj]','$_POST[sjzt]','$_POST[jssj]','$_POST[kssc],'$_POST[sjsm]')");
//    $tiku_name = $_POST['tiku_name'];
//	$tiku_zhuangtai = $_POST['tiku_zhuangtai'];
//	$tiku_shuoming = $_POST['tiku_shuoming'];
//	
//	$sql = mysql_query("INSERT INTO tiku (tiku_name,tiku_zhuangtai,tiku_shuoming) VALUES ('$nic','$tiku_zhuangtai','$tiku_shuoming'");

    if($sql == true)
    {
       // echo "cg";
        // echo "<script>alert('abc');</script>";
        header ( "Location: sjgl_cjsj.php" );
    }
    else
        echo "sb";
    mysql_close();
?>