<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"F:\wamp\www\ed2k\public/../application/index\view\index\index.html";i:1493955385;s:66:"F:\wamp\www\ed2k\public/../application/index\view\common\head.html";i:1497271106;s:68:"F:\wamp\www\ed2k\public/../application/index\view\common\footer.html";i:1496900603;}*/ ?>
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
		<h4 class="entry-title"><a title="缓存时间：2017/4/14 20:13:02" href="/FileList.asp">最新资源</a></h4><ul class="entry-content"><li><label><b><a href="/Type/游戏">游戏 | </a></b> <a href="/ShowFile/700172.html" title="[Asura-PLAZA]">[Asura-PLAZA]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/电影">电影 | </a></b> <a href="/ShowFile/700171.html" title="[全职高手][更至03集][国语中字][WEB-MP4][无水印1080P]">[全职高手][更至03集][国语中字][WEB-MP4][无水印1080P]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/音乐">音乐 | </a></b> <a href="/ShowFile/700170.html" title="原声大碟 -《速度与激情8》(The Fate of the Furious)The Album[MP3]">原声大碟 -《速度与激情8》(The Fate of the Furious)The Album[MP3]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/图书">图书 | </a></b> <a href="/ShowFile/700169.html" title="《量子理论：爱因斯坦与玻尔关于世界本质的伟大论战》扫描版[PDF]">《量子理论：爱因斯坦与玻尔关于世界本质的伟大论战》扫描版[PDF]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/图书">图书 | </a></b> <a href="/ShowFile/700168.html" title="《可笑的思维谬误：批判性思考与查错神经》扫描版[PDF]">《可笑的思维谬误：批判性思考与查错神经》扫描版[PDF]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/图书">图书 | </a></b> <a href="/ShowFile/700167.html" title="《决策的艺术》扫描版[PDF]">《决策的艺术》扫描版[PDF]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/音乐">音乐 | </a></b> <a href="/ShowFile/700166.html" title="Charli XCX -《Number 1 Angel》[MP3]">Charli XCX -《Number 1 Angel》[MP3]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/音乐">音乐 | </a></b> <a href="/ShowFile/700165.html" title="Roxette -《Good Karma》[MP3]">Roxette -《Good Karma》[MP3]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/音乐">音乐 | </a></b> <a href="/ShowFile/700164.html" title="Jamiroquai -《Automaton》[MP3]">Jamiroquai -《Automaton》[MP3]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/音乐">音乐 | </a></b> <a href="/ShowFile/700163.html" title="Timeflies -《Just for Fun》Deluxe Edition[MP3]">Timeflies -《Just for Fun》Deluxe Edition[MP3]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/音乐">音乐 | </a></b> <a href="/ShowFile/700162.html" title="J Sutta -《I Say Yes》[MP3]">J Sutta -《I Say Yes》[MP3]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/图书">图书 | </a></b> <a href="/ShowFile/700161.html" title="《富足：改变人类未来的4大力量》扫描版[PDF]">《富足：改变人类未来的4大力量》扫描版[PDF]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/游戏">游戏 | </a></b> <a href="/ShowFile/700160.html" title="[Planescape.Torment.Enhanced.Edition.CHS.2.0-ALI213]">[Planescape.Torment.Enhanced.Edition.CHS.2.0-ALI213]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li></ul>
</div>
<!--最新 End-->




