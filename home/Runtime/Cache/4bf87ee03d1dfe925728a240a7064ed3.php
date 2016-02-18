<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>“<?php echo ($searchkey); ?>”的搜索结果 - <?php echo ($siteinfo["site_name"]); ?></title>
	<meta name="keywords" content="<?php echo ($siteinfo["site_keywords"]); ?>">
		<meta name="description" content="<?php echo ($siteinfo["site_des"]); ?>">

			<link type="text/css" rel="stylesheet" href="__ROOT__/Public/css/base.css" />
			<link type="text/css" rel="stylesheet" href="__ROOT__/Public/css/style.css" media="all" />
			<link type="text/css" rel="stylesheet" href="__ROOT__/Public/css/details.css" media="all" />
			<script src="__ROOT__/Public/js/jquery-1.7.1.min.js" type="text/javascript"></script>
			<script src="__ROOT__/Public/js/playclass.js" type="text/javascript"></script>
			<script src="__ROOT__/Public/js/gg.js" type="text/javascript"></script>
			<script src="__ROOT__/Public/js/common.js" type="text/javascript"></script>
</head>
<body>
	
	<div id="header">
		<div id="navbar">
			<div class="layout fn-clear">
				<ul id="nav" class="ui-nav">
					<li class="nav-item" id="nav-home"><a class="nav-link" target="_self" href="<?php echo ($siteinfo["site_url"]); ?>" title="<?php echo ($siteinfo["site_name"]); ?>"><i class="ui-icon home-nav"></i></a></li>

					<?php if(is_array($classes)): foreach($classes as $key=>$class): ?><li class="nav-item <?php if(($class["id"]) == $classinfo["id"]): ?>current<?php endif; ?>" id="nav-cartoon"><a class="nav-link" target="_self" href="<?php echo ($class["clsurl"]); ?>" title="<?php echo ($class["classname"]); ?>"><i class="ui-icon cartoon-nav"></i><?php echo ($class["classname"]); ?></a></li><?php endforeach; endif; ?>
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


	<DIV class="warpper">

		<DIV class="div_breadcrumbs">
			<H1 class="breadcrumbs">
				<DIV class="breadcrumbs">“<?php echo ($searchkey); ?>”的搜索结果</DIV>
			</H1>
		</DIV>
	</DIV>


	<DIV class="warpper">
		<DIV class="div_img_with_title">
			<?php if(is_array($tuinovels)): foreach($tuinovels as $key=>$tuinovel): ?><DIV class="div_post">
				<A title="<?php echo ($tuinovel["novelname"]); ?>" class="img_preview" href="<?php echo ($tuinovel["tuiUrl"]); ?>">
					<DIV class="thumbnail">
						<IMG class="captify" alt="<?php echo ($tuinovel["novelname"]); ?>" src="__ROOT__/Public/cover/<?php echo ($tuinovel["novelimg"]); ?>" rel="caption1"></IMG>
					</DIV>
				</A>
			</DIV>
			<DIV class="div_showinfo">
				<p class="div_novelname">
					<A title="<?php echo ($tuinovel["novelname"]); ?>" href="<?php echo ($tuinovel["tuiUrl"]); ?>"><?php echo ($tuinovel["novelname"]); ?></a>
				</p>
				<p class="author">作者:<?php echo ($tuinovel["novelauthor"]); ?></p>
				<p class="div_des">简介：<?php echo ($tuinovel["des"]); ?></p>
			</DIV><?php endforeach; endif; ?>
		</DIV>
		<DIV class=clear></DIV>
	</DIV>

	<div class="postnav">
		<div class="wp-pagenavi"><?php echo ($pageshow); ?></div>
		<DIV class=clear></DIV>
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