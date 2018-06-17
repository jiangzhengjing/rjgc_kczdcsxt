<?php 
    include("conn.php");
    $quanxian=$_POST[quanxian];
    $user=$_POST[user];
    $psd=$_POST[password];
    if($quanxian=="admin")
    {
        $sql=mysql_query(" SELECT * FROM admin");
        while($abc = mysql_fetch_assoc($sql))
        {
            $i=0;
            if($user==$abc['user'])
            {
                $i=1;
                if($psd==$abc['password'])
                {
                    header ("Location: admin/index.php?id=".$user);
                }
                else
                {
                    echo "<script language=\"JavaScript\">\r\n";
                    echo " alert(\"密码错误\");\r\n";
                    echo " history.back();\r\n";
                    echo "</script>";
                    exit;
                }
            }
            if($i==0)
            {
                  echo "<script language=\"JavaScript\">\r\n";
                  echo " alert(\"用户名不存在\");\r\n";
                  echo " history.back();\r\n";
                  echo "</script>";
                  exit;
            }
        }
    }
    else if($quanxian=="teacher")
    {
        $sql=mysql_query(" SELECT * FROM teacher");
        while($abc = mysql_fetch_assoc($sql))
        {
            $i=0;
            if($user==$abc['user'])
            {
                $i=1;
                if($psd==$abc['password'])
                {
                    header ("Location: teacher/index.php?id=".$user);
                }
                else
                {
                    echo "<script language=\"JavaScript\">\r\n";
                    echo " alert(\"密码错误\");\r\n";
                    echo " history.back();\r\n";
                    echo "</script>";
                    exit;
                }
            }
            if($i==0)
            {
                 echo "<script language=\"JavaScript\">\r\n";
                 echo " alert(\"用户名不存在\");\r\n";
                 echo " history.back();\r\n";
                 echo "</script>";
                 exit;
            }
        }
    }
    else if($quanxian=="student")
    {
        $sql=mysql_query(" SELECT * FROM student");
        while($abc = mysql_fetch_assoc($sql))
        {
            $i=0;
            if($user==$abc['user'])
            {
                $i=1;
                if($psd==$abc['password'])
                {
                    header ("Location: student/index.php?id=".$user);
                }
                else
                {
                    echo "<script language=\"JavaScript\">\r\n";
                    echo " alert(\"密码错误\");\r\n";
                    echo " history.back();\r\n";
                    echo "</script>";
                    exit;
                }
            }
            if($i==0)
            {
                echo "<script language=\"JavaScript\">\r\n";
                echo " alert(\"用户名不存在\");\r\n";
                echo " history.back();\r\n";
                echo "</script>";
                exit;
            }
        }
    }
    
    
    mysql_close();
?>