<!--热门资源 Start-->
<div class="rightB hslice" id="热门资源">
		<h4 class="entry-title"><a title="缓存时间：2017/4/14 20:11:01" href="/FileList.asp?FileHot=1">热门资源</a></h4><ul class="entry-content"><li><label><b><a href="/Type/电影">电影 | </a></b> <a href="/ShowFile/700171.html" title="[全职高手][更至03集][国语中字][WEB-MP4][无水印1080P]">[全职高手][更至03集][国语中字][WEB-MP4][无水印1080P]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/音乐">音乐 | </a></b> <a href="/ShowFile/700170.html" title="原声大碟 -《速度与激情8》(The Fate of the Furious)The Album[MP3]">原声大碟 -《速度与激情8》(The Fate of the Furious)The Album[MP3]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/图书">图书 | </a></b> <a href="/ShowFile/700169.html" title="《量子理论：爱因斯坦与玻尔关于世界本质的伟大论战》扫描版[PDF]">《量子理论：爱因斯坦与玻尔关于世界本质的伟大论战》扫描版[PDF]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/图书">图书 | </a></b> <a href="/ShowFile/700168.html" title="《可笑的思维谬误：批判性思考与查错神经》扫描版[PDF]">《可笑的思维谬误：批判性思考与查错神经》扫描版[PDF]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/图书">图书 | </a></b> <a href="/ShowFile/700167.html" title="《决策的艺术》扫描版[PDF]">《决策的艺术》扫描版[PDF]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/图书">图书 | </a></b> <a href="/ShowFile/700161.html" title="《富足：改变人类未来的4大力量》扫描版[PDF]">《富足：改变人类未来的4大力量》扫描版[PDF]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/电影">电影 | </a></b> <a href="/ShowFile/700159.html" title="[守护者：世纪战元][HD-MP4/2.7GB][中文字幕][1080P]">[守护者：世纪战元][HD-MP4/2.7GB][中文字幕][1080P]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/电影">电影 | </a></b> <a href="/ShowFile/700158.html" title="[金刚狼3：殊死一战 Logan][HD-MP4/3GB][中英双字幕][1080P][韩版]">[金刚狼3：殊死一战 Logan][HD-MP4/3GB][中英双字幕][1080P][韩版]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/电影">电影 | </a></b> <a href="/ShowFile/700157.html" title="[西游伏妖篇][WEB-MKV/8.86G][国语中字][4k]">[西游伏妖篇][WEB-MKV/8.86G][国语中字][4k]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/游戏">游戏 | </a></b> <a href="/ShowFile/700153.html" title="[Beat.Cop.XY.CHS.Green.Edition-ALI213][巡警|Beat Cop|免安装简体中文绿色版|解压缩即玩][CN]">[Beat.Cop.XY.CHS.Green.Edition-ALI213][巡警|Beat Cop|免安装简体中文绿色版|解压缩即玩][CN]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/电影">电影 | </a></b> <a href="/ShowFile/700151.html" title="[2016动作奇幻冒险] [长城万里长城][MKV-1080P][国语 中英双字幕3.40GB]">[2016动作奇幻冒险] [长城万里长城][MKV-1080P][国语 中英双字幕3.40GB]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/游戏">游戏 | </a></b> <a href="/ShowFile/700146.html" title="[100.Percent.Orange.Juice.v1.18.1.Incl.11Dlc-ALI213][100%鲜橙汁v1.18.1版整合11DLC|100% Orange Juice|免安装绿色版|解压缩即玩][EN]">[100.Percent.Orange.Juice.v1.18.1.Incl.11Dlc-ALI213][100%鲜橙汁v1.18.1版整合11DLC|100% Orange Juice|免安装绿色版|解压缩即玩][EN]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/图书">图书 | </a></b> <a href="/ShowFile/700144.html" title="《人民的名义》扫描版[PDF]">《人民的名义》扫描版[PDF]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li></ul>
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
<dd><a title="[2017][欧美][动作/奇幻/冒险][HD-MP4/1.12G][韩版英语中字]" href="/ShowFile/699025.html">[2017][欧美][动作/奇幻/冒险][HD-MP4/1.12G][韩版英语中字]</a></dd><dd><a title="199本畅销电子书" href="/ShowFile/698958.html">199本畅销电子书</a></dd><dd><a title="《攻壳机动队真人版》2017最新科幻大片TC720P国语无字.mp4" href="/ShowFile/699426.html">《攻壳机动队真人版》2017最新科幻大片TC720P国语无字.mp4</a></dd><dd><a title="1500本当当网电子书合集7" href="/ShowFile/698957.html">1500本当当网电子书合集7</a></dd><dd><a title="夜激情.Erotic Nights.1989.LD_D5.x264.AAC.480P.YYH3D.xt【粤语中英字】【何藩】" href="/ShowFile/699031.html">夜激情.Erotic Nights.1989.LD_D5.x264.AAC.480P.YYH3D.xt【粤语中英字】【何藩】</a></dd><dd><a title="[秘密特工][HD-MKV/2.59G][英语中字][1080P]" href="/ShowFile/699020.html">[秘密特工][HD-MKV/2.59G][英语中字][1080P]</a></dd><dd><a title="[保持站立/垂直人生/保持勃起][WEB-MP4/1.2GB][中文字幕][1080P]" href="/ShowFile/699073.html">[保持站立/垂直人生/保持勃起][WEB-MP4/1.2GB][中文字幕][1080P]</a></dd><dd><a title="《终极斗士4：自由》下载，暴力动作大片HD.720p.中英双字幕下载" href="/ShowFile/699560.html">《终极斗士4：自由》下载，暴力动作大片HD.720p.中英双字幕下载</a></dd><dd><a title="[激战柏林][BD-MP4/2.14GB/3.43GB][中英双字]" href="/ShowFile/699144.html">[激战柏林][BD-MP4/2.14GB/3.43GB][中英双字]</a></dd><dd><a title="[攻壳机动队真人版][TS-MP4/1.01G][英语中字]" href="/ShowFile/699032.html">[攻壳机动队真人版][TS-MP4/1.01G][英语中字]</a></dd><dd><a title="【2017】[超清版] 【不眠夜】【影帝杰米·福克斯动作大片.中英字幕.1080P.HD-MP4】" href="/ShowFile/699128.html">【2017】[超清版] 【不眠夜】【影帝杰米·福克斯动作大片.中英字幕.1080P.HD-MP4】</a></dd><dd><a title="[荒野女囚][HD-MP4/800MB][国语中文字幕][720P]" href="/ShowFile/699137.html">[荒野女囚][HD-MP4/800MB][国语中文字幕][720P]</a></dd><dd><a title="[我的援交日记][BD-MP4/1.22G][中文字幕内嵌][720P高清]" href="/ShowFile/699879.html">[我的援交日记][BD-MP4/1.22G][中文字幕内嵌][720P高清]</a></dd><dd><a title="《史记》早该这样读-时殷弘" href="/ShowFile/699018.html">《史记》早该这样读-时殷弘</a></dd><dd><a title="2016年美国动作片《印第安纳波利斯号：勇者无惧》HD720P 中英双字" href="/ShowFile/699161.html">2016年美国动作片《印第安纳波利斯号：勇者无惧》HD720P 中英双字</a></dd><dd><a title="[西游伏妖篇/西游降魔篇2/西游·降魔篇2][WEB-MP4/3.37GB][国语][1080P][吴亦凡/林更新等]" href="/ShowFile/699905.html">[西游伏妖篇/西游降魔篇2/西游·降魔篇2][WEB-MP4/3.37GB][国语][1080P][吴亦凡/林更新等]</a></dd><dd><a title="[五十度黑/格雷的五十道色戒2][HD-MP4/1.5G][中文字幕][720P][未删减版]" href="/ShowFile/699022.html">[五十度黑/格雷的五十道色戒2][HD-MP4/1.5G][中文字幕][720P][未删减版]</a></dd><dd><a title="[野性的证明][BD-MP4/1.89G][中文字幕内嵌][720P高清]" href="/ShowFile/699427.html">[野性的证明][BD-MP4/1.89G][中文字幕内嵌][720P高清]</a></dd><dd><a title="[时间浪人][WEB-DL-MKV/1.29GB][中文字幕][1080P]" href="/ShowFile/699150.html">[时间浪人][WEB-DL-MKV/1.29GB][中文字幕][1080P]</a></dd><dd><a title="[秦始皇陵的惊天秘密][WEB-MP4/1.25G][英语中字][1080P]" href="/ShowFile/699365.html">[秦始皇陵的惊天秘密][WEB-MP4/1.25G][英语中字][1080P]</a></dd><dd><a title="[西游伏妖篇/西游降魔篇2][HD-MP4/1.4GB][国语][720P高清版]" href="/ShowFile/699870.html">[西游伏妖篇/西游降魔篇2][HD-MP4/1.4GB][国语][720P高清版]</a></dd><dd><a title="世界之外[韩版]The.Space.Between.Us.2017.720p.HDRip.x264.AAC2.0-STU 2.49GB" href="/ShowFile/698997.html">世界之外[韩版]The.Space.Between.Us.2017.720p.HDRip.x264.AAC2.0-STU 2.49GB</a></dd><dd><a title="[二龙湖浩哥之江湖学院][HD-MP4/1.46GB][国语中字][720P高清版]" href="/ShowFile/699239.html">[二龙湖浩哥之江湖学院][HD-MP4/1.46GB][国语中字][720P高清版]</a></dd>
			</dl>
		</div>

		<div style="height:10px;"></div>
		<div style="width:160px; margin:auto; text-align:center;overflow:hidden;"><script>AD_Default_160x600()</script></div>









		<!--热点资源 End-->
	</div>
	<!--Left End-->



