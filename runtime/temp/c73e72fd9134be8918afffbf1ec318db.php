<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"F:\wamp\www\ed2k\public/../application/index\view\article\index.html";i:1497244086;s:66:"F:\wamp\www\ed2k\public/../application/index\view\common\head.html";i:1497271106;s:68:"F:\wamp\www\ed2k\public/../application/index\view\common\footer.html";i:1496900603;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="thinkphp5,tp5,thinkphp,php,thinkphp5视频教程" />
	<meta name="description" content="更多thinkphp5实战视频教程：  1、http://www.chuanke.com/s2260700.html2、Thinkphp实战开发视频教程资料下载及交流群：333632569">
	<title>童攀thinkphp5视频教程【第一季实战开发你我网】_eD2k地址_计算机_教育下载_ED2000资源共享</title>
	<link rel="stylesheet" type="text/css" href="__index__/css/Default.css" />
	<link rel="stylesheet" type="text/css" href="__index__/zan/style.css" />
	<script language="javascript" type="text/javascript" src="__index__/js/global.js"></script>
	<script language="javascript" type="text/javascript" src="__index__/zan/jquery-1.11.0.min.js"></script>
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



<div class="CurrentLocation"><b>您的位置：</b>
<a href="/">首页</a> 
<?php if(is_array($position) || $position instanceof \think\Collection || $position instanceof \think\Paginator): $i = 0; $__LIST__ = $position;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pos): $mod = ($i % 2 );++$i;if($pos['pid'] == 0): ?>
>> <a href="<?php echo url('Category/lst',array('id'=>$pos['id'])); ?>"><?php echo $pos['cate_name']; ?></a>
<?php else: ?>
>> <a href="<?php echo url('Category/lst',array('id'=>$pos['pid'],'sid'=>$pos['id'])); ?>"><?php echo $pos['cate_name']; ?></a>
<?php endif; endforeach; endif; else: echo "" ;endif; ?>
>> <a href="<?php echo url('Article/index',array('aid'=>$arts['id'])); ?>"><?php echo $arts['title']; ?></a></div>

<div style="height:10px;"></div>

<table width="100%" cellspacing="0" cellpadding="0"><tr><td width="600">


	<table width="100%" border="0" cellspacing="1" cellpadding="5" class="CommonListArea">
	<tr class="CommonListTitle">
		<td colspan="2"><?php echo $arts['title']; ?></td>
	</tr>
	<tr class="CommonListCell">
		<td width="13%">发布用户</td>
		<td><a href="<?php echo url('Member/info',array('uid'=>$arts['uid'])); ?>"><?php echo $arts['uname']; ?></a></td>
	</tr>
	<tr class="CommonListCell">
		<td>添加日期</td>
		<td><?php echo date("Y/m/d H:i:s",$arts['addtime'] ); ?></td>
	</tr>
	<tr class="CommonListCell">
		<td>大　　小</td>
		<td>
			<?php if($arts['size'] == 'cl'): ?>
				<img src="__index__/img/cili.gif" height="14">
			<?php elseif($arts['size'] == 'wp'): ?>
				<img src="__index__/img/bdp.png" height="14">
			<?php elseif($arts['size'] == 'xl'): ?>
				<img src="__index__/img/xl.png" height="14">
			<?php else: ?>
				<?php echo '<span id="tsize">'. jsSzie($arts['size']).'</span>';endif; ?>
		</td>
	</tr>
	<tr class="CommonListCell">
		<td>最后更新</td>
		<td><?php echo date("Y/m/d H:i:s",$arts['updatetime'] ); ?></td>
	</tr>
	<tr class="CommonListCell">
		<td>标　　签</td>
		<td>
		<?php 
			$tags=explode(',', $arts['tags']);
			if($tags):
			foreach($tags as $k=>$tag):
				if(!$tag){
					continue;
				}
		if($k!=0){echo ',';}?> <a target="_blank" rel="nofollow" href="<?php echo url('Search/lst',array('tag'=>$tag)); ?>"><?php echo $tag;?></a>
		<?php endforeach; endif;?>
		</td>
	</tr>

	<tr class="CommonListCell">
		<td>喜　　欢</td>
		<td><span <?php if($class): ?> class='heart  heartAnimation' <?php else: ?> class='heart' <?php endif; ?> class="heart " id="like1" rel="like"></span> <span class="likeCount" id="likeCount1"><?php if($zanNum): ?><?php echo $zanNum; endif; ?></span></td>
	</tr>
	<script type="text/javascript">
		$("#like1").click(function(){
			var span=$(this);
			var article_id="<?php echo $arts['id']; ?>";
			var uid="<?php echo $uid; ?>";
			$.ajax({
				type:"POST",
				url:"<?php echo url('ajaxZan'); ?>",
				dataType:"json",
				data:{article_id:article_id,uid:uid},
				success:function(data){
					if(data==1){
						span.attr('class','heart');
					}
					if(data==3){
						alert('请先登录系统！');
					}
				}
			});
		});
	</script>
	<tr class="CommonListCell">
		<td>分　　享</td>
		<td><div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">

