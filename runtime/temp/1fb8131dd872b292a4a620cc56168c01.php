<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:87:"/www/wwwroot/www.hjphp.com/wwwroot/public/../application/admin/view/user/user_edit.html";i:1534236847;s:77:"/www/wwwroot/www.hjphp.com/wwwroot/application/admin/view/header_sidebar.html";i:1534237547;}*/ ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>用户</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="/static/adminassets/plugins/jquery-ui-1.10.4/jquery-ui.css" rel="stylesheet" />
	<link href="/static/adminassets/plugins/bootstrap-3.1.1/css/bootstrap.css" rel="stylesheet" />
	<link href="/static/adminassets/plugins/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/static/adminassets/css/animate.css" rel="stylesheet" />
	<link href="/static/adminassets/css/style.css" rel="stylesheet" />
	<link href="/static/adminassets/css/style-responsive.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	<!-- begin Kind editor css-->
	<link rel="stylesheet" href="/kindeditor/themes/default/default.css" />
	<link rel="stylesheet" href="/kindeditor/plugins/code/prettify.css" />
	<!-- end Kind editor css-->
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="/static/adminassets/plugins/DataTables-1.9.4/css/jQuery.dateTables.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
				<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span>A D M I N</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->
				
				<!-- begin header navigation right -->
				<ul class="nav navbar-nav navbar-right">
					<!-- 顶部搜索框
					<li>
						<form class="navbar-form full-width">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Enter keyword" />
								<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
							</div>
						</form>
					</li> -->
					<!-- 顶部消息提醒框
					<li class="dropdown">
						<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
							<i class="fa fa-bell-o"></i>
							<span class="label">5</span>
						</a>
						<ul class="dropdown-menu media-list pull-right animated fadeInDown">
                            <li class="dropdown-header">Notifications (5)</li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="pull-left media-object bg-red"><i class="fa fa-bug"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Server Error Reports</h6>
                                        <div class="text-muted">3 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="pull-left"><img src="/static/adminassets/img/user-1.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">John Smith</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted">25 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="pull-left"><img src="/static/adminassets/img/user-2.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Olivia</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted">35 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="pull-left media-object bg-green"><i class="fa fa-plus"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New User Registered</h6>
                                        <div class="text-muted">1 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="pull-left media-object bg-blue"><i class="fa fa-envelope"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New Email From John</h6>
                                        <div class="text-muted">2 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer text-center">
                                <a href="javascript:;">View more</a>
                            </li>
						</ul>
					</li> -->
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?php echo session('admin_info')['headpic']; ?>" alt="" /> 
							<span class="hidden-xs"><?php echo session("admin_info")['name']; ?></span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInLeft">
							<!-- <li class="arrow"></li>
							<li><a href="javascript:;">Edit Profile</a></li>
							<li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
							<li><a href="javascript:;">Calendar</a></li>
							<li><a href="javascript:;">Setting</a></li>
							<li class="divider"></li> -->
							<li><a href="<?php echo url('index/logout'); ?>">退出登录</a></li>
						</ul>
					</li>
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="image">
							<a href="javascript:;"><img src="<?php echo session('admin_info')['headpic']; ?>" alt="" /></a>
						</div>
						<div class="info">
							<?php echo session("admin_info")['name']; ?>
							<small><?php echo session('admin_info')['username']; ?></small>
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="<?php if(request()->controller()=='Index')echo 'active';?>">
						<a href="<?php echo url('index/index'); ?>"><i class="fa fa-laptop"></i> <span>首页</span></a>
					</li>
					<li class="has-sub <?php if(request()->controller()=='Article')echo 'active';?>">
						<a href="javascript:;">
						    <i class="fa fa-file-o"></i> 
						    <b class="caret pull-right"></b>
						    <span>文章</span> 
						</a>
						<ul class="sub-menu">
							<li><a href="<?php echo url('article/index'); ?>">文章列表</a></li>
						</ul>
					</li>
					<li class="has-sub <?php if(request()->controller()=='User')echo 'active';?>">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-users"></i> 
						    <span>用户</span> 
						</a>
						<ul class="sub-menu">
							<li><a href="<?php echo url('user/index'); ?>">用户列表</a></li>
						</ul>
					</li>
					<li class="has-sub <?php if(request()->controller()=='Message')echo 'active';?>">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-envelope"></i> 
						    <span>留言</span> 
						</a>
						<ul class="sub-menu">
							<li><a href="<?php echo url('message/index'); ?>">留言列表</a></li>
						</ul>
					</li>
					<li class="has-sub <?php if(request()->controller()=='Steal')echo 'active';?>">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-bug"></i> 
						    <span>扒虫</span> 
						</a>
						<ul class="sub-menu">
							<li><a href="<?php echo url('steal/list'); ?>">已扒取数据</a></li>
							<li><a href="<?php echo url('steal/index'); ?>">运行扒虫</a></li>
						</ul>
					</li>
					<li class="has-sub <?php if(request()->controller()=='Footprints')echo 'active';?>">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-fighter-jet"></i>
						    <span>访问数据</span> 
						</a>
						<ul class="sub-menu">
							<li><a href="<?php echo url('Footprints/index'); ?>">用户访问列表</a></li>
						</ul>
					</li>
					<!-- end sidebar nav -->
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<!-- end #sidebar -->
		

		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin page-header -->
			<h1 class="page-header">用户详情<small> Edit User</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
				<!-- 左 -->
				<div class="col-md-6 ui-sortable">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">修改信息</h4>
                        </div>
						
						<!-- 头像上传ajax表单 -->
						<form method="post" action="<?php echo url('Index/upload_img'); ?>" id="form2" enctype="multipart/form-data">
							<input name="up_headpic_input" type="file" id="up_headpic_input" style="display:none;"/> 
						</form>

                        <form name="form1" id="form1" method="post" action="">
                        <div class="panel-body">
                           
                            <input class="form-control" name="username" id="username" value="<?php echo $firm['username']; ?>" placeholder="输入新的用户名" type="text">
                            <p></p>
                           
							<input class="form-control" name="password" id="password" value placeholder="输入新的密码" type="password">
                            <p></p>

                           	<div class="input-group">
                                <span class="input-group-addon">头像</span>
                                <img src="<?php echo $firm['headpic']; ?>" onerror="javascript:this.src='/static/images/avatar_plus.png'" id="up_headpic" style="height:100px;width:100px"> 
								<input type="hidden" name="headpic" id="headpic" value="<?php echo $firm['headpic']; ?>"/>
                            </div>
                            <p></p>
							
							<select class="form-control" id="province" name="province">
								<option value="">--</option>
								<?php if(is_array($formdata['province']) || $formdata['province'] instanceof \think\Collection || $formdata['province'] instanceof \think\Paginator): $i = 0; $__LIST__ = $formdata['province'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
								<option value="<?php echo $item['code']; ?>"><?php echo $item['name']; ?></option>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
							<p></p>

							<select class="form-control" id="city" name="city">
								<option value=''>--</option>
							</select>
							<p></p>

							<select class="form-control" id="district" name="district">
								<option value=''>--</option>
							</select>
							<p></p>

							<textarea class="form-control" name="sign" id="sign" placeholder="签名"><?php echo $firm['sign']; ?></textarea>
                            <p></p>
							
							<button type="button" id="subm" class="btn btn-sm btn-success">提交保存</button>
							
                        </div>
                    	</form>
                    </div>
                    <!-- end panel -->
                </div>
				<!-- 左 end -->
				<!-- 右 -->
				<div class="col-md-6 ui-sortable">
                    <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">浏览记录</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
	                                        <th>时间</th>
	                                        <th>页面</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php if(is_array($viewdata) || $viewdata instanceof \think\Collection || $viewdata instanceof \think\Paginator): if( count($viewdata)==0 ) : echo "" ;else: foreach($viewdata as $key=>$item): ?>
	                                    <tr>
	                                        <td><?php echo date("Y-m-d H:i:s",$item['addtime']); ?></td>
	                                        <td><a href="<?php echo $item['url']; ?>"><?php echo $item['url']; ?></a></td>
	                                    </tr>
	                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end panel -->
			    </div>
				<!-- 右 end -->
            </div>
            <!-- end row -->
			

		</div>
		<!-- end #content -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/static/adminassets/plugins/jquery-1.7.2/jquery-1.7.2.js"></script>
	<script src="/static/adminassets/plugins/jquery-ui-1.10.4/ui/minified/jquery-ui.min.js"></script>
	<script src="/static/adminassets/plugins/bootstrap-3.1.1/js/bootstrap.min.js"></script>
	<script src="/static/adminassets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!--[if lt IE 9]>
		<script src="/static/adminassets/crossbrowserjs/html5shiv.js"></script>
		<script src="/static/adminassets/crossbrowserjs/respond.min.js"></script>
		<script src="/static/adminassets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->

	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="/static/adminassets/plugins/DataTables-1.9.4/js/jquery.dataTables.js"></script>
	<script src="/static/adminassets/plugins/DataTables-1.9.4/js/data-table.js"></script>
	<script src="/static/adminassets/js/apps.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<!-- md5 -->
	<script src="/static/js/jquery.md5.js"></script>
	<!-- md5 end -->

	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
	<!-- 上传图片 -->
	<script src="/static/js/jquery.form.js"></script> 
	<script>
		$("#up_headpic").click(function(){
			$("#up_headpic_input").click();
			
		});
		$("#up_headpic_input").change(function(){
			$("#form2").ajaxSubmit({
				dataType:  'json',
			    beforeSubmit:function(){},
				beforeSend: function() {},
				uploadProgress: function(event, position, total, percentComplete) {
	                var percentVal = percentComplete;
				},	
				success: function(data) {
					if(data == "图片上传失败:02"){
						alert(data);
					}else{
						$("#up_headpic").attr("src",data);
						$("#headpic").val(data);
					}
				},
				error:function(xhr){
					alert("图片传输失败:01");
				}
			}); 
		});
	</script>
	<!-- 上传图片end -->
	<!-- 三级联动ajax -->
	<script>
	$("#province").change(function(){
		$.post("<?php echo url('index/show_area'); ?>",{province:$("#province").val()},function(res){
			var content = "";
			Object.keys(res).forEach(function(key){
				content = content + "<option value='"+res[key]['code']+"'>"+res[key]['name']+"</option>";
			});
			$("#city").html(content);
			//edit专用
			if(user_city!=''){
				$("#city").val(user_city);
			}
			
			$("#city").change();
			
		});
	
	});
	$("#city").change(function(){
		$.post("<?php echo url('index/show_area'); ?>",{city:$("#city").val()},function(res){
			var content = "";
			Object.keys(res).forEach(function(key){
				content = content + "<option value='"+res[key]['code']+"'>"+res[key]['name']+"</option>";
			});
			$("#district").html(content);
			//edit专用
			if(user_district!=''){
				$("#district").val(user_district);
			} 
			
		});
	
	});
	//edit专用
	var user_province = "<?php echo $firm['province']; ?>";
	var user_city = "<?php echo $firm['city']; ?>";
	var user_district = "<?php echo $firm['district']; ?>";
	if(user_province!=''){
		$("#province").val(user_province);
		$("#province").change();
	}
	</script>
	<!-- 三级联动ajax结束 -->
	<script>
		$("#subm").click(function(){	//表单验证


			var editdata= {
				"username":$.trim($("#username").val()),
				"password":$.md5($("#password").val()),
				"headpic":$("#headpic").val(),
				"province":$("#province").val(),
				"city":$("#city").val(),
				"district":$("#district").val(),
				"sign":$("#sign").val(),
			};
			var editdata = JSON.stringify(editdata);	

			$.post("<?php echo url('user_edit'); ?>",{editdata:editdata},function(res){
				alert(res);
			});
		});
	</script>
</body>
</html>