<!--right start-->



<div class="rightA hslice" id="音乐">
		<h4 class="entry-title"><a title="缓存时间：2017/4/14 20:03:50" href="/Type/音乐">最新音乐</a></h4><ul class="entry-content"><li><label><b><a href="/Type/音乐/原声音乐">原声音乐 | </a></b> <a href="/ShowFile/700170.html" title="原声大碟 -《速度与激情8》(The Fate of the Furious)The Album[MP3]">原声大碟 -《速度与激情8》(The Fate of the Furious)The Album[MP3]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/音乐/欧美音乐">欧美音乐 | </a></b> <a href="/ShowFile/700166.html" title="Charli XCX -《Number 1 Angel》[MP3]">Charli XCX -《Number 1 Angel》[MP3]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/音乐/欧美音乐">欧美音乐 | </a></b> <a href="/ShowFile/700165.html" title="Roxette -《Good Karma》[MP3]">Roxette -《Good Karma》[MP3]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/音乐/欧美音乐">欧美音乐 | </a></b> <a href="/ShowFile/700164.html" title="Jamiroquai -《Automaton》[MP3]">Jamiroquai -《Automaton》[MP3]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/音乐/欧美音乐">欧美音乐 | </a></b> <a href="/ShowFile/700163.html" title="Timeflies -《Just for Fun》Deluxe Edition[MP3]">Timeflies -《Just for Fun》Deluxe Edition[MP3]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/音乐/欧美音乐">欧美音乐 | </a></b> <a href="/ShowFile/700162.html" title="J Sutta -《I Say Yes》[MP3]">J Sutta -《I Say Yes》[MP3]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/音乐/古典音乐">古典音乐 | </a></b> <a href="/ShowFile/699301.html" title="Various Artists -《讚美歌百分百》(100 Best Hymns )[6 CD][FLAC]">Various Artists -《讚美歌百分百》(100 Best Hymns )[6 CD][FLAC]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/音乐/原声音乐">原声音乐 | </a></b> <a href="/ShowFile/698475.html" title="David Arnold -《独立日》(Independence Day)Complete Original Motion Picture Soundtrack[MP3]">David Arnold -《独立日》(Independence Day)Complete Original Motion Picture Soundtrack[MP3]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/音乐/原声音乐">原声音乐 | </a></b> <a href="/ShowFile/696538.html" title="原声大碟 -《美女与野兽》(Beauty and the Beast)Original Motion Picture Soundtrack[多国语合集][iTunes Plus AAC]">原声大碟 -《美女与野兽》(Beauty and the Beast)Original Motion Picture Soundtrack[多国语合集][iTunes Plus AAC]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/音乐/欧美音乐">欧美音乐 | </a></b> <a href="/ShowFile/700140.html" title="Gianni Basso & Renato Sellani -《Body And Soul》(肉身与心灵 )[FLAC]">Gianni Basso & Renato Sellani -《Body And Soul》(肉身与心灵 )[FLAC]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/音乐/日韩音乐">日韩音乐 | </a></b> <a href="/ShowFile/700139.html" title="倖田來未(Koda Kumi) -《Driving Hit's 7》专辑[iTunes Plus AAC]">倖田來未(Koda Kumi) -《Driving Hit's 7》专辑[iTunes Plus AAC]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/音乐/日韩音乐">日韩音乐 | </a></b> <a href="/ShowFile/700138.html" title="加藤ミリヤ(Miliyah Kato) -《Utopia》专辑[iTunes Plus AAC]">加藤ミリヤ(Miliyah Kato) -《Utopia》专辑[iTunes Plus AAC]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li></ul>
