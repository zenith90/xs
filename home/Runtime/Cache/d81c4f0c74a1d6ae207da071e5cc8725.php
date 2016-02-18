<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo ($novelinfo["novelname"]); ?> <?php echo ($coninfo["con_name"]); ?> - <?php echo ($siteinfo["site_name"]); ?></title>
	<meta name="keywords" content="<?php echo ($coninfo["con_name"]); ?>">
		<meta name="description" content="<?php echo ($coninfo["con_name"]); ?>">

			<link type="text/css" rel="stylesheet" href="__ROOT__/Public/css/base.css" />
			<link type="text/css" rel="stylesheet" href="__ROOT__/Public/css/list.css" />
			<link type="text/css" rel="stylesheet" href="__ROOT__/Public/css/style.css" media="all" />
			<link type="text/css" rel="stylesheet" href="__ROOT__/Public/css/read.css" />

			<script src="__ROOT__/Public/js/gg.js" type="text/javascript"></script>
			<script src="__ROOT__/Public/js/jquery-1.7.1.min.js" type="text/javascript"></script>
			<script src="__ROOT__/Public/js/playclass.js" type="text/javascript"></script>
			<script src="__ROOT__/Public/js/reader.js" type="text/javascript"></script>
			<script src="__ROOT__/Public/js/common.js" type="text/javascript"></script>
