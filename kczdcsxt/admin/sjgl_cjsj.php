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
    <!--    bootstrap-datetimepicker-->
    <link href="../style/css/bootstrap-datetimepicker.min.css" rel="stylesheet" >
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
                            <a href="#"><i class="fa fa-edit fa-fw"></i> 题库管理<span class="fa arrow"></span></a>
                            	<ul class="nav nav-second-level">
                                    <li>
                                        <a href="tkgl_add_tiku.php">新增题库</a>
                                    </li>
                                    <li>
                                        <a href="tkgl_add_tikulist.php">题库列表</a>
                                    </li>
                                    <li>
                                        <a href="tkgl_add_shiti.php">新增试题</a>
                                    </li>
                                    <li>
                                        <a href="tkgl_add_piliangdaorushiti.php">导入试题</a>
                                    </li>
                                    <li>
                                        <a href="tkgl_add_guanlishiti.php">管理试题</a>
                                    </li>
                               </ul>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> 试卷管理<span class="fa arrow"></span></a>
                            	<ul class="nav nav-second-level">
                                    <li>
                                        <a href="sjgl_cjsj.php">创建试卷</a>
                                    </li>
                                    <li>
                                        <a href="blank.html">试卷管理</a>
                                    </li>
                                    <li>
                                        <a href="blank.html">试卷分类</a>
                                    </li>
                                
                                 </ul>
                        </li>
                         <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> 自测管理<span class="fa arrow"></span></a>
                            	<ul class="nav nav-second-level">
                                    <li>
                                        <a href="blank.html">自测记录</a>
                                    </li>
                                    
                                
                                 </ul>
                        </li>
               			<li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> 用户管理<span class="fa arrow"></span></a>
                            	<ul class="nav nav-second-level">
                                    <li>
                                        <a href="blank.html">教师管理</a>
                                    </li>
                                    <li>
                                        <a href="blank.html">学生管理</a>
                                    </li>
                                    
                                 </ul>
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
                        <h1 class="page-header">创建试题</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <p>
											<a href="sjgl_cjsj.php"><button class="btn">创建试题</button></a>
					<a href="sjgl_kscjsj.php"><button class="btn">快速创建试题</button></a>
											<button class="btn">管理试题</button>
										</p>
                                        <hr>
                                        <hr>
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="form form-horizontal" action="cjsj.php" method="post">
                                       <div class="col-lg-12">
                                       <div class="form-group">
                                            <label for="user-name" class="col-sm-3 form-label">试卷名称</label>
                                            <div class="col-sm-9">
                                               
                                                 <input class="form-control"  name="sjmc">

                                            </div>
                                       </div>
                                       </div>
                                       <div class="col-lg-6">

                                            <div class="form-group">
                                                <label for="stlx" class="col-sm-3 form-label">试卷分类</label>
                                                <div class="col-sm-9">
                                                     <select name="sjfl" class="form-control">
                                                          <option>请选择</option>
                                                          <option>2</option>
                                                          <option>3</option>
                                                          <option>4</option>
                                                          <option>5</option>
                                                     </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="stlx" class="col-sm-3 form-label">开考时间</label>
                                            
                                                <div class="col-sm-9">
                                                     
                                                     <input class="form-control" type="date" name="kksj">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="stlx" class="col-sm-3 form-label">成绩公布时间</label>
                                                <div class="col-sm-9">
                                                     
                                                     <input class="form-control" type="date" name="cjgbsj">
                                                </div>
                                            </div>

                                           

                                          

                                        </div>
                                        <div class="col-lg-6">

                                            <div class="form-group">
                                                <label for="stlx" class="col-sm-3 form-label">试卷状态</label>
                                            
                                                <div class="col-sm-9">
                                                     <select name="sjzt" class="form-control">
                                                          <option>开放</option>
                                                          <option>关闭</option>
                                                     </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="stlx" class="col-sm-3 form-label">结束时间</label>
                                            
                                                <div class="col-sm-9">
                                                    
                                                       <input class="form-control" type="date" name="jssj">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="stlx" class="col-sm-3 form-label">考试时长</label>
                                            
                                                <div class="col-sm-9">
                                                    
                                                       <input class="form-control" type="date" name="kssc">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="user-name" class="col-sm-3 form-label">试卷说明</label>
                                            <div class="col-sm-9">
                                             
                                                <textarea name="sjsm" rows="5" style="width: 117%;margin-left: -120px;"></textarea>
                                                 
                                            </div>
                                       </div>
                                        </div>
                                     
                                    </form>
                                    <div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="button">
												<i class="icon-ok bigger-110"></i>
												提交
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												取消
											</button>
										</div>
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
    <!--   bootstrap-datetimepicker-->
    <script src="../style/bootstrap/bootstrap-datetimepicker.js"></script>
</body>

</html>
