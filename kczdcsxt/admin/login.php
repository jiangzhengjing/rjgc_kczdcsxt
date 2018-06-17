<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta name="description" content="">
            <meta name="author" content="">

              <title>课程自动检测系统</title>

              <!-- Bootstrap Core CSS -->
              <link href="../style/bootstrap/css/bootstrap.min.css" rel="stylesheet">

                <!-- Custom CSS -->
                <link href="../style/css/sb-admin-2.css" rel="stylesheet">

                  <!-- Custom Fonts -->
                  <link href="../style/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>
  <body>
    <form role="form" action="login_submit.php" method="post">
      <label for="user-name">用户名:</label>
      <div>
        <input type="text"  name="user" rows="3"  placeholder="请输入用户名..." style="width: 100%;" />
      </div>
      <p></p>
      <label for="user-name">密码:</label>
      <div>
        <input type="password"  name="password" rows="3" placeholder="请输入密码..." style="width: 100%;" />
      </div>
      <p></p>
      <div class="col-lg-12">
        <button type="submit" class="btn btn-default" style=" margin-left: 330px;">提交</button>
      </div>
    </form>
  </body>
</html>