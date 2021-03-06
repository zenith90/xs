<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
	<head>
		<title><?php echo ($pagename); ?></title>
		<meta name="description" content="" />

		<!-- required styles -->
		<link href="__ROOT__/admin/tpl/library/assets/css/bootstrap.css" rel="stylesheet" />
		<link href="__ROOT__/admin/tpl/library/assets/css/bootstrap-responsive.css" rel="stylesheet" />
		<link href="__ROOT__/admin/tpl/library/css/styles.css" rel="stylesheet" />
		
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
	<body>
		
		<!-- header -->
		<div id="header" class="navbar">
			<div class="navbar-inner">
				<!-- company or app name -->
				<a class="brand hidden-phone" href="__APP__/Admin/index">ck book 2.0 beta QQ:15865202</a>
				
				<!-- nav icons -->
				<ul class="nav">
				
					<li>
						<a href="__APP__/Caiji/index"><i class="icon-large icon-search"></i>采集管理
						</a>
					</li>
					
					<li>
						<a href="__APP__/Novel/index" title="小说管理">
							<i class="icon-large icon-book"></i>小说管理
							
						</a>
					</li>
					
					<li>
						<a href="__APP__/User/index" title="用户管理">
							<i class="icon-large icon-user"></i>用户管理
						</a>
					</li>
					
					<li>
						<a href="__APP__/Link/index" title="友情链接管理">
							<i class="icon-large icon-link"></i>链接管理
						</a>
					</li>
					
					
					<li>
						<a href="#" title="留言管理">
							<i class="icon-large icon-envelope"></i>留言管理
						</a>
					</li>
					
					<li>
						<a href="__APP__/Set/index" title="网站设置">
							<i class="icon-large icon-cog"></i>网站设置
						</a>
					</li>
					
				</ul>
				
				<ul class="nav pull-right">
					
					<!-- dropdown user account -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-large icon-user"></i>
						</a>
						
						<ul class="dropdown-menu dropdown-user-account">
						
							<li class="account-img-container">
								<img class="thumb account-img" src="__ROOT__/admin/tpl/library/images/100/2.gif" />
							</li>
							
							<li class="account-info">
								<h3>系统简介</h3>
								<p>关联删除功能（例如删除了一本小说就应该删除其相关的章节分卷等等） </p>
								
							</li>
							
							<li class="account-footer">
								<div class="row-fluid">
								
									<div class="span8">
										<a class="btn btn-small btn-primary btn-flat" href="/" target="_blank">打开首页</a>
									</div>
									
									<div class="span4 align-right">
										<a class="btn btn-small btn-danger btn-flat" href="__APP__/Login/logout">退出</a>
									</div>
									
								</div>									
							</li>
							
						</ul>
					</li>
					<!-- ./ dropdown user account -->
				</ul>
				
				<!-- search form -->
				<form class="navbar-search pull-right hidden-phone" action="__APP__/Chapter/search/" method="get"/>
					<input type="text" class="search-query span4" placeholder="请输入文章标题，按回车进行搜索..." name="keyword"/>
					<input type="hidden" value="sub" name="search">
				</form>
				<!-- ./ search form -->
			</div>
		</div>
		<!-- end header -->		
		
		<div id="left_layout">
			<!-- main content -->
			<div id="main_content" class="container-fluid">
			
				<!-- page heading -->
				<div class="page-heading">
				
					<h2 class="page-title muted">
						<i class="icon-dashboard"></i> <?php echo ($pagename); ?>
					</h2>
					
					<div class="page-info hidden-phone">
						<ul class="stats">
							<li>
								<span class="large text-warning"><?php echo ($NovelCount); ?></span>
								<span class="mini muted">小说数量</span>
							</li>
							<li>
								<span class="large text-info"><?php echo ($ConCount); ?></span>
								<span class="mini muted">小说页面</span>
							</li>
							
							<li>
								<span class="large text-error"><?php echo ($ClickCountToday); ?></span>
								<span class="mini muted">今日访问量</span>
							</li>
							
							<li>
								<span class="large text-error"><?php echo ($ClickCountMonth); ?></span>
								<span class="mini muted">本月访问量</span>
							</li>
							
							<li>
								<span class="large text-error"><?php echo ($ClickCount); ?></span>
								<span class="mini muted">总访问量</span>
							</li>
							
							
						</ul>
					</div>
				</div>
				<!-- ./ page heading -->
				
				<ul class="breadcrumb breadcrumb-main">
					<div class="btn-toolbar">
						<a class="btn btn-inverse btn btn-large btn-primary" href="__APP__/Novel/add">添加小说</a>
						<a class="btn btn-cm btn btn-large btn-primary" href="__APP__/Novel/index">所有小说</a>
						<a class="btn btn-cm btn btn-large btn-primary" href="__APP__/Vol/index/id/<?php echo ($novelinfo["id"]); ?>">查看分卷</a>
						<a class="btn btn-cm btn btn-large btn-primary" href="__APP__/Vol/add/id/<?php echo ($novelinfo["id"]); ?>">添加分卷</a>
						<a class="btn btn-cm btn btn-large btn-primary" href="__APP__/Chapter/index/id/<?php echo ($novelinfo["id"]); ?>">查看内容</a>
						<a class="btn btn-cm btn btn-large btn-primary" href="__APP__/Chapter/add/id/<?php echo ($novelinfo["id"]); ?>">添加内容</a>
					</div>
				</ul>


				<!-- post wrapper -->				
				<div class="row-fluid">
					
					<div class="span6">
					<div class="well widget">
							<div class="widget-header">
								<h3 class="title">为小说 "<?php echo ($novelinfo["novelname"]); ?>" 添加分卷信息</h3>
							</div>
							<form class="form-horizontal" enctype="multipart/form-data" action="" method="POST"/>
								
								
								<div class="control-group">
									<label class="control-label" for="inputEmail">分卷名称</label>
									<div class="controls">
										<input type="text" id="volname" name="volname" placeholder="分卷名称" />
									</div>
								</div>
								
								
								<div class="control-group">
									<div class="controls">
									<!--
									<label class="checkbox">
										<input type="checkbox" class="fancy" /> Remember me
									</label>
									-->
									<button type="submit" class="btn btn-warning" name="sub">确认添加</button>
									</div>
								</div>
							</form>
						</div>	
						
						
						
					</div>
				</div>
				<!-- ./ post wrapper -->
			</div>
			<!-- end main content -->	
	
