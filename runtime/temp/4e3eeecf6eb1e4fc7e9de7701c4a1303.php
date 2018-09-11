<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:87:"/www/wwwroot/www.hjphp.com/wwwroot/public/../application/index/view/index/register.html";i:1533778159;s:69:"/www/wwwroot/www.hjphp.com/wwwroot/application/index/view/header.html";i:1534139910;s:69:"/www/wwwroot/www.hjphp.com/wwwroot/application/index/view/footer.html";i:1534231803;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用户注册</title>
<meta name="keywords" content="郭豪杰,guohaojie,ghj" />
<meta name="description" content="郭豪杰个人博客,郭豪杰个人网站" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<!-- 表单样式 -->
<link rel="stylesheet" type="text/css" href="/static/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="/static/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="/static/css/demo.css" />
<link rel="stylesheet" type="text/css" href="/static/css/component.css" />
<!-- 基本样式 -->
<link href="/static/css/base.css" rel="stylesheet">
<link href="/static/css/index.css" rel="stylesheet">
<link href="/static/css/m.css" rel="stylesheet">


<!--[if lt IE 9]>
<script src="/static/js/modernizr.js"></script>
<![endif]-->
<script>
window.onload = function ()
{
	var oH2 = document.getElementsByTagName("h2")[0];
	var oUl = document.getElementsByTagName("ul")[0];
	oH2.onclick = function ()
	{
		var style = oUl.style;
		style.display = style.display == "block" ? "none" : "block";
		oH2.className = style.display == "block" ? "open" : ""
	}
}
</script>
</head>
<body>

<header>
  <div class="tophead">
    <div class="logo"><a href="/">Reason 个人博客</a></div>
    <div id="mnav">
      <h2><span class="navicon"></span></h2>
      <ul>
        <li><a href="/">网站首页</a></li>
        <li><a href="<?php echo url('article/index'); ?>">文章</a></li>
        <li><a href="<?php echo url('news/index'); ?>">新闻</a></li>
        <li><a href="<?php echo url('message/index'); ?>">留言</a></li>
		<?php if(session('userinfo') == NULL): ?> 
		<li><a href="javascript:void(0);" name="top_login">登录</a></li>
		<?php else: ?>
		<li><a href="<?php echo url('user/center'); ?>"><?php echo session('userinfo')['username']; ?>的个人中心</a></li>
		<li><a href="<?php echo url('index/logout'); ?>">注销</a></li>
		<?php endif; ?>
		
      </ul>
    </div>
    <nav class="topnav" id="topnav">
      <ul>
        <li><a class="topnav<?php if(request()->controller()=='Index')echo '_current';?>" href="/">网站首页</a></li>
        <li><a class="topnav<?php if(request()->controller()=='Article')echo '_current';?>" href="<?php echo url('article/index'); ?>">文章</a></li>
        <li><a class="topnav<?php if(request()->controller()=='News')echo '_current';?>" href="<?php echo url('news/index'); ?>">新闻</a></li>
        <li><a class="topnav<?php if(request()->controller()=='Message')echo '_current';?>" href="<?php echo url('message/index'); ?>">留言</a></li>
		<?php if(session('userinfo') == NULL): ?> 
		<li><a href="javascript:void(0);" name="top_login">登录</a></li>
		<?php else: ?>
		<li><a class="topnav<?php if(request()->controller()=='User')echo '_current';?>" href="<?php echo url('user/center'); ?>"><?php echo session('userinfo')['username']; ?>的个人中心</a></li>
		<li><a href="<?php echo url('index/logout'); ?>">注销</a></li>
		<?php endif; ?>
      </ul>
    </nav>
  </div>
</header>