<a class="bds_qzone">QQ空间</a>
<a class="bds_tsina">新浪微博</a>
<a class="bds_tqq">腾讯微博</a>
<a class="bds_t163">网易微博</a>
<a class="bds_renren">人人网</a>
<a class="bds_baidu">百度搜藏</a>

<a class="shareCount"></a>
</div></td>
	</tr>
	<?php if(\think\Session::get('uid') == $arts['uid']): ?>
	<tr class="CommonListHeader">
		<td>管理选项</td>
		<td>
			<a href="<?php echo url('Member/editSource',array('aid'=>$arts['id'])); ?>">修改</a>&#12288;
			<a href="<?php echo url('Member/delSource',array('aid'=>$arts['id'])); ?>" onclick="return window.confirm('确定删除此资源？')">删除</a>&#12288;

		</td>
	</tr>
	<?php endif; ?>
	</table>


</td>
<td align="center">
<script type="text/javascript">AD_ShowFile_300x250()</script>
</td></tr></table>







<script id="bdlike_shell"></script>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=699359" ></script>

<script type="text/javascript" id="bdshell_js"></script>
<script>

var bdShare_config = {
	"type":"small",
	"color":"blue",
	"uid":"699359"
};
document.getElementById("bdlike_shell").src="http://bdimg.share.baidu.com/static/js/like_shell.js?t=" + Math.ceil(new Date()/3600000);



document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>

<!-- 点赞 -->
<script type="text/javascript">
$(document).ready(function(){

	$('body').on("click",'.heart',function(){
		
		var A=$(this).attr("id");
		var B=A.split("like");
		var messageID=B[1];
		var C=parseInt($("#likeCount"+messageID).html());
		$(this).css("background-position","")
		var D=$(this).attr("rel");
	   
		if(D === 'like') {      
			$("#likeCount"+messageID).html(C+1);
			if(!<?php echo $uid; ?>){
				return false;
			}
			$(this).addClass("heartAnimation").attr("rel","unlike");
		}
		else{
			$("#likeCount"+messageID).html(C-1);
			$(this).removeClass("heartAnimation").attr("rel","like");
			$(this).css("background-position","left");
		}
	});

});
</script>



<div style="height:5px;"></div>





<div style="height:5px;"></div>
<?php if($arts['type'] == 1): ?>
<!-- ed2k链接地址开始 -->
<div id="main">
	<table width="100%" border="0" cellspacing="1" cellpadding="5" class="CommonListArea">
		<tr class="CommonListTitle">
			<td colspan="3">eD2k链接</td>
		</tr>
		<tr class="CommonListHeader">
		  <td colspan="3" align="center">下面是用户共享的文件列表，可以使用迅雷、QQ旋风等软件进行下载，点击文件名进行下载</td>
		</tr>
			<?php if($arts['dowurl']):
			$dowurl=$arts['dowurl'];
			$dowurl=str_replace(' ', '', $dowurl);
			$dowarr=explode('@@', $dowurl);
			foreach($dowarr as $k=>$v):
				$ed2kUrl=explode('|', $v);
			?>
			<tr class="CommonListCell">
				<td width="20"><input type="checkbox" name="File<?php echo $id; ?>" value="<?php echo $v;?>"  onclick="em_size(''+this.name+'');" checked="checked" /></td>
				<td width="800"><a href="<?php echo $v;?>"><?php echo $ed2kUrl[2];?></a></td>
				<td width="80" align=center><?php echo jsSzie($ed2kUrl[3]);?></td>
			</tr>
			<?php endforeach; endif;?>
			<tr class="CommonListCell">
			  <td width="20"><input type="checkbox" id="checkall_File<?php echo $id; ?>" class="forminput"  onclick="eD2kCheckAll('File<?php echo $id; ?>',this.checked)" checked /></td>
			  <td>
				<input type="button" value="下载选中的文件" class="filebutton" onClick="download('File<?php echo $id; ?>',0,1)" />
				<input type="button" value="复制选中的链接"  id="d_clip_button" />
				</td>
			  <td width="80" id="size_File<?php echo $id; ?>" align=center></td>
			</tr>
	</table>
