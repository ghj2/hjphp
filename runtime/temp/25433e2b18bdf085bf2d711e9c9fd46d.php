<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"D:\wamp64\www\tp5\public/../application/admin\view\index\login.html";i:1534138615;}*/ ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>登录</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="admin_login" name="description" />
	<meta content="ghj" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="/static/adminassets/plugins/jquery-ui-1.10.4/jquery-ui.css" rel="stylesheet" />
	<link href="/static/adminassets/plugins/bootstrap-3.1.1/css/bootstrap.css" rel="stylesheet" />
	<link href="/static/adminassets/plugins/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/static/adminassets/css/animate.css" rel="stylesheet" />
	<link href="/static/adminassets/css/style.css" rel="stylesheet" />
	<link href="/static/adminassets/css/style-responsive.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin login -->
        <div class="login bg-black animated fadeInDown">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand">
                    <span class="logo"></span> 登录
                    <small>HJPHP 后台</small>
                </div>
                <div class="icon">
                    <i class="fa fa-sign-in"></i>
                </div>
            </div>
            <!-- end brand -->
            <div class="login-content">
                <form action="" method="POST" id="form1" class="margin-bottom-0">
                    <div class="form-group m-b-20">
                        <input type="text" name="username" id="username" class="form-control input-lg" placeholder="用户名" />
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="密码" />
                    </div>
                    <label class="checkbox m-b-20">
                        <a href="<?php echo url('trans_md5'); ?>" target="_blank">md5生成器</a>
                    </label> 
                    <div class="login-buttons">
                        <button type="button" onclick="javascript:void(0);" id="subm" class="btn btn-success btn-block btn-lg">登录</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- end login -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/static/adminassets/plugins/jquery-1.7.2/jquery-1.7.2.js"></script>
	<script src="/static/adminassets/plugins/jquery-ui-1.10.4/ui/minified/jquery-ui.min.js"></script>
	<script src="/static/adminassets/plugins/bootstrap-3.1.1/js/bootstrap.min.js"></script>
	<script src="/static/adminassets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/static/js/jquery.md5.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="/static/adminassets/js/apps.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
	<script>
		$("#subm").click(function(){
			$("#password").val($.md5($("#password").val()));
			$("#form1").submit();
		});
	</script>

</body>
</html>
