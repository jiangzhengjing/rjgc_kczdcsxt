<?php 
    include("conn.php");
    session_start();
    $user=$_SESSION['user'];
    $yuanshipsd=$_POST[yuanshipassword];
    $newpsd=$_POST[newpassword];
    $newpsd2=$_POST[newpassword2];
    $sql=mysql_query(" SELECT * FROM student ");
    $flag=0;
    while($abc = mysql_fetch_array($sql))
    {
        if($user==$abc['user']&&$yuanshipsd==$abc['password'])
        {
            $flag=1;
        }
    }
    if($flag==1)
    {
        if($newpsd!=$newpsd2)
        {
            echo "<script language=\"JavaScript\">\r\n";
            echo " alert(\"两次输入密码不一致\");\r\n";
            echo " history.back();\r\n";
            echo "</script>";
            exit;
        }
        else if($newpsd=="")
        {
            echo "<script language=\"JavaScript\">\r\n";
            echo " alert(\"密码不能为空\");\r\n";
            echo " history.back();\r\n";
            echo "</script>";
            exit;
        }
        else
        {
            $sql1=mysql_query("UPDATE student SET password='$newpsd' WHERE user='$user'");
            $truedaan="修改成功";
            echo("<script>window.alert('$truedaan')</script>");
            header ("Refresh:0;url=index.php");
        }
    }
    else
    {
        echo "<script language=\"JavaScript\">\r\n";
        echo " alert(\"原密码错误\");\r\n";
        echo " history.back();\r\n";
        echo "</script>";
        exit;
    }

    mysql_close();
	
?>