<article>
  <h1 class="t_nav"><span><?php echo config('head_sentence'); ?></span><a href="/" class="n1">网站首页</a><a class="n2">注册</a></h1>
  <div class="ab_box">
	
	
      <div class="newsview">
        <div class="news_infos"> 
			<!-- 表单开始 -->
			
				<!-- 头像上传ajax表单 -->
				<form method="post" action="<?php echo url('index/upload_img'); ?>" id="form2" enctype="multipart/form-data">
					<input name="up_headpic_input" type="file" id="up_headpic_input" style="display:none;"/> 
				</form>
			
			<form action="" id="form1" method="post">
			<section class="content">
				
				<div class="avatar"> 
					<img src="/static/images/avatar_plus.png" id="up_headpic" style="height:100px;width:100px"> 
					<input type="hidden" name="headpic" id="headpic" value/>
				</div>
				
				<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="text" name="username_regis" id="username_regis" exist="0"/>
					<label class="input__label input__label--hoshi input__label--hoshi-color-2" for="username_regis">
						<span class="input__label-content input__label-content--hoshi">用户名</span>
					</label>
				</span>
				<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="password" name="password_regis" id="password_regis" />
					<label class="input__label input__label--hoshi input__label--hoshi-color-2" for="password_regis">
						<span class="input__label-content input__label-content--hoshi">密码</span>
					</label>
				</span>
				<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="password" name="repassword" id="repassword" />
					<label class="input__label input__label--hoshi input__label--hoshi-color-2" for="repassword">
						<span class="input__label-content input__label-content--hoshi">确认密码</span>
					</label>
				</span>
				<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="date" name="birthday" id="birthday" />
					<label class="input__label input__label--hoshi input__label--hoshi-color-2" for="birthday">
						<span class="input__label-content input__label-content--hoshi">生日</span>
					</label>
				</span>
				<span class="input input--hoshi">
					<select class="input__field input__field--hoshi" id="province" name="province" style="direction: rtl;">
						<option value="">--</option>
						<?php if(is_array($formdata['province']) || $formdata['province'] instanceof \think\Collection || $formdata['province'] instanceof \think\Paginator): $i = 0; $__LIST__ = $formdata['province'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
						<option value="<?php echo $item['code']; ?>"><?php echo $item['name']; ?></option>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
					<label class="input__label input__label--hoshi input__label--hoshi-color-2" for="province">
						<span class="input__label-content input__label-content--hoshi">省</span>
					</label>
				</span>
				<span class="input input--hoshi">
					<select class="input__field input__field--hoshi" id="city" name="city" style="direction: rtl;">
						<option value=''>--</option>
					</select>
					<label class="input__label input__label--hoshi input__label--hoshi-color-2" for="city">
						<span class="input__label-content input__label-content--hoshi">市</span>
					</label>
				</span>
				<span class="input input--hoshi">
					<select class="input__field input__field--hoshi" id="district" name="district" style="direction: rtl;">
						<option value=''>--</option>
					</select>
					<label class="input__label input__label--hoshi input__label--hoshi-color-2" for="district">
						<span class="input__label-content input__label-content--hoshi">县/区</span>
					</label>
				</span>
				<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="text" name="sign" id="sign"/>
					<label class="input__label input__label--hoshi input__label--hoshi-color-2" for="username_regis">
						<span class="input__label-content input__label-content--hoshi">个性签名</span>
					</label>
				</span>
			
				<span class="input input--minoru" style="text-align: center;float: right;">
					<input class="input__field input__field--minoru" type="button" value="提交注册！" id="register"/>
					<label class="input__label input__label--minoru" for="register">
						<span class="input__label-content input__label-content--minoru"></span>
					</label>
				</span>
				
			</section>
			</form>
			
		</div>
      </div>
    
  </div>
  
</article>





<footer>
  <p> www.hjphp.com | All Rights Reserved </p>
</footer>

<script src="/static/js/nav.js"></script>
<script src="/static/js/jquery-2.1.1.min.js"></script>
<script src="/static/js/jquery.md5.js"></script>

<!-- 登录框start -->
<script>
$(function(){

	//登录表单 点击按钮弹出遮罩
	$("[name='top_login']").click(function(){
		showOverlay();
		$('html , body').animate({scrollTop: 0},'slow');
	});
	$("#overlay").click(function(){
		hideOverlay()
	});
	
	 /* 显示遮罩层 */
	function showOverlay() {
		//手机端影藏头部
		$("#mnav ul").css('display','none');
		$("#mnav h2").attr("class","");
		
		$("#overlay").height(bodyHeight());
		$("#overlay").width(bodyWidth());
		// fadeTo第一个参数为速度，第二个为透明度
		$("#overlay").fadeTo(200, 0.5);
		$("#login_div").fadeTo(200, 1.0);
	}
 
	/* 隐藏覆盖层 */
	function hideOverlay() {
		$("#overlay").fadeOut(200);
		$("#login_div").fadeOut(200);
	}
	/* 当前页面高度 */
	function bodyHeight() {
		return document.body.scrollHeight;
	}
	/* 当前页面宽度 */
	function bodyWidth() {
		return document.body.scrollWidth;
	}
	/* 当前浏览器的宽度*/
	function pageHeight() {
		return window.screen.availHeight;
	}
	/* 当前浏览器的宽度*/
	function pageWidth() {
		return window.screen.availWidth;
	}
	
	//登录表单 验证
	$("#login").click(function(){
		if($.trim($("#username").val())==""){
			alert("请输入用户名");return;
		}
		if($("#password").val()==""){
			alert("请输入密码");return;
		}
		if($.trim($("#checkcode").val())==""){
			alert("请输入验证码");return;
		}
		
		var logindata= {
			"username":$.trim($("#username").val()),
			"password":$.md5($("#password").val()),
			"checkcode":$.trim($("#checkcode").val())
		};
		var logindata = JSON.stringify(logindata);	
		
		$.post("<?php echo url('index/login'); ?>",{logindata:logindata},function(res){
			$("#checkcodeimg").attr("src","<?php echo captcha_src(); ?>");
			switch(res){
				case "1":
					alert("登录成功");
					location.reload();
					break;
				case "01":
					alert("验证码有误，请重新输入");
					break;
				case "02":
					alert("账号有误，请重新输入");
					break;
				case "03":
					alert("密码有误，请重新输入");
					break;
				default:
					break;
			}
		});
		
	});
	
	
	
});

</script>

<div id="overlay"></div>
<div id="login_div">
	<form action="" class="basic-grey">
		<h1>用户登录</h1>
		<label>
			<span>用户名：</span>
			<input type="text" name="username" id="username" placeholder="请输入用户名" />
		</label>
		<label>
			<span>密码:</span>
			<input type="password" name="password" id="password" placeholder="请输入密码" />
		</label>
		<label>
			<span>验证码:</span>
			<input type="text" name="checkcode" id="checkcode" placeholder="请输入验证码" />
		</label>
		<label>
			<span>&nbsp;</span>
			<img src="<?php echo captcha_src(); ?>" alt="" id="checkcodeimg" onclick="this.src='/captcha'" style="margin-bottom: 20px;">
		</label>
		<label>
			<span>&nbsp;</span>
			<input type="button" class="button" id="login" value="登录" />
		</label>
		<br/>
		<label>
			<span>&nbsp;</span>
			<a href="<?php echo url('index/register'); ?>" style="float:right;margin-right:40px;">没有账号？立即注册</a>
		</label>
	</form>
</div>
<!-- 登录框end -->


<script src="/static/js/jquery.form.js"></script>    <!-- 上传头像用 -->
<script>
$(function(){
	<!-- 三级联动ajax -->
	$("#province").change(function(){
		$.post("<?php echo url('index/show_area'); ?>",{province:$("#province").val()},function(res){
			var content = "";
			Object.keys(res).forEach(function(key){
				content = content + "<option value='"+res[key]['code']+"'>"+res[key]['name']+"</option>";
			});
			$("#city").html(content);
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
		});
	
	});
	<!-- 三级联动ajax结束 -->
	<!-- 上传头像 -->
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
	<!-- 上传头像结束 -->
	<!-- 表单验证 -->
	$("#username_regis").blur(function(){
		$.post("<?php echo url('index/check_username'); ?>",{username:$("#username_regis").val()},function(res){
			if(res!="1"){
				alert("用户名已存在，请重新输入");
				$("#username_regis").attr("exist","1");
			}else{
				$("#username_regis").attr("exist","0");
			}
		});
		
	});
	$("#repassword").blur(function(){
		if($("#repassword").val()!=$("#password_regis").val()){
			alert("两次密码不一致");
		}
	});
	
	$("#register").click(function(){
		if($("#username_regis").attr("exist")=="1"){
			alert("用户名已存在，请重新输入");
			return;
		}
		if($("#username_regis").val()==""){
			alert("请输入用户名");
			return;
		}
		if($("#password_regis").val()==""){
			alert("请输入密码");
			return;
		}
		if($("#repassword").val()==""){
			alert("请再次输入密码");
			return;
		}
		if($("#repassword").val()!=$("#password_regis").val()){
			alert("两次密码不一致");
		}
		
		$("#password_regis").val($.md5($("#password_regis").val()));
		$("#repassword").val($.md5($("#repassword").val()));
		$("#form1").submit();
	});
	
	
	<!-- 表单验证结束 -->
});
</script>
</body>
</html>
