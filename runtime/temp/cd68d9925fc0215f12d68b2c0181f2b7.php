<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:57:"F:\wamp\www\ed2k/application/index\view\category\lst.html";i:1497449454;s:56:"F:\wamp\www\ed2k/application/index\view\common\head.html";i:1497491173;s:58:"F:\wamp\www\ed2k/application/index\view\common\footer.html";i:1496900603;}*/ ?>
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
<script>AD_Global_960x60()</script>
<div style="height:5px;"></div>




<div class="topsearch">
  <div class="title"></div>
  <div class="inpbox">
    <form name="searchForm" action="<?php echo url('Search/lst'); ?>" method="Post">
      关键字：<input class="searchtxt" type="text" name="key" value="" size="15" baiduSug="1"/><input type=submit value=" 搜索 " />
    </form>
  </div>
</div>

<div style="height:10px;"></div>


<div style="float:left" class="CurrentLocation"><b>您的位置：</b>
<a href="<?php echo url('index/index'); ?>">首页</a> 
<?php if(is_array($position) || $position instanceof \think\Collection || $position instanceof \think\Paginator): $i = 0; $__LIST__ = $position;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pos): $mod = ($i % 2 );++$i;if($pos['pid'] == 0): ?>
>> <a href="<?php echo url('Category/lst',array('id'=>$pos['id'])); ?>"><?php echo $pos['cate_name']; ?></a>
<?php else: ?>
>> <a href="<?php echo url('Category/lst',array('id'=>$pos['pid'],'sid'=>$pos['id'])); ?>"><?php echo $pos['cate_name']; ?></a>
<?php endif; endforeach; endif; else: echo "" ;endif; ?>

  <div style="text-align:right; width:870px; padding-right:10px; "><a href="/FileList.asp?FileCategory=音乐&FileHot=1">热门资源</a></div>
  <div style="text-align:right; width:880px;">
  <?php if(is_array($sonRes) || $sonRes instanceof \think\Collection || $sonRes instanceof \think\Paginator): $i = 0; $__LIST__ = $sonRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
  <a href="<?php echo url('Category/lst',array('id'=>$id,'sid'=>$cate['id'])); ?>" class='SubCategory'><?php echo $cate['cate_name']; ?></a>
  <?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
</div>
<div style="float:right; width:70px; padding-right:0px"><img src="http://img.ed2000.com/Images/音乐.jpg" alt="音乐" /></div>




<table width="100%" border="0" cellspacing="1" cellpadding="5" class="CommonListArea">
  <tr class="CommonListTitle">
    <td colspan=5>资源列表</td>
  </tr>
  <tr class="CommonListCell" align="center">
    <td>标题</td>

    <td width="80">发布日期</td>
    <td width="130">最后更新</td>
    <td width="70">大小</td>
  </tr>
  <?php if(is_array($artRes) || $artRes instanceof \think\Collection || $artRes instanceof \think\Paginator): $i = 0; $__LIST__ = $artRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arts): $mod = ($i % 2 );++$i;?>
  <tr class="CommonListCell">

    <td>[<a href="#"><?php echo $arts['cate_name']; ?></a>] <a href="<?php echo url('Article/index',array('aid'=>$arts['id'])); ?>"><?php echo $arts['title']; ?></a>
    <?php if((time()-$arts['addtime']) < 86400):?>
    <img src="http://img.ed2000.com/Images/new.gif" alt="最新资源" /> 
    <?php endif;if($arts['click'] > 1000):?>
    <img src="http://img.ed2000.com/Images/hot.gif" alt="热门资源" /></td>
    <?php endif;?>

    <td align="center"><?php echo date("Y/m/d",$arts['addtime'] ); ?></td>
    <td align="center"><?php echo date("Y/m/d H:i:s",$arts['updatetime'] ); ?></td>
    <td align="center">
      <?php if($arts['size'] == 'cl'): ?>
        <img src="__index__/img/cili.gif" height="14">
      <?php elseif($arts['size'] == 'wp'): ?>
        <img src="__index__/img/bdp.png" height="14">
      <?php elseif($arts['size'] == 'xl'): ?>
        <img src="__index__/img/xl.png" height="14">
      <?php else: ?>
        <?php echo jsSzie($arts['size']);endif; ?>
    </td>
  </tr>
  <?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<div style="padding:5px;"><?php echo $artRes->render($currentPage,$lastPage); ?></div>
<!--MultiPage Start-->
<!-- <div style="padding:5px;"><span class='PageInation' style='float:right;'><a class=MultiPages>1/50</a><a class=CurrentPage>1</a><a class=PageNum href="/FileList.asp?PageIndex=2&FileCategory=音乐">2</a><a class=PageNum href="/FileList.asp?PageIndex=3&FileCategory=音乐">3</a><a class=PageNum href="/FileList.asp?PageIndex=4&FileCategory=音乐">4</a><a class=PageNum href="/FileList.asp?PageIndex=5&FileCategory=音乐">5</a><a class=PageNum href="/FileList.asp?PageIndex=6&FileCategory=音乐">6</a><a class=PageNum href="/FileList.asp?PageIndex=7&FileCategory=音乐">7</a><a class=PageNum href="/FileList.asp?PageIndex=8&FileCategory=音乐">8</a><a class=PageNum href="/FileList.asp?PageIndex=9&FileCategory=音乐">9</a><a class=PageNum href="/FileList.asp?PageIndex=10&FileCategory=音乐">10</a><a class=PageNum href="/FileList.asp?PageIndex=50&FileCategory=音乐">50</a></span></div> -->
<!--MultiPage End-->


<div style="height:10px;"></div>


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
<!--(0)页面处理时间：.14 缓存更新时间：2017/4/14 20:03:58-->
</html>
