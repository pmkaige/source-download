<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:56:"F:\wamp\www\ed2k/application/index\view\index\index.html";i:1497456255;s:56:"F:\wamp\www\ed2k/application/index\view\common\head.html";i:1497491173;s:58:"F:\wamp\www\ed2k/application/index\view\common\footer.html";i:1496900603;}*/ ?>
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




	<div class="left">
		<!--统计 Start-->
		<div class="LeftPartA">
			<dl><dt><a href="/ShowAffice.asp">站内公告</a></dt>

				<dd><span><a title="磁力链接转换器&#40;Torrent&#32;To&#32;Magnet&#41;&#32;1.5" href="/ShowAffice/11.html">磁力链接转换器&#40;Torrent&#32;To&#32;Magnet&#41;&#32;1.5</a></span></dd>

				<dd><span><a title="本站新增加磁力链接（Magnet&#32;URI）功能" href="/ShowAffice/9.html">本站新增加磁力链接（Magnet&#32;URI）功能</a></span></dd>

				<dd><span><a title="VCD、DVD、蓝光DVD解析度一览" href="/ShowAffice/6.html">VCD、DVD、蓝光DVD解析度一览</a></span></dd>

			</dl>
		</div>
		<!--统计 End-->





<div style="height:10px;"></div>

		<div class="share">
			<dl><dt>搜索</dt>
		<form name="searchForm" action="/FileList.asp" method="Post" target="_blank" onsubmit="if(this.SearchWord.value.length<1){alert('请输入搜索关键词');return false;}else if(this.searchMethod[0].checked){window.open('http://search.ed2000.com/cse/search?s=5102198518115871963&q='+encodeURIComponent(this.SearchWord.value));return false;}">
				<dd>关键字：<input type=text name="SearchWord" size="18" /></dd>
				<dd>引　擎：<input type="radio" name="searchMethod" value="DuoCi" id="DuoCi" checked="checked" /><label for="DuoCi">百度</label> <input type="radio" name="searchMethod" value="ED2000" id="ED2000" /><label for="ED2000">站内</label></dd>
				<dd style="text-align:center;"><input type=submit value=" 搜索 " /></dd>
		</form>

		</div>

<div style="height:10px;"></div>
		<div class="share">
			<dl><dt>分享</dt><dd>
			<div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">
<a class="bds_qzone"></a>
<a class="bds_tsina"></a>
<a class="bds_tqq"></a>
<a class="bds_renren"></a>
<span class="bds_more"></span>
</div>

		</div>



</div>



<!--right start-->


<!--最新 Start-->
<div class="rightA hslice" id="最新资源">
		<h4 class="entry-title"><a title="缓存时间：2017/4/14 20:13:02" href="/FileList.asp">最新资源</a></h4>
		<ul class="entry-content">
		<?php if(is_array($newSource) || $newSource instanceof \think\Collection || $newSource instanceof \think\Paginator): $i = 0; $__LIST__ = $newSource;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$source): $mod = ($i % 2 );++$i;?>
		<li><label><b><a href="
		<?php if($source['pid'] == 0): ?>
			<?php echo url('Category/lst',array('id'=>$source['cate_id'])); else: ?>
			<?php echo url('Category/lst',array('id'=>$source['pid'],'sid'=>$source['cate_id'])); endif; ?>
		"><?php echo $source['cate_name']; ?> | </a></b> <a href="<?php echo url('Article/index',array('aid'=>$source['id'])); ?>" title="<?php echo $source['title']; ?>"><?php echo $source['title']; ?></a></label><SPAN class="date"><font color=red><?php echo date("m-d",$source['addtime']); ?></font></SPAN></li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
</div>
<!--最新 End-->




