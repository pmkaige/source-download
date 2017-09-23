<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"F:\wamp\www\ed2k\public/../application/index\view\search\lst.html";i:1496891475;s:66:"F:\wamp\www\ed2k\public/../application/index\view\common\head.html";i:1497232997;}*/ ?>
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
	<div class="banner">你好 <a href="<?php echo url('Member/info'); ?>"><?php echo \think\Session::get('uname'); ?></a>，欢迎登录 
<?php if(\think\Session::get('uname')): ?>
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
		<li><a href="<?php echo url('Member/mySource'); ?>">我的资源</a></li>
		<li><a href="<?php echo url('Member/source'); ?>">发布资源</a></li>
		<?php else: ?>
		<li><a href="<?php echo url('User/reg'); ?>">注册</a></li>
		<li><a href="<?php echo url('User/login'); ?>">登录</a></li>
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
      关键字：<input class="searchtxt" type="text" name="key" value="<?php echo input('key');?>" size="15" baiduSug="1"/><input type=submit value=" 搜索 " />
    </form>
  </div>
</div>

<div style="height:10px;"></div>


<div style="float:left" class="CurrentLocation"><b>您的位置：</b>
<a href="<?php echo url('index/index'); ?>">首页</a> 
<?php if(input('key')):?>
>> 搜索关键词：<span style="color:red;"><?php echo input('key');?></span>
<?php else:?>
>> 搜索tag：<span style="color:red;"><?php echo input('tag');?></span>
<?php endif;?>
</div>



<?php if($key): ?>
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
<?php else: ?>
暂无数据！
<?php endif; ?>
<div style="padding:5px;"><?php echo $artRes->render($currentPage,$lastPage); ?></div>
<!--MultiPage Start-->
<!-- <div style="padding:5px;"><span class='PageInation' style='float:right;'><a class=MultiPages>1/50</a><a class=CurrentPage>1</a><a class=PageNum href="/FileList.asp?PageIndex=2&FileCategory=音乐">2</a><a class=PageNum href="/FileList.asp?PageIndex=3&FileCategory=音乐">3</a><a class=PageNum href="/FileList.asp?PageIndex=4&FileCategory=音乐">4</a><a class=PageNum href="/FileList.asp?PageIndex=5&FileCategory=音乐">5</a><a class=PageNum href="/FileList.asp?PageIndex=6&FileCategory=音乐">6</a><a class=PageNum href="/FileList.asp?PageIndex=7&FileCategory=音乐">7</a><a class=PageNum href="/FileList.asp?PageIndex=8&FileCategory=音乐">8</a><a class=PageNum href="/FileList.asp?PageIndex=9&FileCategory=音乐">9</a><a class=PageNum href="/FileList.asp?PageIndex=10&FileCategory=音乐">10</a><a class=PageNum href="/FileList.asp?PageIndex=50&FileCategory=音乐">50</a></span></div> -->
<!--MultiPage End-->


<div style="height:10px;"></div>


<div class="clr"></div>
<div style="height:10px;"></div>

<div class="footer">
  <a href="/about.asp">关于ED2000</a> | <a href="/law.asp">著作权声明 Copyright Statement</a> | <a href="/help.asp">帮助中心</a>
 | <a onClick="javascript:window.external.AddFavorite('/','ED2000资源共享');">收藏本站</a>

<br />Copyright &copy; 2017 ED2000. All Rights Reserved<br />
  <span id=cnzz><script src='https://s92.cnzz.com/stat.php?id=947842&web_id=947842' language='JavaScript'></script></span>
</div>


<script type="text/javascript">AD_CPV(6)</script>
</body>
<!--(0)页面处理时间：.14 缓存更新时间：2017/4/14 20:03:58-->
</html>