</div>

<div class="rightB hslice" id="游戏">
		<h4 class="entry-title"><a title="缓存时间：2017/4/14 20:03:54" href="/Type/游戏">最新游戏</a></h4><ul class="entry-content"><li><label><b><a href="/Type/游戏/其它">其它 | </a></b> <a href="/ShowFile/700172.html" title="[Asura-PLAZA]">[Asura-PLAZA]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/游戏/其它">其它 | </a></b> <a href="/ShowFile/700160.html" title="[Planescape.Torment.Enhanced.Edition.CHS.2.0-ALI213]">[Planescape.Torment.Enhanced.Edition.CHS.2.0-ALI213]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/游戏/down">down | </a></b> <a href="/ShowFile/700156.html" title="[The.Search.Green.Edition-ALI213]">[The.Search.Green.Edition-ALI213]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/游戏/down">down | </a></b> <a href="/ShowFile/700155.html" title="[ALI213-PES2017.Bmpes.Patch.3.0.and.3.03]">[ALI213-PES2017.Bmpes.Patch.3.0.and.3.03]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/游戏/其它">其它 | </a></b> <a href="/ShowFile/700154.html" title="[Space.Engineers.v01.180.0.X64-ALI213]">[Space.Engineers.v01.180.0.X64-ALI213]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/游戏/冒险解谜">冒险解谜 | </a></b> <a href="/ShowFile/700153.html" title="[Beat.Cop.XY.CHS.Green.Edition-ALI213][巡警|Beat Cop|免安装简体中文绿色版|解压缩即玩][CN]">[Beat.Cop.XY.CHS.Green.Edition-ALI213][巡警|Beat Cop|免安装简体中文绿色版|解压缩即玩][CN]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/游戏/其它">其它 | </a></b> <a href="/ShowFile/700152.html" title="[Spice.Road.v1.019-ALI213]">[Spice.Road.v1.019-ALI213]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/游戏/其它">其它 | </a></b> <a href="/ShowFile/700148.html" title="[The.Search-PLAZA]">[The.Search-PLAZA]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/游戏/其它">其它 | </a></b> <a href="/ShowFile/700147.html" title="[Spice.Road.v1.018-ALI213]">[Spice.Road.v1.018-ALI213]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/游戏/策略游戏">策略游戏 | </a></b> <a href="/ShowFile/700146.html" title="[100.Percent.Orange.Juice.v1.18.1.Incl.11Dlc-ALI213][100%鲜橙汁v1.18.1版整合11DLC|100% Orange Juice|免安装绿色版|解压缩即玩][EN]">[100.Percent.Orange.Juice.v1.18.1.Incl.11Dlc-ALI213][100%鲜橙汁v1.18.1版整合11DLC|100% Orange Juice|免安装绿色版|解压缩即玩][EN]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/游戏/其它">其它 | </a></b> <a href="/ShowFile/700145.html" title="[Yooka.Laylee.XY.CHS.2.0.Green.Edition-ALI213]">[Yooka.Laylee.XY.CHS.2.0.Green.Edition-ALI213]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/游戏/down">down | </a></b> <a href="/ShowFile/700129.html" title="[Ready.for.Take.off.A320.Simulator.Green.Edition-ALI213]">[Ready.for.Take.off.A320.Simulator.Green.Edition-ALI213]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li></ul>
</div>



