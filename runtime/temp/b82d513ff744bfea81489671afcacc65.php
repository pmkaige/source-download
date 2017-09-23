<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:59:"F:\wamp\www\ed2k/application/admin\view\config\conflist.htm";i:1493733047;s:55:"F:\wamp\www\ed2k/application/admin\view\common\head.htm";i:1492440041;s:55:"F:\wamp\www\ed2k/application/admin\view\common\left.htm";i:1497426492;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>ThinkPHP5.0</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__admin__/style/bootstrap.css" rel="stylesheet">
    <link href="__admin__/style/font-awesome.css" rel="stylesheet">
    <link href="__admin__/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="__admin__/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="__admin__/style/demo.css" rel="stylesheet">
    <link href="__admin__/style/typicons.css" rel="stylesheet">
    <link href="__admin__/style/animate.css" rel="stylesheet">
    <script src="__admin__/style/jquery_002.js"></script>
    <script src="__admin__/plus/ueditor/ueditor.config.js"></script>
    <script src="__admin__/plus/ueditor/ueditor.all.min.js"></script>
    <script src="__admin__/plus/ueditor/lang/zh-cn/zh-cn.js"></script>
    
</head>
<body>
	<!-- 头部 -->
        <div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                            <img src="__admin__/images/logo.png" alt="">
                        </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="__admin__/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>admin</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/logout.html">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/changePwd.html">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
	<!-- /头部 -->
	
	<div class="main-container container-fluid">
		<div class="page-container">
			<!-- Page Sidebar -->
                <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input class="searchinput" type="text">
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text">管理员</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Admin/lst'); ?>">
                                    <span class="menu-text">
                                        管理列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-folder-open"></i>
                            <span class="menu-text">栏目管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Cate/lst'); ?>">
                                    <span class="menu-text">
                                        栏目列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-file-text"></i>
                            <span class="menu-text">文档</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Article/lst'); ?>">
                                    <span class="menu-text">
                                        文章列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Article/add'); ?>">
                                    <span class="menu-text">
                                        添加文章                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>
                            <span class="menu-text">系统</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Config/lst'); ?>">
                                    <span class="menu-text">
                                        配置管理
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Config/conflist'); ?>">
                                    <span class="menu-text">
                                        配置列表
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>                        
                    
                    <li>
                        <a href="http://www.chuanke.com/s2260700.html" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>
                            <span class="menu-text">Tp5视频教程</span>
                            <i class="menu-expand"></i>
                        </a>                           
                    </li>                         
                    
                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="<?php echo url('Index/index'); ?>">系统</a>
                    </li>
                                        <li>
                        <a href="<?php echo url('lst'); ?>">配置管理</a>
                    </li>
                                        <li class="active">配置列表</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">配置列表</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data"> 

                        <?php foreach($confRes as $v):?>
                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right"><?php echo $v['cname'];?></label>
                            <div class="col-sm-6">
                                <!-- <input class="form-control" placeholder="" name="cname"  type="text"> -->
                                <?php switch ($v['type']) {
                                    case 1:
                                        echo "<input class='form-control' value='".$v['value']."' name='".$v['ename']."'  type='text'>";
                                        break;
                                    case 2:
                                        echo "<textarea class='form-control' name='".$v['ename']."'>".$v['value']."</textarea>";
                                        break;
                                    case 3:
                                        if($v['values']){
                                            $arr=explode(',', $v['values']);
                                            foreach ($arr as $v1) {
                                                if($v['value'] == $v1){
                                                    $checked='checked="checked"';
                                                }else{
                                                    $checked='';
                                                }
                                                echo "<div class='radio'> <label>";
                                                echo "<input ".$checked." name='".$v['ename']."' value='".$v1."' type='radio'>";
                                                echo "<span class='text'>".$v1."</span>";
                                                echo "</div></label>";
                                            }
                                        }
                                        break;
                                    case 4:
                                        echo "<input style='float:left; padding-right:20px;' name='".$v['ename']."'  type='file'>";
                                        if($v['value']){
                                            echo "<img style='float:left;' src='__index__/uploads/".$v['value']."' height=40 >";
                                        }
                                        break;
                                    default:
                                        # code...
                                        break;
                                } ?>
                            </div>
                        </div>
                        <?php endforeach;?>
                        <!-- <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">英文名称</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="ename"  type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">配置类型</label>
                            <div class="col-sm-6">
                                <div class="radio">
                                    <label>
                                        <input name="type" value="1" checked="checked" class="inverted" type="radio">
                                        <span class="text">单行文本</span>
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="type" value="2" type="radio">
                                        <span class="text">文本域</span>
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="type" value="3" type="radio">
                                        <span class="text">单选按钮</span>
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="type" value="4" type="radio">
                                        <span class="text">文件类型</span>
                                    </label>
                                </div>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">默认值</label>
                            <div class="col-sm-6">
                                <textarea  class="form-control" name="value"></textarea>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">可选值</label>
                            <div class="col-sm-6">
                                <textarea  class="form-control" name="values"></textarea>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div> -->

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存信息</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

	    <!--Basic Scripts-->
    
    <script src="__admin__/style/bootstrap.js"></script>
    <!--Beyond Scripts-->
    <script src="__admin__/style/beyond.js"></script


</body></html>