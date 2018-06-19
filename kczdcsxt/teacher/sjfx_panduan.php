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

    <div id="wrapper">

      <!-- Navigation -->
      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">

          <a class="navbar-brand" href="index.html">在线考试系统</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="fa fa-envelope fa-fw"></i>
              <i class="fa fa-caret-down"></i>
            </a>

            <!-- /.dropdown-messages -->
          </li>
          <!-- /.dropdown -->
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="fa fa-tasks fa-fw"></i>
              <i class="fa fa-caret-down"></i>
            </a>

            <!-- /.dropdown-tasks -->
          </li>
          <!-- /.dropdown -->
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="fa fa-bell fa-fw"></i>
              <i class="fa fa-caret-down"></i>
            </a>

            <!-- /.dropdown-alerts -->
          </li>
          <!-- /.dropdown -->
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="fa fa-user fa-fw"></i>
              <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
              <li>
                <a href="#">
                  <i class="fa fa-user fa-fw"></i>
                  <?php session_start();$user=$_SESSION['user'];echo $user;?>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-gear fa-fw"></i> 设置
                </a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="../login.php">
                  <i class="fa fa-sign-out fa-fw"></i> 退出
                </a>
              </li>
            </ul>
            <!-- /.dropdown-user -->
          </li>
          <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation" style="width: 250px;">
          <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
              <li class="sidebar-search">
                <div class="input-group custom-search-form">
                  <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                      </button>
                    </span>
                  </div>
                <!-- /input-group -->
              </li>
              <li>
                <a href="index.php">
                  <i class="fa fa-dashboard fa-fw"></i> 首页
                </a>
              </li>

              <!-- /.nav-second-level -->
              </li>
              <li>
                <a href="xscj.php">
                  <i class="fa fa-edit fa-fw"></i> 学生成绩
                </a>

              </li>
              <li>
                <a href="sjfx.php">
                  <i class="fa fa-edit fa-fw"></i> 试卷分析
                </a>

              </li>

            </ul>
          </div>
          <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
      </nav>

      <!-- Page Content -->
      <div id="page-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <h1 class="page-header">试卷分析</h1>
            </div>
            <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <div class="row">
            <div class="col-lg-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <a href="sjfx.php">单选题&nbsp;&nbsp;</a>
                  <a href="sjfx_duoxuan.php">多选题&nbsp;&nbsp;</a>
                  <a href="sjfx_panduan.php">判断题&nbsp;&nbsp;</a>
                  <a href="sjfx_jianda.php">简答题&nbsp;&nbsp;</a>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-12">
                      <form class="form">
                        <table class="table table-striped table-hover table-main">
                          <thead>
                            <tr>
                                            <th class="table-check"><input type="checkbox" class="tpl-table-fz-check"></th>
                                            <th class="table-ctt-sstk" style="width: 6%">题号</th>
											<th class="table-ctt-stnd" style="width: 7%">题库</th>
											<th class="table-ctt-sttg" style="width: 7%">难度</th>
                                            <th class="table-ctt-stnd" style="width: 50%">内容</th>
                                            <th class="table-ctt-stzt" style="width: 10%">错误次数</th>
											<th class="table-ctt-stzt" style="width: 7%">错误率</th>
                                            <th class="table-ctt-cz" style="width: 13%">操作</th>
                                        </tr>
                          </thead>
                          <tbody>
                            <?php 
                                            include("conn.php");
											$sql=mysql_query(" SELECT * FROM panduan");
                                            $i = 0;
                                            while($abc = mysql_fetch_assoc($sql))
                                            {
                                                $data [$i]['tihao'] = $abc['Id'];
												$data [$i]['tiku'] = $abc['shiti_tiku'];
												$data [$i]['nandu'] = $abc['shiti_nandu'];
												$data [$i]['neirong'] = $abc['shiti_tigan'];
												$i++;
                                            }
											for($j=0;$j<$i;$j++)
											{
												$data [$j]['zhengque'] = 1;
												$data [$j]['cuowu'] = 0;
											}
											$sql1=mysql_query(" SELECT * FROM lishipanduan");
											while($abc = mysql_fetch_assoc($sql1))
                                            {
												for($j=0;$j<$i;$j++)
												{
													if($abc['danxuanid']==$data [$j]['tihao'])
													{
														if($abc['iscorrect']==1)
														{
															$data [$j]['zhengque']+=1;
														}
														else
														{
															$data [$j]['cuowu']+=1;
														}
													}
												}
                                            }
                                            //var_dump($data);die; ?>
                            <?php
                                            foreach ($data as $key => $value) {
                                            ?>


                            <tr>
                              <td>
                                <input type="checkbox">
                              </td>
                              <td class="hide-sm-only">
                                <?php echo $value['tihao']; ?>
                              </td>
                              <td class="hide-sm-only">
                                <?php echo $value['tiku']; ?>
                              </td>
                              <td class="hide-sm-only">
                                <?php echo $value['nandu']; ?>
                              </td>
                              <td class="hide-sm-only">
                                <?php echo $value['neirong']; ?>
                              </td>
                              <td class="hide-sm-only">
                                <?php echo $value['cuowu']; ?>
                              </td>
                              <td class="hide-sm-only">
                                <?php $zong=$value['cuowu']+$value['zhengque'];$cuo=$value['cuowu']/$zong*100;echo round($cuo,2); ?>%
                              </td>

                              <td>
                                <div class="btn-toolbar">
                                  <div class="btn-group btn-group-xs">
                                    <button class="btn btn-default btn-xs text-secondary">
                                      <span class="icon-pencil-square-o"></span> 编辑
                                    </button>
                                   
                                    <button class="btn btn-default btn-xs text-danger hide-sm-only">
                                      <span class="icon-trash-o"></span> 删除
                                    </button>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <?php }?>

                          </tbody>
                        </table>
                        <div class="cf" style="text-align: center;">

                          <div class="fr">
                            <ul class="pagination tpl-pagination">
                              <li class="disabled">
                                <a href="#">«</a>
                              </li>
                              <li class="active">
                                <a href="#">1</a>
                              </li>
                              <li>
                                <a href="#">2</a>
                              </li>
                              <li>
                                <a href="#">3</a>
                              </li>
                              <li>
                                <a href="#">4</a>
                              </li>
                              <li>
                                <a href="#">5</a>
                              </li>
                              <li>
                                <a href="#">»</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <hr>

                            </form>
                    </div>

                  </div>
                  <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
              </div>
              <!-- /.panel -->
            </div>

          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../style/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../style/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../style/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../style/js/sb-admin-2.js"></script>

  </body>

</html>
