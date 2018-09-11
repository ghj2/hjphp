<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:93:"/www/wwwroot/www.hjphp.com/wwwroot/public/../application/admin/view/article/article_edit.html";i:1533608583;s:77:"/www/wwwroot/www.hjphp.com/wwwroot/application/admin/view/header_sidebar.html";i:1534237547;}*/ ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>修改文章</title>
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
			<h1 class="page-header">修改文章<small> Edit Article</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
				<div class="col-md-6 ui-sortable" style="width:100%;">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">修改</h4>
                        </div>
						
						<!-- 头像上传ajax表单 -->
						<form method="post" action="<?php echo url('Index/upload_img'); ?>" id="form2" enctype="multipart/form-data">
							<input name="up_headpic_input" type="file" id="up_headpic_input" style="display:none;"/> 
						</form>

                        <form name="form1" id="form1" method="post" action="">
                        <div class="panel-body">
                            <input class="form-control" name="index" id="index" value="<?php echo $firm['index']; ?>" placeholder="排序" type="number">
                            <p></p>

                            <input class="form-control" name="title" id="title" value="<?php echo $firm['title']; ?>" placeholder="标题" type="text">
                            <p></p>
                           
							<input class="form-control" name="title2" id="title2" value="<?php echo $firm['title2']; ?>" placeholder="副标题" type="text">
                            <p></p>

                           	<div class="input-group">
                                <span class="input-group-addon">封面图</span>
                                <img src="<?php echo $firm['pic']; ?>" onerror="javascript:this.src='/static/images/avatar_plus.png'" id="up_headpic" style="height:100px;width:100px"> 
								<input type="hidden" name="pic" id="pic" value="<?php echo $firm['pic']; ?>"/>
                            </div>
                            <p></p>
							
							<textarea class="form-control" name="intro" id="intro" placeholder="简介"><?php echo $firm['intro']; ?></textarea>
                            <p></p>
							
							
							<textarea id="detail" name="detail" style="width:100%;height:500px;visibility:hidden;"><?php echo $firm['detail']; ?></textarea>
							<br/>

                            <div class="input-group">
                            	<span class="input-group-addon">状态</span>
                                <span class="input-group-addon">
                                    <input name="hide" id="nohide" type="radio" value="0" <?php if($firm['hide']==0)echo "checked";?> >
                                </span>
                                <p class="form-control" id="delhide">显示</p>
                                <span class="input-group-addon">
                                    <input name="hide" id="hide" type="radio" value="1" <?php if($firm['hide']==1)echo "checked";?>>
                                </span>
                                <p class="form-control" id="gohide">隐藏</p>
                            </div>
							<p></p>

							<input class="form-control" name="viewnum" id="viewnum" placeholder="浏览量" type="number" value="<?php echo $firm['viewnum']; ?>">
                            <p></p>

                             <input class="form-control" name="tag" id="tag" placeholder="标签" type="text" value="<?php echo $firm['tag']; ?>">
                            <p></p>
						
							<div style="text-align:center;">
							<button type="button" id="subm" class="btn btn-sm btn-success" style="height: 100px;width: 100%;font-size: 20px;">提交</button>
							</div>

                        </div>
                    	</form>
                    </div>
                    <!-- end panel -->
                </div>
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
						$("#pic").val(data);
					}
				},
				error:function(xhr){
					alert("图片传输失败:01");
				}
			}); 
		});
	</script>
	<!-- 上传图片end -->
	<!-- 富文本 -->
	<script charset="utf-8" src="/kindeditor/kindeditor-all.js"></script>
	<script charset="utf-8" src="/kindeditor/lang/zh-CN.js"></script>
	<script charset="utf-8" src="/kindeditor/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="detail"]', {
				cssPath : '/kindeditor/plugins/code/prettify.css',
				uploadJson : '/kindeditor/php/upload_json.php',
				fileManagerJson : '/kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name="form1"]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name="form1"]')[0].submit();
					});
				}
			});
			prettyPrint();
			$("#subm").click(function(){	//表单验证
				$("#detail").val(editor1.html());
				$("#form1").submit();
			});
		});
	</script>
	<!-- 富文本end -->
	<script>
		$("#gohide").click(function(){
			$("#hide").attr("checked","checked");
		});
		$("#delhide").click(function(){
			$("#nohide").attr("checked","checked");
		});
	</script>
</body>
</html>