<!-- sidebar -->
			<ul id="sidebar" class="nav nav-pills nav-stacked">
				<li class="avatar hidden-phone">
					<a href="__APP__/Login/logout">
						<img src="__ROOT__/admin/tpl/library/images/100/2.gif" title="点击退出"/>
						<span><?php echo ($mynickname); ?></span>
					</a>
				</li>
				<li<?php echo ($checkindex); ?>>
					<a href="__APP__/Admin/index">
						<i class="micon-home"></i>
						<span class="hidden-phone">首页</span>
					</a>
				</li>
				<li class="dropdown<?php echo ($checkclass); ?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="micon-paper"></i>
						<span class="hidden-phone">内容</span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="__APP__/Novel/index">
								<i class="icon-large icon-underline"></i> 管理小说
							</a>
						</li>
						<li>
							<a href="__APP__/Novel/add">
								<i class="icon-large icon-table"></i> 添加小说
							</a>
						</li>
						<li>
							<a href="__APP__/Cls/index">
								<i class="icon-large icon-check-empty"></i> 小说分类
							</a>
						</li>
						<li>
							<a href="__APP__/Cls/add">
								<i class="icon-large icon-sort"></i> 添加分类
							</a>
						</li>
						<!--
						<li>
							<a href="buttons.html">
								<i class="icon-large icon-th"></i> 人
							</a>
						</li>
						<li>
							<a href="tabs.html">
								<i class="icon-large icon-columns"></i> Tabs
							</a>
						</li>
						<li>
							<a href="breadcrumbs-paginations.html">
								<i class="icon-large micon-loop"></i> Breadcrums & Paginations
							</a>
						</li>
						<li>
							<a href="alerts.html">
								<i class="icon-large micon-bell"></i> Alerts
							</a>
						</li>
						<li>
							<a href="progress-bars.html">
								<i class="icon-large micon-paragraph-left"></i> Progress Bars
							</a>
						</li>
						<li>
							<a href="pickers-sliders.html">
								<i class="icon-large micon-equalizer"></i> Pickers & Sliders
							</a>
						</li>
						<li>
							<a href="modals.html">
								<i class="icon-large micon-copy"></i> Modals
							</a>
						</li>
						-->
					</ul>
				</li class="dropdown">
				<li class="dropdown<?php echo ($checkuser); ?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="micon-user-2"></i>
						<span class="hidden-phone">用户</span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="__APP__/User/index">
								<i class="icon-large icon-th-large"></i> 管理用户
							</a>
						</li>
						
						<li>
							<a href="__APP__/User/edit/id/<?php echo ($userid); ?>">
								<i class="icon-large icon-th-large"></i> 修改密码
							</a>
						</li>
						
						<li>
							<a href="__APP__/User/add">
								<i class="icon-large icon-th-large"></i> 添加用户
							</a>
						</li>
						
					</ul>
				</li>
				
				<li class="dropdown<?php echo ($checklink); ?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="micon-link-2"></i>
						<span class="hidden-phone">链接</span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="__APP__/Link/index">
								<i class="icon-large icon-th-large"></i> 全部链接
							</a>
						</li>
						<li>
							<a href="__APP__/Link/add">
								<i class="icon-large icon-th-large"></i> 添加链接
							</a>
						</li>
					</ul>
				</li>
				
				
				<li class="dropdown<?php echo ($checkcaiji); ?>">
					<a href=""  class="dropdown-toggle" data-toggle="dropdown">
						<i class="micon-eye"></i>
						<span class="hidden-phone">采集</span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="__APP__/Caiji/index">
								<i class="icon-large icon-th-large"></i> 所有采集
							</a>
						</li>
						<li>
							<a href="__APP__/Caiji/add">
								<i class="icon-large icon-th-large"></i> 添加采集规则
							</a>
						</li>
					</ul>
				</li>
				<li class="dropdown<?php echo ($checkset); ?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="micon-cog"></i>
						<span class="hidden-phone">设置</span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="__APP__/Set/index">
								<i class="icon-large icon-th-large"></i> 系统设置
							</a>
						</li>
						<li>
							<a href="__APP__/Set/ad">
								<i class="icon-large icon-th-large"></i> 广告设置
							</a>
						</li>
					</ul>
				</li>
				
				<li>
					<a onclick="alert('开发中！')">
						<i class="micon-info"></i>
						<span class="hidden-phone">关于</span>
					</a>
				</li>
				
				<li>
					<a onclick="alert('开发中！')">
						<i class="micon-database"></i>
						<span class="hidden-phone">统计</span>
					</a>
				</li>
			
				<li>
					<a  onclick="alert('开发中！')">
						<i class="micon-pencil"></i>
						<span class="hidden-phone">评论</span>
					</a>
				</li>
				
			</ul>
			<!-- end sidebar -->
		</div>
		
		<!-- external api <script src="http://maps.google.com/maps/api/js?v=3.5&sensor=false"></script>
		-->
		
		
		<!-- base -->
		<script src="__ROOT__/admin/tpl/library/assets/js/jquery.js"></script>
		<script src="__ROOT__/admin/tpl/library/assets/js/bootstrap.min.js"></script>
		
		<!-- addons -->
		<script src="__ROOT__/admin/tpl/library/plugins/chart-plugins.js"></script>
		<script src="__ROOT__/admin/tpl/library/plugins/jquery-ui-slider.js"></script>
		<script src="__ROOT__/admin/tpl/library/plugins/redactor/redactor.min.js"></script>
		<script src="__ROOT__/admin/tpl/library/plugins/jmapping/markermanager.js"></script>
		<script src="__ROOT__/admin/tpl/library/plugins/jmapping/StyledMarker.js"></script>
		<script src="__ROOT__/admin/tpl/library/plugins/jmapping/jquery.metadata.js"></script>
		<script src="__ROOT__/admin/tpl/library/plugins/jmapping/jquery.jmapping.min.js"></script>
		<script src="__ROOT__/admin/tpl/library/plugins/jquery.uniform.js"></script>
		<script src="__ROOT__/admin/tpl/library/plugins/chosen.jquery.min.js"></script>
		<script src="__ROOT__/admin/tpl/library/plugins/bootstrap-datepicker.js"></script>
		<script src="__ROOT__/admin/tpl/library/plugins/jquery.timePicker.min.js"></script>
				
		<!-- plugins loader -->
		<script src="__ROOT__/admin/tpl/library/js/loader.js"></script>
	</body>
</html>