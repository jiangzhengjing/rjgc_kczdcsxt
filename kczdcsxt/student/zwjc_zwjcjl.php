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
   <!-- jzj-style -->
    <link href="../style/css/jzj-style.css" rel="stylesheet" type="text/css">

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
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>

                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>

                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>

                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> <?php session_start();$user=$_SESSION['user'];echo $user;?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> 设置</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../login.php"><i class="fa fa-sign-out fa-fw"></i> 退出</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
           <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
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
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> 首页</a>
                        </li>
                       
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> 我的考试<span class="fa arrow"></span></a>
                            	<ul class="nav nav-second-level">
                                    <li>
                                        <a href="wdks_wdks.php">我的试卷</a>
                                    </li>
                                    <li>
                                        <a href="wdks_lsks.php">历史考试</a>
                                    </li>
                               </ul>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> 自我检测<span class="fa arrow"></span></a>
                            	<ul class="nav nav-second-level">
                                    <li>
                                        <a href="zwjc_zwjc.php">自我检测</a>
                                    </li>
                                    <li>
                                        <a href="zwjc_zwjcjl.php">自我检测记录</a>
                                    </li>                             
                                 </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> 个人中心<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="grzx_wdctj.php">我的错题集</a>
                                </li>
                                <li>
                                    <a href="grzx_xgmm.php">修改密码</a>
                                </li>
                                  <li>
                                    <a href="grzx_zhxx.php">账户信息</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
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
                        <h1 class="page-header">自我检测记录</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                 <div class="row">
                       <div class="col-lg-12">
                            <form class="form">
                             <table class="table table-striped table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-check"><input type="checkbox" class="tpl-table-fz-check"></th>
                                            <th class="table-ctt-sstk">试题题号</th>
											<th class="table-ctt-stnd">试题题库</th>
                                            <th class="table-ctt-stlx">试题类型</th>
											<th class="table-ctt-sttg">试题难度</th>
                                            <th class="table-ctt-stnd">试题内容</th>
                                            <th class="table-ctt-stzt">提交答案</th>
                                            <th class="table-ctt-sttg">正确答案</th>
                                            
                                            <th class="table-ctt-cz">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                             <?php 
                                            include("conn.php");
                                            $sql=mysql_query(" SELECT * FROM lishipanduan");
                                            $i = 0;
                                            while($abc = mysql_fetch_assoc($sql))
                                            {
												if($abc['user']==$user)
												{
													$data [$i]['tihao'] = $abc['danxuanid'];
													$data [$i]['leixing'] = "判断题";
													$data [$i]['tijiaodaan'] = $abc['danxuandaan'];
													$i++;
												}
                                            }
											$sql1=mysql_query(" SELECT * FROM panduan");
                                            while($abc = mysql_fetch_assoc($sql1))
                                            {
												for($j=0;$j<$i;$j++)
												{
													if($data [$j]['tihao'] == $abc['Id'])
													{
														$data [$j]['neirong'] = $abc['shiti_tigan'];
														$data [$j]['zhengquedaan'] = $abc['panduan_daan'];
														$data [$j]['nandu'] = $abc['shiti_nandu'];
														$data [$j]['tiku'] = $abc['shiti_tiku'];
													}
												}
                                            }
                                            //var_dump($data);die; ?>
											<?php
											$sql=mysql_query(" SELECT * FROM lishidanxuan");
                                            $m = 0;
                                            while($abc = mysql_fetch_assoc($sql))
                                            {
												if($abc['user']==$user)
												{
													$data [$i+$m]['tihao'] = $abc['danxuanid'];
													$data [$i+$m]['leixing'] = "单选题";
													$data [$i+$m]['tijiaodaan'] = $abc['danxuandaan'];
													$m++;
												}
                                            }
											$sql1=mysql_query(" SELECT * FROM danxuan");
                                            while($abc = mysql_fetch_assoc($sql1))
                                            {
												for($j=$i;$j<$i+$m;$j++)
												{
													if($data [$j]['tihao'] == $abc['Id'])
													{
														$data [$j]['neirong'] = $abc['shiti_tigan'];
														$data [$j]['zhengquedaan'] = $abc['danxuan_daan'];
														$data [$j]['nandu'] = $abc['shiti_nandu'];
														$data [$j]['tiku'] = $abc['shiti_tiku'];
													}
												}
                                            }
                                            //var_dump($data);die; ?>
                                            <?php
                                            foreach ($data as $key => $value) {
                                            ?>
                                               
                                      
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td class="hide-sm-only">
                                            <?php echo $value['tihao'] ?></td>
                                            <td class="hide-sm-only">
											<?php echo $value['tiku'] ?></td>
                                            <td class="hide-sm-only">
                                            <?php echo $value['leixing'] ?></td>
                                            <td class="hide-sm-only">
                                            <?php echo $value['nandu'] ?></td>
                                            <td class="hide-sm-only">
                                            <?php echo $value['neirong'] ?></td>
                                            <td class="hide-sm-only">
                                            <?php echo $value['tijiaodaan'] ?></td>
											<td class="hide-sm-only">
                                            <?php echo $value['zhengquedaan'] ?></td>
                                           
                                            <td>
                                                <div class="btn-toolbar">
                                                    <div class="btn-group btn-group-xs">
                                                        <button class="btn btn-default btn-xs text-secondary"><span class="icon-pencil-square-o"></span> 编辑</button>
                                                        <button class="btn btn-default btn-xs hide-sm-only"><span class="icon-copy"></span> 复制</button>
                                                        <button class="btn btn-default btn-xs text-danger hide-sm-only"><span class="icon-trash-o"></span> 删除</button>
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
                                            <li class="disabled"><a href="#">«</a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>

                            </form>
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
