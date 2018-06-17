<?php 
    include("conn.php");
    $id = implode(",",$_POST[tijiao_id]);
    $id1 = implode(",",$_POST[tijiao_id1]);
    //echo $id;
   
    // echo $_POST[tijiao_id][0];
  $score=0;
    $sql1=mysql_query(" SELECT * FROM danxuan ");
  
     while($abc = mysql_fetch_array($sql1))
      {
       if($abc['Id']==$_POST[tijiao_id][0])
	   {
		  
		   if($abc['danxuan_daan']==$_POST[option1])
		  $score+=10;
		 
		   
	   }
		else  if($abc['Id']==$_POST[tijiao_id][1])
	   {
		  
		   if($abc['danxuan_daan']==$_POST[option2])
		  $score+=10;
		 
		   
	   }
		else  if($abc['Id']==$_POST[tijiao_id][2])
	   {
		   
		   if($abc['danxuan_daan']==$_POST[option3])
		  $score+=10;
		 
		   
	   }
     
		 
     }
 $sql2=mysql_query(" SELECT * FROM panduan ");
  
     while($abc = mysql_fetch_array($sql2))
      {
       if($abc['Id']==$_POST[tijiao_id1][0])
	   {
		  
		   if($abc['panduan_daan']==$_POST[opp1])
		  $score+=10;
		 
		   
	   }
		else  if($abc['Id']==$_POST[tijiao_id1][1])
	   {
		  
		   if($abc['panduan_daan']==$_POST[opp2])
		  $score+=10;
		 
		   
	   }
		else  if($abc['Id']==$_POST[tijiao_id1][2])
	   {
		   
		   if($abc['panduan_daan']==$_POST[opp3])
		  $score+=10;
		  
		   
	   }
     
		 
     }
//else
	//echo "sb";
   
	 $sql=mysql_query(" INSERT INTO shijuan (danxuan,panduan,danxuan_daan1,danxuan_daan2,danxuan_daan3,panduan_daan1,panduan_daan2,panduan_daan3,score) VALUES ('$id','$id1','$_POST[option1]','$_POST[option2]','$_POST[option3]','$_POST[opp1]','$_POST[opp2]','$_POST[opp3]','$score') ");									
										
//    $tiku_name = $_POST['tiku_name'];
//	$tiku_zhuangtai = $_POST['tiku_zhuangtai'];
//	$tiku_shuoming = $_POST['tiku_shuoming'];
//	
//	$sql = mysql_query("INSERT INTO tiku (tiku_name,tiku_zhuangtai,tiku_shuoming) VALUES ('$nic','$tiku_zhuangtai','$tiku_shuoming'");

    if($sql == true&&$sql1 == true&&$sql2 == true)
    {
       // echo "cg";
        // echo "<script>alert('abc');</script>";
        //header ( "Location: tkgl_add_jianda.php" );
		echo $score;
    }
    else
        //echo $_POST[array_id];
		echo "cg";

    mysql_close();
	
?>