<!--热门资源 Start-->
<div class="rightB hslice" id="热门资源">
		<h4 class="entry-title"><a title="缓存时间：2017/4/14 20:11:01" href="#">热门资源</a></h4><ul class="entry-content">
			<?php if(is_array($hotRes) || $hotRes instanceof \think\Collection || $hotRes instanceof \think\Paginator): $i = 0; $__LIST__ = $hotRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$source): $mod = ($i % 2 );++$i;?>
		<li><label><b><a href="
		<?php if($source['pid'] == 0): ?>
			<?php echo url('Category/lst',array('id'=>$source['cate_id'])); else: ?>
			<?php echo url('Category/lst',array('id'=>$source['pid'],'sid'=>$source['cate_id'])); endif; ?>
		"><?php echo $source['cate_name']; ?> | </a></b> <a href="<?php echo url('Article/index',array('aid'=>$source['id'])); ?>" title="<?php echo $source['title']; ?>"><?php echo $source['title']; ?></a></label><SPAN class="date"><font color=red><?php echo date("m-d",$source['addtime']); ?></font></SPAN></li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
</div>
<!--热门资源 End-->
<div style="height:10px;"></div>
<div style="width:960px; margin:auto; text-align:center;overflow:hidden;">
<script>AD_Default_960x60()</script>
</div>
<div style="height:10px;"></div>



	<!--Left Start-->
	<div class="left" style="height:1280px;">
		<!--热点资源 Start-->
		<div class="LeftPartA">
			<dl><dt title="缓存时间：2017/4/14 20:13:02">本周热点</dt>
			<?php if(is_array($weekHot) || $weekHot instanceof \think\Collection || $weekHot instanceof \think\Paginator): $i = 0; $__LIST__ = $weekHot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$source): $mod = ($i % 2 );++$i;?>
			<dd><a title="<?php echo $source['title']; ?>" href="<?php echo url('Article/index',array('aid'=>$source['id'])); ?>"><?php echo $source['title']; ?></a></dd>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			</dl>
		</div>

		<div style="height:10px;"></div>
		<div style="width:160px; margin:auto; text-align:center;overflow:hidden;"><script>AD_Default_160x600()</script></div>









		<!--热点资源 End-->
	</div>
	<!--Left End-->



<!--right start-->



<div class="rightA hslice" id="音乐">
		<h4 class="entry-title"><a title="缓存时间：2017/4/14 20:03:50" href="<?php echo url('Category/lst',array('id'=>31)); ?>">最新音乐</a></h4><ul class="entry-content">
		<?php if(is_array($newMusic) || $newMusic instanceof \think\Collection || $newMusic instanceof \think\Paginator): $i = 0; $__LIST__ = $newMusic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$source): $mod = ($i % 2 );++$i;?>
		<li><label><b><a href="
		<?php if($source['pid'] == 0): ?>
			<?php echo url('Category/lst',array('id'=>$source['cate_id'])); else: ?>
			<?php echo url('Category/lst',array('id'=>$source['pid'],'sid'=>$source['cate_id'])); endif; ?>
		"><?php echo $source['cate_name']; ?> | </a></b> <a href="<?php echo url('Article/index',array('aid'=>$source['id'])); ?>" title="<?php echo $source['title']; ?>"><?php echo $source['title']; ?></a></label><SPAN class="date"><font color=red><?php echo date("m-d",$source['addtime']); ?></font></SPAN></li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
</div>

<div class="rightB hslice" id="游戏">
		<h4 class="entry-title"><a title="缓存时间：2017/4/14 20:03:54" href="<?php echo url('Category/lst',array('id'=>16)); ?>">最新游戏</a></h4><ul class="entry-content">
			<?php if(is_array($newGam) || $newGam instanceof \think\Collection || $newGam instanceof \think\Paginator): $i = 0; $__LIST__ = $newGam;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$source): $mod = ($i % 2 );++$i;?>
				<li><label><b><a href="
				<?php if($source['pid'] == 0): ?>
					<?php echo url('Category/lst',array('id'=>$source['cate_id'])); else: ?>
					<?php echo url('Category/lst',array('id'=>$source['pid'],'sid'=>$source['cate_id'])); endif; ?>
				"><?php echo $source['cate_name']; ?> | </a></b> <a href="<?php echo url('Article/index',array('aid'=>$source['id'])); ?>" title="<?php echo $source['title']; ?>"><?php echo $source['title']; ?></a></label><SPAN class="date"><font color=red><?php echo date("m-d",$source['addtime']); ?></font></SPAN></li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
