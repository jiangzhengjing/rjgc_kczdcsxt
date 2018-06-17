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
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                  <a class="navbar-brand" href="index.html">课程自动检测系统</a>
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

                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

             <div class="navbar-default sidebar" role="navigation" >
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
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> 首页</a>
                        </li>
                       
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> 在线练习</a>
                        </li>
                        <li>
                            <a href="forms1.html"><i class="fa fa-edit fa-fw"></i> 在线考试</a>
                        </li>
               
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> 个人中心<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">不知道</a>
                                </li>
                                <li>
                                    <a href="login.html">退出登陆</a>
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
                    <h1 class="page-header">在线练习</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            一、选择题
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="pgsj.php" method="post">
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
                                          
                                        <div class="form-group">
                                            <?php
											$j=0;
											
											$array_id=array();
                                            foreach ($data as $key => $value) {$j++;$option="option".$j; ?>
                                            <label> <?php echo  $value['id'],"、",$value['shiti_tigan'] ?></label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="<?php echo "$option" ?>" id="optionsRadios1" value="A" >A、<?php echo $value['shiti_xuanxiangA'] ?>
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="<?php echo "$option" ?>" id="optionsRadios2" value="B">B、<?php echo $value['shiti_xuanxiangB'] ?>
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="<?php echo "$option" ?>" id="optionsRadios3" value="C">C、<?php echo $value['shiti_xuanxiangC'] ?>
                                                </label>
                                            </div>
                                                <div class="radio">
                                                <label>
                                                    <input type="radio" name="<?php echo "$option" ?>" id="optionsRadios4" value="D">D、<?php echo $value['shiti_xuanxiangD'] ?>
                                                </label>
                                            </div>
                                                <?php
												array_push($array_id,$value['id']);				 
												}?>
                                    <?php foreach($array_id as $value) {?>
                                     <input type="hidden" name="tijiao_id[]" value="<?php echo $value?>" />
                                      <?php } ?>

                                      
                                        </div>
                                       
                                  
<!--                                    </form>-->
                               
                        <div class="panel-heading" style="background-color: #f5f5f5;width: 212%;margin-left: -15px;">
                            二、判断题
                        </div>
                       
<!--                                    <form role="form">-->
                                     <?php 
                                            include("conn.php");
                                            $sql=mysql_query(" SELECT * FROM panduan");
                                            $i = 0;
                                            while($abc = mysql_fetch_assoc($sql))
                                            {
                                                $data [$i]['shiti_tigan'] = $abc['shiti_tigan'];
                                                $data [$i]['shiti_xuanxiang'] = $abc['shiti_xuanxiang'];
                                              	$data [$i]['id'] = $abc['Id'];
                                                $i++;
                                            }
                                            //var_dump($data);die;?>
                                        <div class="form-group">
                                            <?php
											 $n=0;
											$array_id1=array();
                                            foreach ($data as $key => $value) { $n++;$opp="opp".$n ?>
                                            <label><?php echo $key+1,"、",$value['shiti_tigan'] ?></label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="<?php echo "$opp" ?>" id="optionsRadios1" value="T" >T
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="<?php echo "$opp" ?>" id="optionsRadios2" value="F">F
                                                </label>
                                            </div>
                                            <?php array_push($array_id1,$value['id']);}?>
                                        </div>
                                    <?php foreach($array_id1 as $value) {?>
                                     <input type="hidden" name="tijiao_id1[]" value="<?php echo $value?>" />
                                      <?php } ?>
                                        
                                        <button type="submit" class="btn btn-default">提交</button>
                                       
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