<div class="rightA hslice" id="动漫">
		<h4 class="entry-title"><a title="缓存时间：2017/4/14 20:03:55" href="/Type/动漫">最新动漫</a></h4><ul class="entry-content"><li><label><b><a href="/Type/动漫/剧场动画">剧场动画 | </a></b> <a href="/ShowFile/699804.html" title="西葫芦的生活(修复版)[国语音轨_内封中字].2016.REPACK.1080p.Bluray.x264.DTS-WiKi 5.5GB">西葫芦的生活(修复版)[国语音轨_内封中字].2016.REPACK.1080p.Bluray.x264.DTS-WiKi 5.5GB</a></label><SPAN class="date">4-13</SPAN></li><li><label><b><a href="/Type/动漫/剧场动画">剧场动画 | </a></b> <a href="/ShowFile/699439.html" title="进击的巨人.第二季.01.中日双语.720p.HDTV.云光字幕组">进击的巨人.第二季.01.中日双语.720p.HDTV.云光字幕组</a></label><SPAN class="date">4-12</SPAN></li><li><label><b><a href="/Type/动漫/剧场动画">剧场动画 | </a></b> <a href="/ShowFile/699500.html" title="黑猫鲁道夫[国日中字]Rudolf.the.Black.Cat.2016.1080p.BluRay.x264.DTS-WiKi 9GB">黑猫鲁道夫[国日中字]Rudolf.the.Black.Cat.2016.1080p.BluRay.x264.DTS-WiKi 9GB</a></label><SPAN class="date">4-12</SPAN></li><li><label><b><a href="/Type/动漫/电视动画">电视动画 | </a></b> <a href="/ShowFile/699416.html" title="【动漫】《我太受欢迎了怎么办》【全12集】">【动漫】《我太受欢迎了怎么办》【全12集】</a></label><SPAN class="date">4-11</SPAN></li><li><label><b><a href="/Type/动漫/剧场动画">剧场动画 | </a></b> <a href="/ShowFile/699368.html" title="迈罗·墨菲定律.Milo.Murphys.Law.S01E07.WEB-HR.Chs.Eng-Deefun迪幻字幕组.mp4">迈罗·墨菲定律.Milo.Murphys.Law.S01E07.WEB-HR.Chs.Eng-Deefun迪幻字幕组.mp4</a></label><SPAN class="date">4-11</SPAN></li><li><label><b><a href="/Type/动漫/剧场动画">剧场动画 | </a></b> <a href="/ShowFile/699345.html" title="黑猫鲁道夫[国日中字]Rudolf.the.Black.Cat.2016.1080p.BluRay.x264.DTS-WiKi 9GB">黑猫鲁道夫[国日中字]Rudolf.the.Black.Cat.2016.1080p.BluRay.x264.DTS-WiKi 9GB</a></label><SPAN class="date">4-11</SPAN></li><li><label><b><a href="/Type/动漫/电视动画">电视动画 | </a></b> <a href="/ShowFile/699335.html" title="北斗神拳【剧场版+OVA+TV版+外传】">北斗神拳【剧场版+OVA+TV版+外传】</a></label><SPAN class="date">4-10</SPAN></li><li><label><b><a href="/Type/动漫/剧场动画">剧场动画 | </a></b> <a href="/ShowFile/699171.html" title="辛普森一家.The.Simpsons.S28E19.中英字幕.HDTVrip.720P.mp4">辛普森一家.The.Simpsons.S28E19.中英字幕.HDTVrip.720P.mp4</a></label><SPAN class="date">4-9</SPAN></li><li><label><b><a href="/Type/动漫/剧场动画">剧场动画 | </a></b> <a href="/ShowFile/699169.html" title="开心汉堡店.Bobs.Burgers.S07E16.中英字幕.HDTVrip.720P.mp4">开心汉堡店.Bobs.Burgers.S07E16.中英字幕.HDTVrip.720P.mp4</a></label><SPAN class="date">4-9</SPAN></li><li><label><b><a href="/Type/动漫/剧场动画">剧场动画 | </a></b> <a href="/ShowFile/699114.html" title="[2017] [日本] [冒险] [BT下载][进击的巨人 第二季02集][HD-MP4/321M][日语中字][720P][巨人归来]">[2017] [日本] [冒险] [BT下载][进击的巨人 第二季02集][HD-MP4/321M][日语中字][720P][巨人归来]</a></label><SPAN class="date">4-9</SPAN></li><li><label><b><a href="/Type/动漫/剧场动画">剧场动画 | </a></b> <a href="/ShowFile/698983.html" title="熊熊三贱客.We.Bare.Bears.S03E02.720p.WEBRip.x264.中英字幕-Fantopia.mp4">熊熊三贱客.We.Bare.Bears.S03E02.720p.WEBRip.x264.中英字幕-Fantopia.mp4</a></label><SPAN class="date">4-8</SPAN></li><li><label><b><a href="/Type/动漫/剧场动画">剧场动画 | </a></b> <a href="/ShowFile/698865.html" title="开心汉堡店.Bobs.Burgers.S07E15.中英字幕.HDTVrip.720P.mp4">开心汉堡店.Bobs.Burgers.S07E15.中英字幕.HDTVrip.720P.mp4</a></label><SPAN class="date">4-7</SPAN></li></ul>
</div>

<div class="rightB hslice" id="图书">
		<h4 class="entry-title"><a title="缓存时间：2017/4/14 20:03:57" href="/Type/图书">最新图书</a></h4><ul class="entry-content"><li><label><b><a href="/Type/图书/教育科技">教育科技 | </a></b> <a href="/ShowFile/700169.html" title="《量子理论：爱因斯坦与玻尔关于世界本质的伟大论战》扫描版[PDF]">《量子理论：爱因斯坦与玻尔关于世界本质的伟大论战》扫描版[PDF]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/图书/人文社科">人文社科 | </a></b> <a href="/ShowFile/700168.html" title="《可笑的思维谬误：批判性思考与查错神经》扫描版[PDF]">《可笑的思维谬误：批判性思考与查错神经》扫描版[PDF]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/图书/人文社科">人文社科 | </a></b> <a href="/ShowFile/700167.html" title="《决策的艺术》扫描版[PDF]">《决策的艺术》扫描版[PDF]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/图书/人文社科">人文社科 | </a></b> <a href="/ShowFile/700161.html" title="《富足：改变人类未来的4大力量》扫描版[PDF]">《富足：改变人类未来的4大力量》扫描版[PDF]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/图书/人文社科">人文社科 | </a></b> <a href="/ShowFile/700144.html" title="《人民的名义》扫描版[PDF]">《人民的名义》扫描版[PDF]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/图书/教育科技">教育科技 | </a></b> <a href="/ShowFile/700143.html" title="《身体的智能：智能科学新视角》扫描版[PDF]">《身体的智能：智能科学新视角》扫描版[PDF]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/图书/教育科技">教育科技 | </a></b> <a href="/ShowFile/700142.html" title="《软物质:构筑梦幻的材料 》(Soft Matter:the Stuff That Dreams Are Made of )扫描版[PDF]">《软物质:构筑梦幻的材料 》(Soft Matter:the Stuff That Dreams Are Made of )扫描版[PDF]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/图书/教育科技">教育科技 | </a></b> <a href="/ShowFile/700141.html" title="《脑的进化：自我意识的创生》扫描版[PDF]">《脑的进化：自我意识的创生》扫描版[PDF]</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/图书/教育科技">教育科技 | </a></b> <a href="/ShowFile/699626.html" title="2017二级建造师通关蓝宝书">2017二级建造师通关蓝宝书</a></label><SPAN class="date">4-13</SPAN></li><li><label><b><a href="/Type/图书/人文社科">人文社科 | </a></b> <a href="/ShowFile/699727.html" title="《一生要读知的100处世界著名建筑》[PDF]扫描版">《一生要读知的100处世界著名建筑》[PDF]扫描版</a></label><SPAN class="date">4-13</SPAN></li><li><label><b><a href="/Type/图书/人文社科">人文社科 | </a></b> <a href="/ShowFile/699726.html" title="《民间剪纸技巧》[PDF]彩色版">《民间剪纸技巧》[PDF]彩色版</a></label><SPAN class="date">4-13</SPAN></li><li><label><b><a href="/Type/图书/生活">生活 | </a></b> <a href="/ShowFile/699724.html" title="《新编家常菜谱2000例》[PDF]彩色扫描版">《新编家常菜谱2000例》[PDF]彩色扫描版</a></label><SPAN class="date">4-13</SPAN></li></ul>