</div>



<div class="rightA hslice" id="动漫">
		<h4 class="entry-title"><a title="缓存时间：2017/4/14 20:03:55" href="<?php echo url('Category/lst',array('id'=>20)); ?>">最新动漫</a></h4><ul class="entry-content">
			<?php if(is_array($newKatong) || $newKatong instanceof \think\Collection || $newKatong instanceof \think\Paginator): $i = 0; $__LIST__ = $newKatong;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$source): $mod = ($i % 2 );++$i;?>
		<li><label><b><a href="
		<?php if($source['pid'] == 0): ?>
			<?php echo url('Category/lst',array('id'=>$source['cate_id'])); else: ?>
			<?php echo url('Category/lst',array('id'=>$source['pid'],'sid'=>$source['cate_id'])); endif; ?>
		"><?php echo $source['cate_name']; ?> | </a></b> <a href="<?php echo url('Article/index',array('aid'=>$source['id'])); ?>" title="<?php echo $source['title']; ?>"><?php echo $source['title']; ?></a></label><SPAN class="date"><font color=red><?php echo date("m-d",$source['addtime']); ?></font></SPAN></li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
</div>

<div class="rightB hslice" id="图书">
		<h4 class="entry-title"><a title="缓存时间：2017/4/14 20:03:57" href="<?php echo url('Category/lst',array('id'=>21)); ?>">最新图书</a></h4><ul class="entry-content">
		<?php if(is_array($newBook) || $newBook instanceof \think\Collection || $newBook instanceof \think\Paginator): $i = 0; $__LIST__ = $newBook;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$source): $mod = ($i % 2 );++$i;?>
		<li><label><b><a href="
		<?php if($source['pid'] == 0): ?>
			<?php echo url('Category/lst',array('id'=>$source['cate_id'])); else: ?>
			<?php echo url('Category/lst',array('id'=>$source['pid'],'sid'=>$source['cate_id'])); endif; ?>
		"><?php echo $source['cate_name']; ?> | </a></b> <a href="<?php echo url('Article/index',array('aid'=>$source['id'])); ?>" title="<?php echo $source['title']; ?>"><?php echo $source['title']; ?></a></label><SPAN class="date"><font color=red><?php echo date("m-d",$source['addtime']); ?></font></SPAN></li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
</div>






<div class="rightA hslice" id="综艺">
		<h4 class="entry-title"><a title="缓存时间：2017/4/14 20:03:59" href="<?php echo url('Category/lst',array('id'=>22)); ?>">最新综艺</a></h4><ul class="entry-content">
			<?php if(is_array($newZongyi) || $newZongyi instanceof \think\Collection || $newZongyi instanceof \think\Paginator): $i = 0; $__LIST__ = $newZongyi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$source): $mod = ($i % 2 );++$i;?>
		<li><label><b><a href="
		<?php if($source['pid'] == 0): ?>
			<?php echo url('Category/lst',array('id'=>$source['cate_id'])); else: ?>
			<?php echo url('Category/lst',array('id'=>$source['pid'],'sid'=>$source['cate_id'])); endif; ?>
		"><?php echo $source['cate_name']; ?> | </a></b> <a href="<?php echo url('Article/index',array('aid'=>$source['id'])); ?>" title="<?php echo $source['title']; ?>"><?php echo $source['title']; ?></a></label><SPAN class="date"><font color=red><?php echo date("m-d",$source['addtime']); ?></font></SPAN></li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
