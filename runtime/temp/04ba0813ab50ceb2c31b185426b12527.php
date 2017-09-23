<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:55:"F:\wamp\www\ed2k/application/admin\view\article\add.htm";i:1496740368;s:55:"F:\wamp\www\ed2k/application/admin\view\common\head.htm";i:1497430724;s:55:"F:\wamp\www\ed2k/application/admin\view\common\left.htm";i:1497426492;}*/ ?>
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
                                    <h2><span class="profile"><span><?php echo \think\Session::get('username'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('Admin/logout'); ?>">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('Admin/edit',array('id'=>\think\Session::get('id'))); ?>">
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
                        <a href="<?php echo url('lst'); ?>">文章管理</a>
                    </li>
                                        <li class="active">添加文章</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增文章</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post"> 
                        <input type="hidden" name="uid" value="1">
                        <input type="hidden" name="status" value="1">
                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">文章标题</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="title"  type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">所属栏目</label>
                            <div class="col-sm-6">
                                <select name="cate_id" style="width: 100%;">
                                    <?php if(is_array($cateRes) || $cateRes instanceof \think\Collection || $cateRes instanceof \think\Paginator): $i = 0; $__LIST__ = $cateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo $cate['id']; ?>"><?php echo str_repeat('-',$cate['level']*8);?><?php echo $cate['cate_name']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div> 

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">关键词</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="keywords"  type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">文章描述</label>
                            <div class="col-sm-6">
                                <textarea  class="form-control" name="desc"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">TAG标签</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="tags"  type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 多个“,”分隔</p>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">资源类型</label>
                            <div class="col-sm-6">
                                <div class="radio">
                                    <label>
                                        <input name="type" value="1" checked="checked" class="inverted" type="radio">
                                        <span class="text">ed2k资源</span>
                                    </label>
                                    <span class="red">ed2k资源</span>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="type" value="4" class="inverted" type="radio">
                                        <span class="text">迅雷地址</span>
                                    </label>
                                    <span class="red">独立迅雷地址之间使用'@@'分割</span>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="type" value="2" type="radio">
                                        <span class="text">磁力资源</span>
                                    </label>
                                    <span class="red">独立磁力资源之间使用'@@'分割</span>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="type" value="3" type="radio">
                                        <span class="text">网盘资源</span>
                                    </label>
                                    <span class="red">独立网盘资源之间使用'@@'分割，网盘链接和对应密码之间使用'|'分割</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">资源地址</label>
                            <div class="col-sm-6">
                                <textarea  class="form-control" name="dowurl"></textarea>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">文章内容</label>
                            <div class="col-sm-6">
                                <textarea id="content" name="content"></textarea>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">点击数</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="click"  type="text">
                            </div>
                        </div>

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
    <script src="__admin__/style/beyond.js"></script>
    <script type="text/javascript">
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('content',{initialFrameWidth:900,initialFrameHeight:400,});
    </script>


</body></html>