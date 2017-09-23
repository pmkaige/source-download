<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"F:\wamp\www\ed2k\public/../application/index\view\member\info.html";i:1497271174;s:66:"F:\wamp\www\ed2k\public/../application/index\view\Common\head.html";i:1497271106;s:68:"F:\wamp\www\ed2k\public/../application/index\view\Common\footer.html";i:1496900603;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="ThinkPHP学习交流及资料下载群：489486454" />
	<meta name="description" content="ThinkPHP学习交流及资料下载群：489486454">
	<title>ThinkPHP学习交流及资料下载群：489486454</title>
	<link rel="stylesheet" type="text/css" href="__index__/css/Default.css" />
	<script language="javascript" type="text/javascript" src="__index__/js/global.js"></script>
</head>

<body>
<div class="header">
	<div class="logo"><a href="/" class="ed2000logo" title="ED2000资源共享"></a></div>
	<div class="banner">
<?php if(\think\Session::get('uname')): ?>
	你好 <a href="<?php echo url('Member/info',array('uid'=>\think\Session::get('uid'))); ?>"><?php echo \think\Session::get('uname'); ?></a>，欢迎登录 
<a href="<?php echo url('Member/editinfo'); ?>">控制面板</a> <a href="<?php echo url('Member/logout'); ?>">退出</a><br>
<?php else: ?>
<a href="<?php echo url('User/reg'); ?>">注册</a> <a href="<?php echo url('User/login'); ?>">登录</a><br>
<?php endif; ?>
	</div>
</div>


<div class="topmenu">
	<ul>
		<li><a href="/">首页</a></li>
		<?php if(is_array($topNav) || $topNav instanceof \think\Collection || $topNav instanceof \think\Paginator): $i = 0; $__LIST__ = $topNav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
		<li><a <?php if($cate['id'] == $cateid or $cate['id'] == $pid): ?> class="thisclass" <?php endif; ?> href="<?php echo url('category/lst',array('id'=>$cate['id'])); ?>"><?php echo $cate['cate_name']; ?></a></li>
		<?php endforeach; endif; else: echo "" ;endif; if(\think\Session::get('uname')): ?>
		<li><a href="<?php echo url('Member/mySource',array('uid'=>\think\Session::get('uid'))); ?>">我的资源</a></li>
		<li><a href="<?php echo url('Member/source'); ?>">发布资源</a></li>
		<?php else: ?>
		<li><a href="<?php echo url('User/reg'); ?>">注册</a></li>
		<li><a href="<?php echo url('User/login'); ?>">登录</a></li>
		<?php endif; ?>



	</ul>
</div>





<div style="height:5px;"></div>
<div class="CurrentLocation"><b>您的位置：</b><a href="/">首页</a> >> <a href="javascript:;">查看 <?php echo $infos['uname']; ?> 的资料</a></div>
<div style="height:10px;"></div>

<table width="100%" cellspacing="0" cellpadding="0"><tr><td width="600">


<div class="bdgray" style="float:left;width:600px;">
	<dl class="Sbox_1">
		<dt class="title"><span><strong>个人资料</strong></span></dt>
		<dd>昵称：<?php echo $infos['uname']; ?></dd>
		<dd>性别：<?php if($infos['sex'] == 0): ?> 保密 <?php elseif($infos['sex'] == 1): ?> 男 <?php else: ?> 女 <?php endif; ?></dd>
		<dd>发布权限：<?php if($infos['power_status'] == 1): ?> 正常 <?php else: ?> 禁止发布 <?php endif; ?></dd>
		<dd>发布资源：<?php echo $sourceNum; ?></dd>
		<dd>活跃天数：<?php echo $infos['live_day']; ?></dd>
		<dd>注册日期：<?php echo date("Y-m-d H:i:s",$infos['regtime']); ?></dd>
		<dd>所在地区：<?php echo $infos['adress']; ?></dd>
		<dd>最后登录：<?php echo date("Y-m-d H:i:s",$infos['lasttime']); ?></dd>
		<dd>相关操作：<a href="<?php echo url('Member/mySource',array('uid'=>$userid)); ?>" title="搜索 <?php echo $infos['uname']; ?> 发布的资源"><img border="0" src="http://img.ed2000.com/Images/search.gif"></a> <a href="mailto:<?php echo $email; ?>" title="给 2119521240 发送邮件"><img border="0" src="http://img.ed2000.com/Images/email.gif"></a> 


<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $infos['qq']; ?>&site=ed2000&menu=yes" title="点击这里给我发QQ消息"><img border="0" src="http://wpa.qq.com/pa?p=2:2119521240:45"></a>


		</dd>

	</dl>
</div>

</td><td align="center"><script type="text/javascript">BAIDU_CLB_fillSlot("676505");</script></td></tr></table>
<div class="clr"></div>
<div style="height:10px;"></div>
<div class="bdgray">
	<dl class="Sbox_1">
		<dt class="title"><span><strong> 签 名 </strong></span></dt>
		<dd><div style="width:960px;overflow:hidden;"><?php echo $infos['sign']; ?></div></dd>
	</dl>
</div>
<br>
<div class="clr"></div>
<div style="height:10px;"></div>

<script type="text/javascript">
	function addFavorite2() {
    var url = window.location;
    var title = document.title;
    var ua = navigator.userAgent.toLowerCase();
    if (ua.indexOf("360se") > -1) {
        alert("由于360浏览器功能限制，请按 Ctrl+D 手动收藏！");
    }
    else if (ua.indexOf("msie 8") > -1) {
        window.external.AddToFavoritesBar(url, title); //IE8
    }
    else if (document.all) {
  try{
   window.external.addFavorite(url, title);
  }catch(e){
   alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
  }
    }
    else if (window.sidebar) {
        window.sidebar.addPanel(title, url, "");
    }
    else {
  alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
    }
}
</script>
<div class="footer">
	<?php if(is_array($bottomNav) || $bottomNav instanceof \think\Collection || $bottomNav instanceof \think\Paginator): $i = 0; $__LIST__ = $bottomNav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bnav): $mod = ($i % 2 );++$i;?>
		<a target="_blank" href="<?php echo url('Category/cate_index',array('id'=>$bnav['id'])); ?>"><?php echo $bnav['cate_name']; ?></a> | 
	<?php endforeach; endif; else: echo "" ;endif; ?>
	<a href=# onclick="JavaScript:addFavorite2()">收藏本站</a>

	<br />Copyright &copy; 2017 ED2000. All Rights Reserved<br />

</div>


</body>
<!--(0)页面处理时间：.09 缓存更新时间：2017/4/14 20:03:58-->
</html>
