<?php 
    include("conn.php");

    $sql=mysql_query(" SELECT * FROM admin");
    $user=$_POST[user];
    $psd=$_POST[password];
    echo $user,$psd;
    while($abc = mysql_fetch_assoc($sql))
    {
        $i=0;
        if($user==$abc['user'])
        {
          $i=1;
          if($psd==$abc['password'])
          {
            echo "登陆成功";
            header ("Location: index.php?id=".$user);
          }
          else
          {
            echo "密码错误";
          }
        }
        if($i==0)
        {
          echo "用户名错误";
        }
     }
    mysql_close();
?>