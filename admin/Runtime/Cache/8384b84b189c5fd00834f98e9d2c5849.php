<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    
<head>
        <title>小说后台登录页面</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="__ROOT__/admin/tpl/css/bootstrap.min.css" />
		<link rel="stylesheet" href="__ROOT__/admin/tpl/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="__ROOT__/admin/tpl/css/matrix-login.css" />
        <link href="__ROOT__/admin/tpl/font-awesome/css/font-awesome.css" rel="stylesheet" />
 </head>
    <body>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical" action="__URL__/Logincheck" method="POST">
				 <div class="control-group normal_text"> <h3><img src="__ROOT__/admin/tpl/img/logo.png" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"></i></span><input type="text" placeholder="username" name="username"/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="password" placeholder="Password" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="__ROOT__" class="flip-link btn btn-info" id="to-recover">返回首页</a></span>
                    <span class="pull-right"><input type="submit" name="sub" class="btn btn-success" value="登录"></span>
                </div>
            </form>
            
        </div>
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/matrix.login.js"></script> 
    </body>

</html>