</div>






<div class="rightA hslice" id="综艺">
		<h4 class="entry-title"><a title="缓存时间：2017/4/14 20:03:59" href="/Type/综艺">最新综艺</a></h4><ul class="entry-content"><li><label><b><a href="/Type/综艺/台灣連續劇">台灣連續劇 | </a></b> <a href="/ShowFile/700091.html" title="我的老師叫小賀 第313集">我的老師叫小賀 第313集</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/综艺/港台綜藝">港台綜藝 | </a></b> <a href="/ShowFile/700090.html" title="小燕有約-20170413">小燕有約-20170413</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/综艺/港台綜藝">港台綜藝 | </a></b> <a href="/ShowFile/700086.html" title="WTO姐妹会-20170413">WTO姐妹会-20170413</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/综艺/日韓綜藝">[日韓綜藝]</a></b> <a href="/ShowFile/700085.html" title="超級全能住宅改造王-20170413">超級全能住宅改造王-20170413</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/综艺/台灣連續劇">台灣連續劇 | </a></b> <a href="/ShowFile/700084.html" title="春花望露 第283集">春花望露 第283集</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/综艺/台灣連續劇">台灣連續劇 | </a></b> <a href="/ShowFile/700083.html" title="甘味人生 第447集">甘味人生 第447集</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/综艺/日韓綜藝">[日韓綜藝]</a></b> <a href="/ShowFile/700082.html" title="黃金傳說-20170413">黃金傳說-20170413</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/综艺/港台綜藝">港台綜藝 | </a></b> <a href="/ShowFile/700081.html" title="來自星星的事-20170413">來自星星的事-20170413</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/综艺/港台綜藝">港台綜藝 | </a></b> <a href="/ShowFile/700080.html" title="美鳳有約-20170413">美鳳有約-20170413</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/综艺/港台綜藝">港台綜藝 | </a></b> <a href="/ShowFile/700079.html" title="美食鳳味-20170413">美食鳳味-20170413</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/综艺/港台綜藝">港台綜藝 | </a></b> <a href="/ShowFile/700078.html" title="命运好好玩-20170413">命运好好玩-20170413</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/综艺/港台綜藝">港台綜藝 | </a></b> <a href="/ShowFile/700077.html" title="女人我最大-20170413">女人我最大-20170413</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li></ul>
</div>

<div class="rightB hslice" id="软件">
		<h4 class="entry-title"><a title="缓存时间：2017/4/14 20:03:59" href="/Type/软件">最新软件</a></h4><ul class="entry-content"><li><label><b><a href="/Type/软件/系统工具">系统工具 | </a></b> <a href="/ShowFile/683885.html" title="WIN10永久激活工具_支持WIN10所有版本">WIN10永久激活工具_支持WIN10所有版本</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/软件/操作系统">操作系统 | </a></b> <a href="/ShowFile/700132.html" title="WIN10 1703 32位全自动激活专业版">WIN10 1703 32位全自动激活专业版</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/软件/操作系统">操作系统 | </a></b> <a href="/ShowFile/700131.html" title="WIN10 1703 64位全自动激活专业版">WIN10 1703 64位全自动激活专业版</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/软件/编程开发">编程开发 | </a></b> <a href="/ShowFile/699858.html" title="Linux Oracle RAC集群运维课程">Linux Oracle RAC集群运维课程</a></label><SPAN class="date">4-13</SPAN></li><li><label><b><a href="/Type/软件/编程开发">编程开发 | </a></b> <a href="/ShowFile/699857.html" title="安卓高级UI培训课程">安卓高级UI培训课程</a></label><SPAN class="date">4-13</SPAN></li><li><label><b><a href="/Type/软件/编程开发">编程开发 | </a></b> <a href="/ShowFile/698974.html" title="2016年UI培训课程第40期 打造会代码的全能设计师成长">2016年UI培训课程第40期 打造会代码的全能设计师成长</a></label><SPAN class="date">4-8</SPAN></li><li><label><b><a href="/Type/软件/应用软件">应用软件 | </a></b> <a href="/ShowFile/698655.html" title="★ 通赢版 V7.331-5.9017040517 更新：2017/4/6 16:34:28">★ 通赢版 V7.331-5.9017040517 更新：2017/4/6 16:34:28</a></label><SPAN class="date">4-6</SPAN></li><li><label><b><a href="/Type/软件/操作系统">操作系统 | </a></b> <a href="/ShowFile/614140.html" title="Ghost Win7 64位 完美装机特别版 v2017 装机精品系统">Ghost Win7 64位 完美装机特别版 v2017 装机精品系统</a></label><SPAN class="date">4-4</SPAN></li><li><label><b><a href="/Type/软件/操作系统">操作系统 | </a></b> <a href="/ShowFile/614134.html" title="Ghost Win7 32位 完美装机特别版 v2017 装机精品系统">Ghost Win7 32位 完美装机特别版 v2017 装机精品系统</a></label><SPAN class="date">4-4</SPAN></li><li><label><b><a href="/Type/软件/操作系统">操作系统 | </a></b> <a href="/ShowFile/614116.html" title="Ghost XP 完美装机特别版 v2017  装机精品系统">Ghost XP 完美装机特别版 v2017  装机精品系统</a></label><SPAN class="date">4-4</SPAN></li><li><label><b><a href="/Type/软件/操作系统">操作系统 | </a></b> <a href="/ShowFile/614144.html" title="Windows10 X64位2017 自动激活专业版GHO镜像">Windows10 X64位2017 自动激活专业版GHO镜像</a></label><SPAN class="date">4-4</SPAN></li><li><label><b><a href="/Type/软件/多媒体类">多媒体类 | </a></b> <a href="/ShowFile/697941.html" title="雨极VIP播放器2.0（带自动搜索播放功能）">雨极VIP播放器2.0（带自动搜索播放功能）</a></label><SPAN class="date">4-3</SPAN></li></ul>