</div>

<div class="rightB hslice" id="软件">
		<h4 class="entry-title"><a title="缓存时间：2017/4/14 20:03:59" href="<?php echo url('Category/lst',array('id'=>23)); ?>">最新软件</a></h4><ul class="entry-content"><?php if(is_array($newSoft) || $newSoft instanceof \think\Collection || $newSoft instanceof \think\Paginator): $i = 0; $__LIST__ = $newSoft;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$source): $mod = ($i % 2 );++$i;?>
		<li><label><b><a href="
		<?php if($source['pid'] == 0): ?>
			<?php echo url('Category/lst',array('id'=>$source['cate_id'])); else: ?>
			<?php echo url('Category/lst',array('id'=>$source['pid'],'sid'=>$source['cate_id'])); endif; ?>
		"><?php echo $source['cate_name']; ?> | </a></b> <a href="<?php echo url('Article/index',array('aid'=>$source['id'])); ?>" title="<?php echo $source['title']; ?>"><?php echo $source['title']; ?></a></label><SPAN class="date"><font color=red><?php echo date("m-d",$source['addtime']); ?></font></SPAN></li>
		<?php endforeach; endif; else: echo "" ;endif; ?></ul>
</div>


<div class="rightA hslice" id="资料">
		<h4 class="entry-title"><a title="缓存时间：2017/4/14 20:04:01" href="<?php echo url('Category/lst',array('id'=>24)); ?>">最新资料</a></h4><ul class="entry-content"><?php if(is_array($newZiliao) || $newZiliao instanceof \think\Collection || $newZiliao instanceof \think\Paginator): $i = 0; $__LIST__ = $newZiliao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$source): $mod = ($i % 2 );++$i;?>
		<li><label><b><a href="
		<?php if($source['pid'] == 0): ?>
			<?php echo url('Category/lst',array('id'=>$source['cate_id'])); else: ?>
			<?php echo url('Category/lst',array('id'=>$source['pid'],'sid'=>$source['cate_id'])); endif; ?>
		"><?php echo $source['cate_name']; ?> | </a></b> <a href="<?php echo url('Article/index',array('aid'=>$source['id'])); ?>" title="<?php echo $source['title']; ?>"><?php echo $source['title']; ?></a></label><SPAN class="date"><font color=red><?php echo date("m-d",$source['addtime']); ?></font></SPAN></li>
		<?php endforeach; endif; else: echo "" ;endif; ?></ul>
</div>

<div class="rightB hslice" id="教育">
		<h4 class="entry-title"><a title="缓存时间：2017/4/14 20:04:01" href="<?php echo url('Category/lst',array('id'=>25)); ?>">最新教育</a></h4><ul class="entry-content"><?php if(is_array($newEdu) || $newEdu instanceof \think\Collection || $newEdu instanceof \think\Paginator): $i = 0; $__LIST__ = $newEdu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$source): $mod = ($i % 2 );++$i;?>
		<li><label><b><a href="
		<?php if($source['pid'] == 0): ?>
			<?php echo url('Category/lst',array('id'=>$source['cate_id'])); else: ?>
			<?php echo url('Category/lst',array('id'=>$source['pid'],'sid'=>$source['cate_id'])); endif; ?>
		"><?php echo $source['cate_name']; ?> | </a></b> <a href="<?php echo url('Article/index',array('aid'=>$source['id'])); ?>" title="<?php echo $source['title']; ?>"><?php echo $source['title']; ?></a></label><SPAN class="date"><font color=red><?php echo date("m-d",$source['addtime']); ?></font></SPAN></li>
		<?php endforeach; endif; else: echo "" ;endif; ?></ul>
</div>

<!--right end-->


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




<script type="text/javascript">AD_CPV(5)</script>
</body>
<!--(1)页面处理时间：.00 缓存更新时间：2017/4/14 20:03:58-->
</html>