</head>
<body>

	<script type="text/javascript" language="javascript">
		var preview_page = "<?php echo ($coninfo["prePage"]); ?>";
		var next_page = "<?php echo ($coninfo["nextPage"]); ?>";
		var index_page = "<?php echo ($novelinfo["bookurl"]); ?>";
		var novelname = "<?php echo ($novelinfo["novelname"]); ?>";
		var chaptername = "<?php echo ($coninfo["con_name"]); ?>";
		var novelid = "<?php echo ($novelinfo["id"]); ?>";
		function jumpPage() {
			var event = document.all ? window.event : arguments[0];
			if (event.keyCode == 37)
				document.location = preview_page;
			if (event.keyCode == 39)
				document.location = next_page;
			if (event.keyCode == 13)
				document.location = index_page;
		}
		document.onkeydown = jumpPage;

	</script>


	<div id="header">
		<div id="navbar">
			<div class="layout fn-clear">
				<ul id="nav" class="ui-nav">
					<li class="nav-item" id="nav-home"><a class="nav-link" target="_self" href="<?php echo ($siteinfo["site_url"]); ?>" title="<?php echo ($siteinfo["site_name"]); ?>"><i class="ui-icon home-nav"></i></a></li>

					<?php if(is_array($classes)): foreach($classes as $key=>$class): ?><li class="nav-item <?php if(($class["id"]) == $novelinfo["novel_cid"]): ?>current<?php endif; ?>" id="nav-cartoon"><a class="nav-link" target="_self" href="<?php echo ($class["clsurl"]); ?>" title="<?php echo ($class["classname"]); ?>"><i class="ui-icon cartoon-nav"></i><?php echo ($class["classname"]); ?></a></li><?php endforeach; endif; ?>
				</ul>


				<ul id="sign" class="ui-nav">
					<li class="nav-item drop-down" id="nav-looked"><a class="nav-link drop-title" target="_self"><i class="ui-icon looked-nav"></i>阅读记录</a>
						<div class="drop-box" style="display: none;">
							<div class="looked-list">
								<p>
									<a class="close-his" target="_self" href="javascript:;">关闭</a><a href="javascript:;" id="emptybt" data="1" target="_self">你读的最近十个页面会显示在这里</a>
								</p>
								<ul class="highlight" id="playhistory">
									<li class="no-his"><p>暂无阅读历史列表...</p></li>
								</ul>
								<div class="his-todo" id="morelog" style="display: none;"></div>
								<div class="his-todo" id="his-todo">
									<A href="<?php echo ($siteinfo["site_url"]); ?>" target="_blank"><?php echo ($siteinfo["site_name"]); ?></A>是你理想的阅读家园
								</div>
							</div>
							<script type="text/javascript">
								PlayHistoryObj.viewPlayHistory('playhistory');
							</script>
						</div></li>
				</ul>
			</div>
		</div>
		<DIV class="clear"></DIV>
	</div>
	<DIV class="warpper div_part_index">
		<DIV class="div_breadcrumbs">
			<H2 class="breadcrumbs">
				<SMALL> 如果觉得<A href="<?php echo ($siteinfo["site_url"]); ?>" target="_blank"><?php echo ($siteinfo["site_name"]); ?></A>不错，请加入收藏，或者分享给你的朋友！你的支持是我们最大的动力！
				</SMALL>
			</H2>
			<SMALL class="right"> <A href="#" rel="nofollow" onclick="window.external.AddFavorite(location.href, document.title)">加入收藏</A>
			</SMALL>
		</DIV>

		<DIV class="div_breadcrumbs" style="height: 55px;">
			<form action="" method="get" id='searform' style="width: 100%; padding-top: 10px; padding-bottom: 5px;">
				<font color="#c00" size="2">小说搜索：</font><input type="text" placeholder="请输入小说名或者作者" id="key" /> <input type="submit" value="提交" onclick="postkey();" /> <SMALL style="font-size: 15px; font-weight: bold;"><font style="font-size: 14px; padding-left: 10px;"> 热词：</font> <?php if(is_array($hotnovels)): foreach($hotnovels as $key=>$hotnovel): ?><A title="<?php echo ($hotnovel["keyword"]); ?>" href="<?php echo ($hotnovel["url"]); ?>"><font style="padding-left: 12px; color: black;"><?php echo ($hotnovel["keyword"]); ?></font></A><?php endforeach; endif; ?> </SMALL>
			</form>
		</DIV>
		<DIV class="clear"></DIV>
	</DIV>
	<p id="back-to-top">
		<a href="#top" title="返回顶部"><span></span>返回顶部</a>
	</p>


	<DIV class="warpper div_index_ad">
		<DIV class="warpper">
			<DIV class="ad_biger">
				<DIV class="ad_biger">
					<script>
						ad_top();
					</script>
				</DIV>
			</DIV>
		</DIV>
		<DIV class=clear></DIV>
	</DIV>

	<div id="webhtml">
		<div class="content_read">
			<div class="box_con">

				<div class="con_top">
					<a href="<?php echo ($siteinfo["site_url"]); ?>"><?php echo ($siteinfo["site_name"]); ?></a>&nbsp;&gt;&nbsp;<a href="<?php echo ($novelinfo["classurl"]); ?>"><?php echo ($novelinfo["classname"]); ?></a>&nbsp;&gt;&nbsp;<a href="<?php echo ($novelinfo["bookurl"]); ?>"><?php echo ($novelinfo["novelname"]); ?></a>&nbsp;&gt;&nbsp;<?php echo ($coninfo["con_name"]); ?>
				</div>




				<div class="zhangjieming">
					<h1><?php echo ($coninfo["con_name"]); ?></h1>
					<div class="lm">
						&nbsp;随机推荐：
						<?php if(is_array($pagetuis)): foreach($pagetuis as $key=>$pagetui): ?><a href="<?php echo ($pagetui["tuiUrl"]); ?>" title="<?php echo ($pagetui["novelname"]); ?>" target="_blank"><?php echo ($pagetui["novelname"]); ?></a>、<?php endforeach; endif; ?>
						<br> <script>
							textselect();
						</script>
					</div>
				</div>

				<div class="zhangjieTXT" id="content">
					<!--go-->
					<?php echo ($coninfo["con_text"]); ?>
					<!--over-->
					<div class="bdlikebutton" style="margin-top: 5px;"></div>
				</div>

				<div class="bottem">
					<div class="main-btn">
						<a href="<?php echo ($coninfo["prePage"]); ?>" class="prevC">&larr;上一章</a> <a href="<?php echo ($novelinfo["bookurl"]); ?>" id="viewList">章节目录 Enter</a> <a href="<?php echo ($coninfo["nextPage"]); ?>" id="prev">下一章&rarr;</a>
					</div>
				</div>

				

			</div>
		</div>
	</div>

	<DIV class="warpper div_index_ad">
		<DIV class="warpper">
			<DIV class="ad_biger">
				<DIV class="ad_biger">
					<script>
						ad_bottom();
					</script>
				</DIV>
			</DIV>
		</DIV>
		<DIV class=clear></DIV>
	</DIV>





	<script language="javaScript" type="text/javascript">
		PlayHistoryObj.addPlayHistory(novelname + "|" + chaptername,
				window.location.href, window.novelid);
	</script>
	<!--版权-->
<DIV class="div_copyright">
	<DIV class="warpper">

		<DIV class="div_aboutus">
			<P><?php echo ($siteinfo["site_copyright"]); ?></P>
			<P>
				Copyright &copy; 2014 by <a href="<?php echo ($siteinfo["site_url"]); ?>" title="<?php echo ($siteinfo["site_name"]); ?>"><B><?php echo ($siteinfo["site_name"]); ?></B></a> | 版权所有. <?php echo ($siteinfo["site_count"]); ?>
			</P>
			<P class="link_quick">
				<A href="<?php echo ($siteinfo["site_url"]); ?>"><?php echo ($siteinfo["site_name"]); ?></A>

				<?php if(is_array($classes)): foreach($classes as $key=>$class): ?>| <a target="_self" href="<?php echo ($class["clsurl"]); ?>" title="<?php echo ($class["classname"]); ?>"><?php echo ($class["classname"]); ?></a><?php endforeach; endif; ?>
			</P>

		</DIV>


		<DIV class="clear"></DIV>
	</DIV>
</DIV>

</body>
</HTML>