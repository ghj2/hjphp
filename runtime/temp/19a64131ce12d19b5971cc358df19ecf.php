<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:84:"/www/wwwroot/www.hjphp.com/wwwroot/public/../application/index/view/user/center.html";i:1533548693;s:69:"/www/wwwroot/www.hjphp.com/wwwroot/application/index/view/header.html";i:1534139910;s:69:"/www/wwwroot/www.hjphp.com/wwwroot/application/index/view/footer.html";i:1534231803;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>个人中心</title>
<meta name="keywords" content="郭豪杰,guohaojie,ghj" />
<meta name="description" content="郭豪杰个人博客,郭豪杰个人网站" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

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
  <h1 class="t_nav"><span><?php echo config('head_sentence'); ?></span><a href="/" class="n1">网站首页</a><a class="n2">个人中心</a></h1>
  <div class="ab_box">
	<h2 class="hometitle">个人资料 <span><a class="green_button" href="<?php echo url('user/edit_userinfo'); ?>">修改</a></span></h2>
	
      
	<div class="avatar"> <img src="<?php echo $userinfo['headpic']; ?>" style="width:100px;height:100px;"> </div>
	<div class="ab_con">
	  <p>用户名：<?php echo $userinfo['username']; ?></p>
	  <p>所在地区：<?php echo $userinfo['area']['province'].$userinfo['area']['city'].$userinfo['area']['district']; ?> </p>
	  <p>个性签名：<?php echo $userinfo['sign']; ?></p>
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


</body>
</html>
