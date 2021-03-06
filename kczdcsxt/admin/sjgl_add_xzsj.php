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
                                        <a href="blank.html">创建试卷</a>
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
                        <h1 class="page-header">新增试卷</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            新增试卷
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="form form-horizontal" action="tjshiti.php" method="post">
                                       <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="stlx" class="col-sm-3 form-label">试题类型</label>
                                            <div class="col-sm-9">
                                                 <select name="shiti_leixing" class="form-control">
                                                      <option>1</option>
                                                      <option>2</option>
                                                      <option>3</option>
                                                      <option>4</option>
                                                      <option>5</option>
                                                 </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="stlx" class="col-sm-3 form-label">所属题库</label>
                                            
                                            <div class="col-sm-9">
                                                 <select name="shiti_tiku" class="form-control">
                                                      <option>1</option>
                                                      <option>2</option>
                                                      <option>3</option>
                                                      <option>4</option>
                                                      <option>5</option>
                                                 </select>
                                            </div>
                                        </div>
                                   
                                   
                                        </div>
                                                <div class="col-lg-6">
                                      
                                      
                                        <div class="form-group">
                                            <label for="stlx" class="col-sm-3 form-label">试题状态</label>
                                            
                                            <div class="col-sm-9">
                                                 <select name="shiti_zhuangtai" class="form-control">
                                                      <option>1</option>
                                                      <option>2</option>
                                                      <option>3</option>
                                                      <option>4</option>
                                                      <option>5</option>
                                                 </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="stlx" class="col-sm-3 form-label">试题难度</label>
                                            
                                            <div class="col-sm-9">
                                                 <select name="shiti_nandu" class="form-control">
                                                      <option>1</option>
                                                      <option>2</option>
                                                      <option>3</option>
                                                      <option>4</option>
                                                      <option>5</option>
                                                 </select>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="user-name" class="col-sm-3 form-label">试题题干</label>
                                            <div class="col-sm-9">
                                             
                                                <textarea  name="shiti_tigan" rows="5"  placeholder="试题题干" style="width: 117%;margin-left: -120px;"></textarea>
                                                 
                                            </div>
                                       </div>
                                       <div class="form-group">
                                            <label for="user-name" class="col-sm-2 form-label">选项设置</label>
                                            <div class="col-sm-10">
                                                <label for="user-name" class="col-sm-2 form-label">A</label>
                                                <div class="col-sm-10">
                                                <textarea  name="shiti_xuanxiangA" rows="3"  placeholder="选项描述" style="width: 100%;"></textarea>
                                                </div>
                                                 <label for="user-name" class="col-sm-2 form-label">B</label>
                                                <div class="col-sm-10">
                                                <textarea  name="shiti_xuanxiangB" rows="3"  placeholder="选项描述" style="width: 100%;"></textarea>
                                                </div>
                                                 <label for="user-name" class="col-sm-2 form-label">C</label>
                                                <div class="col-sm-10">
                                                <textarea name="shiti_xuanxiangC" rows="3"  placeholder="选项描述" style="width: 100%;"></textarea>
                                                </div>
                                                 <label for="user-name" class="col-sm-2 form-label">D</label>
                                                <div class="col-sm-10">
                                                <textarea name="shiti_xuanxiangD" rows="3"  placeholder="选项描述" style="width: 100%;"></textarea>
                                                </div>
                                            </div>
                                            
                                       </div>
                                       <div class="form-group">
                                            <label for="user-name" class="col-sm-3 form-label">试题解析</label>
                                            <div class="col-sm-9">
                                             
                                                <textarea name="shiti_jiexi" rows="5"  placeholder="试题解析" style="width: 117%;margin-left: -120px;"></textarea>
                                                 
                                            </div>
                                       </div>
                                        </div>
                                     <div class="col-lg-12">
                                      
                                     
                                       <button type="submit" class="btn btn-default" style=" margin-left: 330px;">提交</button>
                                       
                                        <button type="reset" class="btn btn-default" style=" margin-left: 30px;">撤销</button>
                                       
                                     </div>
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
