<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:84:"/www/wwwroot/www.hjphp.com/wwwroot/public/../application/admin/view/index/index.html";i:1534299915;s:77:"/www/wwwroot/www.hjphp.com/wwwroot/application/admin/view/header_sidebar.html";i:1534237547;}*/ ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Admin</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="Live preview for Color Admin - Responsive Admin Template at WrapBootstrap" name="description" />
	<meta content="ghj" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<!--link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" /-->
	<link href="/static/adminassets/plugins/jquery-ui-1.10.4/jquery-ui.css" rel="stylesheet" />
	<link href="/static/adminassets/plugins/bootstrap-3.1.1/css/bootstrap.css" rel="stylesheet" />
	<link href="/static/adminassets/plugins/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/static/adminassets/css/animate.css" rel="stylesheet" />
	<link href="/static/adminassets/css/style.css" rel="stylesheet" />
	<link href="/static/adminassets/css/style-responsive.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	 <script src="/static/adminassets/js/behavior.js"></script>
     <script src="/static/adminassets/js/ga.js"></script>           

	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="/static/adminassets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
	<link href="/static/adminassets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
    <link href="/static/adminassets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />	
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}
	</style>

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
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">首页</a></li>
				<li class="active"></li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">首页 <small> Main Page </small></h1>
			<!-- end page-header -->
			
			<!-- begin row 顶部四个框-->
			<div class="row">
				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<div class="widget widget-state bg-purple">
						<div class="state-icon"><i class="fa fa-fighter-jet"></i></div>
						<div class="state-info">
							<h4>总访问量</h4>
							<p><?php echo $data['visitnum']; ?></p>	
						</div>
						<div class="state-link">
							<a href="<?php echo url('footprints/index'); ?>">详情  <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<div class="widget widget-state bg-blue">
						<div class="state-icon"><i class="fa fa-users"></i></div>
						<div class="state-info">
							<h4>用户</h4>
							<p><?php echo $data['usernum']; ?></p>	
						</div>
						<div class="state-link">
							<a href="<?php echo url('user/index'); ?>">详情  <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<div class="widget widget-state bg-green">
						<div class="state-icon"><i class="fa fa-file-o"></i></div>
						<div class="state-info">
							<h4>文章</h4>
							<p><?php echo $data['articlenum']; ?></p>	
						</div>
						<div class="state-link">
							<a href="<?php echo url('article/index'); ?>">详情  <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<div class="widget widget-state bg-red">
						<div class="state-icon"><i class="fa fa-envelope"></i></div>
						<div class="state-info">
							<h4>留言</h4>
							<p><?php echo $data['messagenum']; ?></p>	
						</div>
						<div class="state-link">
							<a href="<?php echo url('message/index'); ?>">详情  <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
			</div>
			<!-- end row -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-8 左列-->
				<div class="col-md-8">
					<div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">个人介绍</h4>
                        </div>
						
						<!-- 头像上传ajax表单 -->
						<form method="post" action="<?php echo url('Index/upload_img'); ?>" id="form2_grjs" enctype="multipart/form-data">
							<input name="up_headpic_input" type="file" id="up_headpic_input_grjs" style="display:none;"/> 
						</form>

                        <form name="form1" id="form1_grjs" method="post" action="<?php echo url('set_options'); ?>">
                        <div class="panel-body">
                           
                           	<input type="hidden" value="grjs" name="type">
                            <input class="form-control" name="grjs_row1" id="grjs_row1" value="<?php echo $options['grjs_row1']; ?>" placeholder="第一行" type="text">
                            <p></p>
                           
							<input class="form-control" name="grjs_row2" id="grjs_row2" value="<?php echo $options['grjs_row2']; ?>" placeholder="第二行" type="text">
                            <p></p>

                           	<div class="input-group">
                                <span class="input-group-addon">头像</span>
                                <img src="<?php echo $options['grjs_pic']; ?>" onerror="javascript:this.src='/static/images/avatar_plus.png'" id="up_headpic_grjs" style="height:100px;width:100px" onclick="start_upload('grjs');"> 
								<input type="hidden" name="grjs_pic" id="headpic_grjs" value="<?php echo $options['grjs_pic']; ?>"/>
                            </div>
                            <p></p>
							
							<textarea class="form-control" name="grjs_intro" id="grjs_intro" placeholder="签名"><?php echo $options['grjs_intro']; ?></textarea>
                            <p></p>
							
							<button type="button" onclick="postform('grjs')" class="btn btn-sm btn-success">提交保存</button>
							
                        </div>
                    	</form>
                    </div>
					
					<div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">友情链接</h4>
                        </div>
                       
						
                        <form name="form1" id="form1_links" method="post" class="form-inline" action="<?php echo url('set_options'); ?>">
                        <div class="panel-body">
                        	<input type="hidden" name="type" value="links"/>
                        	<?php if(is_array($options['friend_link']) || $options['friend_link'] instanceof \think\Collection || $options['friend_link'] instanceof \think\Paginator): if( count($options['friend_link'])==0 ) : echo "" ;else: foreach($options['friend_link'] as $key=>$item): ?>
                        	<div class="friend_link">
                        	<input class="form-control" name="link_index<?php echo $key; ?>" id="index<?php echo $key; ?>" value="<?php echo $item['index']; ?>" placeholder="排序" type="text">
                        	<input class="form-control" name="link_title<?php echo $key; ?>" id="title<?php echo $key; ?>" value="<?php echo $item['title']; ?>" placeholder="标题" type="text">
                            <input class="form-control" name="link_url<?php echo $key; ?>" id="url<?php echo $key; ?>" value="<?php echo $item['url']; ?>" placeholder="链接" type="text"> 
                            <button type="button" name="del_link" class="btn btn-sm btn-danger"><i class="fa fa-minus"></i></button>
                            <p></p>
							</div>
							<?php endforeach; endif; else: echo "" ;endif; ?>
							

                           	<button type="button" id="add_link" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></button>
                           	<p></p>

							<button type="button" onclick="postform('links')" class="btn btn-sm btn-success">提交保存</button>
                        </div>
                    	</form>
                    </div>
					
				
				</div>
				<!-- end col-8 -->
				<!-- begin col-4 右列-->
				<div class="col-md-4">
					<div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">首页图片</h4>
                        </div>
						
						<!-- 头像上传ajax表单 -->
						<form method="post" action="<?php echo url('Index/upload_img'); ?>" id="form2_hp" enctype="multipart/form-data">
							<input name="up_headpic_input" type="file" id="up_headpic_input_hp" style="display:none;"/> 
						</form>
						<!-- /头像上传ajax表单 -->

                        <form name="form1" id="form1_hp" method="post" action="<?php echo url('set_options'); ?>">
                        <div class="panel-body">
                         	<input type="hidden" name="type" value="hp">
                           	<div class="input-group">
                                <span class="input-group-addon">首页图片</span>
                                <img src="<?php echo $options['homepage_pic']; ?>" onerror="javascript:this.src='/static/images/avatar_plus.png'" id="up_headpic_hp" style="width:200px" onclick="start_upload('hp');"> 
								<input type="hidden" name="homepage_pic" id="headpic_hp" value="<?php echo $options['homepage_pic']; ?>"/>
                            </div>
                            <p></p>

                            <input class="form-control" name="homepage_title" id="homepage_title" value="<?php echo $options['homepage_title']; ?>" placeholder="图片标题" type="text">
                            <p></p>
                           
							<button type="button" onclick="postform('hp')" class="btn btn-sm btn-success">提交保存</button>
							
                        </div>
                    	</form>
                    </div>
					<div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">微信</h4>
                        </div>
						
						<!-- 头像上传ajax表单 -->
						<form method="post" action="<?php echo url('Index/upload_img'); ?>" id="form2_wx" enctype="multipart/form-data">
							<input name="up_headpic_input" type="file" id="up_headpic_input_wx" style="display:none;"/> 
						</form>
						<!-- /头像上传ajax表单 -->

                        <form name="form1" id="form1_wx" method="post" action="<?php echo url('set_options'); ?>">
                        <div class="panel-body">
                         	<input type="hidden" name="type" value="wx">
                           	<div class="input-group">
                                <span class="input-group-addon">二维码图片</span>
                                <img src="<?php echo $options['wechat_pic']; ?>" onerror="javascript:this.src='/static/images/avatar_plus.png'" id="up_headpic_wx" style="height:100px;width:100px" onclick="start_upload('wx');"> 
								<input type="hidden" name="wechat_pic" id="headpic_wx" value="<?php echo $options['wechat_pic']; ?>"/>
                            </div>
                            <p></p>

							<button type="button" onclick="postform('wx')" class="btn btn-sm btn-success">提交保存</button>
							
                        </div>
                    	</form>
                    </div>
					
					
				</div>
				<!-- end col-4 -->
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
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================= BEGIN PAGE LEVEL JS ================== -->
	<!-- <script src="/static/adminassets/plugins/gritter/js/jquery.gritter.js"></script> -->
	<script src="/static/adminassets/plugins/flot/jquery.flot.min.js"></script>
	<script src="/static/adminassets/plugins/flot/jquery.flot.time.min.js"></script>
	<script src="/static/adminassets/plugins/flot/jquery.flot.resize.min.js"></script>
	<script src="/static/adminassets/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="/static/adminassets/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="/static/adminassets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2-min.js"></script>
	<script src="/static/adminassets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="/static/adminassets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="/static/adminassets/js/dashboard.js"></script>
	<script src="/static/adminassets/js/apps.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<script>
		$(document).ready(function() {
			App.init();
			Dashboard.init();
		});
	</script>
	
	<script src="/static/js/jquery.form.js"></script> 
	<script>
	function start_upload(type){
		$("#up_headpic_input_"+type).click();
	
		$("#up_headpic_input_"+type).change(function(){
			$("#form2_"+type).ajaxSubmit({
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
						$("#up_headpic_"+type).attr("src",data);
						$("#headpic_"+type).val(data);
					}
				},
				error:function(xhr){
					alert("图片传输失败:01");
				}
			}); 
		});
	}
	function postform(type){
		$("#form1_"+type).ajaxSubmit({
				dataType:  'json',
			    beforeSubmit:function(){},
				beforeSend: function() {},
				uploadProgress: function(event, position, total, percentComplete) {
	                var percentVal = percentComplete;
				},	
				success: function(data) {
					console.log(data);
				},
				error:function(xhr){
					console.log(xhr);
				}
			}); 
	}
	$("#add_link").click(function(){
		var last = $(this).prev();
		if(last.attr('name')!='type'){
			var id = parseInt(last.children(0).attr('id').replace(/[^0-9]/ig,""))+1;
		}else{
			var id = 0;
		}
		last.after("<div class='friend_link'>"+
            	"<input class='form-control' name='link_index"+id+"' id='index"+id+"' value='' placeholder='排序' type='text'>"+" "+
            	"<input class='form-control' name='link_title"+id+"' id='title"+id+"' value='' placeholder='标题' type='text'>"+" "+
                "<input class='form-control' name='link_url"+id+"' id='url"+id+"' value='' placeholder='链接' type='text'>"+" "+
                "<button type='button' name='del_link' class='btn btn-sm btn-danger'><i class='fa fa-minus'></i></button>"+
                "<p></p></div>");
	});
	$(document).on("click","[name='del_link']",function(){
		//索引
		$(this).parent().nextAll("div").each(function(){
	    	$(this).children("input").each(function(){
	    		var index = $(this).attr("id").replace(/[^0-9]/ig,"");
	    		var prefix1 = $(this).attr("id").replace(index,"");
	    		var prefix2 = $(this).attr("name").replace(index,"");
	    		$(this).attr("id",prefix1+(parseInt(index)-1));
	    		$(this).attr("name",prefix2+(parseInt(index)-1));
	    	});
	  	});
	  	//效果
		$(this).parent().remove();
	});
	
	</script>
	

</body>
</html>
