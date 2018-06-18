<?php 
    include("conn.php");
    $id = implode(",",$_POST[tijiao_id]);
    $id1 = implode(",",$_POST[tijiao_id1]);
    session_start();
    $user=$_SESSION['user'];
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
		  else  if($abc['Id']==$_POST[tijiao_id][3])
	   {
		   
		   if($abc['danxuan_daan']==$_POST[option4])
		  $score+=10;
		 
		   
	   }
		  else  if($abc['Id']==$_POST[tijiao_id][4])
	   {
		   
		   if($abc['danxuan_daan']==$_POST[option5])
		  $score+=10;
		 
		   
	   }
		  else  if($abc['Id']==$_POST[tijiao_id][5])
	   {
		   
		   if($abc['danxuan_daan']==$_POST[option6])
		  $score+=10;
		 
		   
	   }
		  else  if($abc['Id']==$_POST[tijiao_id][6])
	   {
		   
		   if($abc['danxuan_daan']==$_POST[option7])
		  $score+=10;
		 
		   
	   }
		   else  if($abc['Id']==$_POST[tijiao_id][7])
	   {
		   
		   if($abc['danxuan_daan']==$_POST[option8])
		  $score+=10;
		 
		   
	   }
		   else  if($abc['Id']==$_POST[tijiao_id][8])
	   {
		   
		   if($abc['danxuan_daan']==$_POST[option9])
		  $score+=10;
		 
		   
	   }
		   else  if($abc['Id']==$_POST[tijiao_id][9])
	   {
		   
		   if($abc['danxuan_daan']==$_POST[option10])
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
		  else  if($abc['Id']==$_POST[tijiao_id1][3])
	   {
		   
		   if($abc['panduan_daan']==$_POST[opp4])
		  $score+=10;
		  
		   
	   }
		  else  if($abc['Id']==$_POST[tijiao_id1][4])
	   {
		   
		   if($abc['panduan_daan']==$_POST[opp5])
		  $score+=10;
		  
		   
	   }
		  else  if($abc['Id']==$_POST[tijiao_id1][5])
	   {
		   
		   if($abc['panduan_daan']==$_POST[opp6])
		  $score+=10;
		  
		   
	   }
		  else  if($abc['Id']==$_POST[tijiao_id1][6])
	   {
		   
		   if($abc['panduan_daan']==$_POST[opp7])
		  $score+=10;
		  
		   
	   }
		  else  if($abc['Id']==$_POST[tijiao_id1][7])
	   {
		   
		   if($abc['panduan_daan']==$_POST[opp8])
		  $score+=10;
		  
		   
	   }
		  else  if($abc['Id']==$_POST[tijiao_id1][8])
	   {
		   
		   if($abc['panduan_daan']==$_POST[opp9])
		  $score+=10;
		  
		   
	   }
		  else  if($abc['Id']==$_POST[tijiao_id1][9])
	   {
		   
		   if($abc['panduan_daan']==$_POST[opp10])
		  $score+=10;
		  
		   
	   }
     
		 
     }
//else
	//echo "sb";
   
	 $sql=mysql_query(" INSERT INTO shijuan (danxuan,panduan,danxuan_daan1,danxuan_daan2,danxuan_daan3,danxuan_daan4,danxuan_daan5,danxuan_daan6,danxuan_daan7,danxuan_daan8,danxuan_daan9,danxuan_daan10,panduan_daan1,panduan_daan2,panduan_daan3,panduan_daan4,panduan_daan5,panduan_daan6,panduan_daan7,panduan_daan8,panduan_daan9,panduan_daan10,score,user) VALUES ('$id','$id1','$_POST[option1]','$_POST[option2]','$_POST[option3]','$_POST[option4]','$_POST[option5]','$_POST[option6]','$_POST[option7]','$_POST[option8]','$_POST[option9]','$_POST[option10]','$_POST[opp1]','$_POST[opp2]','$_POST[opp3]','$_POST[opp4]','$_POST[opp5]','$_POST[opp6]','$_POST[opp7]','$_POST[opp8]','$_POST[opp9]','$_POST[opp10]','$score','$user') ");									
										
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
		   echo("<script>window.alert('$score')</script>");
       header ("Refresh:0;url=index.php");
       
    }
    else
        //echo $_POST[array_id];
		echo "cg";

    mysql_close();
	
?>