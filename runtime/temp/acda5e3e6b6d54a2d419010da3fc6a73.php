<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:55:"F:\wamp\www\ed2k/application/index\view\user\login.html";i:1497490812;s:56:"F:\wamp\www\ed2k/application/index\view\common\head.html";i:1497491173;s:58:"F:\wamp\www\ed2k/application/index\view\common\footer.html";i:1496900603;}*/ ?>
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
	<span>本站源码将持续完善更新，问题反馈及源码下载请加群：</span> 
	<span style="color:#f00;">170111861</span> | 
	<span><a style="color:#f00;" target="_blank" href="https://chuanke.baidu.com/s2260700.html">点击查看本站开发视频教程</a></span> | 
<?php if(\think\Session::get('uname')): ?>
	你好 <a href="<?php echo url('Member/info',array('uid'=>\think\Session::get('uid'))); ?>"><?php echo \think\Session::get('uname'); ?></a>，欢迎登录 
<a href="<?php echo url('Member/editinfo'); ?>">控制面板</a> <a href="<?php echo url('Member/logout'); ?>">退出</a><br>
<?php else: ?>
<a href="<?php echo url('index/User/reg'); ?>">注册</a> <a href="<?php echo url('index/User/login'); ?>">登录</a><br>
<?php endif; ?>
	</div>
</div>


<div class="topmenu">
	<ul>
		<li><a href="<?php echo url('Index/index'); ?>">首页</a></li>
		<?php if(is_array($topNav) || $topNav instanceof \think\Collection || $topNav instanceof \think\Paginator): $i = 0; $__LIST__ = $topNav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
		<li><a <?php if($cate['id'] == $cateid or $cate['id'] == $pid): ?> class="thisclass" <?php endif; ?> href="<?php echo url('category/lst',array('id'=>$cate['id'])); ?>"><?php echo $cate['cate_name']; ?></a></li>
		<?php endforeach; endif; else: echo "" ;endif; if(\think\Session::get('uname')): ?>
		<li><a href="<?php echo url('Member/mySource',array('uid'=>\think\Session::get('uid'))); ?>">我的资源</a></li>
		<li><a href="<?php echo url('Member/source'); ?>">发布资源</a></li>
		<?php else: ?>
		<li><a href="<?php echo url('index/User/reg'); ?>">注册</a></li>
		<li><a href="<?php echo url('index/User/login'); ?>">登录</a></li>
		<?php endif; ?>


	</ul>
</div>





<div style="height:5px;"></div>
<script language="javascript">
function checkEmail(e){
	document.getElementById("checkmail").style.display="none";
	if(e.indexOf("@")<=0 || e.indexOf(".")<=0 || e.indexOf("@")>e.lastIndexOf(".")){
		document.getElementById("checkmail").style.display="inline";
		document.getElementById("checkmail").innerHTML="x您输入的邮箱格式错误!";
		return false;
	}	
	return true;
}
function checkinput(form){
	if(!checkEmail(form.email.value)){
		alert('请输入正确帐号');
		form.email.focus();
		return false;
	}
	if(form.password.value.length<6){
		alert('请输入正确密码');
		form.password.focus();
		return false;
	}
}
</script>
<div class="CurrentLocation"><b>您的位置：</b><a href="/">首页</a> >> <a href="/Login.asp">用户登录</a></div>
<div style="height:10px;"></div>

<form method="POST" action="" onsubmit="return checkinput(this);">
<div class="reg">
	<h4>用户登录</h4>
	<p>
		<label for="name">电子邮件地址：</label>
		<span class="sfl"><input type="text" name="email" id="email" class="input w_240" onBlur="checkEmail(this.value)" /><em id="checkmail" style="display: none;"></em></span>
		<span class="sfr"><a href="/register.asp">没有注册?</a></span>
	</p>
	<p>
		<label for="pw">密码：</label>
		<span class="sfl"><input type="password" name="password" class="input w_240" maxlength="16" /><em id="checkpasswd" style="display: none;"></em></span>
	</p>

	<div class="action"><input type="image" src="http://img.ed2000.com/Images/sub_btn.gif" title="登录" /></div>
</div>
</form>


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
<!--(0)页面处理时间：.00 缓存更新时间：2017/4/14 20:03:58-->
</html>