</div>
<!-- ed2k链接地址结束 -->
<?php endif; if($arts['type']==2):?>
<!-- 磁力链接地址开始 -->
<table width="100%" border="0" cellspacing="1" cellpadding="5" class="CommonListArea">
	<tr class="CommonListTitle">
		<td colspan="3">磁力链接（Magnet URI） </td>
	</tr>
	<tr class="CommonListHeader">
	  <td colspan="3" align="center">下面是用户共享的文件列表，可以使用迅雷、QQ旋风等软件进行下载，点击文件名进行下载</td>
	</tr>
	<?php if($arts['dowurl']):
		$dowurl=$arts['dowurl'];
		$dowurl=str_replace(' ', '', $dowurl);
		$dowarr=explode('@@', $dowurl);
		foreach($dowarr as $k=>$v):
			$ciliUrl=explode('=', $v);
	?>
	<tr class="CommonListCell">
		<td width="800">
		<img src="http://img.ed2000.com/Images/magnet.png" border="0">
		<a href="<?php echo $v;?>">
		<?php 
		if(count($ciliUrl)>=3){
			$ciliName=str_replace('xl', '', $ciliUrl[2]); 
			echo $ciliName;
		}else{
			echo '下载地址 DOWNLOAD';
		}
		?>
		</a></td>
		<td width="80" align=center>
		<?php if(count($ciliUrl)>=4):?>
			<?php echo jsSzie($ciliUrl[3]);else:?>
			<img src="__index__/img/cili.gif" height="14">
		<?php endif;?>
		</td>
	</tr>
	<?php endforeach; endif;?>
</table>
<!-- 磁力链接地址结束 -->
<?php endif;if($arts['type'] == 3): ?>
<!-- 百度网盘链接地址开始 -->
<table width="100%" border="0" cellspacing="1" cellpadding="5" class="CommonListArea">
	<tr class="CommonListTitle">
		<td colspan="3">网盘资源</td>
	</tr>
	<tr class="CommonListHeader">
	  <td colspan="3" align="center">下面是用户共享的文件列表，可以使用百度网盘进行下载，点击文件名进行下载</td>
	</tr>
	<?php if($arts['dowurl']):
		$dowurl=$arts['dowurl'];
		$dowurl=str_replace(' ', '', $dowurl);
		$dowarr=explode('@@', $dowurl);
		foreach($dowarr as $k=>$v):
			$wpUrl=explode('|', $v);
	?>
	<tr class="CommonListCell">
			<td width="20"><img src="__index__/img/bdp.png" height="14"></td>
			<td width="800"><a href="<?php echo $wpUrl[0];?>" target="_blank"><?php echo $wpUrl[0];?></a></td>
			<td width="80" align=center><?php if($wpUrl[1]){ echo $wpUrl[1]; }else{ echo '无密码'; } ?></td>
	</tr>
	<?php endforeach; endif;?>
