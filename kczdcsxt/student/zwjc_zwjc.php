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
                                        <a href="wdks_lsks.php">历史试卷</a>
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
                        <h1 class="page-header">自我检测</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
							<a href="zwjc_zwjc.php">单选题&nbsp;&nbsp;</a>
                            <a href="zwjc_zwjc_duoxuan.php">多选题&nbsp;&nbsp;</a>
                            <a href="zwjc_zwjc_panduan.php">判断题&nbsp;&nbsp;</a>
                            <a href="zwjc_zwjc_jianda.php">简答题&nbsp;&nbsp;</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="form form-horizontal" action="zwjcdanxuan.php" method="post">
                                       <?php 
                                            include("conn.php");
                                            $sql=mysql_query(" SELECT * FROM danxuan");
                                            $i = 0;
                                            while($abc = mysql_fetch_assoc($sql))
                                            {
                                                $data [$i]['shiti_tigan'] = $abc['shiti_tigan'];
                                                $data [$i]['shiti_xuanxiangA'] = $abc['shiti_xuanxiangA'];
                                                $data [$i]['id'] = $abc['Id'];
                                                $data [$i]['shiti_xuanxiangB'] = $abc['shiti_xuanxiangB'];
												
												
                                                $data [$i]['shiti_xuanxiangC'] = $abc['shiti_xuanxiangC'];
                                                $data [$i]['shiti_xuanxiangD'] = $abc['shiti_xuanxiangD'];
                                               
                                                $i++;
                                            }
                                            //var_dump($data);die;?>
                                          
<<<<<<< HEAD
                                          
                                        <div class="form-group" style="margin-left: 10px;">
=======
                                        <div class="form-group">
>>>>>>> be560b26731a40300eca13b81d3d70edc0140452
                                            <?php
											$j=rand(0,58);?>
                                            <label> <?php echo  $data [$j]['id'],"、",$data [$j]['shiti_tigan'] ?></label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="danxuan_daan" id="optionsRadios1" value="A" >A、<?php echo $data [$j]['shiti_xuanxiangA'] ?>
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="danxuan_daan" id="optionsRadios2" value="B">B、<?php echo $data [$j]['shiti_xuanxiangB'] ?>
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="danxuan_daan" id="optionsRadios3" value="C">C、<?php echo $data [$j]['shiti_xuanxiangC'] ?>
                                                </label>
                                            </div>
                                                <div class="radio">
                                                <label>
                                                    <input type="radio" name="danxuan_daan" id="optionsRadios4" value="D">D、<?php echo $data [$j]['shiti_xuanxiangD'] ?>
                                                </label>
                                            </div>

                                     <input type="hidden" name="tijiao_id" value="<?php echo $data [$j]['id']?>" />

                                      
                                        </div>
										<button type="submit" class="btn btn-default">下一题</button>
                                    </form>
                                </div>
                              
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
                <!-- /.row -->
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