</div>


<div class="rightA hslice" id="资料">
		<h4 class="entry-title"><a title="缓存时间：2017/4/14 20:04:01" href="/Type/资料">最新资料</a></h4><ul class="entry-content"><li><label><b><a href="/Type/资料/杂志期刊">杂志期刊 | </a></b> <a href="/ShowFile/695738.html" title="外交政策 2017年3月4月 2017第2期（Foreign Policy-2017 03 04）PDF+Kindle+mobi 电子版下载 百度网盘 持续更新">外交政策 2017年3月4月 2017第2期（Foreign Policy-2017 03 04）PDF+Kindle+mobi 电子版下载 百度网盘 持续更新</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/资料/杂志期刊">杂志期刊 | </a></b> <a href="/ShowFile/699535.html" title="2017年全年最新经济学人（The Economist） PDF KINDLE版 双语版 EPUB 音频 电子版下载 网盘下载 订阅">2017年全年最新经济学人（The Economist） PDF KINDLE版 双语版 EPUB 音频 电子版下载 网盘下载 订阅</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/资料/杂志期刊">杂志期刊 | </a></b> <a href="/ShowFile/699533.html" title="经济学人 2017年4月22日 经济学家 2017.4.22 The Economist 20170422 PDF KINDLE版 双语版 EPUB 音频 电子版下载 网盘下载 订阅">经济学人 2017年4月22日 经济学家 2017.4.22 The Economist 20170422 PDF KINDLE版 双语版 EPUB 音频 电子版下载 网盘下载 订阅</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/资料/杂志期刊">杂志期刊 | </a></b> <a href="/ShowFile/699531.html" title="经济学人 2017年4月15日 经济学家 2017.4.15 The Economist 20170415 PDF KINDLE版 双语版 EPUB 音频 电子版下载 网盘下载 订阅">经济学人 2017年4月15日 经济学家 2017.4.15 The Economist 20170415 PDF KINDLE版 双语版 EPUB 音频 电子版下载 网盘下载 订阅</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/资料/杂志期刊">杂志期刊 | </a></b> <a href="/ShowFile/696700.html" title="2017年全年最新《金融时报》（Financial Times）PDF KINDLE版 MOBI格式 电子版下载 网盘下载 官网订阅">2017年全年最新《金融时报》（Financial Times）PDF KINDLE版 MOBI格式 电子版下载 网盘下载 官网订阅</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/资料/杂志期刊">杂志期刊 | </a></b> <a href="/ShowFile/694989.html" title="彭博商业周刊 2017年3月27日 Bloomberg Businessweek 20170327 2017.3.27 PDF+KINDLE版 电子版下载 网盘下载 持续更新">彭博商业周刊 2017年3月27日 Bloomberg Businessweek 20170327 2017.3.27 PDF+KINDLE版 电子版下载 网盘下载 持续更新</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/资料/杂志期刊">杂志期刊 | </a></b> <a href="/ShowFile/685025.html" title="2017年全年最新纽约客 The New Yorker PDF KINDLE版 电子版下载 网盘下载 持续更新">2017年全年最新纽约客 The New Yorker PDF KINDLE版 电子版下载 网盘下载 持续更新</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/资料/杂志期刊">杂志期刊 | </a></b> <a href="/ShowFile/679671.html" title="华盛顿邮报（The Washington Post）2016+2017年 PDF+KINDLE+MOBI格式 电子版 官网订阅 百度网盘 持续更新 免费下载">华盛顿邮报（The Washington Post）2016+2017年 PDF+KINDLE+MOBI格式 电子版 官网订阅 百度网盘 持续更新 免费下载</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/资料/杂志期刊">杂志期刊 | </a></b> <a href="/ShowFile/695062.html" title="2017年全年最新 时代周刊 2017年4月3日 Time 2017.4.3 20170403 PDF Kindle版MOBI 英文 电子版下载 网盘下载 持续更新">2017年全年最新 时代周刊 2017年4月3日 Time 2017.4.3 20170403 PDF Kindle版MOBI 英文 电子版下载 网盘下载 持续更新</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/资料/杂志期刊">杂志期刊 | </a></b> <a href="/ShowFile/694389.html" title="2017年全年最新 时代周刊 2017年3月20日  Time 2017.3.20 20170320 PDF Kindle版 英文 电子版下载 网盘下载 持续更新">2017年全年最新 时代周刊 2017年3月20日  Time 2017.3.20 20170320 PDF Kindle版 英文 电子版下载 网盘下载 持续更新</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/资料/杂志期刊">杂志期刊 | </a></b> <a href="/ShowFile/695742.html" title="外交事务 2017年3月4月（Foreign Affairs）2017.3&4 Foreign Affairs pdf+kindle+mobi 英文电子版下载 网盘下载 持续更新">外交事务 2017年3月4月（Foreign Affairs）2017.3&4 Foreign Affairs pdf+kindle+mobi 英文电子版下载 网盘下载 持续更新</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/资料/杂志期刊">杂志期刊 | </a></b> <a href="/ShowFile/692471.html" title="《国家地理旅行者》2017年4月&2017年5月（National Geographic Traveler 2017.4 2017.5 201704 201705）pdf+kindle版电子版下载">《国家地理旅行者》2017年4月&2017年5月（National Geographic Traveler 2017.4 2017.5 201704 201705）pdf+kindle版电子版下载</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li></ul>
