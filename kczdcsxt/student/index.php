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
    <!-- MetisMenu CSS -->
    <link href="../style/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../style/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="../style/morrisjs/morris.css" rel="stylesheet">
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

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">欢迎使用在线考试系统</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- /.row -->
           
            <!-- /.row -->
         
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> 进行中的考试
                           
                        </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                             <div class="col-lg-12">
                          
                                <table class="table table-striped table-hover table-main">
                                    <thead>
                                        <tr>
                                           
                                            <th class="table-ctt-sstk">试卷名称</th>
                                            
                                            <th class="table-ctt-stzt">结束时间</th>
                                           
                                            <th class="table-ctt-cz">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                            include("conn.php");
                                            $sql=mysql_query(" SELECT * FROM shijuanguanli");
                                            $i = 0;
                                            while($abc = mysql_fetch_assoc($sql))
                                            {
                                                $data [$i]['sjmc'] = $abc['sjmc'];
                                             
                                               
												$data [$i]['jssj'] = $abc['jssj'];
												
                                                
                                                $i++;
                                            }
                                            //var_dump($data);die; ?>
                                            <?php
                                            foreach ($data as $key => $value) {
                                            ?>
                                                <tr>
                                                   
                                                    <td><?php echo $value['sjmc'] ?></td>
                                                  
                                                     
                                                  
                                                    <td><?php echo $value['jssj'] ?></td>
                                                     
                                                   <td>
                                                <div class="btn-toolbar">
                                                    <div class="btn-group btn-group-xs">
                                                        <button class="btn btn-default btn-xs text-secondary"><span class="icon-pencil-square-o"></span> <a href="wdks_wdks_zxks.php">开始考试</a></button>
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                                </tr>
                                        <?php }?>
                                     
                                    </tbody>
                                </table>
                             
                          

                          
                        </div>
                        </div>
                         <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> 参加过的考试
                            
                        </div>
                        <div class="panel-body">
                                <table class="table table-striped table-hover table-main">
                                    <thead>
                                        <tr>
                                           
                                            <th class="table-ctt-sstk">试卷名称</th>
											<th class="table-ctt-sttg">分数</th>
                                            <th class="table-ctt-cz">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                            include("conn.php");
											$sql=mysql_query(" SELECT * FROM shijuan");
                                            $i = 0;
                                            while($abc = mysql_fetch_assoc($sql))
                                            {
												if($abc['user']==$user)
												{
													$data1 [$i]['sjmc'] = '试卷'.$abc['Id'];
													$data1 [$i]['score'] = $abc['score'];
													$i++;
												}
                                            }
                                            //var_dump($data);die; ?>
                                             <?php
                                            foreach ((array)$data1 as $key => $value) {
                                            ?>
                                               
                                                <tr>
                                                    
                                                    <td><?php echo $value['sjmc'] ?></td>
													 <td><?php echo $value['score'] ?></td>
                                                   <td>
                                                <div class="btn-toolbar">
                                                    <div class="btn-group btn-group-xs">
                                                        <button class="btn btn-default btn-xs text-secondary"><span class="icon-pencil-square-o"></span> <a href="wdks_wdks_ksxq.php">详情</a></button>
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                                </tr>
                                        <?php }?>
                                     
                                    </tbody>
                                </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                  
                  
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                 <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> 最近的考试
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> 2018年.NET程序设计期末测试
                                    <span class="pull-right text-muted small"><em>2018.07.05</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> 2018软件工程期末测试
                                    <span class="pull-right text-muted small"><em>2018.07.03</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-envelope fa-fw"></i> 2018软件测试期末测试
                                    <span class="pull-right text-muted small"><em>2018.06.14</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-tasks fa-fw"></i> 2018图像处理期末测试
                                    <span class="pull-right text-muted small"><em>2018.06.10</em>
                                    </span>
                                </a>
                               
                               
                               
                            </div>
                            <!-- /.list-group -->
                            <a href="#" class="btn btn-default btn-block">全部考试</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                  
                  
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
            <!-- /.row -->
           
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
    <!-- Morris Charts JavaScript -->
    <script src="../style/raphael/raphael.min.js"></script>
    <script src="../style/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../style/js/sb-admin-2.js"></script>
    
   

</body>

</html>