</table>
<!-- 百度网盘链接地址结束 -->
<?php endif; if($arts['type'] == 4): ?>
<!-- 迅雷链接地址开始 -->
<div id="main">
	<table width="100%" border="0" cellspacing="1" cellpadding="5" class="CommonListArea">
		<tr class="CommonListTitle">
			<td colspan="3">eD2k链接</td>
		</tr>
		<tr class="CommonListHeader">
		  <td colspan="3" align="center">下面是用户共享的文件列表，可以使用迅雷、QQ旋风等软件进行下载，点击文件名进行下载</td>
		</tr>
			<?php if($arts['dowurl']):
			$dowurl=$arts['dowurl'];
			$dowurl=str_replace(' ', '', $dowurl);
			$dowarr=explode('@@', $dowurl);
			foreach($dowarr as $k=>$v):
				$xlUrl=explode('|', $v);
			?>
			<tr class="CommonListCell">
				<td width="20"><input type="checkbox" name="File<?php echo $id; ?>" value="<?php echo $xlUrl[0];?>"  onclick="em_size(''+this.name+'');" checked="checked" /></td>
				<td width="800"><a href="<?php echo $xlUrl[0];?>"><?php echo $xlUrl[1];?></a></td>
				<td width="80" align=center><img src="__index__/img/xl.png" height="14"></td>
			</tr>
			<?php endforeach; endif;?>
			<tr class="CommonListCell">
			  <td width="20"><input type="checkbox" id="checkall_File<?php echo $id; ?>" class="forminput"  onclick="eD2kCheckAll('File<?php echo $id; ?>',this.checked)" checked /></td>
			  <td colspan="2">
				<input type="button" value="下载选中的文件" class="filebutton" onClick="download('File<?php echo $id; ?>',0,1)" />
				<input type="button" value="复制选中的链接"  id="d_clip_button" />
				</td>
			</tr>
	</table>
</div>
<!-- 迅雷网盘链接地址结束 -->
<?php endif; ?>
<div style="height:5px;"></div>

<div style="width:960px;overflow:hidden;margin:auto;text-align:center;"><script>AD_ShowFile_960x60()</script></div>


<div style="height:5px;"></div>
<a name="Summary"></a>
<div class="MenuTag"><li class="NowTag"><a href="#Summary"><font color="#333">简 介</font></a></li><li><a href="#Comments"><font color="#FFFFFF">评 论</font></a></li></div>

<div class="PannelBody">
	<?php echo $arts['content']; ?>
</div>


<!--User Comment Start-->
<div style="height:10px;"></div>
<a name="Comments"></a>
<div class="MenuTag"><li><a href="#Summary"><font color="#FFFFFF">简 介</font></a></li><li class="NowTag"><a href="#Comments"><font color="#333">评 论</font></a></li></div>
	<div class="PannelBody">



<div id="cloud-tie-wrapper" class="cloud-tie-wrapper"></div>
<script src="https://img1.cache.netease.com/f2e/tie/yun/sdk/loader.js"></script>
<script>
var cloudTieConfig = {
  url: document.location.href, 
  sourceId: "",
  productKey: "803d1e82d6c14dc68ac15eab0db6d32b",
  target: "cloud-tie-wrapper"
};
var yunManualLoad = true;
Tie.loader("aHR0cHM6Ly9hcGkuZ2VudGllLjE2My5jb20vcGMvbGl2ZXNjcmlwdC5odG1s", true);
</script>




</div>
<!--User Comment End-->


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


<script type="text/javascript">
	window.onload=function(){
		init();
		size();
	}

	var clip = null;

    function init() {
        clip = new ZeroClipboard.Client();
        clip.setHandCursor(true);
        clip.addEventListener('mouseUp', function (client) {
            var a = jQuery("input[type=checkbox]:checked");
            var v = [];
            if (a.length > 0) {
                for (var i = 0; i < a.length; i++) {
                    v.push(a[i].value);
                }
                clip.setText(v.join("\n"));
                debugstr("复制成功，请将复制的链接粘贴到下载工具中进行下载。");
            } else {
                alert("请选择文件");
            }

        });
        //clip.addEventListener('complete', function (client, text) {
            
        //});
        clip.glue('d_clip_button', 'main');


    }

    function size(){
    	var size=$("#tsize").text();
    	var fileId='#'+'size_File<?php echo $id; ?>';
    	$(fileId).text(size);
    }
</script>
<script type="text/javascript" src="__index__/ZeroClipboard/ZeroClipboard.js"></script>

</script>
</body>
<!--(0)页面处理时间：.05 缓存更新时间：2017/4/14 20:03:58-->
</html>