</div>

<div class="rightB hslice" id="教育">
		<h4 class="entry-title"><a title="缓存时间：2017/4/14 20:04:01" href="/Type/教育">最新教育</a></h4><ul class="entry-content"><li><label><b><a href="/Type/教育/计算机">计算机 | </a></b> <a href="/ShowFile/700150.html" title="【传递智慧】C++基础就业班第六期培训视频教程">【传递智慧】C++基础就业班第六期培训视频教程</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/教育/计算机">计算机 | </a></b> <a href="/ShowFile/700149.html" title="前端到后台ThinkPHP开发整站">前端到后台ThinkPHP开发整站</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/教育/计算机">计算机 | </a></b> <a href="/ShowFile/700130.html" title="2016北京PHP39期 ThinkPHP Discuz Dedecms 微信开发">2016北京PHP39期 ThinkPHP Discuz Dedecms 微信开发</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/教育/计算机">计算机 | </a></b> <a href="/ShowFile/700127.html" title="用汇编语言手把手教大家打造游戏辅助">用汇编语言手把手教大家打造游戏辅助</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/教育/计算机">计算机 | </a></b> <a href="/ShowFile/700126.html" title="D3D游戏透视辅助原理，hook技术,过最新TP保护">D3D游戏透视辅助原理，hook技术,过最新TP保护</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/教育/计算机">计算机 | </a></b> <a href="/ShowFile/700125.html" title="北京.net培训全套视频教程">北京.net培训全套视频教程</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/教育/计算机">计算机 | </a></b> <a href="/ShowFile/700124.html" title="老王Python培训全套教程基础+进阶+项目">老王Python培训全套教程基础+进阶+项目</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/教育/外语">外语 | </a></b> <a href="/ShowFile/684852.html" title="2017年全年最新《创业者》杂志 Entrepreneur 《企业家》杂志 2017年全年最新 Entrepreneur杂志PDF Kindle版 电子版下载 网盘下载">2017年全年最新《创业者》杂志 Entrepreneur 《企业家》杂志 2017年全年最新 Entrepreneur杂志PDF Kindle版 电子版下载 网盘下载</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/教育/外语">外语 | </a></b> <a href="/ShowFile/699536.html" title="2017年全年最新经济学人 经济学家（The Economist） PDF KINDLE版 双语版 EPUB 音频 电子版下载 网盘下载 订阅">2017年全年最新经济学人 经济学家（The Economist） PDF KINDLE版 双语版 EPUB 音频 电子版下载 网盘下载 订阅</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/教育/外语">外语 | </a></b> <a href="/ShowFile/699534.html" title="2017年4月22日 经济学人 经济学家 2017.4.22 The Economist 20170422 PDF KINDLE版 双语版 EPUB 音频 电子版下载 网盘下载 订阅">2017年4月22日 经济学人 经济学家 2017.4.22 The Economist 20170422 PDF KINDLE版 双语版 EPUB 音频 电子版下载 网盘下载 订阅</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/教育/外语">外语 | </a></b> <a href="/ShowFile/699532.html" title="2017年4月15日 经济学人 经济学家 2017.4.15 The Economist 20170415 PDF KINDLE版 双语版 EPUB 音频 电子版下载 网盘下载 订阅">2017年4月15日 经济学人 经济学家 2017.4.15 The Economist 20170415 PDF KINDLE版 双语版 EPUB 音频 电子版下载 网盘下载 订阅</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li><li><label><b><a href="/Type/教育/外语">外语 | </a></b> <a href="/ShowFile/695064.html" title="2017全年最新 纽约客 The New Yorker 2017年3月27日 20170327 2017.3.27 PDF KINDLE版 电子版下载 网盘下载 持续更新">2017全年最新 纽约客 The New Yorker 2017年3月27日 20170327 2017.3.27 PDF KINDLE版 电子版下载 网盘下载 持续更新</a></label><SPAN class="date"><font color=red>4-14</font></SPAN></li></ul>
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
