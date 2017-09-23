<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:60:"F:\wamp\www\ed2k/application/index\view\member\editinfo.html";i:1497324336;s:56:"F:\wamp\www\ed2k/application/index\view\Common\head.html";i:1497436133;s:58:"F:\wamp\www\ed2k/application/index\view\Common\footer.html";i:1496900603;}*/ ?>
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
		<li><a href="<?php echo url('Index/index'); ?>">首页</a></li>
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
<script type="text/javascript" src="__index__/js/calendar.js"></script>
<script language="javascript">

function checkinput(form){



	if(form.password.value.length>0 && form.password.value.length<6){
		alert('密码必须至少包含 6 个字符');
		form.password.focus();
		return false;
	}
	if(form.dopassword.value.length>0 && form.dopassword.value.length<6){
		alert('请再次输入密码');
		form.dopassword.focus();
		return false;
	}
	if(form.password.value != form.dopassword.value){
		alert("两次输入的密码不同，请返回重新输入");
		form.password.focus();
		return false;
	}
	return true;
}

</script>



<div class="CurrentLocation"><b>您的位置：</b><a href="/">首页</a> >> <a href="/UserPannel.asp">控制面版</a></div>
<div style="height:10px;"></div>

<div class="MenuTag"><li id="Tag_btn_0" onclick="ShowPannel(this)" class="NowTag">基本资料</li><li id="Tag_btn_1" onclick="ShowPannel(this)">资源统计</li></div>
<table id="Tag_tab_0" cellspacing=3 cellpadding=5 width="100%" class="PannelBody" style="display:block;table-layout:fixed;overflow:hidden;">
<form method="post" action="" onsubmit="return checkinput(this);">
<input type="hidden" name="id" value="<?php echo $uinfos['id']; ?>">
	<tr><td width="20%" align=right>帐号：</td><td><input type="text" class="input w_240" name="email" id="email" value="<?php echo $uinfos['email']; ?>" readonly="readonly" />　帐号在ED2000用户登陆时使用，一旦生成，不可更改。</td></tr>
	<tr><td width="20%" align=right>昵称：</td><td><input type="text" class="input w_240" name="uname" id="uname" value="<?php echo $uinfos['uname']; ?>" /></td></tr>
	<tr><td width="20%" align=right>生日：</td><td><input class="input w_240" onclick="showcalendar(event, this)" onfocus="showcalendar(event, this)" size=24 value="<?php echo $uinfos['birthday']; ?>" name="birthday" /></td></tr>
	<tr><td width="20%" align=right>性别：</td><td><select size=1 name="sex">
				<option <?php if($uinfos['sex'] == 0): ?> selected="selected" <?php endif; ?> value=0>保密</option>
				<option <?php if($uinfos['sex'] == 1): ?> selected="selected" <?php endif; ?> value=1 >男</option>
				<option <?php if($uinfos['sex'] == 2): ?> selected="selected" <?php endif; ?> value=2 >女</option>
			</select></td></tr>
	<tr><td width="20%" align=right>ＱＱ：</td><td><input type="text" class="input w_240" name="qq" id="qq" value="<?php echo $uinfos['qq']; ?>" /></td></tr>
	<tr><td width="20%" align=right>密码：</td><td><input name="password" id="password" class="input w_240" maxlength="16" type="password" /><em id="checkpasswd" style="display: none; color:#F00;"></em>　密码如不修改，请不要填写本项 </td></tr>
	<tr><td width="20%" align=right>确认密码：</td><td><input name="dopassword" class="input w_240" maxlength="16" type="password" /><em id="checkpasswd1" style="display: inline; color:#F00;"></em>　与 密码 相同</td></tr>
	<tr><td width="20%" align=right valign=top>用户签名：<br><br><b><font color="red">禁止插入网盘地址</font></b>
</td><td><textarea name="sign" style="WIDTH: 600px; HEIGHT: 100px"><?php echo $uinfos['sign']; ?></textarea></td></tr>
	<tr><td align="center" colspan="2"><input type="submit" value=" 确定 " /> </td></tr>
</form>        
</table>




<table id="Tag_tab_1" cellspacing=3 cellpadding=5 width="100%" class="PannelBody" style="display:none;">
	<tr><td align=center colspan=2>以下是近三月以来，您发布的资源统计情况</td></tr>
	<tr><td width="20%" align=right><?php echo date("Y年m月",$Tfirstday); ?></td><td><?php echo $TrightSoruceNum; ?> / <?php echo $TallSoruceNum; ?> 条</td></tr>
	<tr><td width="20%" align=right><?php echo date("Y年m月",$Lfirstday); ?></td><td><?php echo $LrightSoruceNum; ?> / <?php echo $LallSoruceNum; ?> 条</td></tr>
	<tr><td width="20%" align=right><?php echo date("Y年m月",$BLfirstday); ?></td><td><?php echo $BLrightSoruceNum; ?> / <?php echo $BLallSoruceNum; ?> 条</td></tr>
</table>



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
<!--(0)页面处理时间：.66 缓存更新时间：2017/4/14 20:03:58-->
</html>
