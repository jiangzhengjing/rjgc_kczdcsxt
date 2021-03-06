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
                            <a href="sjgl_sjgl.php"><i class="fa fa-edit fa-fw"></i> 试卷管理</a>
                            	
                        </li>
               			<li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> 用户管理<span class="fa arrow"></span></a>
                            	<ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">教师管理</a>
                                    </li>
                                    <li>
                                        <a href="#">学生管理</a>
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
                        <h1 class="page-header">题库列表</h1>
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
                                            <th class="table-ctt-sstk">题库名称</th>
                                            <th class="table-ctt-stlx">状态</th>
                                            <th class="table-ctt-stnd">试题数量</th>
                                            <th class="table-ctt-stzt">创建人</th>
                                            <th class="table-ctt-sttg">最后修改人</th>
                                            <th class="table-ctt-cz">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                            include("conn.php");
                                            $sql=mysql_query(" SELECT * FROM tiku");
                                            $i = 0;
                                            while($abc = mysql_fetch_assoc($sql))
                                            {
                                                $data [$i]['tiku_name'] = $abc['tiku_name'];
                                                $data [$i]['tiku_zhuangtai'] = $abc['tiku_zhuangtai'];
                                                $data [$i]['tiku_shuoming'] = $abc['tiku_shuoming'];
												$data [$i]['tiku_chuangjianren'] = $abc['tiku_chuangjianren'];
												$data [$i]['tiku_zhchuangjianren'] = $abc['tiku_zhchuangjianren'];
                                                
                                                $i++;
                                            }
                                            //var_dump($data);die; ?>
                                            <?php
                                            foreach ($data as $key => $value) {
                                            ?>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td><?php echo $value['tiku_name'] ?></td>
                                                    <td><?php echo $value['tiku_zhuangtai'] ?></td>
                                                      <td>100</td>
                                                    <td><?php echo $value['tiku_chuangjianren'] ?></td>
                                                    <td><?php echo $value['tiku_zhchuangjianren'] ?></td>
                                                   <td>
                                                <div class="btn-toolbar">
                                                    <div class="btn-group btn-group-xs">
                                                        
                                                        <button class="btn btn-default btn-xs hide-sm-only"><span class="icon-copy"></span> <a href="tkgl_xg_tiku.php">修改</a></button>
                                                       
                                                        <input type="button" class="btn btn-default btn-xs text-danger hide-sm-only" value="删除" onclick="del(this)" />
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
<script type="text/javascript"> 
// 创建删除函数
function del(obj)
{
var tr=obj.parentNode.parentNode.parentNode.parentNode;
tr.parentNode.removeChild(tr);
}

</script>

</body>

</html>
