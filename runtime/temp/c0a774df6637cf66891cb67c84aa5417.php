<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"F:\wamp\www\ed2k\public/../application/index\view\member\source.html";i:1497232757;s:66:"F:\wamp\www\ed2k\public/../application/index\view\Common\head.html";i:1497271106;s:68:"F:\wamp\www\ed2k\public/../application/index\view\Common\footer.html";i:1496900603;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="电驴资源,电驴官网,eD2k,BT种子,资源下载" />
	<meta name="description" content="ED2000为您提供最新综艺、动漫、音乐、游戏、图书、软件、资料、教育等各类资源。ED2000使用eD2k,Magnet,BT,电驴等协议带您进入极速的下载世界。">
	<title>添加文件_ED2000资源共享</title>
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
<script type="text/javascript" src="http://img.ed2000.com/xheditor/jquery/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="http://img.ed2000.com/xheditor/xheditor-1.2.2.min.js"></script>
<script type="text/javascript" src="http://img.ed2000.com/xheditor/xheditor_lang/zh-cn.js"></script>
<script type="text/javascript" src="http://img.ed2000.com/xheditor/xheditor_plugins/ubb.js"></script>
<script type="text/javascript" src="http://img.ed2000.com/JS/AddFile.js"></script>

<script language="javascript">
dsy.add("0",["电影","剧集","音乐","游戏","动漫","图书","综艺","软件","资料","教育"]);
dsy.add("0_0",["动作","科幻","战争","喜剧","恐怖","灾难","魔幻","武侠","爱情","文艺","记录","剧情","传记","动画","惊悚","预告片"]);
dsy.add("0_1",["美剧","日剧","韩剧","英剧","港台","大陆"]);
dsy.add("0_2",["华语音乐","欧美音乐","日韩音乐","MV","演唱会","原声音乐","古典音乐","新世纪音乐","其它音乐"]);
dsy.add("0_3",["光盘版游戏","硬盘版游戏","电视游戏","掌机游戏","网络游戏","游戏周边"]);
dsy.add("0_4",["电视动画","剧场动画","OVA","漫画","原创动漫","动漫周边"]);
dsy.add("0_5",["小说","文学","人文社科","经济管理","计算机与网络","生活","教育科技","少儿","其它图书"]);
dsy.add("0_6",["综艺娱乐","艺人合集","体育节目","新闻综合","晚会典礼","科教节目","纪录片"]);
dsy.add("0_7",["操作系统","应用软件","网络软件","系统工具","多媒体类","行业软件","编程开发","安全相关"]);
dsy.add("0_8",["素材","杂志期刊","有声读物","其它资料"]);
dsy.add("0_9",["人文社科","理工科","艺术体育","医学","商学","计算机","外语","其它"]);






function Checkdowurl(form){

	ed2kurl=form.dowurl.value.split("\n")[0];

	if(ed2kurl.length>1){
		window.open('http://lixian.vip.xunlei.com/lixian_login.html?furl='+ed2kurl);
	}else{
		alert("输入eD2k链接后，可检测文件是否存在迅雷离线云空间中。");
		return false;
	}
}
</script>



<div class="CurrentLocation"><b>您的位置：</b><a href="/">首页</a> >> <a href="#">发布资源</a></div>


<form name="form1" id="form1" method="post" action="" onSubmit="return CheckForm(this);">


<div class="reg">
	<h4>发布资源</h4>
	<p>
		<label for="title">*资源标题：</label>
		<span class="sfl"><input type="text" id="title" name="title" value="" style="WIDTH: 600px;" /></span>

	</p>
		<p>
		<label for="FileSummary">*资源简介：
<br>
<a onclick="alert('以下情况不予通过审核:\n\n1、简介不详（少于100字一般不予通过）；\n2、标题|简介|链接中插入广告或外链下载网址；\n3、捆绑其它软件或杀毒软件提示病毒；\n4、需要密码或非免费的资源；\n5、已播完的剧集分开单集发；\n6、反复提交无法通过审核的资源，将直接删除。')">发布注意事项</a>
<br />
<b><font color="#cc33cc">发布限制级、R级、三级影片，或标题党，一作恶，即删除您发布过的任何资源。</font></b>

<br /><br /><font color="red">第三方图片上传空间</font><br />
<a href="http://tietuku.com/upload" target="_blank">贴图库</a>
<a href="http://www.popo8.com" target="_blank">PoPo8</a>
<a href="http://www.niupic.com" target="_blank">牛图</a>
<a href="http://www.nieyou.com/img/" target="_blank">捏游</a>

<br /><br />
<b><font color="#cc33cc">标题、简介、ED2K地址中插入网盘、网站等第三方下载链接，将有可能删除您发布过的所有资源。</font></b>


</label>

		<span>

﻿﻿﻿﻿<textarea id="content" name="content"  class="xheditor {tools:'Blocktag,Fontface,FontSize,Bold,Italic,Underline,Strikethrough,FontColor,BackColor,SelectAll,Removeformat,|,Align,List,Outdent,Indent,|,Link,Unlink,Img,Hr,Table,|,Source,Preview,Fullscreen',forcePtag:false,beforeSetSource:ubb2html,beforeGetSource:html2ubb}" style="WIDTH: 600px; HEIGHT: 300px"></textarea>

</span>
		
	</p>

	<p>
		<label for="dowurl">资源类型：</label>
		<span style="padding-right:10px;">ed2k<input type="radio" name="type" checked="checked" value="1"></span>
		<span style="padding-right:10px;">磁力地址<input type="radio" name="type" value="2"></span>
		<span style="padding-right:10px;">网盘(注意提取码)<input type="radio" name="type" value="3"></span>
		<span style="padding-right:10px;">迅雷<input type="radio" name="type" value="4"></span>
	</p>

	<p>
		<label for="dowurl">下载链接：</label>
		<span><textarea name="dowurl" style="width: 600px; HEIGHT: 60px"></textarea></span>
	</p>


	<p>
		<label for="category">*所属栏目：</label>
		<span>
			
			<!-- 1 -->
			<select name="cate_id" class="w_115">
                <?php if(is_array($cateRes) || $cateRes instanceof \think\Collection || $cateRes instanceof \think\Paginator): $i = 0; $__LIST__ = $cateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo $cate['id']; ?>"><?php echo str_repeat('-',$cate['level']*8);?><?php echo $cate['cate_name']; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
		</span>
	</p>
	<p>
		<label for="Tags">标签：</label>
		<span><input type="text" name="tags[]" value="" class="input w_115" /> <input type="text" name="tags[]" value="" class="input w_115" /> <input type="text" name="tags[]" value="" class="input w_115" /> <input type="text" name="tags[]" value="" class="input w_115" /> <input type="text" name="tags[]" value="" class="input w_115" /></span>
	</p>
	<p>
		<label for="dowurl">验证码：</label>
		<span><input class="input w_115" name="code" type="text" ><img src="<?php echo captcha_src(); ?>" style="cursor:pointer;" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random()" /></span>
	</p>
	<div class="action">
    	<input type="submit" value=" 添加资源 " />
	</div>
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
<!--(0)页面处理时间：.03 缓存更新时间：2017/6/11 22:00:00-->
</html>
