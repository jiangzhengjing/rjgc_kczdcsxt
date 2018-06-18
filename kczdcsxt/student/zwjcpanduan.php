<?php 
    include("conn.php");
    $id = $_POST[tijiao_id];
    session_start();
    $user=$_SESSION['user'];
    $daan=0;

    $sql1=mysql_query(" SELECT * FROM panduan ");
    $iscorrect=0;
    while($abc = mysql_fetch_array($sql1))
    {
         if($abc['Id']==$id)
	       {	  
             $daan=$abc['panduan_daan'];
		         if($abc['panduan_daan']==$_POST[panduan_daan])
             {
                 $iscorrect=1;
             }
	       } 
    }
	 $sql=mysql_query(" INSERT INTO lishipanduan (danxuanid,danxuandaan,user,iscorrect) VALUES ('$id','$_POST[panduan_daan]','$user','$iscorrect') ");
    if($iscorrect == 1)
    {
       // echo "cg";
        // echo "<script>alert('abc');</script>";
        //header ( "Location: tkgl_add_jianda.php" );
       $truedaan="答案正确";
       echo("<script>window.alert('$truedaan')</script>");
       header ("Refresh:0;url=zwjc_zwjc_panduan.php");
    }
    else
    {
        //echo $_POST[array_id];
        $truedaan="正确答案是：".$daan;
        echo("<script>window.alert('$truedaan')</script>");
        header ("Refresh:0;url=zwjc_zwjc_panduan.php");
    }

    mysql_close();
	
?>